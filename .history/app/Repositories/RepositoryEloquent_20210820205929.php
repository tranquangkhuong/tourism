<?php

namespace App\Repositories;

use Illuminate\Support\Facades\File;
use Intervention\Image\Facades\Image;

abstract class RepositoryEloquent implements RepositoryInterface
{
    protected $model;

    protected const TYPE_SUCCESS = 'success';
    protected const TYPE_ERROR = 'errors';

    // * cac ham thiet lap Repository
    public function __construct()
    {
        $this->setModel();
    }

    /**
     * Get model for each repository.
     * Declare in specific repository
     */
    abstract public function getModel();

    /**
     * Set model for each repository.
     */
    public function setModel()
    {
        $this->_model = app()->make($this->getModel());
    }

    // ! Cac ham truy van - khai bao ben Interface

    public function query()
    {
        return $this->_model->query();
    }

    /**
     * Get all records.
     */
    public function getAll($columns = ['*'])
    {
        return $this->_model->select($columns)->get();
    }

    public function find($id)
    {
        return $this->_model->find($id);
    }

    public function search($column = 'name', $keyword)
    {
        return $this->_model->where($column, 'like', '%' . $keyword . '%')
            ->orderBy($column)->get();
    }

    /**
     * show id's info.
     */
    public function show($id)
    {
        return $this->_model->where('id', $id)->first();
    }

    // resource
    public function index()
    {
        # code...
    }

    public function create()
    {
        # code...
    }

    /**
     * Store data to database
     *
     * @param Request $request
     *
     * @return Array
     */
    public function store($request)
    {
        // dd($request->all());
        $this->_model->create($request->all());
        return [
            'msg' => __('Save successfully.'),
            'type' => self::TYPE_SUCCESS,
        ];
    }

    public function edit($id)
    {
        # code...
    }

    /**
     * Update records in database
     *
     * @param Request $request
     * @param $id
     *
     * @return Array
     */
    public function update($request, $id)
    {
        // dd($request->all());
        $result = $this->find($id);
        if ($result) {
            $result->update($request->all());

            return [
                'msg' => __('Update successfully.'),
                'type' => self::TYPE_SUCCESS,
            ];
        }

        return [
            'msg' => __('Update failed.'),
            'type' => self::TYPE_ERROR,
        ];
    }

    /**
     * Delete records in database.
     *
     * @param $id
     *
     * @return Array
     */
    public function destroy($id)
    {
        try {
            $result = $this->find($id);
            if ($result) {
                $result->delete();

                return [
                    'title' => __('Done!'),
                    'msg' => __('Delete successfully.'),
                    'type' => self::TYPE_SUCCESS,
                ];
            }
        } catch (\Exception $e) {
            return [
                'title' => __('An error has occurred!'),
                'msg' => __('Delete failed.'),
                'type' => self::TYPE_ERROR,
            ];
        }
    }

    // * Xu li du lieu tu Editor
    public function getDataFromEditor($dataEditor, $imagePathInEditor, $oldData = null)
    {
        // tat loi libxml
        libxml_use_internal_errors(true);

        // khai bao bien result ban dau la null
        $result = null;

        if (!empty($dataEditor)) {
            // tao doi tuong DOM duyet dataEditor moi submit
            $dom = new \DOMDocument();
            $dom->loadHTML(mb_convert_encoding($dataEditor, 'HTML-ENTITIES', 'UTF-8'), LIBXML_HTML_NOIMPLIED | LIBXML_HTML_NODEFDTD);
            $images = $dom->getElementsByTagName('img');
            $src = [];

            foreach ($images as $key => $img) {
                // lay du lieu base64 tu thuoc tinh src
                $dataImg = $img->getAttribute('src');
                // dua du lieu base64 ben tren vao cuoi mang $src
                array_push($src, $dataImg);

                // Tao Anh Moi
                // neu trong src ton tai chuoi base64
                if (strpos($dataImg, 'base64') !== false) {
                    // list($type, $data) = explode(';', $dataImg);
                    list($type, $data) = explode(',', $dataImg);
                    // giai ma base64
                    $dt = base64_decode($data);

                    // tao thu muc neu chua co
                    if (!is_dir(public_path($imagePathInEditor))) {
                        mkdir(public_path($imagePathInEditor), 777, true);
                    }

                    // tao ten anh
                    $imageName = $imagePathInEditor . time() . '_' . $key . '.png';
                    $publicPath = public_path() . $imageName;
                    // tao anh moi (base64 chuyen thanh png)
                    file_put_contents($publicPath, $dt);

                    // xoa src cu la base64
                    $img->removeAttribute('src');
                    // dat src moi la duong dan anh vua tao
                    $img->setAttribute('src', $imageName);
                }
            }

            $result = $dom->saveHTML();
        }

        if (!empty($oldData)) {
            // tao doi tuong DOM tu dataEditor cu trong CSDL
            $domOld = new \DOMDocument();
            $domOld->loadHTML(mb_convert_encoding($oldData, 'HTML-ENTITIES', 'UTF-8'), LIBXML_HTML_NOIMPLIED | LIBXML_HTML_NODEFDTD);
            $imagesOld = $domOld->getElementsByTagName('img');
            $srcOld = [];

            foreach ($imagesOld as $key => $value) {
                array_push($srcOld, $value->getAttribute('src'));
            }
            // tao mang luu nhung link cu khong co trong dataEditor moi submit
            $srcDelete = array_diff($src, $srcOld);

            // xoa nhung link cu khong dung
            foreach ($srcDelete as $key => $value) {
                $this->deleteImage($value);
            }
        }

        return $result;
    }

