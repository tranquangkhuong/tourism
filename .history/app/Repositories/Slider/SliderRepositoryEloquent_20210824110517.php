<?php

namespace App\Repositories\Slider;

use App\Models\Slider;
use App\Repositories\RepositoryEloquent;

class SliderRepositoryEloquent extends RepositoryEloquent implements SliderRepositoryInterface
{
    public function getModel()
    {
        return \App\Models\Slider::class;
    }

    public function storeSlider($request)
    {
        try {
            $slider = new Slider();
            $slider->admin_id = 1;
            $slider->title = $request->title;
            $slider->content = $request->content;
            if ($image) {
                $slider->image_path
            }
        } catch (\Exception $e) {
            //throw $th;
            return [
                'title' => __('Failed!'),
                'msg' => __('Save failed.'),
                'stt' => self::STATUS_ERROR,
            ];
        }
    }
}
