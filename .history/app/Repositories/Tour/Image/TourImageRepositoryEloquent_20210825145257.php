<?php

namespace App\Repositories\Tour\Image;

use App\Models\TourImage;
use App\Repositories\RepositoryEloquent;

class TourImageRepositoryEloquent extends RepositoryEloquent implements TourImageRepositoryInterface
{
    public function getModel()
    {
        return \App\Models\TourImage::class;
    }

    public function getImageTour($tourId)
    {
        return $this->_model->where('tour_id', $tourId)->get();
    }

    public function storeImage($request)
    {
        $path = $this->uploadImage($request->hasFile('image'), $request->file('image'), $request->tour_id . '/');
        TourImage::create([
            'tour_id' => $request->tour_id,
            'image_path' => $path,
        ]);

        return [
            'title' => __('Done!'),
            'msg' => __('Add successfully.'),
            'stt' => self::STATUS_SUCCESS,
        ];
    }
}
