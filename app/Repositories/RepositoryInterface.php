<?php

namespace App\Repositories;

interface RepositoryInterface
{
    public function query();
    public function getAll();
    public function find($id);
    public function search($column, $keyword);
    public function show($id);
    // resource
    public function index();
    public function create();
    public function store($request);
    public function edit($id);
    public function update($request, $id);
    public function destroy($id);
}
