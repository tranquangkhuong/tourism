<?php

namespace App\Http\Controllers;

use App\Repositories\Location\LocationRepositoryInterface;
use Illuminate\Http\Request;

class LocationController extends Controller
{
    protected $repo;

    public function __construct(LocationRepositoryInterface $locationRepository)
    {
        $this->repo = $locationRepository;
    }

    /**
     * Display a listing of the resource.
     *
     * @return View
     */
    public function index()
    {
        $locations = $this->repo->getAll();
        // lay area de cho vao modal create
        $areas = $this->repo->getAllArea();

        return view('admin.location.index', compact('locations', 'areas'));
    }

    /**
     * Search records in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response $locations
     */
    public function search($request)
    {
        $locations = $this->repo->search($request->location_name, $request->area_id);

        return response()->json($locations);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // su dung modal
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return Redirect
     */
    public function store(Request $request)
    {
        $rs = $this->repo->store($request);
        toast($rs['msg'], $rs['type']);

        return redirect()->route('admin.location.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $locationId
     * @return \Illuminate\Http\Response
     */
    public function show($locationId)
    {
        $location = $this->repo->show($locationId);

        return response()->json($location);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $locationId
     * @return View
     */
    public function edit($locationId)
    {
        $location = $this->repo->find($locationId);
        $areas = $this->repo->getAllArea();

        return view('admin.location.edit', compact('location', 'areas'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $locationId
     * @return Redirect
     */
    public function update(Request $request, $locationId)
    {
        $rs = $this->repo->update($request, $locationId);
        toast($rs['msg'], $rs['type']);

        return redirect()->route('admin.location.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $locationId
     * @return \Illuminate\Http\Response
     */
    public function destroy($locationId)
    {
        $rs = $this->repo->destroy($locationId);
        toast($rs['msg'], $rs['type']);

        return back();
    }
}
