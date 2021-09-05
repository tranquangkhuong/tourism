<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Tag;
use App\Models\Tour;
use App\Models\Vote;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BaseController extends Controller
{
    public function index()
    {
        $hotTours = Tag::where('name', 'like', 'hot')->tours()->select('id', 'name')->get();
        $newTours = Tour::select('id', 'name')->orderByDesc('created_at')->get();
        $recommendedTours = Tag::where('name', 'like', 'recommended')->tours()->select('id', 'name')->get();
        $articles = Article::select('id', 'title', 'content')->limit(5)->orderByDesc('created_at')->get();

        return view('index', compact('hotTours', 'newTours', 'recommendedTours', 'articles'));
    }

    public function detailTour($tourId)
    {
        $t = Tour::where('id', $tourId);
        $tour = $t->first();
        $tags = $t->tags()->name;
        $vehicles = $t->vehicles()->name;
        $ares = $t->area()->name;
        $location = $t->location()->name;
        $vote = Vote::where()
    }
}
