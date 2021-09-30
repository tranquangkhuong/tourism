@extends('master')

@push('title', 'Booking page')

@section('script')
<script>
    // Tao ham number_format dua theo ham number_format() cua PHP
    number_format = function (number, decimals, dec_point, thousands_sep) {
        number = number.toFixed(decimals);

        var nstr = number.toString();
        nstr += '';
        x = nstr.split('.');
        x1 = x[0];
        x2 = x.length > 1 ? dec_point + x[1] : '';
        var rgx = /(\d+)(\d{3})/;

        while (rgx.test(x1))
            x1 = x1.replace(rgx, '$1' + thousands_sep + '$2');

        return x1 + x2;
    }

    var promotionNumberValue = 0;
    var promotionType = '';

    // var promotion = function() {
        $('.promotion').change(function (e) {
            e.preventDefault();
            var id = $(this).find(':selected')[0].val();
            alert(id);
            $.ajax({
                type: "get",
                url: "/promotion/" + id,
                data: {'promotion_id': id},
                // dataType: "dataType",
                success: function (data) {
                    promotionNumberValue = data.number;
                    promotionType = data.type;
                    console.log(promotionNumberValue, promotionType);
                }
            });
        });
    // }

    $('#adultSlot, #youthSlot, #childSlot, #babySlot').on('input', function() {
        var adultSlot = ($('#adultSlot').val());
        var youthSlot = ($('#youthSlot').val());
        var childSlot = ($('#childSlot').val());
        var babySlot = ($('#babySlot').val());
        var adultPrice = ($('#adultPrice').val());
        var youthPrice = ($('#youthPrice').val());
        var childPrice = ($('#childPrice').val());
        var babyPrice = ($('#babyPrice').val());
        var totalSlot = (adultSlot*1) + (youthSlot*1) + (childSlot*1) + (babySlot*1);
        var totalPrice = (adultSlot*adultPrice) + (youthSlot*youthPrice) + (childSlot*childPrice) + (babySlot*babyPrice);
        $('#totalSlot').val(number_format(totalSlot, 0, ',', ' '));
        $('#totalPrice').val(number_format(totalPrice, 0, ',', ' '));
    });
</script>
@endsection

