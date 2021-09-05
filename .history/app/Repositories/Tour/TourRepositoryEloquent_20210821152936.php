<?php

namespace App\Repositories\Tour;

use App\Models\Area;
use App\Models\Location;
use App\Models\Promotion;
use App\Models\Tour;
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
     * Luu tour
     */
    public function store($request)
    {
        // $tour = new Tour();
        // $tour->area_id = $request->area_id;
        // $tour->location_id = $request->location_id;
        // $tour->title = $request->title;
        // $tour->description = $request->description;
        // $tour->departure_location = $request->departure_location;
        // $tour->destination = $request->destination;
        // $tour->itinerary = $request->itinerary;
        // $tour->created_at = date('Y-m-d H:i:s');
        // $tour->save();
        $tour = Tour::create([
            'area_id' => $request->area_id,
            'location_id' => $request->location_id,
            'promotion_id' => $request->promotion_id,
            'name' => $request->name,
            'code' => $request->code,
            'description' => $request->description,
            'departure_location' => $request->departure_location,
            'destination' => $request->destination,
            'itinerary' => $request->itinerary,
        ]);
        $tour->tags()->attach($request->tag_id);
        $tour->vehicles()->attach($request->vehicle_id);

        return [
            'msg' => __('Create a successful tour.'),
            'type' => self::TYPE_SUCCESS,
        ];
    }

    public function storeTourDetail($request)
    {
        DB::table('tour_details')->create([
            'tour_id' => $request->tour_id,
            'departure_date' => $request->departure_date,
            'departure_time' => $request->departure_time,
            'slot' => $request->slot,
            'adult_price' => $request->adult_price,
            'youth_price' => $request->youth_price,
            'child_price' => $request->child_price,
            'young_child_price' => $request->young_child_price,
            'created_at' => date('Y-m-d H:i:s'),
        ]);

        return [
            'msg' => __('Save successfully.'),
            'type' => self::TYPE_SUCCESS,
        ];
    }

    public function updateTourDetail($request, $id)
    {
        DB::table('tour_details')->findOrFail($id)->update($request->all());

        return [
            'msg' => __('Update successfully.'),
            'type' => self::TYPE_SUCCESS,
        ];
    }
}
