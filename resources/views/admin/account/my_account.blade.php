@extends('admin.master')

@push('title', 'My Account')

@section('header')
<!-- Content Header (Page header) -->
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0">My Account</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="{{ url('/admin/dashboard') }}"><i class="fa fa-home"></i></a>
                    </li>
                    <li class="breadcrumb-item active">My Account</li>
                </ol>
            </div><!-- /.col -->
        </div><!-- /.row -->
    </div><!-- /.container-fluid -->
</div>
@endsection

@section('content')
<!-- Main content -->
<section class="content">
    <div class="container">
        <!-- Default box -->
        <div class="card card-primary">
            <div class="card-header">
                <h3 class="card-title">Profile</h3>
            </div>
            <form action="{{ url('/admin/account/update') }}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="card-body">
                    <div class="form-group">
                        <label for="image">Avatar</label>
                        <input type="file" name="image" id="image" class="form-control" placeholder="Chọn ảnh">
                        <span>{{ $account->avatar_image_path }}</span>
                    </div>
                    <div class="form-group">
                        <label for="name">Name</label>
                        <input type="text" name="name" id="name" class="form-control" placeholder="Username"
                            value="{{ $account->name }}">
                    </div>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" name="email" id="email" class="form-control" placeholder="example@email.com"
                            value="{{ $account->email }}">
                    </div>
                    <div class="form-group">
                        <label for="phone">Phone</label>
                        <input type="text" name="phone" id="phone" class="form-control" placeholder="Phone number"
                            value="{{ $account->phone }}">
                    </div>
                    <div class="form-group">
                        <label for="address">Address</label>
                        <input type="text" name="address" id="address" class="form-control" placeholder="Address"
                            value="{{ $account->address }}">
                    </div>
                    <div class="row">
                        <div class="col-6">
                            <div class="form-group">
                                <label for="created">Created at</label>
                                <input type="text" id="created" class="form-control" disabled placeholder="Ngày tạo"
                                    value="{{ $account->created_at }}">
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group">
                                <label for="updated">Updated at</label>
                                <input type="text" id="updated" class="form-control" disabled
                                    placeholder="Ngày cập nhật" value="{{ $account->updated_at }}">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-footer">
                    <a href="{{ url('/admin/dashboard') }}" class="btn btn-sm btn-secondary">Cancel</a>
                    <button type="submit" class="btn btn-sm btn-success float-right">Update</button>
                </div>
            </form>
        </div>
    </div>
</section>
@endsection
