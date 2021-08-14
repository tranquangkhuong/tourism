@extends('master')

@push('title', 'booking page')

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
                                    <a href="#"><img src="{{ URL::asset('frontend/img/img_slider/person.png') }}" alt="tour"/></a>
                                </div>
                                <div class="col l-8">
                                    <div class="booking-name-tour-wrap">
                                        <a href="#" class="booking-name-tour"><h2>Bay cùng Vietravel Airlines: Sapa - Fansipan - Lào Cai - Hà Nội - Yên Tử - Hạ Long ay cùng Vietravel Airlines: Sapa - Fansipan - Lào Cai - Hà Nội - Yên Tử - Hạ Long</h2></a>
                                    </div>
                                    <div class="booking-detail-info">
                                        <div>
                                            <div class="booking-detail-info__item"><i class="fas fa-qrcode"></i><span>NDSGN135-021-170821VU-V</span></div>
                                            <div class="booking-detail-info__item"><i class="fas fa-calendar-check"></i><span>Start Day:<span> 17/8/2022</span></span></div>
                                            <div class="booking-detail-info__item"><i class="fas fa-clock"></i><span>Total day: 5</span></div>
                                        </div>
                                        <div>
                                            <div class="booking-detail-info__item"><i class="fas fa-box-tissue"></i><span>Slot Remaining: 9</span></div>
                                            <div class="booking-detail-info__item"><i class="fas fa-calendar-check"></i><a href="#">Other Day</a></div>
                                            <div class="booking-detail-info__item"><i class="fas fa-dollar-sign"></i><span>Price: <span>$1000</span></span></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="booking-notice"> Khách nữ từ 55 tuổi trở lên, khách nam từ 60 tuổi trở lên đi tour một mình và khách mang thai trên 4 tháng (16 tuần) vui lòng đăng ký tour trực tiếp tại văn phòng của Vietravel. Không áp dụng đăng ký tour online đối với khách từ 70 tuổi trở lênn </div>
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
                                    <td>$300</td>
                                    <td>$300</td>
                                    <td>Free</td>
                                    <td>Free</td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class=" feedback_content-information">
                                            <div class="feedback_information-email-card">
                                                <span class="icon_add-card"><i class="fas fa-tags"></i></span>
                                                <input class="feedback_input-card add-card" min="0" max="100" type="number" placeholder="Number of tickets*">
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <div class=" feedback_content-information">
                                            <div class="feedback_information-email-card">
                                                <span class="icon_add-card"><i class="fas fa-tags"></i></span>
                                                <input class="feedback_input-card add-card" min="0" max="100" type="number" placeholder="Number of tickets*">
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <div class=" feedback_content-information">
                                            <div class="feedback_information-email-card">
                                                <span class="icon_add-card"><i class="fas fa-tags"></i></span>
                                                <input class="feedback_input-card add-card" min="0" max="100" type="number" placeholder="Number of tickets*">
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <div class=" feedback_content-information">
                                            <div class="feedback_information-email-card">
                                                <span class="icon_add-card"><i class="fas fa-tags"></i></span>
                                                <input class="feedback_input-card add-card" min="0" max="100" type="number" placeholder="Number of tickets*">
                                            </div>
                                        </div>
                                    </td>
                            </tr>
                            </table>
                            <span class="payments-alert">Chú ý: Quý khác chọn số lượng vé tương ứng với độ từng độ tuổi</span>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col l-12 m-12 c-12">
                        <div class="discount-code-wrap">
                            <div class="discount-code">
                                <span class="discount-code__label">* Nhập mã giản giá (nếu có)</span>
                                <div class="discount-code__input">
                                    <input type="text"/>
                                    <input type="submit"/>
                                </div>
                            </div>
                            <div class="booking-price-final">
                                Total: <span>$1320</span>
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
                                Giá vé du lịch được tính theo tiền Đồng (Việt Nam - VNĐ). Trường hợp khách thanh toán bằng USD sẽ được quy đổi ra VNĐ theo tỉ giá của ngân hàng Đầu Tư và Phát Triển Việt Nam - Chi nhánh TP.HCM tại thời điểm thanh toán.Giá vé chỉ bao gồm những khoản được liệt kê một cách rõ ràng trong phần “Bao gồm” trong các chương trình du lịch. Vietravel không có nghĩa vụ thanh toán bất cứ chi phí nào không nằm trong phần “Bao gồm”.
                                Giá vé du lịch được tính theo tiền Đồng (Việt Nam - VNĐ). Trường hợp khách thanh toán bằng USD sẽ được quy đổi ra VNĐ theo tỉ giá của ngân hàng Đầu Tư và Phát Triển Việt Nam - Chi nhánh TP.HCM tại thời điểm thanh toán.Giá vé chỉ bao gồm những khoản được liệt kê một cách rõ ràng trong phần “Bao gồm” trong các chương trình du lịch. Vietravel không có nghĩa vụ thanh toán bất cứ chi phí nào không nằm trong phần “Bao gồm”.
                                Giá vé du lịch được tính theo tiền Đồng (Việt Nam - VNĐ). Trường hợp khách thanh toán bằng USD sẽ được quy đổi ra VNĐ theo tỉ giá của ngân hàng Đầu Tư và Phát Triển Việt Nam - Chi nhánh TP.HCM tại thời điểm thanh toán.Giá vé chỉ bao gồm những khoản được liệt kê một cách rõ ràng trong phần “Bao gồm” trong các chương trình du lịch. Vietravel không có nghĩa vụ thanh toán bất cứ chi phí nào không nằm trong phần “Bao gồm”.
                                Giá vé du lịch được tính theo tiền Đồng (Việt Nam - VNĐ). Trường hợp khách thanh toán bằng USD sẽ được quy đổi ra VNĐ theo tỉ giá của ngân hàng Đầu Tư và Phát Triển Việt Nam - Chi nhánh TP.HCM tại thời điểm thanh toán.Giá vé chỉ bao gồm những khoản được liệt kê một cách rõ ràng trong phần “Bao gồm” trong các chương trình du lịch. Vietravel không có nghĩa vụ thanh toán bất cứ chi phí nào không nằm trong phần “Bao gồm”.
                                Giá vé du lịch được tính theo tiền Đồng (Việt Nam - VNĐ). Trường hợp khách thanh toán bằng USD sẽ được quy đổi ra VNĐ theo tỉ giá của ngân hàng Đầu Tư và Phát Triển Việt Nam - Chi nhánh TP.HCM tại thời điểm thanh toán.Giá vé chỉ bao gồm những khoản được liệt kê một cách rõ ràng trong phần “Bao gồm” trong các chương trình du lịch. Vietravel không có nghĩa vụ thanh toán bất cứ chi phí nào không nằm trong phần “Bao gồm”.
                                </div>
                            </div>
                            <div class="submit-rule">
                                <input type="checkbox" id="yes-i-do"/>
                                <label for="yes-i-do">Tôi đồng ý</label>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col l-12 m-12 c-12">
                        <div class="feedback_list-items">
                            <div class="payments">
                                <div>
                                    <input type="radio" id="payment-1" name="payments">
                                    <label  for="payment-1"><span><img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/242518/check-icn.svg" alt="Checked Icon" /></span></label>
                                    <label for="payment-1">Cash</label>
                                    <div class="payment-infomation">
                                        <!-- Dữ liệu dùng text editor để đổ ra trong đây -->
                                        <span>Quý khách vui lòng thanh toán tại bất kỳ văn phòng Vietravel trên toàn quốc và các chi nhánh ngoài nước. Chi tiết Xin lưu ý, Quý khách nên liên lạc trước khi đến để biết rõ hơn về giờ làm việc và các hồ sơ cần chuẩn bị khi thanh toán</span>
                                    </div>
                                </div>
                                <div>
                                    <input type="radio" id="payment-2" name="payments">
                                    <label class="accordion" for="payment-2"><span><img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/242518/check-icn.svg" alt="Checked Icon" /></span></label>
                                    <label class="accordion" for="payment-2">Transfer</label>
                                    <div class="payment-infomation">
                                        <!-- Dữ liệu dùng text editor để đổ ra trong đây -->
                                        <h2>Phương thức thanh toán chuyển khoản</h2>
                                        <td>
                                            <p style="margin-left: 10px">
                                                -Vietravel chấp nhận thanh toán chuyển khoản từ ATM / Internet Banking / Quầy giao dịch khách hàng</p>
                                            <p style="margin-left: 10px">
                                                -Quý khách sau khi thực hiện việc chuyển khoản vui lòng gửi email đến <a href="mailto:sales@vietravel.com">sales@vietravel.com</a> hoặc gọi tổng đài 1900.1839 để được xác nhận từ công ty chúng tôi.</p>
                                            <p style="margin-left: 10px">
                                                -Vietravel xin gửi thông tin chuyển khoản như bên dưới để Quý khách thanh toán trước thời hạn ghi trên Thông tin đặt tour. Sau thời gian trên nếu Quý khách không chuyển khoản thanh toán, booking sẽ tự động huỷ ra.</p>
                                            <p style="margin-left: 10px">
                                                -Vietravel sẽ không giải quyết các trường hợp booking tự động hủy nếu quý khách không thực hiện đúng các hướng dẫn trên.</p>
                                            <p style="margin-left: 10px">
                                                <span >Tên Tài Khoản : <strong>Công ty CP Du lịch và Tiếp thị GTVT Việt Nam – Vietravel</strong></span></p>
                                            <p style="margin-left: 10px">
                                                <span >Tên tài khoản viết tắt : <strong>VIETRAVEL</strong></span></p>
                                            <p style="margin-left: 10px">
                                                <span>Số Tài khoản : <strong>007 100 115 1480</strong></span></p>
                                            <p style="margin-left: 10px">
                                                <span>Ngân hàng : <strong>Vietcombank – CN Tp.HCM</strong></span></p>
                                        </td>
                                    </div>
                                </div>
                                <div>
                                    <input type="radio" id="payment-3" name="payments">
                                    <label class="accordion" for="payment-3"><span><img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/242518/check-icn.svg" alt="Checked Icon" /></span></label>
                                    <label class="accordion" for="payment-3">ATM / Internet Banking</label>
                                    <div class="payment-infomation">
                                        <!-- Dữ liệu dùng text editor để đổ ra trong đây -->
                                        <h2>Phương thức thanh toán chuyển khoản</h2>
                                        <td>
                                            <p style="margin-left: 10px">
                                                -Vietravel sẽ không giải quyết các trường hợp booking tự động hủy nếu quý khách không thực hiện đúng các hướng dẫn trên.</p>
                                            <p style="margin-left: 10px">
                                                <span >Tên Tài Khoản : <strong>Công ty CP Du lịch và Tiếp thị GTVT Việt Nam – Vietravel</strong></span></p>
                                            <p style="margin-left: 10px">
                                                <span >Tên tài khoản viết tắt : <strong>VIETRAVEL</strong></span></p>
                                            <p style="margin-left: 10px">
                                                <span>Số Tài khoản : <strong>007 100 115 1480</strong></span></p>
                                            <p style="margin-left: 10px">
                                                <span>Ngân hàng : <strong>Vietcombank – CN Tp.HCM</strong></span></p>
                                        </td>
                                    </div>
                                </div>
                                <div>
                                    <input type="radio" id="payment-4" name="payments">
                                    <label class="accordion"  for="payment-4"><span><img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/242518/check-icn.svg" alt="Checked Icon" /></span></label>
                                    <label class="accordion" for="payment-4">Thanh toán bằng Momo</label>
                                </div>
                            </div>
                            <div class="feedback-content"><grammarly-extension data-grammarly-shadow-root="true" style="position: absolute; top: 0px; left: 0px; pointer-events: none;" class="cGcvT"></grammarly-extension><grammarly-extension data-grammarly-shadow-root="true" style="mix-blend-mode: darken; position: absolute; top: 0px; left: 0px; pointer-events: none;" class="cGcvT"></grammarly-extension>
                                <span></span>
                                <textarea name="" class="feedback_content-text" cols="40" rows="10" placeholder="Message" spellcheck="false"></textarea>
                            </div>
                            <button class="feedback_content-submit">submit</button>
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
