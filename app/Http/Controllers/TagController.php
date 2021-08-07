<?php

namespace App\Http\Controllers;

use App\Repositories\Tag\TagRepositoryInterface;
use Illuminate\Http\Request;

class TagController extends Controller
{
    protected $repo;

    public function __construct(TagRepositoryInterface $tagRepository)
    {
        $this->repo = $tagRepository;
    }

    /**
     * Display a listing of the resource.
     *
     * @return View
     */
    public function index()
    {
        $tags = $this->repo->getAll();

        return view('admin.tag.index', compact('tags'));
    }

    /**
     * Search records in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response $tags
     */
    public function search($request)
    {
        $tags = $this->repo->search('content', $request->keyword);

        return response()->json($tags);
    }

    /**
     * Show the form for creating a new resource.
     *
     *
     */
    public function create()
    {
        // Cai nay lam modal, khong phai tao file nua
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return Redirect
     */
    public function store(Request $request)
    {
        $rs = $this->repo->store($request);
        toast($rs['msg'], $rs['type']);

        return redirect()->route('admin.tag.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $tagId
     * @return \Illuminate\Http\Response
     */
    public function show($tagId)
    {
        $tag = $this->repo->find($tagId);

        return response()->json($tag);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $tagId
     * @return View
     */
    public function edit($tagId)
    {
        $tag = $this->repo->find($tagId);

        return view('admin.tag.edit', compact('tag'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $tagId
     * @return Redirect
     */
    public function update(Request $request, $tagId)
    {
        $rs = $this->repo->update($request, $tagId);
        toast($rs['msg'], $rs['type']);

        return redirect()->route('admin.tag.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $tagId
     * @return Redirect
     */
    public function destroy($tagId)
    {
        $rs = $this->repo->destroy($tagId);
        toast($rs['msg'], $rs['type']);

        return back();
    }
}
