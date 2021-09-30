@extends('admin.master')

@push('title', 'Add Tour')

@section('script')
<script>
    // Generate code
$("#btn-generate-code").click(function(e) {
    e.preventDefault();
    $.ajax({
        type: "GET",
        url: route('generate_code', 10),
        success: (response) => {
            $("input[name=code]").val(response);
        },
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
                <h1 class="m-0">Add Tour </h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="{{ url('/admin/dashboard') }}"><i class="fa fa-home"></i></a>
                    </li>
                    <li class="breadcrumb-item"><a href="{{ route('admin.tour.index') }}">Tour</a></li>
                    <li class="breadcrumb-item active">Add</li>
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
                    <h3 class="card-title">Create new tour</h3>
                    <div class="card-tools">
                        <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                            <i class="fas fa-minus"></i>
                        </button>
                    </div>
                </div>
                <!-- /.card-header-->

                <form action="{{ route('admin.tour.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <!-- .card-body -->
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
                        </div>
                        <div class="form-group">
                            <label for="inputName">Name</label>
                            <input type="text" id="inputName" name="name" class="form-control"
                                placeholder="Nhập tên tour" required>
                        </div>
                        <div class="row">
                            <div class="col-md-5">
                                <div class="form-group">
                                    <label for="inputCode">Code</label>
                                    <input type="text" id="inputCode" name="code" class="form-control" readonly required
                                        placeholder="Click vào nút bên cạnh để tạo mã code">
                                </div>
                            </div>
                            <div class="col-md-2">
                                <div class="form-group ">
                                    <label for="inputCode">
                                        <i class="far fa-question-circle"
                                            title="Mã code là một dãy chữ số được tạo ngẫu nhiên. Có phân biệt chữ hoa và chữ thường."
                                            style="opacity: .3; font-size: 12px"></i>
                                    </label><br>
                                    <button type="button" id="btn-generate-code" class="btn btn-primary">Generate
                                        code</button>
                                </div>
                            </div>
                            <div class="col-md-5">
                                <div class="form-group">
                                    <label for="inputStatus">Display</label>
                                    <select id="inputStatus" name="display" class="form-control custom-select">
                                        <option selected="" value="1">Hiển thị</option>
                                        <option value="0">Ẩn</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="selectArea">Area</label>
                                    <select name="area_id" id="selectArea" class="form-control custom-select" required>
                                        <option value="">-- Choose an area --</option>
                                        @foreach ($areas as $area)
                                        <option value="{{ $area->id }}">{{ $area->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="selectLocation">Location</label>
                                    <select name="location_id" id="selectLocation" class="form-control custom-select"
                                        required>
                                        <option value="">-- Choose an location --</option>
                                        @foreach ($locations as $location)
                                        <option value="{{ $location->id }}">{{ $location->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="textDescription">Description</label>
                            <textarea id="textDescription" name="description" class="form-control" rows="4"
                                placeholder="Nhập mô tả ngẵn cho tour" required></textarea>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="">Departure location</label>
                                    <input type="text" name="departure_location" class="form-control"
                                        placeholder="Địa điểm xuất phát" required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="">Destination</label>
                                    <input type="text" name="destination" class="form-control" placeholder="Đích đến"
                                        required>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="">Itinerary</label>
                            <input type="text" name="itinerary" class="form-control" placeholder="Hành trình" required>
                        </div>
                        <div class="row">
                            <div class="col-md-2">
                                <div class="form-group">
                                    <label for="">Slot</label>
                                    <input type="number" name="slot" class="form-control" min="0" value="0" required>
                                </div>
                            </div>
                            <div class="col-md-10">
                                <div class="form-group">
                                    <label for="">Other day</label>
                                    <input type="text" name="other_day" class="form-control date"
                                        placeholder="Ngày khởi hành khác" required>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="">Adult price</label>
                                    <input type="number" name="adult_price" min="0" value="0" class="form-control"
                                        required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="">Youth price</label>
                                    <input type="number" name="youth_price" min="0" value="0" class="form-control"
                                        required>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="">Child price</label>
                                    <input type="number" name="child_price" min="0" value="0" class="form-control"
                                        required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="">Bayby price</label>
                                    <input type="number" name="baby_price" min="0" value="0" class="form-control"
                                        required>
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
                                        @foreach ($promotions as $promotion)
                                        <option value="{{ $promotion->id }}">{{ $promotion->content }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="selectTag">Tag</label>
                                    <select name="tag_id[]" id="selectTag" class="form-control custom-select select2cls"
                                        multiple="multiple" data-placeholder="Select more tags">
                                        @foreach ($tags as $tag)
                                        <option value="{{ $tag->id }}">{{ $tag->name }}</option>
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
                                        @foreach ($vehicles as $vehicle)
                                        <option value="{{ $vehicle->id }}">{{ $vehicle->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="include">Include</label>
                                    <select name="include[]" id="include" class="form-control select2tagging" multiple
                                        data-placeholder="Enter more include">
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="notInclude">Not Include</label>
                                    <select name="not_include[]" id="notInclude" class="form-control select2tagging"
                                        multiple data-placeholder="Enter more include">
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /.card-body -->

                    <!-- .card-footer -->
                    <div class="card-footer">
                        <a href="{{ route('admin.tour.index') }}" class="btn btn-secondary">Cancel</a>
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
