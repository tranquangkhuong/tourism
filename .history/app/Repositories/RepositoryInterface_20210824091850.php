<?php

namespace App\Repositories;

interface RepositoryInterface
{
    public function query();
    public function getAll($columns = ['*']);
    public function find($id);
    public function search($column = 'name', $keyword);
    public function show($id);
    // resource
    public function index();
    public function create();
    public function store($request);
    public function edit($id);
    public function update($request, $id);
    public function destroy($id);
    // xu li data editor
    public function getDataFromEditor($dataEditor, $oldData = null);
    // xu li anh
    public function uploadImage($hasFile, $file);
    public function updateImagePath($id, $hasFile, $file, $imageField = 'image');
    public function deleteImage($path);
    public function getOldImagePath($id, $imageField);
    public function getImageDirectory();
    public function getThumbnailDirectory();
    public function checkFileExisted($path);
}
