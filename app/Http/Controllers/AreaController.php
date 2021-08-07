<?php

namespace App\Http\Controllers;

use App\Repositories\Area\AreaRepositoryInterface;
use Illuminate\Http\Request;

class AreaController extends Controller
{
    protected $repo;

    public function __construct(AreaRepositoryInterface $areaRepository)
    {
        $this->repo = $areaRepository;
    }

    /**
     * Display a listing of the resource.
     *
     * @return View
     */
    public function index()
    {
        $areas = $this->repo->getAll();

        return view('admin.area.index', compact('areas'));
    }

    /**
     * Search records in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response $areas
     */
    public function search($request)
    {
        $areas = $this->repo->search('name', $request->keyword);

        return response()->json($areas);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // Su dung modal
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

        return redirect()->route('admin.area.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $areaId
     * @return \Illuminate\Http\Response
     */
    public function show($areaId)
    {
        $area = $this->repo->show($areaId);

        return response()->json($area);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $areaId
     * @return View
     */
    public function edit($areaId)
    {
        $area = $this->repo->find($areaId);

        return view('admin.area.edit', compact('area'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $areaId
     * @return Redirect
     */
    public function update(Request $request, $areaId)
    {
        $rs = $this->repo->update($request, $areaId);
        toast($rs['msg'], $rs['type']);

        return redirect()->route('admin.area.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $areaId
     * @return Redirect
     */
    public function destroy($areaId)
    {
        $rs = $this->repo->destroy($areaId);
        toast($rs['msg'], $rs['type']);

        return back();
    }
}
