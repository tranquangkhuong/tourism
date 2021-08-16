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
        $promotions = $this->repo->getAll();

        return view('admin.promotion.index', compact('promotions'));
    }

    /**
     * Search records in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response $promotions
     */
    public function search($request)
    {
        $promotions = $this->repo->search('content', $request->keyword);

        return response()->json($promotions);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return View
     */
    public function create()
    {
        $tours = $this->repo->getAllTour();

        return view('admin.promotion.create', compact('tours'));
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
        $tours = $this->repo->getAllTour();

        return view('admin.promotion.edit', compact('promotion', 'tours'));
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
        toast($rs['msg'], $rs['type']);

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
        toast($rs['msg'], $rs['type']);

        return back();
    }
}
