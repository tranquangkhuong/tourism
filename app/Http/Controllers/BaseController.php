<?php

namespace App\Http\Controllers;

use App\Models\Area;
use App\Models\Article;
use App\Models\Attribute;
use App\Models\Comment;
use App\Models\Location;
use App\Models\Tag;
use App\Models\Tour;
use App\Models\TourImage;
use App\Models\TourPlan;
use App\Models\Vote;
use App\Repositories\RepositoryInterface;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BaseController extends Controller
{
    // protected $baseRepository;

    // public function __construct(RepositoryInterface $repositoryInterface)
    // {
    //     $this->baseRepository = $repositoryInterface;
    // }

    /**
     * Trang HOME.
     */
    public function home()
    { //where('name', 'like', 'hot')->first()
        $hotTours = Tag::where('name', 'like', 'hot')->first()->tours()->take(12)->get();
        // dd($hotTours);
        $newTours = Tour::orderByDesc('created_at')->get();
        // $recommendedTours = Tag::where('name', 'like', 'recommended')->first()->tours()->get();
        $locations = Location::all();
        $articles = Article::limit(5)->orderByDesc('created_at')->get();

        return view('frontend.index', compact('hotTours', 'newTours', 'locations', 'articles'));
    }

    /**
     * Trang hien thi tour (All tour, tour theo tag)
     */
    public function listTour(Request $request)
    {
        $tags = array($request->query('tag'));
        if (isset($tags[0])) {
            $tours = Tag::where('name', 'like', $tags[0])->first()->tours()->orderByDesc('created_at')->get();
            $title['slider'] = 'Tag: ' . $tags[0];
            $title['title'] = 'Search Tag';
        } else {
            $tours = Tour::orderByDesc('created_at')->get();
            $title['slider'] = 'All Tours';
            $title['title'] = 'All Tours';
        }
        // dd($tours);
        return view('frontend.tour.list', compact('title', 'tours'));
    }

    /**
     * ! Trang DESTINATION.
     */
    public function destination()
    {
        $tours = Location::has('tours')->get();

        return view('frontend.destination', compact('tours'));
    }

    /**
     * Trang TOUR DOMESTIC.
     */
    public function domestic()
    {
        $tours = Tour::select('tours.id', 'tours.name', 'tours.image_path', 'tours.description', 'tours.other_day', 'tours.adult_price', 'tours.destination', 'tours.slot')
            ->join('areas', 'tours.area_id', '=', 'areas.id')->where('areas.domestic', 1)->get();
        $title = [
            'title' => 'Domestic tours',
            'slider' => 'Tours in Vietnam',
        ];
        // dd($tours);

        return view('frontend.tour.list', compact('tours', 'title'));
    }

    /**
     * Trang TOUR FOREIGN.
     */
    public function foreign()
    {
        $tours = Tour::select('tours.id', 'tours.name', 'tours.image_path', 'tours.description', 'tours.other_day', 'tours.adult_price', 'tours.destination', 'tours.slot')
            ->join('areas', 'tours.area_id', '=', 'areas.id')->where('areas.domestic', 0)->get();
        $title = [
            'title' => 'Foreign tours',
            'slider' => 'Foreign tours',
        ];
        // dd($tours);

        return view('frontend.tour.list', compact('tours', 'title'));
    }

    /**
     * Trang DETAIL TOUR
     */
    public function detailTour($tourId)
    {
        $tour = Tour::find($tourId);
        $tags = $tour->tags()->get();
        $vehicles = $tour->vehicles()->get();
        $includes =
            Tour::select('values.id', 'values.attribute_id', 'values.tour_id', 'values.value')->join('values', 'tours.id', '=', 'values.tour_id')
            ->where([
                ['values.attribute_id', Attribute::select('id')->where('name', 'included')->first()->id],
                ['values.tour_id', $tourId],
            ])->first();
        $notIncludes =
            Tour::select('values.id', 'values.attribute_id', 'values.tour_id', 'values.value')->join('values', 'tours.id', '=', 'values.tour_id')
            ->where([
                ['values.attribute_id', Attribute::select('id')->where('name', 'not included')->first()->id],
                ['values.tour_id', $tourId],
            ])->first();
        // $area = $tour->area()->name;
        $location = $tour->location()->first();
        // tinh so trung binh cua vote
        // $tourVote = Vote::where('tour_id', $tour->id);
        // $sum = 0;
        // foreach ($tourVote->get() as $item) {
        //     $sum += $item->rate;
        // }
        // $vote = $sum / ($tourVote->count());

        // Tour Plan
        $plans = TourPlan::where('tour_id', $tourId)->orderBy('day')->get();

        // Tour Image
        $images = TourImage::where('tour_id', $tourId)->get();

        // Binh luan & danh gia
        // $comments = Comment::select('comments.content', 'comments.created_at', 'users.name', 'users.avatar_image_path', 'users.profile_image_path')->join('users', 'comments.user_id', '=', 'users.id')->where('comments.tour_id', $tourId)->get();
        // dd($plans);


        return view('frontend.tour.detail', compact('tour', 'tags', 'vehicles', 'includes', 'notIncludes', 'plans', 'location'));
        // , 'area', 'vote', 'images', 'comments'
    }

    /**
     * Trang BLOG
     */
    public function blog()
    {
        $articles = Article::orderByDesc('created_at')->paginate(1);

        return view('frontend.blog.list', compact('articles'));
    }

    public function detailArticle($articleId)
    {
        $article = Article::where([
            ['id', '=', $articleId],
            ['display', '=', 1],
        ])->first();

        $latest = Article::where([
            ['display', 1],
            ['id', '<>', $articleId],
        ])->orderByDesc('created_at')->take(3)->get();

        $publisher = isset($article) ? Article::find($articleId)->admin()->first() : null;
        // dd($publisher);

        return view('frontend.blog.detail', compact('article', 'latest', 'publisher'));
    }

    /**
     * Trang CONTACT US
     */
    public function contact()
    {
        $contacts = DB::table('contacts')->get();

        return view('frontend.contact_us', compact('contacts'));
    }

    /**
     * Trang ABOUT US
     */
    public function about()
    {
        $aboutUs = DB::table('about')->first('about_us');

        return view('frontend.about_us', compact('aboutUs'));
    }
}
