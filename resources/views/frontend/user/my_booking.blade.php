@extends('frontend.master')

@push('title', 'My Booking')

@section('content')
<table class="table table-hover" style="background-color: #efefef">
    <thead style="background-color:#02acea;color: #fff;">
        <tr>
            <th scope="col">Code</th>
            <th scope="col">Name</th>
            <th scope="col">Total slot</th>
            <th scope="col">Total price</th>
            <th scope="col">Date</th>
            <th scope="col">Action</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <th scope="row">#35fsdd</th>
            <td>Hạ Long một trong bảy kỳ quan thiên nhiên của thế giới Hạ Long một trong bảy kỳ quan thiên nhiên của thế
                giớHạ Long một trong bảy kỳ quan thiên nhiên của thế giớ</td>
            <td>1244</td>
            <td>1233</td>
            <td>2/9/2021</td>
            <td><a href="#">Detail</a></td>
        </tr>

    </tbody>
</table>
@endsection
