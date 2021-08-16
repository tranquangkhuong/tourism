<?php

namespace App\Http\Controllers;

use App\Repositories\Vehicle\VehicleRepositoryInterface;
use Illuminate\Http\Request;

class VehicleController extends Controller
{
    protected $repo;

    public function __construct(VehicleRepositoryInterface $vehicleRepository)
    {
        $this->repo = $vehicleRepository;
    }

    /**
     * Display a listing of the resource.
     *
     * @return View
     */
    public function index()
    {
        $vehicles = $this->repo->getAll();

        return view('admin.vehicle.index', compact('vehicles'));
    }

    /**
     * Search records in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response $vehicles
     */
    public function search($request)
    {
        $vehicles = $this->repo->search('name', $request->keyword);

        return response()->json($vehicles);
    }

    /**
     * Show the form for creating a new resource.
     *
     */
    public function create()
    {
        // Dung modal cho tien
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

        return redirect()->route('admin.vehicle.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $vehicleId
     * @return \Illuminate\Http\Response
     */
    public function show($vehicleId)
    {
        $vehicle = $this->repo->show($vehicleId);

        return response()->json($vehicle);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $vehicleId
     * @return View
     */
    public function edit($vehicleId)
    {
        $vehicle = $this->repo->find($vehicleId);

        return view('admin.vehicle.edit', compact('vehicle'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $vehicleId
     * @return Redirect
     */
    public function update(Request $request, $vehicleId)
    {
        $rs = $this->repo->update($request, $vehicleId);
        toast($rs['msg'], $rs['type']);

        return redirect()->route('admin.vehicle.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $vehicleId
     * @return \Illuminate\Http\Response
     */
    public function destroy($vehicleId)
    {
        $rs = $this->repo->destroy($vehicleId);
        toast($rs['msg'], $rs['type']);

        return back();
    }
}
