<?php

namespace App\Http\Controllers;

use App\Repositories\Tour\TourRepositoryInterface;
use Illuminate\Http\Request;

class TourController extends Controller
{
    protected $repo;

    public function __construct(TourRepositoryInterface $tourRepository)
    {
        $this->repo = $tourRepository;
    }

    /**
     * Display a listing of the resource.
     *
     * @return View
     */
    public function index()
    {
        $tours = $this->repo->getAll();

        return view('admin.tour.index', compact('tours'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return View
     */
    public function create()
    {
        $areas = $this->repo->getAllArea();
        $locations = $this->repo->getAllLocation();
        return view('admin.tour.create', compact('areas', 'locations'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return Redirect
     */
    public function store(Request $request)
    {
        $rs = $this->repo->storeTour($request);
        toast($rs['msg'], $rs['type']);

        return redirect()->route('admin.tour.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $tourId
     * @return \Illuminate\Http\Response
     */
    public function show($tourId)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $tourId
     * @return View
     */
    public function edit($tourId)
    {
        $tour = $this->repo->find($tourId);
        $areas = $this->repo->getAllArea();
        $locations = $this->repo->getAllLocation();

        return view('admin.tour.edit', compact('tour', 'areas', 'locations'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $tourId
     * @return Redirect
     */
    public function update(Request $request, $tourId)
    {
        $rs = $this->repo->update($request, $tourId);
        toast($rs['msg'], $rs['type']);

        return back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $tourId
     * @return Redirect
     */
    public function destroy($tourId)
    {
        $rs = $this->repo->destroy($tourId);
        toast($rs['msg'], $rs['type']);

        return redirect()->route('admin.tour.index');
    }

    /** ============================================================= */

    /**
     * Luu tour_details.
     */
    public function storeTourDetail(Request $request)
    {
        $rs = $this->repo->storeTourDetail($request);
        toast($rs['msg'], $rs['type']);

        return back();
    }

    /**
     * Update tour_details.
     */
    public function updateTourDetail(Request $request, $tourDetailId)
    {
        $rs = $this->repo->updateTourDetail($request, $tourDetailId);
        toast($rs['msg'], $rs['type']);

        return back();
    }

    public function destroyTourDetail($tourDetailId)
    {
        $rs = $this->repo->destroy($tourDetailId);
        toast($rs['msg'], $rs['type']);

        return back();
    }
}
