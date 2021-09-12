@extends('admin.master')

@push('title', 'Promotion')

@section('header')
<!-- Content Header (Page header) -->
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0">Promotion</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="{{ url('/admin/dashboard') }}"><i class="fa fa-home"></i></a>
                    </li>
                    <li class="breadcrumb-item active">Promotion</li>
                </ol>
            </div><!-- /.col -->
        </div><!-- /.row -->
    </div><!-- /.container-fluid -->
</div>
@endsection

@section('script')
<script type="text/javascript">
    $(document).ready(function () {
        // tim kiem - filter
        $("#search").on("keyup", function() {
            var value = $(this).val().toLowerCase();
            $(`#list-promotion tr`).filter(function() {
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
        <!-- .card-header -->
        <div class="card-header">
            <h3 class="card-title">
                <a href="{{ route('admin.promotion.add') }}" class="btn btn-xs btn-success">
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
        <div class="card-body p-0" style="display: block;">
            <table class="table table-striped table-hover table-head-fixed projects text-center">
                <thead>
                    <tr>
                        <th style="width: 30%">
                            Title
                        </th>
                        <th style="width: 30%">
                            Image
                        </th>
                        <th style="width: 10%">
                            Display
                        </th>
                        <th style="width: 15%">
                            Date
                        </th>
                        <th style="width: 15%">
                            Action
                        </th>
                    </tr>
                </thead>

                <tbody id="list-slider">
                    @foreach ($sliders as $slider)
                    <tr>
                        <td>{{ $slider->title }}</td>
                        <td>
                            <ul class="list-inline">
                                <li class="list-inline-item">
                                    <img src="{{ URL::asset($slider->image_path) }}" alt="{{ $slider->title }}"
                                        style="width:40%">
                                </li>
                            </ul>
                        </td>
                        <td class="project-state">
                            @if ($slider->display === 1)
                            <a href="#"><span class="badge badge-success">Hiển thị</span></a>
                            @else
                            <a href="#"><span class="badge badge-warning">Ẩn</span></a>
                            @endif
                        </td>
                        <td class="project_progress">{{ $slider->created_at }}</td>
                        <td class="project-actions">
                            <div class="row">
                                <div class="col">
                                    <a class="btn btn-info btn-sm" title="Edit"
                                        href="{{ route('admin.slider.edit', ['slider_id' => $slider->id]) }}">
                                        <i class="fas fa-pencil-alt">
                                        </i>
                                    </a>
                                    <a class="btn btn-danger btn-sm btn-delete" title="Delete"
                                        href="{{ route('admin.slider.delete', ['slider_id' => $slider->id]) }}">
                                        <i class="fas fa-trash">
                                        </i>
                                    </a>
                                </div>
                            </div>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <!-- /.card-body -->

    </div>
    <!-- /.card -->

</section>

<!-- /.content -->
@endsection
