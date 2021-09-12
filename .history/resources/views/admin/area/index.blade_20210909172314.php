@extends('admin.master')

@push('title', 'Area')

@section('header')
<!-- Content Header (Page header) -->
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0">Area</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="{{ url('/admin/dashboard') }}"><i class="fa fa-home"></i></a>
                    </li>
                    <li class="breadcrumb-item active">Area</li>
                </ol>
            </div><!-- /.col -->
        </div><!-- /.row -->
    </div><!-- /.container-fluid -->
</div>
@endsection

@section('script')
<script type="text/javascript">
    $(document).ready(function () {
        // Tim kiem - filter
        $("#search").on("keyup", function() {
            var value = $(this).val().toLowerCase();
            $(`#list-area tr`).filter(function() {
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

@section('content')
<!-- Main content -->
<section class="content">
    <!-- Default box -->
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">
                <button type="button" class="btn btn-xs btn-success" data-toggle="modal" data-target="#modal-add">
                    <i class="fas fa-plus-circle"></i>&nbsp;
                    Thêm mới
                </button>
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
        <div class="card-body p-0" style="display: block;">
            <table class="table table-striped projects">
                <thead>
                    <tr>
                        <th style="width: 20%">
                            ID
                        </th>
                        <th style="width: 30%">
                            Name
                        </th>
                        <th style="width: 20%">
                            Classify
                        </th>
                        <th style="width: 15%">
                            Date
                        </th>
                        <th style="width: 15%">
                            Action
                        </th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>
                            <p>1</p>
                        </td>
                        <td>
                            <p>#782642</p>
                        </td>
                        <td>
                            <p>Viêt Nam</p>
                        </td>
                        <td class="project_progress">
                            <p>Miền Bắc</p>
                        </td>
                        <td class="project_progress">
                            <p> Vịnh Hạ Long</p>
                        </td>
                        <td class="project_progress">
                            <p> dảo hòn dái</p>
                        </td>
                        <td class="project-state">
                            <a href="#"><span class="badge btn-danger  ">không hiển thị</span></a>
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
                            <p>2</p>
                        </td>
                        <td>
                            <p>#5636</p>
                        </td>
                        <td>
                            <p>Viêt Nam</p>
                        </td>
                        <td class="project_progress">
                            <p>Miền trung</p>
                        </td>
                        <td class="project_progress">
                            <p> Ban Nas Hills</p>
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
                            <p>1</p>
                        </td>
                        <td>
                            <p>#782642</p>
                        </td>
                        <td>
                            <p>Viêt Nam</p>
                        </td>
                        <td class="project_progress">
                            <p>Miền Bắc</p>
                        </td>
                        <td class="project_progress">
                            <p> Vịnh Hạ Long</p>
                        </td>
                        <td class="project_progress">
                            <p> bãi cháy , hòn đôi</p>
                        </td>
                        <td class="project-state">
                            <a href="#"><span class="badge btn-danger  ">không hiển thị</span></a>
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

                </tbody>
            </table>
        </div>
        <!-- /.card-body -->
    </div>
    <!-- /.card -->

</section>

<!-- /.content -->
@endsection
