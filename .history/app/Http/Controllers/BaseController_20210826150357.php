<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BaseController extends Controller
{
    public function index()
    {
        $hotTours = Tag::where('name', 'like', 'hot');
        $newTours = ;
        $tourSuggested = ;
    }
}
