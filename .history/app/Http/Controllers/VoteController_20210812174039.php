<?php

namespace App\Http\Controllers;

use App\Models\Vote;
use App\Repositories\Vote\VoteRepositoryInterface;
use Illuminate\Http\Request;

class VoteController extends Controller
{
    protected $repo;

    public function __construct(VoteRepositoryInterface $voteRepository)
    {
        $this->repo = $voteRepository;
    }

    public function store(Request $request)
    {
        $vote = new Vote();
        $vote->tour_id = $request->tour_id;
        $vote->user_id = $request->user_id;
        $vote->rate = $request->rate;
        $vote->save();
    }
}
