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
            $slider->admin_id
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
