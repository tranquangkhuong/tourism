@extends('admin.master')

@push('title', 'Edit Article')

@section('header')
<!-- Content Header (Page header) -->
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0">Edit Article</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="{{ url('/admin/dashboard') }}"><i class="fa fa-home"></i></a>
                    </li>
                    <li class="breadcrumb-item"><a href="{{ route('admin.article.index') }}">Article</a></li>
                    <li class="breadcrumb-item active">Edit</li>
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
                    <h3 class="card-title">Edit Article</h3>
                    <div class="card-tools">
                        <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                            <i class="fas fa-minus"></i>
                        </button>
                    </div>
                </div>
                <!-- /.card-header-->

                <form action="{{ route('admin.article.update', $article->id) }}" method="post"
                    enctype="multipart/form-data">
                    @csrf
                    <!-- .card-body -->
                    <div class="card-body">
                        <div class="form-group">
                            <label for="exampleInputFile">Image</label>
                            <div class="input-group">
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input" id="exampleInputFile" name="image">
                                    <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                                </div>
                                <div class="input-group-append">
                                    <span class="input-group-text">Upload</span>
                                </div>
                            </div>
                            <span class="help-text">{{ $article->image_path }}</span>
                        </div>
                        <div class="form-group">
                            <label for="inputName">Title</label>
                            <input type="text" id="inputName" name="title" class="form-control"
                                placeholder="Enter article title" value="{{ $article->title }}">
                        </div>
                        <div class="form-group">
                            <label for="inputDescription">Content</label>
                            <textarea id="summernote" name="content"
                                class="form-control">{{ $article->content }}</textarea>
                        </div>
                        <div class="form-group">
                            <label for="inputStatus">Display</label>
                            <select id="inputStatus" name="display" class="form-control custom-select">
                                <option {{ $article->display === 1 ? 'selected' : '' }} value="1">Hiển thị</option>
                                <option {{ $article->display !== 1 ? 'selected' : '' }} value="0">Ẩn</option>
                            </select>
                        </div>
                    </div>
                    <!-- /.card-body -->

                    <!-- .card-footer -->
                    <div class="card-footer">
                        <a href="{{ route('admin.article.index') }}" class="btn btn-secondary">Cancel</a>
                        <button type="submit" class="btn btn-success float-right">Save</button>
                    </div>
                    <!-- /.card-footer -->
                </form>

            </div>
            <!-- /.card -->

        </div>
    </div>
</section>

<!-- /.content -->
@endsection
