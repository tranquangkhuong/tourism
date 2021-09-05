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

    /*
    |-------------------------------------------------------------------
    | Tours.
    |-------------------------------------------------------------------
    | Xu li cac thong tin lien quan den bang tours.
    */

    /**
     * Display a listing of the resource.
     *
     * @return View
     */
    public function index()
    {
        return view('test.tour.index');
    }

    public function indexData()
    {
        $columns = [
            'tours.id as id',
            'tours.name as name',
            'areas.name as area',
            'locations.name as location',
        ];
        return response()->json($this->repo->getAll($columns));
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
        $promotions = $this->repo->getAllPromotion();
        $tags = $this->repo->getAllTag();
        $vehicles = $this->repo->getAllVehicle();

        return view('test.tour.add', compact('areas', 'locations', 'promotions', 'tags', 'vehicles'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return Redirect
     */
    public function store(Request $request)
    {
        // dd($request->include);
        $rs = $this->repo->store($request);
        toast($rs['msg'], $rs['stt']);

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
        $promotions = $this->repo->getAllPromotion();
        $tags = $this->repo->getAllTag();
        $vehicles = $this->repo->getAllVehicle();
        $includes = $this->repo->getTourInclude();
        // $notIncludes - $this->repo->getTourNotInclude();
        // dd($includes);

        return view('test.tour.edit', compact('tour', 'areas', 'locations', 'promotions', 'includes'));
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
        toast($rs['msg'], $rs['stt']);

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
        if ($rs['stt'] == 'error') {
            return response()->json($rs, 500);
        }

        return response()->json($rs);
    }
}
