<?php

namespace App\Http\Controllers;

use App\Repositories\Booking\BookingRepositoryInterface;
use Illuminate\Http\Request;

class VnpayController extends Controller
{
    protected $bookingRepository;

    public function __construct(BookingRepositoryInterface $bookingRepositoryInterface)
    {
        $this->bookingRepository = $bookingRepositoryInterface;
    }

    /**
     * Hàm gửi thông tin thanh toán đến VNpay
     */
    public function create(Request $request)
    {
        session(['booking_code' => $request->order_id]);
        // session(['url_prev' => url()->previous()]);

        // Các mã config đã để ở file .env rồi
        $vnp_TmnCode = env('VNP_TMN_CODE'); //Mã website tại VNPAY; "XSY4HIVO"
        $vnp_HashSecret = env('VNP_HASH_SECRET'); //Chuỗi bí mật; "MXOGEMDPHWSBWPCPERSLIKFXFLNRLQIR"
        $vnp_Url = env('VNP_URL'); //"https://sandbox.vnpayment.vn/paymentv2/vpcpay.html"
        $vnp_Returnurl = env('VNP_RETURN_URL'); //"http://127.0.0.1:8000/return-vnpay"

        $vnp_TxnRef = $request->order_id; //Mã đơn hàng. Trong thực tế Merchant cần insert đơn hàng vào DB và gửi mã này sang VNPAY
        $vnp_OrderInfo = $request->order_desc; //Thông tin mô tả nội dung thanh toán (Tiếng Việt, không dấu).
        $vnp_OrderType = $request->order_type;  //Loại thanh toán; 'billpayment'
        $vnp_Amount = $request->amount * 100; //Số tiền thanh toán. VNPAY phản hồi số tiền nhân thêm 100 lần.
        $vnp_Locale = $request->language;
        $vnp_BankCode = $request->bank_code; //Mã ngân hàng
        $vnp_IpAddr = request()->ip();

        //Add Params of 2.0.1 Version
        $vnp_ExpireDate = $request->txtexpire;

        $inputData = array(
            "vnp_Version" => "2.1.0",
            "vnp_TmnCode" => $vnp_TmnCode,
            "vnp_Amount" => $vnp_Amount,
            "vnp_Command" => "pay",
            "vnp_CreateDate" => date('YmdHis'),
            "vnp_CurrCode" => "VND",
            "vnp_IpAddr" => $vnp_IpAddr,
            "vnp_Locale" => $vnp_Locale,
            "vnp_OrderInfo" => $vnp_OrderInfo,
            "vnp_OrderType" => $vnp_OrderType,
            "vnp_ReturnUrl" => $vnp_Returnurl,
            "vnp_TxnRef" => $vnp_TxnRef,
            //Add params version 2.0.1
            "vnp_ExpireDate" => $vnp_ExpireDate,
        );

        if (isset($vnp_BankCode) && $vnp_BankCode != "") {
            $inputData['vnp_BankCode'] = $vnp_BankCode;
        }
        if (isset($vnp_Bill_State) && $vnp_Bill_State != "") {
            $inputData['vnp_Bill_State'] = $vnp_Bill_State;
        }

        ksort($inputData);
        $query = "";
        $i = 0;
        $hashdata = "";
        foreach ($inputData as $key => $value) {
            if ($i == 1) {
                $hashdata .= '&' . urlencode($key) . "=" . urlencode($value);
            } else {
                $hashdata .= urlencode($key) . "=" . urlencode($value);
                $i = 1;
            }
            $query .= urlencode($key) . "=" . urlencode($value) . '&';
        }

        $vnp_Url = $vnp_Url . "?" . $query;
        if (isset($vnp_HashSecret)) {
            $vnpSecureHash = hash_hmac('sha512', $hashdata, $vnp_HashSecret);
            $vnp_Url .= 'vnp_SecureHash=' . $vnpSecureHash;
        }
        return redirect($vnp_Url);
    }

    /**
     * Hàm trả lại kết quả (lấy kết quả tại link trong $vnp_Returnurl ở hàm create).
     */
    public function return(Request $request)
    {
        $vnp_HashSecret = env('VNP_HASH_SECRET'); //Chuỗi bí mật
        // $url = session('url_prev', '/');
        // Lay ma hash VnPay tra ve
        $vnp_SecureHash = $request->query('vnp_SecureHash');
        // Tao ma hash tu cac du lieu do VnPay tra ve
        $inputData = array();
        foreach ($request->query() as $key => $value) {
            if (substr($key, 0, 4) == "vnp_") {
                $inputData[$key] = $value;
            }
        }
        unset($inputData['vnp_SecureHash']);
        ksort($inputData);
        $i = 0;
        $hashData = "";
        foreach ($inputData as $key => $value) {
            if ($i == 1) {
                $hashData = $hashData . '&' . urlencode($key) . "=" . urlencode($value);
            } else {
                $hashData = $hashData . urlencode($key) . "=" . urlencode($value);
                $i = 1;
            }
        }
        $secureHash = hash_hmac('sha512', $hashData, $vnp_HashSecret);

        // So sánh 2 mã hash vừa tạo bằng dữ liệu trả về và mã hashcuar VnPay
        if ($secureHash == $vnp_SecureHash) {
            // Check ResponseCode và update lại vào DB
            if ($request->query('vnp_ResponseCode') == "00") {
                $this->bookingRepository->successfulOnlinePayment(session('booking_code'));
                $data = ['msg' => __('Giao dịch thành công.')];
            } else if ($request->query('vnp_ResponseCode') == "24") {
                $this->bookingRepository->failedOnlinePayment(session('booking_code'), 2);
                $data = ['msg' => __('Giao dịch thất bại! Booking đã bị hủy.')];
            } else {
                $this->bookingRepository->failedOnlinePayment(session('booking_code'), 3);
                $data = ['msg' => __('Giao dịch thất bại! Booking đã bị lỗi')];
            }
        } else {
            $data = ['msg' => __('Chữ ký không hợp lệ.')];
        }
        // session()->forget('url_prev');

        return view('frontend.booking.return', compact('data'));
    }
}
