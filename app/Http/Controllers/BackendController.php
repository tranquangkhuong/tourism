<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BackendController extends Controller
{
    public function dashboard()
    {
        $totalTour = DB::table('tours')->get()->count();
        $totalBooking = DB::table('bookings')->get()->count();
        $totalUser = DB::table('users')->get()->count();
        $totalArticle = DB::table('articles')->get()->count();
        // dd($totalBooking);
        return view('backend.dashboard', compact('totalTour', 'totalBooking', 'totalUser', 'totalArticle'));
    }
}
