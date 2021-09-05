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
        return view('test.tag.index');
    }

    public function indexData()
    {
        return response()->json($this->repo->getAll(['id', 'name']));
    }

    /**
     * Show the form for creating a new resource.
     *
     */
    public function create()
    {
        // Cai nay lam modal, khong phai tao file nua
        return view('test.tag.add');
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
        toast($rs['msg'], $rs['stt']);

        return redirect()->route('admin.tag.index');
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

        return view('test.tag.edit', compact('tag'));
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
        toast($rs['msg'], $rs['stt']);

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
        // toast($rs['msg'], $rs['stt']);
        if ($rs['stt'] == 'error') {
            return response()->json($rs, 500);
        }

        return response()->json($rs);
    }
}
