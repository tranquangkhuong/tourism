<?php

namespace App\Repositories\Tour\Plan;

use App\Models\Tour;
use App\Models\TourPlan;
use App\Repositories\RepositoryEloquent;

class TourPlanRepositoryEloquent extends RepositoryEloquent implements TourPlanRepositoryInterface
{
    public function getModel()
    {
        return \App\Models\TourPlan::class;
    }

    public function getPlan($tourId)
    {
        $data = $this->_model->where('tour_id', $tourId)->get();
        // $data['tour_name'] = $this->getTourName($tourId);
        // dd($data[0]['content']);
        return $data;
    }

    public function getTourName($tourId)
    {
        return Tour::select('name')->where('id', $tourId)->first()->name;
    }

    public function store($request)
    {
        try {
            $data = $request->all();
            $day = $data['day'];
            foreach ($day as $key => $value) {
                TourPlan::create([
                    'tour_id' => $data['tour_id'],
                    'day' => $value,
                    'content' => $data['content'][$key],
                    'note' => $data['note'][$key],
                ]);
            }

            return [
                'title' => __('Done!'),
                'msg' => __('Save successfully.'),
                'stt' => self::STATUS_SUCCESS,
            ];
        } catch (\Exception $e) {
            return [
                'title' => __('An error has occurred!'),
                'msg' => __('Save failed.'),
                'stt' => self::STATUS_ERROR,
            ];
        }
    }

    public function update($request, $tourId)
    {
        // try {
        $tourPlan = $this->_model->where('tour_id', $tourId)->get(); // cac record co tour_id la $tourId
        $data = $request->all();
        // dd(count($data));
        for ($i = 0; $i < count($data); $i++) {
            if ($tourPlan[$i]->day == $data['day'][$i]) {
                echo $tourPlan[$i]->day . ' - ' . $data['day'][$i];
                echo '<br/>';
            }
            echo $data['day'][$i];
            echo '<br/>';
        }
        // foreach ($data['day'] as $key => $value) {
        //     echo $tourPlan[$key]->day . ' - ' . $data['day'][$key];
        //     echo '<br/>';
        // if ($tourPlan[$key]->day == $data['day'][$key]) {
        //     # code...
        // }
        // TourPlan::create([
        //     'tour_id' => $data['tour_id'],
        //     'day' => $value,
        //     'content' => $data['content'][$key],
        //     'note' => $data['note'][$key],
        // ]);
        // }
        die();

        // return [
        //     'title' => __('Done!'),
        //     'msg' => __('Save successfully.'),
        //     'stt' => self::STATUS_SUCCESS,
        // ];
        // } catch (\Exception $e) {
        //     return [
        //         'title' => __('An error has occurred!'),
        //         'msg' => __('Save failed.'),
        //         'stt' => self::STATUS_ERROR,
        //     ];
        // }
    }
}
