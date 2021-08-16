<?php

namespace App\Http\Controllers\EAV;

use App\Http\Controllers\Controller;
use App\Repositories\Attribute\AttributeRepositoryInterface;
use Illuminate\Http\Request;

class AttributeController extends Controller
{
    protected $repo;

    public function __construct(AttributeRepositoryInterface $attributeRepository)
    {
        $this->repo = $attributeRepository;
    }

    /**
     * Display a listing of the resource.
     *
     * @return View
     */
    public function index()
    {
        $attributes = $this->repo->getAll();

        return view('admin.attribute.index', compact('attributes'));
    }

    /**
     * Search records in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response $attributes
     */
    public function search($request)
    {
        $attributes = $this->repo->search('name', $request->keyword);

        return response()->json($attributes);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // Su dung modal
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

        return redirect()->route('admin.attribute.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $attributeId
     * @return \Illuminate\Http\Response
     */
    public function show($attributeId)
    {
        $attribute = $this->repo->show($attributeId);

        return response()->json($attribute);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $attributeId
     * @return View
     */
    public function edit($attributeId)
    {
        $attribute = $this->repo->find($attributeId);

        return view('admin.attribute.edit', compact('attribute'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $attributeId
     * @return Redirect
     */
    public function update(Request $request, $attributeId)
    {
        $rs = $this->repo->update($request, $attributeId);
        toast($rs['msg'], $rs['type']);

        return redirect()->route('admin.attribute.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $attributeId
     * @return \Illuminate\Http\Response
     */
    public function destroy($attributeId)
    {
        $rs = $this->repo->destroy($attributeId);
        toast($rs['msg'], $rs['type']);

        return back();
    }
}
