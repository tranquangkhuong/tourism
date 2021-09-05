<?php

namespace App\Http\Controllers;

use App\Repositories\Tour\Plan\TourPlanRepositoryInterface;
use Illuminate\Http\Request;

class TourPlanController extends Controller
{
    protected $repo;

    public function __construct(TourPlanRepositoryInterface $tourPlanRepository)
    {
        $this->repo = $tourPlanRepository;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($tourId)
    {
        return view('test.tour.plan.add', compact('tourId'));
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

        return redirect()->route('admin.tour.edit', ['tour_id' => $request->tour_id]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($tourId)
    {
        $tourPlan = $this->repo->getPlan($tourId);
        dd($tourPlan);

        return view('test.tour.plan.edit', compact('tourPlan', 'tourId'));
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
    public function destroy($id)
    {
        //
    }
}
