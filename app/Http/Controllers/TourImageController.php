<?php

namespace App\Http\Controllers;

use App\Repositories\Tour\Image\TourImageRepositoryInterface;
use Illuminate\Http\Request;
use App\Models\TourImage;
use Illuminate\Support\Facades\File;


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
        // $images = TourImage::all();
        return view('backend.tour.images.index', compact('images','tourId'));
    }

    public function indexData()
    {
        $images = TourImage::all();
        return response()->json($images);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($tourId)
    {
        return view('backend.tour.images.add', compact('tourId'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
         $tourId =  $request->tour_id;

        foreach($request->file('images') as $key => $file) {
            $originFileName = $file->getClientOriginalName();
            // lay extension cua file
            $extension = $file->getClientOriginalExtension();
            // lay ten file khong co extension
            $fileNameWithoutExtension = substr($originFileName, 0, strlen($originFileName)
                - (strlen($extension) + 1));
            // create unique file name de khong bi trung
            $fileName = $fileNameWithoutExtension . uniqid('_') . '.' . $extension;
            $path = "/images/tours/" . $tourId . "/";
            $file->move(public_path($path), $fileName);

            $insert[$key]['tour_id'] = $tourId;
            $insert[$key]['image_name'] = $fileName;
            $insert[$key]['image_path'] = $path . $fileName;
        }
        TourImage::insert($insert);

        return redirect()->route('images.index', $tourId);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Image  $image
     * @return \Illuminate\Http\Response
     */
    public function show(TourImage $image)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Image  $image
     * @return \Illuminate\Http\Response
     */
    public function edit(TourImage $image)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Image  $image
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, TourImage $image)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Image  $image
     * @return \Illuminate\Http\Response
     */
    public function destroy($imageId)
    {
        try {
           $image = TourImage::find($imageId);
            $this->repo->deleteImage($image->image_path);
            $image->delete();
            toast('Success','success');
            return  redirect()->route('images.index', $image->tour_id);
        } catch (\Throwable $th) {
             toast("Error!", "error");
            return  redirect()->route('images.index', $image->tour_id);
        }
    }
}
