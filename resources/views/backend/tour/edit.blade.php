@extends('backend.master')

@push('title', 'Edit Tour')

@section('script')
<script type="text/javascript">
    var boxCont= document.querySelector('.container-plan');
    var addCont = document.querySelector('.add-box')
    var contentBox=document.querySelector('.box-content').cloneNode();

    addCont.onclick =function() {
        boxCont.innerHTML=contentBox;
    }
</script>
<script type="text/javascript">
    $(document).ready(function () {
        $('.btn-save-plan').click((e) => {
            e.preventDefault();
            $.ajax({
                type: "post",
                contentType: 'application/json',
                url: route('admin.tour.plan.add', $('input[name=tour_id]').val()),
                data: {
                    tour_id: $('input[name=tour_id]').val();
                    day: $('input[name=day]').val();
                    content: $('textarea[name=content]').val();
                    note: $('textarea[name=note]'),val();
                },
                // dataType: "json",
                success: function (response) {
                    Swal.fire(response.title, response.msg, response.stt);
                    console.log(response);
                },
                error: () => {
                    Swal.fire("Save failed!", "Please try again.", "error");
                }
            });
        })
    });

</script>
@endsection

@section('header')
<!-- Content Header (Page header) -->
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0">Edit Tour </h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="{{ url('/admin/dashboard') }}"><i class="fa fa-home"></i></a>
                    </li>
                    <li class="breadcrumb-item"><a href="{{ route('admin.tour.index') }}">Tour</a></li>
                    <li class="breadcrumb-item active">Edit</li>
                </ol>
            </div><!-- /.col -->
        </div><!-- /.row -->
    </div><!-- /.container-fluid -->
</div>
@endsection

