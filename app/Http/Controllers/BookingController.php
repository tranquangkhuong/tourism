<?php

namespace App\Http\Controllers;

use App\Events\CustomerBooking;
use App\Repositories\Booking\BookingRepositoryInterface;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BookingController extends Controller
{
    protected $repo;

    public function __construct(BookingRepositoryInterface $bookingRepository)
    {
        $this->repo = $bookingRepository;
    }

    /*
    |---------------------------------------------------------------------------
    | Cac ham dung cho Admin.
    |---------------------------------------------------------------------------
    */
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $users = $this->repo->getAllUser();
        $tours = $this->repo->getAllTour();
        $payments = $this->repo->getAllPayment();
        // dd($users);
        return view('backend.booking.add', compact('users', 'tours', 'payments'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $rs = $this->repo->store($request);
        toast($rs['msg'], $rs['stt']);

        return redirect()->url('/detail-tour', [$rs['tour_id']]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($bookingId)
    {
        $rs = $this->repo->destroy($bookingId);
        if ($rs['stt'] == 'error') {
            return response()->json($rs, 500);
        }

        return response()->json($rs);
    }

    /*
    |---------------------------------------------------------------------------
    | Cac ham dung cho User.
    |---------------------------------------------------------------------------
    */

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function userCreate($tourId)
    {
        $tour = $this->repo->getTour($tourId);
        $promotions = $this->repo->getPromotion($tourId);
        $payments = $this->repo->getAllPayment();
        // dd($tour, $promotions, $payments);

        return view('frontend.booking.index', compact('tour', 'promotions', 'payments'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function userStore(Request $request)
    {
        $booking = $this->repo->store($request);
        // dd($booking['booking_id']);
        $result = $this->repo->checkPaymentMethod($booking['booking_id']);
        $data = $result['data'];
        return view($result['view'], compact('data'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function bookingDetail($code)
    {
        $booking = $this->repo->getBookingDetail($code);

        return response()->json($booking);
    }
}
