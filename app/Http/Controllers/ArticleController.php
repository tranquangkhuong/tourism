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
        $articles = $this->repo->getAll();

        return view('admin.article.index', compact('articles'));
    }

    /**
     * Search records in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response $article
     */
    public function search($request)
    {
        $article = $this->repo->search('title', $request->keyword);

        return response()->json($article);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return View
     */
    public function create()
    {
        return view('admin.article.create');
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
        $rs = $this->repo->update($request, $articleId);
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
