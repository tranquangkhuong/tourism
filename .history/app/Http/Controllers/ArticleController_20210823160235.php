<?php

namespace App\Http\Controllers;

use App\Repositories\Article\ArticleRepositoryInterface;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    protected $repo;

    public function __construct(ArticleRepositoryInterface $articleRepository)
    {
        $this->repo = $articleRepository;
    }

    /**
     * Display a listing of the resource.
     *
     * @return View
     */
    public function index()
    {
        return view('test.article.index');
    }

    public function indexData()
    {
        return response()->json($this->repo->getAll(['id', 'title']));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return View
     */
    public function create()
    {
        return view('test.article.add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return Redirect
     */
    public function store(Request $request)
    {
        dd($request->file('image'));
        $image = $this->repo->uploadImage($request->hasFile('image'), $request->file('image'));
        $content = $this->repo->getDataFromEditor($request->data_editor);
        $rs = $this->repo->storeArticle($request, $image, $content);
        toast($rs['msg'], $rs['type']);

        return redirect()->route('admin.article.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $articleId
     * @return \Illuminate\Http\Response
     */
    public function show($articleId)
    {
        $article = $this->repo->show($articleId);

        return response()->json($article);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $articleId
     * @return View
     */
    public function edit($articleId)
    {
        $article = $this->repo->find($articleId);

        return view('admin.article.edit', compact('article'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $articleId
     * @return Redirect
     */
    public function update(Request $request, $articleId)
    {
        $image = $this->repo->updateImagePath($articleId, $request->hasFile('image'), $request->file('image'));
        $content = $this->repo->getContent($articleId, $request->data_editor);
        $rs = $this->repo->updateArticle($articleId, $request->title, $image, $content);
        toast($rs['msg'], $rs['type']);

        return redirect()->route('admin.article.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $articleId
     * @return Redirect
     */
    public function destroy($articleId)
    {
        $rs = $this->repo->destroy($articleId);
        toast($rs['msg'], $rs['type']);

        return back();
    }
}
