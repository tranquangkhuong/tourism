@extends('admin.master')
@section('header')
<!-- Content Header (Page header) -->

<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0">Add Slider </h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Slider</a></li>
                    <li class="breadcrumb-item"><a href="#">Add slider</a></li>
                </ol>
            </div><!-- /.col -->
        </div><!-- /.row -->
    </div><!-- /.container-fluid -->
</div>
@endsection
@section('content')
<!-- Main content -->
<section class="content">
    <div class="row">
        <div class="col-md-12">
            <!-- .card -->
            <div class="card card-primary">

                <!-- .card-header -->
                <div class="card-header">
                    <h3 class="card-title">General</h3>
                    <div class="card-tools">
                        <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                            <i class="fas fa-minus"></i>
                        </button>
                    </div>
                </div>
                <!-- /.card-header-->

                <!-- .card-body -->
                <div class="card-body">
                    <div class="form-group">
                        <label for="inputName">Slider Name</label>
                        <input type="text" id="inputName" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputFile">File Img</label>
                        <div class="input-group">
                            <div class="custom-file">
                                <input type="file" class="custom-file-input" id="exampleInputFile">
                                <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                            </div>
                            <div class="input-group-append">
                                <span class="input-group-text">Upload</span>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inputDescription">Desprestion</label>
                        <textarea id="inputDescription" class="form-control" rows="4"></textarea>
                    </div>
                    <div class="form-group">
                        <label for="inputStatus">Status</label>
                        <select id="inputStatus" class="form-control custom-select">
                            <option selected="">Hiển thị</option>
                            <option>Ẩn</option>
                        </select>
                    </div>
                </div>
                <!-- /.card-body -->

                <!-- .card-footer -->
                <div class="card-footer">
                    <a href="#" class="btn btn-secondary">Cancel</a>
                    <button type="submit" class="btn btn-success float-right">Save</button>
                </div>
                <!-- /.card-footer -->

            </div>
            <!-- /.card -->

        </div>
    </div>
</section>

<!-- /.content -->
@endsection
