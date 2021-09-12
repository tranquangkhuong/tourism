@extends('admin.master')

@push('title', 'Edit Location')

@section('header')
<!-- Content Header (Page header) -->
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0">Edit Location</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="{{ url('/admin/dashboard') }}"><i class="fa fa-home"></i></a>
                    </li>
                    <li class="breadcrumb-item active"><a href="{{ route('admin.location.index') }}">Area</a></li>
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
                    <h3 class="card-title">Edit Location</h3>
                </div>
                <!-- /.card-header-->

                <form action="{{ route('admin.location.update', $location->id) }}" method="post">
                    @csrf
                    <!-- .card-body -->
                    <div class="card-body">
                        <div class="form-group">
                            <label for="name">Name</label>
                            <input class="form-control" type="text" name="name" id="name"
                                placeholder="Nhập tên Địa điểm" required="" value="{{ $location->name }}">
                        </div>
                        <div class="form-group">
                            <label for="selectArea">Area</label>
                            <select name="area_id" id="selectArea" class="form-control custom-select" required>
                                <option value="">-- Choose an Area --</option>
                                @foreach ($areas as $item)
                                <option {{ $location->area_id === $item->id ? 'selected' : '' }}
                                    value="{{ $item->id }}">{{ $item->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="description">Description</label>
                            <textarea name="description" id="description" class="form-control" rows="9"
                                placeholder="Nhập mô tả về khu vực">{{ $location->description }}</textarea>
                        </div>
                        <div class="form-group">
                            <label for="inputCreatedAt">Created at</label>
                            <input type="" id="inputCreatedAt" class="form-control" disabled
                                value="{{ date('m-d-Y H:i:s', strtotime($location->created_at)) }}">
                        </div>
                    </div>
                    <!-- /.card-body -->

                    <!-- .card-footer -->
                    <div class="card-footer">
                        <a href="{{ route('admin.area.index') }}" class="btn btn-secondary">Cancel</a>
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