@section('content')
<section id="breadcumps">
    <div class="grid wide">
        <div class="row">
            <div class="col l-12 m-12 c-12">
                <div class="breadcrumb">
                    <span>Homepage</span>
                    »
                    <span>Tour</span>
                    »
                    <span>Booking</span>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="booking">
    <div class="grid wide">
        <div class="container">
            <div class="row">
                <div class="col l-12 m-12 c-12">
                    <div class="wrap-section-booking">
                        <h1 class="booking-title">infomation tour</h1>
                        <div class="row booking-wrap-info">
                            <div class="col l-4">
                                <a href="#"><img src="{{ asset($tour->image_path) }}" alt="tour" /></a>
                            </div>
                            <div class="col l-8">
                                <div class="booking-name-tour-wrap">
                                    <a href="javascript::void()" class="booking-name-tour">
                                        <h2>{{ $tour->name }}</h2>
                                    </a>
                                </div>
                                <div class="booking-detail-info">
                                    <div>
                                        <div class="booking-detail-info__item">
                                            <i class="fas fa-qrcode"></i>
                                            <span>{{ $tour->code }}</span>
                                        </div>
                                        @php
                                        $otherDay = explode(',', $tour->other_day)
                                        @endphp
                                        <div class="booking-detail-info__item">
                                            <i class="fas fa-calendar-check"></i>
                                            <span>Start Day: <span>{{ $otherDay[0] }}</span></span>
                                        </div>
                                        <div class="booking-detail-info__item">
                                            <i class="fas fa-clock"></i>
                                            <span>Total day: <span>{{ count($otherDay) }}</span></span>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="booking-detail-info__item">
                                            <i class="fas fa-box-tissue"></i>
                                            <span>Slot Remaining: <span>{{ $tour->slot }}</span></span>
                                        </div>
                                        <div class="booking-detail-info__item">
                                            <i class="fas fa-calendar-check"></i>
                                            <a href="javascript::void()">Other Day</a>
                                        </div>
                                        <div class="booking-detail-info__item"><i
                                                class="fas fa-dollar-sign"></i><span>Price:
                                                <span>{{ number_format($tour->adult_price, null, ',', ' ') }}
                                                    VND</span></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="booking-notice"> Khách nữ từ 55 tuổi trở lên, khách nam từ 60 tuổi trở lên đi tour
                            một mình và khách mang thai trên 4 tháng (16 tuần) vui lòng đăng ký tour trực tiếp tại văn
                            phòng của Vietravel. Không áp dụng đăng ký tour online đối với khách từ 70 tuổi trở lênn
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col l-12">
                    <div style="overflow-x:auto;" class="wrap-section-booking table">
                        <h1 class="booking-title">list Price Tour</h1>
                        <table>
                            <tr>
                                <th>Người lớn (Từ 12 tuổi trở lên)</th>
                                <th>Trẻ em (Từ 5 tuổi đến dưới 12)</th>
                                <th>Trẻ nhỏ (Từ 2 tuổi đến dưới 5)</th>
                                <th>Em bé (Dưới 2 tuổi)</th>
                            </tr>
                            <tr>
                                <td>{{ number_format($tour->adult_price, null, ',', ' ') }} <sup>đ</sup></td>
                                <td>{{ number_format($tour->youth_price, null, ',', ' ') }} <sup>đ</sup></td>
                                <td>{{ number_format($tour->child_price, null, ',', ' ') }} <sup>đ</sup></td>
                                <td>{{ number_format($tour->baby_price, null, ',', ' ') }} <sup>đ</sup></td>
                            </tr>
                            <tr>
                                <td>
                                    <div class=" feedback_content-information">
                                        <div class="feedback_information-email-card">
                                            <span class="icon_add-card"><i class="fas fa-tags"></i></span>
                                            <input type="hidden" id="adultPrice" value="{{ $tour->adult_price }}">
                                            <input class="feedback_input-card add-card" id="adultSlot" name="adult_slot"
                                                min="0" max="100" type="number" placeholder="Number of tickets*">
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <div class=" feedback_content-information">
                                        <div class="feedback_information-email-card">
                                            <span class="icon_add-card"><i class="fas fa-tags"></i></span>
                                            <input type="hidden" id="youthPrice" value="{{ $tour->youth_price }}">
                                            <input class="feedback_input-card add-card" id="youthSlot" name="youth_slot"
                                                min="0" max="100" type="number" placeholder="Number of tickets*">
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <div class=" feedback_content-information">
                                        <div class="feedback_information-email-card">
                                            <span class="icon_add-card"><i class="fas fa-tags"></i></span>
                                            <input type="hidden" id="childPrice" value="{{ $tour->child_price }}">
                                            <input class="feedback_input-card add-card" id="childSlot" name="child_slot"
                                                min="0" max="100" type="number" placeholder="Number of tickets*">
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <div class=" feedback_content-information">
                                        <div class="feedback_information-email-card">
                                            <span class="icon_add-card"><i class="fas fa-tags"></i></span>
                                            <input type="hidden" id="babyPrice" value="{{ $tour->baby_price }}">
                                            <input class="feedback_input-card add-card" id="babySlot" name="baby_slot"
                                                min="0" max="100" type="number" placeholder="Number of tickets*">
                                        </div>
                                    </div>
                                </td>
                            </tr>
                        </table>
                        <span class="payments-alert">Chú ý: Quý khách chọn số lượng vé tương ứng với độ từng độ
                            tuổi</span>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col l-12 m-12 c-12">
                    <div class="discount-code-wrap">
                        <div class="discount-code">
                            <span class="discount-code__label">* Nhập mã giản giá (nếu có)</span>
                            <div class="discount-code__input">
                                <input type="text" />
                                <input type="submit" />
                            </div>
                            @if (count($promotions) > 0)
                            <div>
                                <select name="promotion_id" class="promotion">
                                    @foreach ($promotions as $promotion)
                                    <option value="{{ $promotion->id }}">{{ $promotion->content }}</option>
                                    @endforeach
                                </select>
                            </div>
                            @endif
                        </div>
                        <div class="booking-price-final">
                            Total slot: <input id="totalSlot" readonly> &nbsp;
                            Total price: <input id="totalPrice" readonly>
                        </div>
                    </div>

                </div>
            </div>
            <div class="row">
                <div class="col l-12 m-12 c-12">
                    <div class="rule-book-tour">
                        <h1 class="rule-book-tour__title">Điều khoản bắt buộc khi đặt tour online</h1>
                        <div class="rule-book-tour__content">
                            <div class="content">
                                <h3>Thông tin điều khoản</h3>
                                Giá vé du lịch được tính theo tiền Đồng (Việt Nam - VNĐ). Trường hợp khách thanh toán
                                bằng USD sẽ được quy đổi ra VNĐ theo tỉ giá của ngân hàng Đầu Tư và Phát Triển Việt Nam
                                - Chi nhánh TP.HCM tại thời điểm thanh toán.Giá vé chỉ bao gồm những khoản được liệt kê
                                một cách rõ ràng trong phần “Bao gồm” trong các chương trình du lịch. Vietravel không có
                                nghĩa vụ thanh toán bất cứ chi phí nào không nằm trong phần “Bao gồm”.
                                Giá vé du lịch được tính theo tiền Đồng (Việt Nam - VNĐ). Trường hợp khách thanh toán
                                bằng USD sẽ được quy đổi ra VNĐ theo tỉ giá của ngân hàng Đầu Tư và Phát Triển Việt Nam
                                - Chi nhánh TP.HCM tại thời điểm thanh toán.Giá vé chỉ bao gồm những khoản được liệt kê
                                một cách rõ ràng trong phần “Bao gồm” trong các chương trình du lịch. Vietravel không có
                                nghĩa vụ thanh toán bất cứ chi phí nào không nằm trong phần “Bao gồm”.
                                Giá vé du lịch được tính theo tiền Đồng (Việt Nam - VNĐ). Trường hợp khách thanh toán
                                bằng USD sẽ được quy đổi ra VNĐ theo tỉ giá của ngân hàng Đầu Tư và Phát Triển Việt Nam
                                - Chi nhánh TP.HCM tại thời điểm thanh toán.Giá vé chỉ bao gồm những khoản được liệt kê
                                một cách rõ ràng trong phần “Bao gồm” trong các chương trình du lịch. Vietravel không có
                                nghĩa vụ thanh toán bất cứ chi phí nào không nằm trong phần “Bao gồm”.
                                Giá vé du lịch được tính theo tiền Đồng (Việt Nam - VNĐ). Trường hợp khách thanh toán
                                bằng USD sẽ được quy đổi ra VNĐ theo tỉ giá của ngân hàng Đầu Tư và Phát Triển Việt Nam
                                - Chi nhánh TP.HCM tại thời điểm thanh toán.Giá vé chỉ bao gồm những khoản được liệt kê
                                một cách rõ ràng trong phần “Bao gồm” trong các chương trình du lịch. Vietravel không có
                                nghĩa vụ thanh toán bất cứ chi phí nào không nằm trong phần “Bao gồm”.
                                Giá vé du lịch được tính theo tiền Đồng (Việt Nam - VNĐ). Trường hợp khách thanh toán
                                bằng USD sẽ được quy đổi ra VNĐ theo tỉ giá của ngân hàng Đầu Tư và Phát Triển Việt Nam
                                - Chi nhánh TP.HCM tại thời điểm thanh toán.Giá vé chỉ bao gồm những khoản được liệt kê
                                một cách rõ ràng trong phần “Bao gồm” trong các chương trình du lịch. Vietravel không có
                                nghĩa vụ thanh toán bất cứ chi phí nào không nằm trong phần “Bao gồm”.
                            </div>
                        </div>
                        <div class="submit-rule">
                            <input type="checkbox" id="yes-i-do" />
                            <label for="yes-i-do">Tôi đồng ý</label>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col l-12 m-12 c-12">
                    <div class="feedback_list-items">
                        <div class="payments">
                            @php
                            $i = 1;
                            @endphp
                            @foreach ($payments as $payment)
                            @php
                            $i2 = $i++;
                            @endphp
                            <div>
                                <input type="radio" id="payment-{{ $i2 }}" name="payment_id" value="{{ $payment->id }}">
                                <label for="payment-{{ $i2 }}"><span><img
                                            src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/242518/check-icn.svg"
                                            alt="Checked Icon" /></span></label>
                                <label for="payment-{{ $i2 }}">{{ $payment->name }}</label>
                                <div class="payment-infomation">
                                    <!-- Dữ liệu dùng text editor để đổ ra trong đây -->
                                    <span>{{ $payment->description }}</span>
                                </div>
                            </div>
                            @endforeach
                            {{-- <div>
                                <input type="radio" id="payment-2" name="payments">
                                <label class="accordion" for="payment-2"><span><img
                                            src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/242518/check-icn.svg"
                                            alt="Checked Icon" /></span></label>
                                <label class="accordion" for="payment-2">Transfer</label>
                                <div class="payment-infomation">
                                    <!-- Dữ liệu dùng text editor để đổ ra trong đây -->
                                    <h2>Phương thức thanh toán chuyển khoản</h2>
                                    <td>
                                        <p style="margin-left: 10px">
                                            -Vietravel chấp nhận thanh toán chuyển khoản từ ATM / Internet Banking /
                                            Quầy giao dịch khách hàng</p>
                                        <p style="margin-left: 10px">
                                            -Quý khách sau khi thực hiện việc chuyển khoản vui lòng gửi email đến <a
                                                href="mailto:sales@vietravel.com">sales@vietravel.com</a> hoặc gọi tổng
                                            đài 1900.1839 để được xác nhận từ công ty chúng tôi.</p>
                                        <p style="margin-left: 10px">
                                            -Vietravel xin gửi thông tin chuyển khoản như bên dưới để Quý khách thanh
                                            toán trước thời hạn ghi trên Thông tin đặt tour. Sau thời gian trên nếu Quý
                                            khách không chuyển khoản thanh toán, booking sẽ tự động huỷ ra.</p>
                                        <p style="margin-left: 10px">
                                            -Vietravel sẽ không giải quyết các trường hợp booking tự động hủy nếu quý
                                            khách không thực hiện đúng các hướng dẫn trên.</p>
                                        <p style="margin-left: 10px">
                                            <span>Tên Tài Khoản : <strong>Công ty CP Du lịch và Tiếp thị GTVT Việt Nam –
                                                    Vietravel</strong></span></p>
                                        <p style="margin-left: 10px">
                                            <span>Tên tài khoản viết tắt : <strong>VIETRAVEL</strong></span></p>
                                        <p style="margin-left: 10px">
                                            <span>Số Tài khoản : <strong>007 100 115 1480</strong></span></p>
                                        <p style="margin-left: 10px">
                                            <span>Ngân hàng : <strong>Vietcombank – CN Tp.HCM</strong></span></p>
                                    </td>
                                </div>
                            </div>
                            <div>
                                <input type="radio" id="payment-3" name="payments">
                                <label class="accordion" for="payment-3"><span><img
                                            src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/242518/check-icn.svg"
                                            alt="Checked Icon" /></span></label>
                                <label class="accordion" for="payment-3">ATM / Internet Banking</label>
                                <div class="payment-infomation">
                                    <!-- Dữ liệu dùng text editor để đổ ra trong đây -->
                                    <h2>Phương thức thanh toán chuyển khoản</h2>
                                    <td>
                                        <p style="margin-left: 10px">
                                            -Vietravel sẽ không giải quyết các trường hợp booking tự động hủy nếu quý
                                            khách không thực hiện đúng các hướng dẫn trên.</p>
                                        <p style="margin-left: 10px">
                                            <span>Tên Tài Khoản : <strong>Công ty CP Du lịch và Tiếp thị GTVT Việt Nam –
                                                    Vietravel</strong></span></p>
                                        <p style="margin-left: 10px">
                                            <span>Tên tài khoản viết tắt : <strong>VIETRAVEL</strong></span></p>
                                        <p style="margin-left: 10px">
                                            <span>Số Tài khoản : <strong>007 100 115 1480</strong></span></p>
                                        <p style="margin-left: 10px">
                                            <span>Ngân hàng : <strong>Vietcombank – CN Tp.HCM</strong></span></p>
                                    </td>
                                </div>
                            </div>
                            <div>
                                <input type="radio" id="payment-4" name="payments">
                                <label class="accordion" for="payment-4"><span><img
                                            src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/242518/check-icn.svg"
                                            alt="Checked Icon" /></span></label>
                                <label class="accordion" for="payment-4">Thanh toán bằng Momo</label>
                            </div> --}}
                        </div>
                        {{-- <div class="feedback-content">
                            <grammarly-extension data-grammarly-shadow-root="true"
                                style="position: absolute; top: 0px; left: 0px; pointer-events: none;" class="cGcvT">
                            </grammarly-extension>
                            <grammarly-extension data-grammarly-shadow-root="true"
                                style="mix-blend-mode: darken; position: absolute; top: 0px; left: 0px; pointer-events: none;"
                                class="cGcvT"></grammarly-extension>
                            <span></span>
                            <textarea name="" class="feedback_content-text" cols="40" rows="10" placeholder="Message"
                                spellcheck="false"></textarea>
                        </div> --}}
                        <button type="submit" class="feedback_content-submit">submit</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
<script>
    //    $(document).ready(function() {
//   $(".accordion").on("click", function() {
//     if ($(this).hasClass("active")) {
//       $(this).removeClass("active");
//       $(this)
//         .siblings(".payment-infomation")
//         .slideUp(200);
//     } else {
//       $(".accordion").removeClass("active");
//       $(this).addClass("active");
//       $(".payment-infomation").slideUp(200);
//       $(this)
//         .siblings(".payment-infomation")
//         .slideDown(200);
//     }
//   });
// });

</script>
