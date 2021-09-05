<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Tag;
use App\Models\Tour;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BaseController extends Controller
{
    public function index()
    {
        $hotTours = Tag::where('name', 'like', 'hot')->tours()->select('id', 'name');
        $newTours = Tour::select('id', 'name')->orderByDesc('created_at');
        $tourSuggested = Tag::where('name', 'like', 'suggested')->tours()->select('id', 'name');
        $articles = Article::select('id', 'title', 'content')->
        return view('index');
    }
}
