@extends('backend.master')

@push('title', 'Tour')

{{-- @section('style')
<style>
    .dropdown-toggle {
        position: relative;
    }

    .dropdown-toggle::after {
        content: '\f142';
        font-family: 'Font Awesome 5 Free';
        font-weight: 600;
        font-size: 24px;
    }

    .dropdown-toggle::before {
        content: '';
        position: absolute;
        width: 100%;
        height: 4px;
        background-color: red;
        top: 0;
        left: 0;
    }
</style>
@endsection --}}

@section('header')
<!-- Content Header (Page header) -->
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0">Tour</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="{{ url('/admin/dashboard') }}"><i class="fa fa-home"></i></a>
                    </li>
                    <li class="breadcrumb-item active">Tour</li>
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
            $(`#list-tour tr`).filter(function() {
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
                <a href="{{ route('admin.tour.add') }}" class="btn btn-xs btn-success">
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
        <div class="card-body table-responsive p-0" style="display: block;">
            <table class="table table-striped table-hover table-head-fixed projects text-center">
                <thead>
                    <tr>
                        <th style="width: 10%;">
                            ID
                        </th>
                        <th style="width: 15%">
                            Ảnh Tour
                        </th>
                        <th style="width: 25%">
                            Tên tour
                        </th>
                        <th style="width: 15%">
                            Khu vực
                        </th>
                        <th style="width: 15%">
                            Địa điểm
                        </th>
                        <th style="width: 5%">
                            H.thị
                        </th>
                        <th style="width: 15%">
                            Action
                        </th>
                    </tr>
                </thead>

                <tbody id="list-tour">
                    @foreach ($tours as $tour)
                    <tr>
                        <td style="opacity: .5;">{{ $tour->id }}</td>
                        <td>
                            @empty($tour->image_path)
                            <p class="font-italic" style="opacity: .3">(None)</p>
                            @else
                            <ul class="list-inline">
                                <li class="list-inline-item">
                                    <img src="{{ URL::asset($tour->image_path) }}" alt="slider1" style="width: 50%">
                                </li>
                            </ul>
                            @endempty
                        </td>
                        <td class="text-wrap">{{ $tour->name }}</td>
                        <td>
                            @if ($tour->domestic === 1)
                            <h5><span class="badge badge-success">{{ $tour->area }}</span></h5>
                            @else
                            <h5><span class="badge badge-secondary">{{ $tour->area }}</span></h5>
                            @endif
                        </td>
                        <td>
                            <h6><span class="lead text-primary text-bold font-italic">{{ $tour->location }}</span></h6>
                        </td>
                        <td>
                            @if ($tour->display === 1)
                            <a href="#"><span class="badge badge-info">Hiện</span></a>
                            @else
                            <a href="#"><span class="badge badge-warning">Ẩn</span></a>
                            @endif
                        </td>
                        <td class="project-actions">
                            <div class="row">
                                <div class="col">
                                    <a class="btn btn-info btn-sm" title="Edit"
                                        href="{{ route('admin.tour.edit', $tour->id)}}">
                                        <i class="fas fa-pencil-alt">
                                        </i>
                                    </a>
                                    <a class="btn btn-danger btn-sm btn-delete" title="Delete"
                                        href="{{ route('admin.tour.delete', $tour->id) }}">
                                        <i class="fas fa-trash">
                                        </i>
                                    </a>
                                    <div class="dropdown" style="display: inline-block; margin: 0px 10px;">
                                        <i class="fas fa-ellipsis-v" type="button" id="dropdownMenuButton"
                                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"></i>
                                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                            <a class="dropdown-item"
                                                href="{{ route('admin.tour.plan.index', $tour->id) }}">Plan</a>
                                            <a class="dropdown-item" href="#">Image</a>
                                        </div>
                                    </div>
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
