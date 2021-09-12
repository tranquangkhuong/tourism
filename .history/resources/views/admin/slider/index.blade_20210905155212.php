@extends('admin.master')

@push('title', 'Slider')

@section('header')
<!-- Content Header (Page header) -->

<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0">Slider</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Slider</a></li>
                    {{-- <li class="breadcrumb-item"><a href="#">List slider</a></li> --}}
                </ol>
            </div><!-- /.col -->
        </div><!-- /.row -->
    </div><!-- /.container-fluid -->
</div>
@endsection
@section('content')
<!-- Main content -->
<section class="content">

    <!-- Default box -->
    <div class="card">

        <div class="card-header">
            <h3 class="card-title">Projects</h3>
            <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                    <i class="fas fa-minus"></i>
                </button>
                <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
                    <i class="fas fa-times"></i>
                </button>
            </div>
        </div>

        <div class="card-body p-0" style="display: block;">
            <table class="table table-striped projects">
                <thead>
                    <tr>
                        <th style="width: 30%">
                            Title slider
                        </th>
                        <th style="width: 40%">
                            Image slider
                        </th>
                        <th style="width: 10%" class="text-center">
                            Date
                        </th>
                        <th style="width: 5%" class="text-center">
                            Display
                        </th>
                        <th style="width: 15%">
                            Action
                        </th>
                    </tr>
                </thead>
                <tbody id="list-slider">
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
@endsection
