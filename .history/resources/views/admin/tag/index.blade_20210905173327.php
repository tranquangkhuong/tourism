@extends('admin.master')

{{-- @push('title', 'Slider') --}}

@section('header')
<!-- Content Header (Page header) -->
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0">Tag</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#"><i class="fa fa-home"></i></a></li>
                    <li class="breadcrumb-item active"><a href="#">Tag</a></li>
                    {{-- <li class="breadcrumb-item"><a href="#">List slider</a></li> --}}
                </ol>
            </div><!-- /.col -->
        </div><!-- /.row -->
    </div><!-- /.container-fluid -->
</div>
@endsection

@section('script')
<script type="text/javascript" src="{{ URL::asset('backend/index.js') }}"></script>
@endsection

@section('content')
<!-- Main content -->
<section class="content">
    <!-- Default box -->
    <div class="card">
        <!-- .card-header -->
        <div class="card-header">
            <h3 class="card-title">Tag Management</h3>
            <button type="button" class="btn btn-xs btn-success" data-toggle="modal" data-target="#modal-add">
                <i class="fas fa-plus-circle"></i>&nbsp;
                Thêm mới
            </button>
            <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                    <i class="fas fa-minus"></i>
                </button>
                <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
                    <i class="fas fa-times"></i>
                </button>
            </div>
        </div>
        <!-- /.card-header -->

        <!-- .card-body -->
        <div class="card-body p-0" style="display: block;">
            <table class="table table-striped projects">
                <thead class="text-center">
                    <tr>
                        <th style="width: 40%">
                            Name
                        </th>
                        <th style="width: 40%">
                            Date
                        </th>
                        <th style="width: 20%">
                            Action
                        </th>
                    </tr>
                </thead>
                <tbody id="list-tag">
                    {{-- <tr>
                        <td>
                            response.title
                        </td>
                        <td>
                            <ul class="list-inline">
                                <li class="list-inline-item">
                                    <img src="{{ URL::asset('frontend/img/slider1.jpg') }}" alt="slider1"
                    style="width:50%">
                    </li>
                    </ul>
                    </td>
                    <td class="project_progress">
                        <p> response.created_at</p>
                    </td>
                    <td class="project-state">
                        <a href="#"><span class="badge badge-success">Hiển thị</span></a>
                    </td>
                    <td class="project-actions text-right">
                        <a class="btn btn-info btn-sm" href="#">
                            <i class="fas fa-pencil-alt">
                            </i>
                            Edit
                        </a>
                        <a class="btn btn-danger btn-sm" href="#">
                            <i class="fas fa-trash">
                            </i>
                            Delete
                        </a>
                    </td>
                    </tr>

                    <tr>
                        <td>
                            2
                        </td>
                        <td>
                            <a>
                                Slider 2
                            </a>
                        </td>
                        <td>
                            <ul class="list-inline">
                                <li class="list-inline-item">
                                    <img src="{{ URL::asset('frontend/img/slider2.jpg') }}" alt="slider1"
                                        style="width:50%">
                                </li>
                            </ul>
                        </td>
                        <td class="project_progress">
                            <p> explore and Travel</p>
                        </td>
                        <td class="project-state">
                            <a href="#"><span class="badge badge-success">Hiển thị</span></a>
                        </td>
                        <td class="project-actions text-right">
                            <a class="btn btn-info btn-sm" href="#">
                                <i class="fas fa-pencil-alt">
                                </i>
                                Edit
                            </a>
                            <a class="btn btn-danger btn-sm" href="#">
                                <i class="fas fa-trash">
                                </i>
                                Delete
                            </a>
                        </td>
                    </tr> --}}
                </tbody>
            </table>
        </div>
        <!-- /.card-body -->

    </div>
    <!-- /.card -->

</section>
<!-- /.content -->
<div class="modal fade" id="modal-add" style="display: none;" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Add Tag</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">
                <form id="form-add" action="{{  route('admin.tag.store')  }}" method="post">
                    @csrf
                    <div class="row">
                        <div class="col-12">
                            <input class="form-control" type="text" name="name" id="name" placeholder="Nhập tag"
                                required="">
                        </div>
                    </div>
            </div>
            <div class="modal-footer justify-content-between">
                <button type="button" class="btn btn-default" data-dismiss="modal">Đóng</button>
                <button type="submit" class="btn btn-primary">Lưu</button>
            </div>
            </form>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
@endsection
