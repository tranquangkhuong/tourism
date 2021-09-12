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
                    <li class="breadcrumb-item"><a href="#"><i class="fa fa-home"></i></a></li>
                    <li class="breadcrumb-item active"><a href="#">Slider</a></li>
                    {{-- <li class="breadcrumb-item"><a href="#">List slider</a></li> --}}
                </ol>
            </div><!-- /.col -->
        </div><!-- /.row -->
    </div><!-- /.container-fluid -->
</div>
@endsection
@section('script')
<script type="text/javascript">
    $(document).ready(function () {
    $.ajax({
    type: "GET",
    url: route(`admin.slider.index_data`),
    dataType: "json",
    success: (response) => {
    var str = "";
    $.each(response, (index, value) => {
        var ur = route(`admin.slider.edit`, value.id);
        str += `<tr>`;
        str += `<td>`;
        str += `${value.title}`;
        str += `</td>`;
        str += `<td>`;
        str += `<ul class="list-inline">`;
            str += `<li class="list-inline-item">`
                    str += `<img src="{{ URL::asset('${value.image_path}') }}" alt="image slider" style="width:50%">`;
                str += `</li>`;
            str += `</ul>`;
        str += `</td>`;
        str += `<td class="project_progress">`
            str += `<p>${value.created_at}</p>`;
        str += `</td>`;
        str += `<td class="project-state">`;
            if (value.display === 1) {
            str += `<a href="#"><span class="badge badge-success">Hiển thị</span></a>`;
            } else {
            str += `<a href="#"><span class="badge badge-warning">Ẩn</span></a>`;
            }
            str += `</td>`;

            str += `<td class="project-actions text-right">`;
            str += `<a class="btn btn-info btn-sm" href="${ur}">`;
                str += `<i class="fas fa-pencil-alt"></i>Edit</a>`;


            str += `<a class="btn btn-danger btn-sm" href="javascript::void(0)" onclick="confirmDelete('slider', ${value.id})">`;
                str += `<i class="fas fa-trash"></i>Delete</a></td>`;
        str += `</tr>`;
        });
        $(`table > tbody > #list-slider`).html(str);
        },
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
            <h3 class="card-title">Slider Management</h3>
            <div class="card-tools">
                <div class="row">
                    <div class="input-group input-group-sm" style="width: 150px;">
                        <input type="text" id="search" class="form-control float-right" placeholder="Search">
                        <div class="input-group-append float-right">
                            <button type="button" class="btn btn-default"><i class="fas fa-search"></i></button>
                        </div>
                    </div>

                    <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                        <i class="fas fa-minus"></i>
                    </button>
                    <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
                        <i class="fas fa-times"></i>
                    </button>
                </div>
            </div>
        </div>
        <!-- /.card-header -->

        <!-- .card-body -->
        <div class="card-body p-0" style="display: block;">
            <table class="table table-striped projects">
                <thead class="text-center">
                    <tr>
                        <th style="width: 30%">
                            Title slider
                        </th>
                        <th style="width: 40%">
                            Image slider
                        </th>
                        <th style="width: 10%">
                            Date
                        </th>
                        <th style="width: 5%">
                            Display
                        </th>
                        <th style="width: 15%">
                            Action
                        </th>
                    </tr>
                </thead>
                <tbody id="list-slider">
                    @foreach ($collection as $item)

                    @endforeach
                    <tr>
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

                </tbody>
            </table>
        </div>
        <!-- /.card-body -->

    </div>
    <!-- /.card -->

</section>

<!-- /.content -->
@endsection
