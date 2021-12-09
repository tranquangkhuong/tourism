@extends('backend.master')

@push('title', 'About Us')

@section('script')
<script src="{{ asset('js/custom-function.js') }}"></script>
<script type="text/javascript">
    // Active Sidebar
    $('#link-page').parent().addClass('activemenu-is-opening menu-open');
    $('#link-page, #link-about-page').addClass('active');
</script>
@endsection

@section('header')
<!-- Content Header (Page header) -->
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0">About Us</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="{{ url('/admin/dashboard') }}"><i class="fa fa-home"></i></a>
                    </li>
                    <li class="breadcrumb-item active">About Us</li>
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
            <div class="card card-primary card-outline card-outline-tabs">

                <!-- .card-header -->
                <div class="card-header p-0 border-bottom-0">
                    {{-- <h3 class="card-title">About Us</h3> --}}
                    <ul class="nav nav-tabs" id="custom-tabs" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" id="about-us-tab" href="#about-us" data-toggle="pill" role="tab"
                                aria-controls="about-us" aria-selected="true">
                                About Us page
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="social-link-tab" href="#social-link" data-toggle="pill" role="tab"
                                aria-controls="social-link" aria-selected="false">
                                Social link
                            </a>
                        </li>
                    </ul>
                </div>
                <!-- /.card-header-->


                <!-- .card-body -->
                <div class="card-body">
                    <div class="tab-content" id="custom-tabsContent">
                        <!-- tab about us -->
                        <div class="tab-pane fade active show" id="about-us" role="tabpanel"
                            aria-labelledby="about-us-tab">
                            <form action="{{ route('admin.about.update', $about->id) }}" method="post">
                                @csrf
                                <div class="form-group">
                                    <label for="summernote">About us</label>
                                    <textarea id="summernote" class="form-control" name="about_us"
                                        rows="10">{{ $about->about_us }}</textarea>
                                </div>
                                <div class="card-footer">
                                    <button type="submit" class="btn btn-success float-right">Save</button>
                                </div>
                            </form>
                        </div>

                        <!-- tab social link -->
                        <div class="tab-pane fade" id="social-link" role="tabpanel" aria-labelledby="social-link-tab">
                            <form action="{{ route('admin.about.update', $about->id) }}" method="post">
                                @csrf
                                <div class="form-group">
                                    <label for="">Facebook link</label>
                                    <input type="text" class="form-control" name="facebook" id=""
                                        value="{{ $about->facebook }}">
                                </div>
                                <div class="form-group">
                                    <label for="">Youtube link</label>
                                    <input type="text" class="form-control" name="youtube" id=""
                                        value="{{ $about->youtube }}">
                                </div>
                                <div class="form-group">
                                    <label for="">Instagram link</label>
                                    <input id="" class="form-control" type="text" name="instagram"
                                        value="{{ $about->instagram }}">
                                </div>
                                <div class="form-group">
                                    <label for="">Twitter link</label>
                                    <input id="" class="form-control" type="text" name="twitter"
                                        value="{{ $about->twitter }}">
                                </div>
                                <div class="form-group">
                                    <label for="">Pinterest link</label>
                                    <input id="" class="form-control" type="text" name="pinterest"
                                        value="{{ $about->pinterest }}">
                                </div>
                                <div class="card-footer">
                                    <button type="submit" class="btn btn-success float-right">Save</button>
                                </div>
                            </form>
                        </div>
                    </div>


                </div>
                <!-- /.card-body -->

                <!-- .card-footer -->
                {{-- <div class="card-footer">
                    <button type="submit" class="btn btn-success float-right">Save</button>
                </div> --}}
                <!-- /.card-footer -->

            </div>
            <!-- /.card -->

        </div>
    </div>
</section>
<!-- /.content -->

@endsection
