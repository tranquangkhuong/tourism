<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BaseController extends Controller
{
    public function index()
    {
        $hotTours = DB::table('tours')->select('tours.id', 'tours.name');
        $newTours = ;
        $tourSuggested = ;
    }
}
