<?php

namespace App\Http\Controllers;

use App\Repositories\Promotion\PromotionRepositoryInterface;
use Illuminate\Http\Request;

class PromotionController extends Controller
{
    protected $repo;

    public function __construct(PromotionRepositoryInterface $promotionRepository)
    {
        $this->repo = $promotionRepository;
    }

    /**
     * Display a listing of the resource.
     *
     * @return View
     */
    public function index()
    {
        return view('test.promotion.index');
    }

    public function indexData()
    {
        return response()->json($this->repo->getAll());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return View
     */
    public function create()
    {
        return view('test.promotion.add');
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
        toast($rs['msg'], $rs['stt']);

        return redirect()->route('admin.promotion.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $promotionId
     * @return \Illuminate\Http\Response $promotion
     */
    public function show($promotionId)
    {
        $promotion = $this->repo->show($promotionId);

        return response()->json($promotion);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $promotionId
     * @return View
     */
    public function edit($promotionId)
    {
        $promotion = $this->repo->find($promotionId);

        return view('test.promotion.edit', compact('promotion'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $promotionId
     * @return Redirect
     */
    public function update(Request $request, $promotionId)
    {
        $rs = $this->repo->update($request, $promotionId);
        toast($rs['msg'], $rs['stt']);

        return redirect()->route('admin.promotion.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $promotionId
     * @return Redirect
     */
    public function destroy($promotionId)
    {
        $rs = $this->repo->destroy($promotionId);
        if ($rs['stt'] == 'error') {
            return response()->json($rs, 500);
        }

        return response()->json($rs);
    }
}
