<?php

namespace App\Http\Controllers;

use App\Models\Area;
use App\Models\Article;
use App\Models\Comment;
use App\Models\Tag;
use App\Models\Tour;
use App\Models\TourImage;
use App\Models\TourPlan;
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

    public function domestic()
    {
        $tours = Area::where('domestic', 1)->tours();

        return view('tour.domestic', compact('tours'));
    }

    public function foreign()
    {
        $tours = Area::where('domestic', 0)->tours();

        return view('tour.foreign', compact('tours'));
    }

    public function detailTour($tourId)
    {
        $t = Tour::where('id', $tourId);
        $tour = $t->first();
        $tags = $t->tags()->name;
        $vehicles = $t->vehicles()->name;
        $area = $t->area()->name;
        $location = $t->location()->name;
        // tinh so trung binh cua vote
        $tourVote = Vote::where('tour_id', $tour->id);
        $sum = 0;
        foreach ($tourVote->get() as $item) {
            $sum += $item->rate;
        }
        $vote = $sum / ($tourVote->count());

        // Tour Plan
        $plans = TourPlan::where('tour_id', $tourId)->get();

        // Tour Image
        $images = TourImage::where('tour_id', $tourId)->get();

        // Binh luan & danh gia
        $comments = Comment::select('comments.content', 'comments.created_at', 'users.name', 'users.avatar_image_path', 'users.profile_image_path')->join('users', 'comments.user_id', '=', 'users.id')->where('comments.tour_id', $tourId)->get();

        return view('detail_tour', compact('tour', 'tags', 'vehicles', 'area', 'location', 'vote', 'plans', 'images', 'comments'));
    }

    public function blog()
    {
        $articles = Article::paginate(10);
        return view('blog_masonry', compact('articles'));
    }

    public function aboutUs()
    {
        $aboutUs = DB::table('about')->first('about_us');

        return view('about_us', compact('aboutUs'));
    }

    public function contact()
    {
        $contacts = DB::table('contacts')->all();

        return view('contact_us', compact('contacts'));
    }
}
