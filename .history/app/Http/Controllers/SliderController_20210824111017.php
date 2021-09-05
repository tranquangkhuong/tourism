<?php

namespace App\Http\Controllers;

use App\Repositories\Slider\SliderRepositoryInterface;
use Illuminate\Http\Request;

class SliderController extends Controller
{
    protected $repo;

    public function __construct(SliderRepositoryInterface $sliderRepository)
    {
        $this->repo = $sliderRepository;
    }

    /**
     * Display a listing of the resource.
     *
     * @return View
     */
    public function index()
    {
        return view('test.slider.index');
    }

    public function indexData()
    {
        return response()->json($this->repo->getAll(['id', 'title']));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return View
     */
    public function create()
    {
        return view('test.slider.add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return Redirect
     */
    public function store(Request $request)
    {
        // dd($request->file('image'));
        $image = $this->repo->uploadImage($request->hasFile('image'), $request->file('image'));
        $rs = $this->repo->storeSlider($request, $image);
        toast($rs['msg'], $rs['stt']);

        return redirect()->route('admin.slider.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $sliderId
     * @return \Illuminate\Http\Response
     */
    public function show($sliderId)
    {
        $slider = $this->repo->show($sliderId);

        return response()->json($slider);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $sliderId
     * @return View
     */
    public function edit($sliderId)
    {
        $slider = $this->repo->find($sliderId);

        return view('test.slider.edit', compact('slider'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $sliderId
     * @return Redirect
     */
    public function update(Request $request, $sliderId)
    {
        $image = $this->repo->updateImagePath($sliderId, $request->hasFile('image'), $request->file('image'), 'image_path');
        // $content = $this->repo->getContent($sliderId, $request->data_editor);
        $rs = $this->repo->updateslider($sliderId, $request->title, $image, $content);
        toast($rs['msg'], $rs['stt']);

        return redirect()->route('admin.slider.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $sliderId
     * @return Redirect
     */
    public function destroy($sliderId)
    {
        $rs = $this->repo->destroy($sliderId);
        toast($rs['msg'], $rs['stt']);

        return back();
    }
}
