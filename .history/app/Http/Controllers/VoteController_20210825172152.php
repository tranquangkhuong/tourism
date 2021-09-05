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
        $voted = Vote::where([
            'user_id', $request->user_id,
            ''
        ])
        if ($)
        Vote::create($request->all());
        return response()->json([
            'title' => __('Done!'),
            'stt' => 'success',
        ]);
    }
}
