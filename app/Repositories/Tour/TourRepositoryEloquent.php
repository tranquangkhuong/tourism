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
            ->orderBy('id', 'desc')->get();
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
    public function getTourInclude($tourId)
    {
        return $this->_model->select('values.id', 'values.attribute_id', 'values.tour_id', 'values.value')->join('values', 'tours.id', '=', 'values.tour_id')
            ->where([
                ['values.attribute_id', $this->getIncludeId()],
                ['values.tour_id', $tourId],
            ])->first();
        // Value::select('values.id AS value_id', 'values.tour_id', 'values.attribute_id', 'values.value');
    }

    /**
     * Lay cac dich vu KHONG bao gom theo tour (include).
     */
    public function getTourNotInclude($tourId)
    {
        return $this->_model->select('values.id', 'values.attribute_id', 'values.tour_id', 'values.value')->join('values', 'tours.id', '=', 'values.tour_id')
            ->where([
                ['values.attribute_id', $this->getNotIncludeId()],
                ['values.tour_id', $tourId],
            ])->first();
    }

    /**
     * Luu tour
     */
    public function store($request)
    {
        try {
            $tour = $this->_model->create([
                'area_id' => $request->area_id,
                'location_id' => $request->location_id,
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
                'display' => $request->display,
            ]);
            $tour->promotions()->attach($request->promotion_id);
            $tour->tags()->attach($request->tag_id);
            $tour->vehicles()->attach($request->vehicle_id);

            // xu li Include (dich vu kem theo)
            $include = json_encode($request->include);
            Value::insert([
                'attribute_id' => $this->getIncludeId(),
                'tour_id' => $tour->id,
                'value' => $include,
                'created_at' => now(),
                'updated_at' => now(),
            ]);

            // xu li Not Include (dich vu KHONG kem theo)
            $notInclude = json_encode($request->not_include);
            Value::insert([
                'attribute_id' => $this->getNotIncludeId(),
                'tour_id' => $tour->id,
                'value' => $notInclude,
                'created_at' => now(),
                'updated_at' => now(),
            ]);

            // Upload anh tour
            $path = $this->uploadImage($request->hasFile('image'), $request->file('image'), $tour->id . '/');
            $this->_model->find($tour->id)->update(['image_path' => $path]);

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
            $path = $this->updateImagePath($id, $request->hasFile('image'), $request->file('image'), 'image_path', $id . '/');
            // thuc hien luu vao DB
            $tour = $this->_model->find($id);
            $tour->update([
                'area_id' => $request->area_id,
                'location_id' => $request->location_id,
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
                'display' => $request->display,
                'image_path' => $path,
            ]);
            $tour->promotions()->sync($request->promotion_id);
            $tour->tags()->sync($request->tag_id);
            $tour->vehicles()->sync($request->vehicle_id);

            // xu li Include (dich vu kem theo)
            $include = json_encode($request->include);
            Value::findOrFail($request->include_value_id)->update([
                'value' => $include,
                'updated_at' => now(),
            ]);

            // xu li Not Include (dich vu KHONG kem theo)
            $notInclude = json_encode($request->not_include);
            Value::findOrFail($request->not_include_value_id)->update([
                'value' => $notInclude,
                'updated_at' => now(),
            ]);

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