    /*=================================================================*/

    /**
     * ! Upload image.
     *
     * @return string $imagePath
     */
    public function uploadImage($hasFile, $file)
    {
        if ($hasFile) {
            // lay ten hoc cua file
            $originFileName = $file->getClientOriginalName();
            // lay extension cua file
            $extension = $file->getClientOriginalExtension();
            // lay ten file khong co extension
            $fileNameWithoutExtension = substr($originFileName, 0, strlen($originFileName)
                - (strlen($extension) + 1));
            // create unique file name de khong bi trung
            $fileName = $fileNameWithoutExtension . uniqid('_') . '.' . $extension;
            // tien hanh upload
            $file->move($this->getImageDirectory(), $fileName);

            return $this->getImageDirectory() . $fileName;
        }

        return null;
    }

    /**
     * ! Update image (xoa anh cu, upload anh moi).
     *
     * @return string $imagePath
     */
    public function updateImagePath($id, $hasFile, $file)
    {
        $oldImagePath = $this->getOldImagePath($id);
        if ($hasFile) {
            if ($oldImagePath) {
                $this->deleteImage($oldImagePath);
            }
            $imagePath = $this->uploadImage($hasFile, $file);

            return $imagePath;
        }
        return false;
    }

    /**
     * ! Xoa anh.
     */
    public function deleteImage($path)
    {
        if ($this->checkFileExisted($path)) {
            // lay ten file tu duong dan
            $tmpArr = explode('/', $path); // tach thanh 1 mang phan cach boi dau '/'
            $fileName = array_pop($tmpArr); // lay phan tu cuoi cua mang -> tuc la ten file
            File::delete(public_path($path)); // xoa anh goc

            $thumbnailPath = $this->getThumbnailDirectory() . $fileName; // lay duong dan thumbnail
            File::delete($thumbnailPath); // xoa anh thumbnail
        }
    }

    /**
     * lay duong dan cu trong database
     */
    public function getOldImagePath($id)
    {
        return $this->find($id)->image;
    }

    /**
     * Lay $imagePath ben Model.
     */
    public function getImageDirectory()
    {
        if (!is_dir(public_path($this->_model->imagePath))) {
            mkdir(public_path($this->_model->imagePath), 777, true);
        }
        return public_path($this->_model->imagePath);
    }

    /**
     * Lay duong dan cua cac anh thumbnail ben Model.
     */
    public function getThumbnailDirectory()
    {
        if (!is_dir(public_path($this->_model->thumbnailPath))) {
            mkdir(public_path($this->_model->thumbnailPath), 777, true);
        }
        return public_path($this->_model->thumbnailPath);
    }

    /**
     * Kiem tra file co ton tai khong.
     */
    public function checkFileExisted($path)
    {
        return File::exists(public_path($path));
    }

    /**
     * Fly Resize.
     */
    public function flyResize($size, $imagePath)
    {
        $imageFullPath = public_path($imagePath);
        $sizes = config('image.sizes');

        if (!file_exists($imageFullPath) || !isset($sizes[$size])) {
            abort(404);
        }

        $fileName = array_pop(explode('/', $imagePath)); // lay ten file
        $savePath = public_path('/storage/images/resizes/' . $size . '/' . $fileName);
        $saveDir = dirname($savePath);
        if (!is_dir($saveDir)) {
            mkdir($saveDir, 777, true);
        }
        list($width, $height) = $sizes[$size];
        $image = Image::make($imageFullPath)->fit($width, $height)->save($savePath);

        return $image->response();
    }
}
