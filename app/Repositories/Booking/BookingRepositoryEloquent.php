<?php

namespace App\Repositories\Booking;

use App\Events\CustomerBooking;
use App\Helpers\Helper;
use App\Models\Booking;
use App\Models\Promotion;
use App\Models\Tour;
use App\Models\User;
use App\Notifications\SendNotificationToCustomers;
use App\Repositories\RepositoryEloquent;
use Illuminate\Support\Facades\DB;

class BookingRepositoryEloquent extends RepositoryEloquent implements BookingRepositoryInterface
{
    public function getModel()
    {
        return \App\Models\Booking::class;
    }

    /**
     * Lấy thông tin chi tiết một Tour
     *
     * @param int $tourId
     * @return Collection
     */
    public function getTour($tourId)
    {
        return Tour::where('id', $tourId)->first();
    }

    /**
     * Lấy các thẻ giảm giá có liên quan đến Tour
     *
     * @param int $tourId
     * @return Collection
     */
    public function getPromotion($tourId)
    {
        return Tour::find($tourId)->promotions()->get();
    }

    /**
     * Lấy thông tin chi tiết của một đơn Booking
     *
     * @param string $code
     * @return array
     */
    public function getBookingDetail($code)
    {
        $booking = $this->_model->where('code', $code)->first();
        $bookingDetail = DB::table('booking_details')->where('booking_id', $booking->id)->first();
        $data = [
            'name' => $booking->user()->name,
            'email' => $booking->user()->email,
            'code' => $booking->code,
            'tour' => $this->getTour($bookingDetail->tour_id)->name,
            'promotion' => Promotion::find($bookingDetail->promotion_id)->first()->name,
            'payment' => $booking->payment()->name,
            'status' => $booking->status,
            'date' => $bookingDetail->other_day,
            'adult_slot' => $bookingDetail->adult_slot,
            'adult_price' => $bookingDetail->adult_price,
            'youth_slot' => $bookingDetail->youth_slot,
            'youth_price' => $bookingDetail->youth_price,
            'child_slot' => $bookingDetail->child_slot,
            'child_price' => $bookingDetail->child_price,
            'baby_slot' => $bookingDetail->baby_slot,
            'baby_price' => $bookingDetail->baby_price,
            'total_slot' => $bookingDetail->total_slot,
            'total_price' => $bookingDetail->total_price,
            'created_at' => $booking->created_at,
        ];

        return $data;
    }

    /**
     * Lưu đơn booking
     *
     * @param Request $request
     * @return array ['title', 'msg', 'stt'[, 'booking_id']]
     */
    public function store($request)
    {
        try {
            if (!empty($request->code)) {
                $code = $request->code;
            } else {
                $code = Helper::generateCode(); //hàm generateCode() là static function
            }

            $booking = $this->_model->create([
                'user_id' => 1,
                'payment_id' => $request->payment_id,
                'promotion_id' => $request->promotion_id ?: 0,
                'code' => $code,
                'status' => 0,
            ]);

            // dd($booking->id);

            DB::table('booking_details')->insert([
                'booking_id' => $booking->id,
                'tour_id' => $request->tour_id,
                'other_day' => date('Y-m-d'), //date('Y-m-d',strtotime($request->other_day))
                'adult_price' => $request->adult_price,
                'adult_slot' => $request->adult_slot ?: 0,
                'youth_price' => $request->youth_price,
                'youth_slot' => $request->youth_slot ?: 0,
                'child_price' => $request->child_price,
                'child_slot' => $request->child_slot ?: 0,
                'baby_price' => $request->baby_price,
                'baby_slot' => $request->baby_slot ?: 0,
                'total_price' => $request->total_price,
                'total_slot' => $request->total_slot ?: 0,
                'created_at' => now(),
                'updated_at' => now(),
            ]);
            // dd($bookingDetail);

            $tour = Tour::find($request->tour_id);
            $tour->slot = $tour->slot - $request->total_slot;
            $tour->save();

            if ($request->promotion_id) {
                $promotion = Promotion::find($request->promotion_id);
                $promotion->amount = $promotion->amount - 1;
                $promotion->save();
            }

            // du lieu gui mail
            // $bookingDetail = DB::table('booking_details')->where('booking_id', $booking->id)->first();
            // $dataNotice = [
            //     'email' => $booking->user()->email,
            //     'booking_code' => $booking->code,
            //     'tour' => $this->getTour($bookingDetail->tour_id)->name,
            //     'promotion' => $booking->promotion()->name,
            //     'payment' => $booking->payment()->name,
            //     'status' => $booking->status,
            //     'departure_date' => $bookingDetail->other_day,
            //     'adult_price' => $bookingDetail->adult_price,
            //     'adult_slot' => $bookingDetail->adult_slot,
            //     'youth_price' => $bookingDetail->youth_price,
            //     'youth_slot' => $bookingDetail->youth_slot,
            //     'child_price' => $bookingDetail->child_price,
            //     'child_slot' => $bookingDetail->child_slot,
            //     'baby_price' => $bookingDetail->baby_price,
            //     'baby_slot' => $bookingDetail->baby_slot,
            //     'total_price' => $bookingDetail->total_price,
            //     'total_slot' => $bookingDetail->total_slot,
            //     'created_at' => $booking->created_at,
            //     'user_id' => 1,
            //     'type' => 'booked success',
            //     'data' => [
            //         'code' => $booking->code,
            //         'content' => 'You have successfully booked the tour: ' . $this->getTour($bookingDetail->tour_id)->name,
            //     ],
            // ];
            // event gui mail booking
            // event(new CustomerBooking($dataMail));

            // tao notification
            // User::find($request->user_id)->notify(new SendNotificationToCustomers($dataNotify));
            // Notification::send($user, new SendNotificationToCustomers($data));

            return [
                'title' => __('Done!'),
                'msg' => __('Booking successfully.'),
                'stt' => self::STATUS_SUCCESS,
                'booking_id' => $booking->id,
            ];
        } catch (\Exception $e) {
            return [
                'title' => __('Oops! An error has occurred.'),
                'msg' => __('Booking failed.'),
                'stt' => self::STATUS_ERROR,
            ];
        }
        // // lay tat ca thong bao theo user_id
        // $user = \App\Models\User::find($user_id);
        // // danh dau tat ca thong bao cua doc thanh da doc.
        // $user->unreadNotifications->markAsRead();
        // // xoa thong bao tat ca thong bao
        // $user->notifications()->delete();
        // foreach ($user->notifications as $notification) {
        //     // noi dung thong bao
        //     echo $notification->data;
        //     // danh dau da doc (tung thong bao mot)
        //     $notification->markAsRead();
        //     // xoa thong bao
        //     $notification->delete();
        // }
    }

