@extends('admin.master')

@push('title', 'Add Booking')

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
// BS-Stepper Init
document.addEventListener('DOMContentLoaded', function () {
    window.stepper = new Stepper(document.querySelector('.bs-stepper'))
});
</script>
@endsection

@section('header')
<!-- Content Header (Page header) -->
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0">Add Booking</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="{{ url('/admin/dashboard') }}"><i class="fa fa-home"></i></a>
                    </li>
                    <li class="breadcrumb-item"><a href="{{ route('admin.booking.index') }}">Booking</a></li>
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
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <!-- .card -->
                <div class="card card-primary">
                    <!-- .card-header -->
                    <div class="card-header">
                        <h3 class="card-title">Create new booking</h3>
                        <div class="card-tools">
                            <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                                <i class="fas fa-minus"></i>
                            </button>
                        </div>
                    </div>
                    <!-- /.card-header-->

                    <!-- .card-body -->
                    <div class="card-body">
                        <!-- .bs-stepper -->
                        <div class="bs-stepper">
                            <!-- .bs-stepper-header -->
                            <div class="bs-stepper-header" role="tablist">
                                <!-- .step -->
                                <div class="step" data-target="#user-part">
                                    <button type="button" class="step-trigger" role="tab" aria-controls="user-part"
                                        id="user-part-trigger" aria-selected="true">
                                        <span class="bs-stepper-circle">1</span>
                                        <span class="bs-stepper-label">Select User and Tour</span>
                                    </button>
                                </div>
                                <div class="line"></div>
                                <div class="step" data-target="#tour-part">
                                    <button type="button" class="step-trigger" role="tab" aria-controls="tour-part"
                                        id="tour-part-trigger" aria-selected="false" disabled>
                                        <span class="bs-stepper-circle">2</span>
                                        <span class="bs-stepper-label">Select Date and Slot</span>
                                    </button>
                                </div>
                                <!-- /.step -->
                            </div>
                            <!-- /.bs-stepper-header -->

                            <!-- .bs-stepper-content -->
                            <div class="bs-stepper-content">
                                <form action="{{ route('admin.booking.store') }}" action="post">
                                    @csrf
                                    <div id="user-part" class="content" role="tabpanel"
                                        aria-labelledby="user-part-trigger">
                                        <!-- conten cua form -->
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="selectUser">User</label>
                                                    <select name="user_id" id="selectUser" class="form-control"
                                                        required>
                                                        <option value="">-- Select user --</option>
                                                        @foreach ($users as $user)
                                                        <option value="{{ $user->id }}">{{ $user->name }}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="selectPayment">Payment method</label>
                                                    <select name="payment_id" id="selectPayment" class="form-control"
                                                        required>
                                                        <option value="">-- Select Payment --</option>
                                                        @foreach ($payments as $payment)
                                                        <option value="{{ $payment->id }}">{{ $payment->name }}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-5">
                                                <div class="form-group">
                                                    <label for="inputCode">Code</label>
                                                    <input type="text" id="inputCode" name="code" class="form-control"
                                                        readonly required
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
                                                    <button type="button" id="btn-generate-code"
                                                        class="btn btn-primary">Generate
                                                        code</button>
                                                </div>
                                            </div>
                                            <div class="col-md-5">
                                                <div class="form-group">
                                                    <label for="inputStatus">Status</label>
                                                    <select id="inputStatus" name="status"
                                                        class="form-control custom-select">
                                                        <option selected="" value="1">Paid</option>
                                                        <option value="0">Not Paid</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="selectTour">Tour</label>
                                            <select name="tour_id" id="selectTour" class="form-control" required>
                                                <option value="">-- Select Tour --</option>
                                                @foreach ($tours as $tour)
                                                <option value="{{ $tour->id }}">{{ $tour->name }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                        <!-- het content cua form -->
                                        <button class="btn btn-sm btn-primary" onclick="stepper.next()">Next</button>
                                    </div>

                                    <div id="tour-part" class="content" role="tabpanel"
                                        aria-labelledby="tour-part-trigger">
                                        <!-- content cua form -->
                                        <div class="form-group">
                                            <label for="selectPromotion">Promotion</label>
                                            <select name="promotion_id" id="selectPromotion"
                                                class="form-control custom-select">
                                                <option value="">-- Select Promotion --</option>
                                                {{-- @foreach ($promotions as $promotion)
                                            <option value="{{ $promotion->id }}">{{ $promotion->content }}</option>
                                                @endforeach --}}
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label for="selectDay">Other Day</label>
                                            <select name="other_day" id="selectDay" class="form-control custom-select"
                                                required>
                                                <option value="">-- Choose date --</option>
                                                {{-- @foreach ($others as $other)
                                            <option value="{{ $other->id }}">{{ $other->name }}</option>
                                                @endforeach --}}
                                            </select>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="">Adult slot</label>
                                                    <input type="number" name="adult_slot" min="0" value="0"
                                                        class="form-control" required>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="">Adult price</label>
                                                    <input type="number" name="adult_price" min="0" value="0"
                                                        class="form-control" required>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="">Youth slot</label>
                                                    <input type="number" name="youth_slot" min="0" value="0"
                                                        class="form-control" required>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="">Youth price</label>
                                                    <input type="number" name="youth_price" min="0" value="0"
                                                        class="form-control" required>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="">Child slot</label>
                                                    <input type="number" name="child_slot" min="0" value="0"
                                                        class="form-control" required>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="">Child price</label>
                                                    <input type="number" name="child_price" min="0" value="0"
                                                        class="form-control" required>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="">Baby slot</label>
                                                    <input type="number" name="baby_slot" min="0" value="0"
                                                        class="form-control" required>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="">Baby price</label>
                                                    <input type="number" name="baby_price" min="0" value="0"
                                                        class="form-control" required>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="">Total slot</label>
                                                    <input type="number" name="total_slot" min="0" value="0"
                                                        class="form-control" required>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="">Total price</label>
                                                    <input type="number" name="total_price" min="0" value="0"
                                                        class="form-control" required>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- het content cua form -->
                                        <button class="btn btn-sm btn-primary"
                                            onclick="stepper.previous()">Previous</button>
                                        <button type="submit" class="btn btn-sm btn-success float-right">Save</button>
                                    </div>
                                </form>
                            </div>
                            <!-- /.bs-stepper-content -->
                        </div>
                        <!-- /.bs-stepper -->
                    </div>
                    <!-- /.card-body -->

                    <!-- .card-footer -->
                    <div class="card-footer">
                        <a href="{{ route('admin.booking.index') }}" class="btn btn-secondary">Cancel</a>
                    </div>
                    <!-- /.card-footer -->
                </div>
                <!-- /.card -->
            </div>
        </div>
    </div>
</section>
<!-- /.content -->
@endsection
