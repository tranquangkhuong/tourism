<?php

namespace App\Http\Controllers;

use App\Repositories\Comment\CommentRepositoryInterface;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    protected $repo;

    public function __construct(CommentRepositoryInterface $commentRepository)
    {
        $this->repo = $commentRepository;
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->repo->store($request);

        // return: ajax se load lai khung comment
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $commentId
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $commentId)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $commentId
     * @return \Illuminate\Http\Response
     */
    public function destroy($commentId)
    {
        $rs = $this->repo->destroy($commentId);
        toast($rs['msg'], $rs['type']);

        return back();
    }
}
