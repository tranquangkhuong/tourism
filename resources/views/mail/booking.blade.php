<<<<<<< HEAD
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script> -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <title>Document</title>
</head>
<body>
    <style>
        .email-wrap {
            width: 100%;
            padding: 20px 40px;
        }
        .email-wrap__text{
            font-size: 1.2rem;
            font-weight: 600;
            text-transform: uppercase;
            color:  #02acea;
        }
        .text-notice {
            font-weight: 600;
            color: #000;
        }
        .info-tour{
            width: 100%;
            text-align: center;
        }
        .wonder-bill{
            margin-top: 10px;
        }
        .logo-mail {
            width: 100%;
            text-align: right;
        }
        .logo-mail a img {
            width: 200px;
        }
    </style>
<div class="email-wrap">
        <h2 class="email-wrap__title">Thank you for using service !</h2>
        <p>Tour name: <b>Cùng nhau khám phá Sapa Vùng đất của núi non hùng vĩ</b></p>
        <h3 style="border-bottom: 1px solid #ddd; padding-bottom: 5px; color: #02acea;">Booking detail</h3>
        <p class="email-wrap__text">Thông tin đơn hàng mã: <span>greaff</span></p>
        <table class="table" style="background-color: #efefef">
            <thead  style="background-color:#02acea;color: #fff;">
                <tr>
                <th scope="col">#</th>
                <th scope="col">Ticket Type</th>
                <th scope="col">Slot</th>
                <th scope="col">Price</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                <th scope="row">1</th>
                <td>Adult</td>
                <td>1244</td>
                <td>1233</td>
                </tr>
                <tr>
                <th scope="row">2</th>
                <td>Youth</td>
                <td>2123</td>
                <td>12313</td>
                </tr>
                <tr>
                <th scope="row">3</th>
                <td>Child</td>
                <td>3432</td>
                <td>12313</td>
                </tr>
                <tr>
                <th scope="row">4</th>
                <td>Young Child</td>
                <td>3432</td>
                <td>12313</td>
                </tr>
            </tbody>
            <tfoot>
              <tr>
                <th align="right">Total</th>
                <td align="left"></td>
                <td align="left">Total Slot: <span class='text-notice'>1224</span></td>
                <td align="left">Total Price:  <span class='text-notice'>50000</span></td>
              </tr>
            </tfoot>
    </table>
    <div class="info-tour"><a href="#"  class="btn btn-info">Chi tiết tour taị Vietour</a></div>
    <p class="wonder-bill">Mọi thắc mắc xin liên hệ <a href="#">https//:vietour.com</a> để biết thêm chi tiết </p>
    <div class="logo-mail">
        <a href="#"><img src="{{ URL::asset('frontend/img/logo.png') }}" alt="logo"></a>
    </div>
    <h4>Thank you again !</h4>

</div>
</body>
</html>
=======
<h2>Thank you for using service !</h2>
<p>Tour name: <b>{{ $booking->tour_detail->title }}</b></p>
<h3 style="border-bottom: 1px solid #ddd; padding-bottom: 5px; color: #02acea;">Booking detail</h3>
<table border="0" cellpadding="0" cellspacing="0" style="background: #f5f5f5; width: 100%">
    <thead>
        <tr bgcolor="#02acea" style="color: #fff; line-height: 14px">
            <th></th>
            <th align="left">Slot</th>
            <th align="right">Price</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <th align="left" valign="top">Adult</th>
            <td align="left" valign="top">{{ $booking->booking_price->adult_slot }}</td>
            <td align="right" valign="top">{{ $booking->booking_price->adult_price }}</td>
        </tr>
        <tr>
            <th align="left" valign="top">Youth</th>
            <td align="left" valign="top">{{ $booking->booking_price->youth_slot }}</td>
            <td align="right" valign="top">{{ $booking->booking_price->youth_price }}</td>
        </tr>
        <tr>
            <th align="left" valign="top">Child</th>
            <td align="left" valign="top">{{ $booking->booking_price->child_slot }}</td>
            <td align="right" valign="top">{{ $booking->booking_price->child_price }}</td>
        </tr>
        <tr>
            <th align="left" valign="top">Young child</th>
            <td align="left" valign="top">{{ $booking->booking_price->young_child_slot }}</td>
            <td align="right" valign="top">{{ $booking->booking_price->young_child_price }}</td>
        </tr>
    </tbody>
    <tfoot>
        <tr>
            <th align="right">Total</th>
            <td align="left">tong slot</td>
            <td align="right">tong price</td>
        </tr>
    </tfoot>
</table>
<h4>Thank you again !</h4>
<p>chen logo - align right</p>
khuong
>>>>>>> 93af00814817776ffdd0f6f77491629553db2d8f