@section('content')
<!-- Main content -->
<div class="col-12 col-sm-12">
    <div class="card card-primary card-tabs">
        <!-- .card-header -->
        <div class="card-header p-0 pt-1">
            <ul class="nav nav-tabs" id="custom-tabs-one-tab" role="tablist">
                <li class="nav-item">
                    <a class="nav-link active" id="custom-tabs-one-home-tab" data-toggle="pill"
                        href="#custom-tabs-one-home" role="tab" aria-controls="custom-tabs-one-home"
                        aria-selected="true">Edit tour</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="custom-tabs-one-profile-tab" data-toggle="pill"
                        href="#custom-tabs-one-profile" role="tab" aria-controls="custom-tabs-one-profile"
                        aria-selected="false">Plan</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="custom-tabs-one-messages-tab" data-toggle="pill"
                        href="#custom-tabs-one-messages" role="tab" aria-controls="custom-tabs-one-messages"
                        aria-selected="false">Image</a>
                </li>
            </ul>
        </div>
        <!-- /.card-header -->

        <!-- .card-body -->
        <div class="card-body">
            <div class="tab-content" id="custom-tabs-one-tabContent">
                <!-- tab 1 -->
                <div class="tab-pane fade active show" id="custom-tabs-one-home" role="tabpanel"
                    aria-labelledby="custom-tabs-one-home-tab">
                    <form action="{{ route('admin.tour.update', $tour->id) }}" method="POST"
                        enctype="multipart/form-data">
                        @csrf
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
                                <span>{{ $tour->image_path??'none' }}</span>
                            </div>
                            <div class="form-group">
                                <label for="inputName">Name</label>
                                <input type="text" id="inputName" name="name" class="form-control"
                                    placeholder="Nhập tên tour" required value="{{ $tour->name }}">
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="inputCode">Code
                                            <i class="far fa-question-circle"
                                                title="Mã code chỉ được tạo khi thêm mới tour."
                                                style="opacity: .3; font-size: 12px"></i>
                                        </label>
                                        <input type="text" id="inputCode" name="code" class="form-control" disabled
                                            required placeholder="Click vào nút bên cạnh để tạo mã code"
                                            value="{{ $tour->code }}">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="inputStatus">Display</label>
                                        <select id="inputStatus" name="display" class="form-control custom-select">
                                            <option {{ $tour->display === 1 ? 'selected' : '' }} value="1">Hiển thị
                                            </option>
                                            <option {{ $tour->display !== 1 ? 'selected' : '' }} value="0">Ẩn</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="selectArea">Area</label>
                                        <select name="area_id" id="selectArea" class="form-control custom-select"
                                            required>
                                            <option value="">-- Choose an area --</option>
                                            @foreach ($areas as $area)
                                            <option {{ $area->id === $tour->area_id ? 'selected' : '' }}
                                                value="{{ $area->id }}">{{ $area->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="selectLocation">Location</label>
                                        <select name="location_id" id="selectLocation"
                                            class="form-control custom-select" required>
                                            <option value="">-- Choose an location --</option>
                                            @foreach ($locations as $location)
                                            <option {{ $location->id === $tour->location_id ? 'selected' : '' }}
                                                value="{{ $location->id }}">{{ $location->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="textDescription">Description</label>
                                <textarea id="textDescription" name="description" class="form-control" rows="4"
                                    placeholder="Nhập mô tả ngẵn cho tour" required>{{ $tour->description }}</textarea>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="">Departure location</label>
                                        <input type="text" name="departure_location" class="form-control"
                                            placeholder="Địa điểm xuất phát" required
                                            value="{{ $tour->departure_location }}">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="">Destination</label>
                                        <input type="text" name="destination" class="form-control"
                                            placeholder="Đích đến" required value="{{ $tour->destination }}">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="">Itinerary</label>
                                <input type="text" name="itinerary" class="form-control" placeholder="Hành trình"
                                    required value="{{ $tour->itinerary }}">
                            </div>
                            <div class="row">
                                <div class="col-md-2">
                                    <div class="form-group">
                                        <label for="">Slot</label>
                                        <input type="number" name="slot" class="form-control" min="0" required
                                            value="{{ $tour->slot }}">
                                    </div>
                                </div>
                                <div class="col-md-10">
                                    <div class="form-group">
                                        <label for="">Other day</label>
                                        <input type="text" name="other_day" class="form-control date"
                                            placeholder="Ngày khởi hành khác" required value="{{ $tour->other_day }}">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="">Adult price</label>
                                        <input type="number" name="adult_price" min="0" class="form-control" required
                                            value="{{ $tour->adult_price }}">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="">Youth price</label>
                                        <input type="number" name="youth_price" min="0" class="form-control" required
                                            value="{{ $tour->youth_price }}">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="">Child price</label>
                                        <input type="number" name="child_price" min="0" class="form-control" required
                                            value="{{ $tour->child_price }}">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="">Bayby price</label>
                                        <input type="number" name="baby_price" min="0" class="form-control" required
                                            value="{{ $tour->baby_price }}">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="selectPromotion">Promotion</label>
                                        <select name="promotion_id[]" id="selectPromotion"
                                            class="form-control custom-select select2cls" multiple="multiple"
                                            data-placeholder="Select more promotion">
                                            @php
                                            $promotionIds = $tour->promotions->pluck('id')->toArray();
                                            @endphp
                                            @foreach ($promotions as $promotion)
                                            <option {{ in_array($promotion->id, $promotionIds) ? 'selected' : '' }}
                                                value="{{ $promotion->id }}">
                                                {{ $promotion->content }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="selectTag">Tag</label>
                                        <select name="tag_id[]" id="selectTag"
                                            class="form-control custom-select select2cls" multiple="multiple"
                                            data-placeholder="Select more tags">
                                            @php
                                            $tagIds = $tour->tags->pluck('id')->toArray();
                                            @endphp
                                            @foreach ($tags as $tag)
                                            <option {{ in_array($tag->id, $tagIds) ? 'selected' : '' }}
                                                value="{{ $tag->id }}">{{ $tag->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="selectVehicle">Vehicle</label>
                                        <select name="vehicle_id[]" id="selectVehicle"
                                            class="form-control custom-select select2cls" multiple="multiple"
                                            data-placeholder="Select more vehicles">
                                            @php
                                            $vehicleIds = $tour->vehicles->pluck('id')->toArray();
                                            @endphp
                                            @foreach ($vehicles as $vehicle)
                                            <option {{ in_array($vehicle->id, $vehicleIds) ? 'selected' : '' }}
                                                value="{{ $vehicle->id }}">{{ $vehicle->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="include">Include</label>
                                        <input type="hidden" name="include_value_id" value="{{ $includes->id }}">
                                        <select name="include[]" id="include" class="form-control select2tagging"
                                            multiple data-placeholder="Enter more include">
                                            @foreach (json_decode($includes->value) as $key => $value)
                                            <option selected value="{{ $value }}">{{ $value }}
                                            </option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="notInclude">Not Include</label>
                                        <input type="hidden" name="not_include_value_id" value="{{ $notIncludes->id }}">
                                        <select name="not_include[]" id="notInclude" class="form-control select2tagging"
                                            multiple data-placeholder="Enter more include">
                                            @foreach (json_decode($notIncludes->value) as $key => $value)
                                            <option selected value="{{ $value }}">{{ $value }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- .card-footer -->
                        <div class="card-footer">
                            <a href="{{ route('admin.tour.index') }}" class="btn btn-secondary">Cancel</a>
                            <button type="submit" class="btn btn-success float-right">Save</button>
                        </div>
                        <!-- /.card-footer -->
                    </form>
                </div>

                <!-- tab 2 -->
                <div class="tab-pane fade " id="custom-tabs-one-profile" role="tabpanel"
                    aria-labelledby="custom-tabs-one-profile-tab">
                    {{-- @if (count($plans) > 0)

                    @endif --}}
                    <div class="card-info" style="background-color: rgb(242, 242, 242)">
                        <div class="card-header">
                            <div class="card-title">Form</div>
                        </div>
                        <form action="{{ route('admin.tour.plan.store') }}" method="POST">
                            @csrf
                            <div class="card-body">
                                <input type="hidden" name="tour_id" value="{{ $tour->id }}">
                                <div class="form-group col-sm-12">
                                    <label for="inputDay">Day</label>
                                    <input type="number" id="inputDay" name="day" class="form-control" min="1" required
                                        placeholder="Enter the date number of the tour">
                                </div>
                                <div class="form-group col-12 col-sm-12">
                                    <label for="summernote">Content</label>
                                    <textarea id="summernote" name="content" class="form-control" rows="5" required
                                        placeholder="Enter the content of the day"></textarea>
                                </div>
                                <div class="form-group col-12 col-sm-12">
                                    <label for="inputNote">Note</label>
                                    <textarea id="inputNote" name="note" class="form-control" rows="2"
                                        placeholder="Enter the note of the day"></textarea>
                                </div>
                                <div class="form-group">
                                    <button type="button" class="btn btn-sm btn-secondary btn-remove">Remove</button>
                                    <button type="button"
                                        class="btn btn-sm btn-success float-right btn-save-plan">Save</button>
                                </div>
                            </div>
                        </form>
                    </div>

                </div>

                <!-- tab 3 -->
                <div class="tab-pane fade" id="custom-tabs-one-messages" role="tabpanel"
                    aria-labelledby="custom-tabs-one-messages-tab">
                    <section class="content">
                        <div class="container-fluid">
                            <!-- /.row -->
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="card card-default">
                                        <div class="card-header">
                                            <h3 class="card-title">Dropzone.js <small><em>jQuery File Upload</em> like
                                                    look</small></h3>
                                        </div>
                                        <div class="card-body">
                                            <div id="actions" class="row">
                                                <div class="col-lg-6">
                                                    <div class="btn-group w-100">
                                                        <span class="btn btn-success col fileinput-button dz-clickable">
                                                            <i class="fas fa-plus"></i>
                                                            <span>Add files</span>
                                                        </span>
                                                        <button type="submit" class="btn btn-primary col start">
                                                            <i class="fas fa-upload"></i>
                                                            <span>Start upload</span>
                                                        </button>
                                                        <button type="reset" class="btn btn-warning col cancel">
                                                            <i class="fas fa-times-circle"></i>
                                                            <span>Cancel upload</span>
                                                        </button>
                                                    </div>
                                                </div>
                                                <div class="col-lg-6 d-flex align-items-center">
                                                    <div class="fileupload-process w-100">
                                                        <div id="total-progress"
                                                            class="progress progress-striped active" role="progressbar"
                                                            aria-valuemin="0" aria-valuemax="100" aria-valuenow="0">
                                                            <div class="progress-bar progress-bar-success"
                                                                style="width:0%;" data-dz-uploadprogress=""></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="table table-striped files" id="previews">

                                            </div>
                                        </div>
                                        <!-- /.card-body -->
                                        <div class="card-footer">
                                            Visit <a href="https://www.dropzonejs.com">dropzone.js documentation</a> for
                                            more examples and information about the plugin.
                                        </div>
                                    </div>
                                    <!-- /.card -->
                                </div>
                            </div>
                            <!-- /.row -->
                        </div>
                        <!-- /.container-fluid -->
                    </section>
                </div>
                <!-- /.card -->
            </div>
        </div>
    </div>
</div>
<!-- /.content -->
@endsection
