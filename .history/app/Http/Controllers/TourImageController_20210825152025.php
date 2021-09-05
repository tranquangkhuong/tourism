<?php

namespace App\Http\Controllers;

use App\Repositories\Tour\Image\TourImageRepositoryInterface;
use Illuminate\Http\Request;

class TourImageController extends Controller
{
    protected $repo;

    public function __construct(TourImageRepositoryInterface $tourImageRepository)
    {
        $this->repo = $tourImageRepository;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($tourId)
    {
        $images = $this->repo->getImageTour($tourId);
        return view('test.tour.image.index', compact('images'));
    }

    public function indexData($tourId)
    {
        return response()->json($this->repo->getImageTour($tourId));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('test.tour.image.add');
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

        return redirect()->route('admin.tour.image.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($imageId)
    {
        $rs = $this->repo->destroy($imageId);
        if ($rs['stt'] == 'error') {
            return response()->json($rs, 500);
        }

        return response()->json($rs);
    }
}
