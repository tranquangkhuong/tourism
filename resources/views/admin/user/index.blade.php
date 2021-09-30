@extends('admin.master')

@push('title', 'User Manage')

@section('script')
<script type="text/javascript">
    $(document).ready(function () {
        // tim kiem - filter
        $("#search").on("keyup", function() {
            var value = $(this).val().toLowerCase();
            $(`#list-user tr`).filter(function() {
                $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1);
            });
        });

        // Alert Delete
        $('.btn-delete').click((e) => {
            let isDelete = confirm('Bạn có chắc chắn muốn xóa?');
            if(!isDelete) {
                e.preventDefault();
            }
        });
    });
</script>
@endsection

@section('header')
<!-- Content Header (Page header) -->
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0">User</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="{{ url('/admin/dashboard') }}"><i class="fa fa-home"></i></a>
                    </li>
                    <li class="breadcrumb-item active">User</li>
                </ol>
            </div><!-- /.col -->
        </div><!-- /.row -->
    </div><!-- /.container-fluid -->
</div>
@endsection

@section('content')
<section class="content">
    <div class="container">
        <!-- .card -->
        <div class="card">
            <!-- .card-header -->
            <div class="card-header">
                <h3 class="card-title">
                    <a href="{{ route('admin.user.add') }}" class="btn btn-xs btn-success">
                        <i class="fas fa-plus-circle"></i>&nbsp;
                        Thêm mới
                    </a>
                </h3>
                <div class="card-tools">
                    <div class="row">
                        <div class="col">
                            <div class="input-group input-group-sm" style="width: 150px;">
                                <input type="text" id="search" class="form-control float-right" placeholder="Search">
                                <div class="input-group-append float-right">
                                    <button type="button" class="btn btn-default"><i class="fas fa-search"></i></button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /.card-header -->

            <!-- .card-body -->
            <div class="card-body table-responsive p-0 d-block">
                <table class="table table-hover table-striped table-head-fixed text-center">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Image</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody id="list-user">
                        @foreach ($users as $user)
                        <tr>
                            <td>{{ $user->id }}</td>
                            <td>{{ $user->avatar_image_path }}</td>
                            <td>{{ $user->name }}</td>
                            <td>{{ $user->email }}</td>
                            <td>
                                <a class="btn btn-info btn-sm" title="Edit"
                                    href="{{ route('admin.user.edit', $user->id)}}">
                                    <i class="fas fa-pencil-alt">
                                    </i>
                                </a>
                                {{-- <a class="btn btn-danger btn-sm btn-delete" title="Delete"
                                    href="{{ route('admin.user.delete', $user->id) }}">
                                <i class="fas fa-trash">
                                </i>
                                </a> --}}
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            <!-- /.card-body -->
        </div>
        <!-- /.card -->
    </div>
</section>
@endsection
