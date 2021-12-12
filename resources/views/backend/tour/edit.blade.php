@extends('backend.master')

@push('title', 'Edit Tour')

@section('script')
<script type="text/javascript">
    // Active Sidebar
    $('#link-tour').parent().addClass('activemenu-is-opening menu-open');
    $('#link-tour, #link-tour-manage').addClass('active');
</script>
@endsection

@section('header')
<!-- Content Header (Page header) -->
<div class="content-header"style="margin-top:50px;">
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
        <div id="tabs">
             <!-- .card-header -->
            <ul>
                <li><a href="#tabs-1">Edit tour</a></li>
                <li><a href="#tabs-2">Plan</a></li>
                <li><a href="#tabs-3">Image</a></li>
            </ul>
            <!-- /.card-header -->
            <!-- .card-body -->
            <div id="tabs-1">
                <!-- tab 1 -->
                 <form action="{{ route('admin.tour.update', $tour->id) }}" method="POST"
                    enctype="multipart/form-data">
                    @csrf
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-2" >
                                <div class="form-group text-center"style="margin-bottom:50px">
                                    <label for="exampleInputFile">Ảnh tour</label>
                                        <div class="input-group">
                                        <label class="show-img_add" for="exampleInputFile" >
                                            <div class="text-center" width="100%">
                                                <div class="img-tour_add disabled">
                                                    <div class="img-tour_add-show">
                                                            <img  src="" alt="" id="image" width="100%" height="100%">
                                                    </div>
                                                    
                                                    <span class="img-tour_link"> </span>
                                                </div>
                                                <div class="img-tour_file ">
                                                    <img src="{{ $tour->image_path??'none' }}" class="fas fa-plus icon-add_tour" id="show_edit-img" alt="tour img">
                                                    <input type="file" class="custom-file-input" id="exampleInputFile" onChange="chooseFile(this)" name="image" accept="image/gif,image/jpeg,image/png"> 
                                                </div>
                                            </div>
                                        </label>
                                    </div>
                                </div>
                            </div>
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
                                <div class="form-group" data-select2-id="111">
                                    <label for="selectPromotion">Promotion</label>
                                    <div class="select2-purple" data-select2-id="101">
                                        <select  name="promotion_id[]" id="selectPromotion" class="select2 select2-hidden-accessible" multiple="" data-placeholder="Lựa chọn khuyến mãi..." data-dropdown-css-class="select2-purple" style="width: 100%;" data-select2-id="15" tabindex="-1" aria-hidden="true">
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
                            </div>
                            <div class="col-md-4">
                                <div class="form-group" data-select2-id="54">
                                    <label for="selectTag">Tag</label>    
                                    <select  name="tag_id[]" id="selectTag" class="select2 select2-hidden-accessible" multiple="" data-placeholder="Lựa chọn hình thức tour..." style="width: 100%;" data-select2-id="7" tabindex="-1" aria-hidden="true">
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
                                    <label>Vehicle</label>
                                    <select name="vehicle_id[]" id="selectVehicle" class="form-control select2bs4 select2-hidden-accessible" style="width: 100%;" data-select2-id="17" tabindex="-1" aria-hidden="true">
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
                                    <input type="hidden" name="include_value_id"
                                        value="{{ $includes ? $includes->id : '' }}">
                                    <select name="include[]" id="include" class="form-control select2tagging"
                                        multiple data-placeholder="Enter more include">
                                        @if (collect($includes)->isNotEmpty())
                                        @foreach (json_decode($includes->value) as $key => $value)
                                        <option selected value="{{ $value }}">{{ $value }}
                                        </option>
                                        @endforeach
                                        @endif
                                    </select>
                                </div>
                            </div>
                            
                            <div class="col-md-6">
                                <div class="form-group" style="margin:0px 20px;">
                                    <label for="notInclude">Not Include</label>
                                    <input type="hidden" name="not_include_value_id"
                                        value="{{ $notIncludes ? $notIncludes->id : '' }}">
                                    <select name="not_include[]" id="notInclude" class="form-control select2tagging"
                                        multiple data-placeholder="Enter more include">
                                        @if (collect($notIncludes)->isNotEmpty())
                                        @foreach (json_decode($notIncludes->value) as $key => $value)
                                        <option selected value="{{ $value }}">{{ $value }}</option>
                                        @endforeach
                                        @endif
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
            <div id="tabs-2">
            <!-- tab 2 -->
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
            <div id="tabs-3">
                <!-- dropzon start -->
                <div class="col-md-12">
                    <div class="card card-default">
                    <div class="card-header">
                        <h3 class="card-title">Dropzone.js <small><em>jQuery File Upload</em> like look</small></h3>
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
                            <div id="total-progress" class="progress progress-striped active" role="progressbar" aria-valuemin="0" aria-valuemax="100" aria-valuenow="0">
                                <div class="progress-bar progress-bar-success" style="width:0%;" data-dz-uploadprogress=""></div>
                            </div>
                            </div>
                        </div>
                        </div>
                        <div class="table table-striped files" id="previews">
                        
                        <div id="" class="row mt-2 dz-image-preview">                    <div class="col-auto">                        <span class="preview"><img src="data:image/png;base64,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" alt="buc-tranh-ve-phong-canh-que-huong-bang-but-chi-11.jpg" data-dz-thumbnail=""></span>                    </div>                    <div class="col d-flex align-items-center">                        <p class="mb-0">                          <span class="lead" data-dz-name="">buc-tranh-ve-phong-canh-que-huong-bang-but-chi-11.jpg</span>                          (<span data-dz-size=""><strong>0.2</strong> MB</span>)                        </p>                        <strong class="error text-danger" data-dz-errormessage=""></strong>                    </div>                    <div class="col-4 d-flex align-items-center">                        <div class="progress progress-striped active w-100" role="progressbar" aria-valuemin="0" aria-valuemax="100" aria-valuenow="0">                          <div class="progress-bar progress-bar-success" style="width:0%;" data-dz-uploadprogress=""></div>                        </div>                    </div>                    <div class="col-auto d-flex align-items-center">                      <div class="btn-group">                        <button class="btn btn-primary start">                          <i class="fas fa-upload"></i>                          <span>Start</span>                        </button>                        <button data-dz-remove="" class="btn btn-warning cancel">                          <i class="fas fa-times-circle"></i>                          <span>Cancel</span>                        </button>                        <button data-dz-remove="" class="btn btn-danger delete">                          <i class="fas fa-trash"></i>                          <span>Delete</span>                        </button>                      </div>                    </div>                  </div><div id="" class="row mt-2 dz-image-preview">                    <div class="col-auto">                        <span class="preview"><img src="data:image/png;base64,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" alt="Screenshot from 2021-11-14 15-42-53.png" data-dz-thumbnail=""></span>                    </div>                    <div class="col d-flex align-items-center">                        <p class="mb-0">                          <span class="lead" data-dz-name="">Screenshot from 2021-11-14 15-42-53.png</span>                          (<span data-dz-size=""><strong>71.2</strong> KB</span>)                        </p>                        <strong class="error text-danger" data-dz-errormessage=""></strong>                    </div>                    <div class="col-4 d-flex align-items-center">                        <div class="progress progress-striped active w-100" role="progressbar" aria-valuemin="0" aria-valuemax="100" aria-valuenow="0">                          <div class="progress-bar progress-bar-success" style="width:0%;" data-dz-uploadprogress=""></div>                        </div>                    </div>                    <div class="col-auto d-flex align-items-center">                      <div class="btn-group">                        <button class="btn btn-primary start">                          <i class="fas fa-upload"></i>                          <span>Start</span>                        </button>                        <button data-dz-remove="" class="btn btn-warning cancel">                          <i class="fas fa-times-circle"></i>                          <span>Cancel</span>                        </button>                        <button data-dz-remove="" class="btn btn-danger delete">                          <i class="fas fa-trash"></i>                          <span>Delete</span>                        </button>                      </div>                    </div>                  </div></div>
                    </div>
                    <!-- /.card-body -->
                    <div class="card-footer">
                        Visit <a href="https://www.dropzonejs.com">dropzone.js documentation</a> for more examples and information about the plugin.
                    </div>
                </div>
            <!-- /.card -->
          </div>

                
               <!-- dropzon end -->
            </div>
        </div>
    </div>
    <!-- /.content -->

<!-- /.card -->
</div>
@endsection
