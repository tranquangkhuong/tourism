<?php

namespace App\Repositories\Tour;

use App\Models\Area;
use App\Models\Attribute;
use App\Models\Location;
use App\Models\Promotion;
use App\Models\Tag;
use App\Models\Tour;
use App\Models\Value;
use App\Models\Vehicle;
use App\Repositories\RepositoryEloquent;
use Illuminate\Support\Facades\DB;

class TourRepositoryEloquent extends RepositoryEloquent implements TourRepositoryInterface
{
    public function getModel()
    {
        return \App\Models\Tour::class;
    }

    /**
     * Overwrite ham getAll.
     */
    public function getAll($columns = ['*'])
    {
        return $this->_model->select($columns)
            ->join('areas', 'tours.area_id', '=', 'areas.id')
            ->join('locations', 'tours.location_id', '=', 'locations.id')
            ->join('promotions', 'tours.promotion_id', '=', 'promotions.id')
            ->get();
    }

    /**
     * Lay thong tin area.
     */
    public function getAllArea()
    {
        return Area::all();
    }

    /**
     * Lay thong tin Location.
     */
    public function getAllLocation()
    {
        return Location::all();
    }

    /**
     * Lay thong tin khuyen mai.
     */
    public function getAllPromotion()
    {
        return Promotion::all();
    }

    /**
     * Lay tat ca Tag.
     */
    public function getAllTag()
    {
        return Tag::all();
    }

    /**
     * Lay tat ca Vehicles.
     */
    public function getAllVehicle()
    {
        return Vehicle::all();
    }

    /**
     * Lay id cua cot include.
     */
    public function getIncludeId()
    {
        return Attribute::select('id')->where('name', 'included')->first()->id;
    }

    /**
     * Lay id cua cot not_include.
     */
    public function getNotIncludeId()
    {
        return Attribute::select('id')->where('name', 'not included')->first()->id;
    }

    /**
     * Lay cac dich vu bao gom theo tour (include).
     */
    public function getTourInclude()
    {
        return $this->_model->select('values.id', 'values.attribute_id', 'values.tour_id', 'values.value')->where('tours.id', 6)->join('values', 'tours.id', '=', 'values.tour_id')->where('values.attribute_id', 2)->get();
        // Value::select('values.id AS value_id', 'values.tour_id', 'values.attribute_id', 'values.value');
    }

    /**
     * Lay cac dich vu KHONG bao gom theo tour (include).
     */
    public function getTourNotInclude()
    {
        return $this->_model->values()->getNotIncludeId();
    }

    /**
     * Luu tour
     */
    public function store($request)
    {
        try {
            $tour = Tour::create([
                'area_id' => $request->area_id,
                'location_id' => $request->location_id,
                'promotion_id' => $request->promotion_id,
                'code' => $request->code,
                'name' => $request->name,
                'description' => $request->description,
                'departure_location' => $request->departure_location,
                'destination' => $request->destination,
                'itinerary' => $request->itinerary,
                'slot' => $request->slot,
                'other_day' => $request->other_day,
                'adult_price' => $request->adult_price,
                'youth_price' => $request->youth_price,
                'child_price' => $request->child_price,
                'baby_price' => $request->baby_price,
            ]);
            $tour->tags()->attach($request->tag_id);
            $tour->vehicles()->attach($request->vehicle_id);

            $path = $this->uploadImage($request->hasFile('image'), $request->file('image'), $tour->id . '/');
            Tour::find($tour->id)->update(['image_path' => $path]);

            return [
                'title' => __('Done!'),
                'msg' => __('Add successfully.'),
                'stt' => self::STATUS_SUCCESS,
            ];
        } catch (\Exception $e) {
            return [
                'title' => __('An error has occurred!'),
                'msg' => __('Add failed.'),
                'stt' => self::STATUS_ERROR,
            ];
        }
    }

    public function update($request, $id)
    {
        try {
            // xu li anh
            $path = $this->updateImagePath($id, $request->hasFile('image'), $request->file('image'), 'image_path');
            // thuc hien luu vao DB
            $tour = $this->_model->find($id)->update([
                'area_id' => $request->area_id,
                'location_id' => $request->location_id,
                'promotion_id' => $request->promotion_id,
                'code' => $request->code,
                'name' => $request->name,
                'description' => $request->description,
                'departure_location' => $request->departure_location,
                'destination' => $request->destination,
                'itinerary' => $request->itinerary,
                'other_day' => $request->other_day,
                'slot' => $request->slot,
                'adult_price' => $request->adult_price,
                'youth_price' => $request->youth_price,
                'child_price' => $request->child_price,
                'baby_price' => $request->baby_price,
                'image_path' => $path,
            ]);
            $tour->tags()->sync($request->tag_id);
            $tour->vehicles()->sync($request->vehicle_id);

            // foreach ($request->include as $key => $value) {
            //     $valueId = Value::find($key->id);
            //     if ($valueId) {
            //         $valueId->update([
            //             'attribute_id' => $this->getIncludeId(),
            //             'tour_id' => $tour->id,
            //             'value' => $value,
            //         ]);
            //     } else {
            //         Value::create([
            //             'attribute_id' => $this->getIncludeId(),
            //             'tour_id' => $tour->id,
            //             'value' => $value,
            //         ]);
            //     }
            // }

            // foreach ($request->not_include as $key => $value) {
            //     $valueId = Value::find($key->id);
            //     if ($valueId) {
            //         $valueId->update([
            //             'attribute_id' => $this->getNotIncludeId(),
            //             'tour_id' => $tour->id,
            //             'value' => $value,
            //         ]);
            //     } else {
            //         Value::create([
            //             'attribute_id' => $this->getNotIncludeId(),
            //             'tour_id' => $tour->id,
            //             'value' => $value,
            //         ]);
            //     }
            // }

            return [
                'title' => __('Done!'),
                'msg' => __('Update successfully.'),
                'stt' => self::STATUS_SUCCESS,
            ];
        } catch (\Exception $e) {
            return [
                'title' => __('Done!'),
                'msg' => __('Update failed.'),
                'stt' => self::STATUS_ERROR,
            ];
        }
    }
}