    /**
     * Kiểm tra phương thức thanh toán
     *
     * @param int $bookingId
     * @return array ['view', 'data']
     */
    public function checkPaymentMethod($bookingId)
    {
        $booking = $this->find($bookingId);
        if ($booking->payment_id == 1) {
            return [
                'view' => 'frontend.booking.return',
                'data' => [
                    'msg' => __('Đặt chỗ thành công. Quý khách thanh toán tại quầy để hoàn tất quá trình. Xin cảm ơn!'),
                ],
            ];
        } else if ($booking->payment_id == 2) {
            return [
                'view' => 'frontend.booking.vnpay_create',
                'data' => [
                    'id' => $booking->code,
                    'total_price' => DB::table('booking_details')->select('total_price')->where('booking_id', $booking->id)->first()->total_price,
                ],
            ];
        } else {
            return [
                'view' => 'frontend.booking.return',
                'data' => [
                    'msg' => __('Chưa hỗ trợ phương thức thanh toán này.')
                ]
            ];
        }
    }

    /**
     * Cập nhật trạng thái thanh toán online thành công
     *
     * @param string $bookingCode
     * @return boolean
     */
    public function successfulOnlinePayment($bookingCode)
    {
        // Cập nhật trạng thái booking thành công (status == 1)
        $this->_model->where('code', $bookingCode)->update([
            'status' => 1,
        ]);

        return true;
    }

    /**
     * Cập nhật trạng thái thanh toán online không thành công (lỗi, hủy)
     *
     * @param string $bookingCode
     * @param int $statusCode
     * @return boolean
     */
    public function failedOnlinePayment($bookingCode, $statusCode = 2)
    {
        // Cập nhật trạng thái lỗi/hủy (status == 2 or status == 3)
        $this->_model->where('code', $bookingCode)->update([
            'status' => $statusCode,
        ]);
        $booking = $this->_model->where('code', $bookingCode)->first();
        $bookingDetail = DB::table('booking_details')->where('booking_id', $booking->id)->first();

        // Cập nhật lại số lượng slot của tour
        $tour = Tour::find($bookingDetail->tour_id);
        $tour->slot = $tour->slot + $bookingDetail->total_slot;
        $tour->save();

        // Cập nhật lại số lượng thẻ giảm giá
        if ($booking->promotion_id > 0) {
            $promotion = Promotion::find($booking->promotion_id);
            $promotion->amount = $promotion->amount + 1;
            $promotion->save();
        }

        return true;
    }
}
