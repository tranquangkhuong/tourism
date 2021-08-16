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
