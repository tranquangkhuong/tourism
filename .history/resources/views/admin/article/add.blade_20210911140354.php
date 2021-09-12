@extends('admin.master')

@push('title', 'Add Article')

@section('header')
<!-- Content Header (Page header) -->
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0">Add Article </h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="{{ url('/admin/dashboard') }}"><i class="fa fa-home"></i></a>
                    </li>
                    <li class="breadcrumb-item"><a href="{{ route('admin.article.index') }}">Article</a></li>
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
                    <h3 class="card-title">Create new article</h3>
                    <div class="card-tools">
                        <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                            <i class="fas fa-minus"></i>
                        </button>
                    </div>
                </div>
                <!-- /.card-header-->

                <form action="{{ route('admin.article.store') }}" method="POST">
                    @csrf
                    <!-- .card-body -->
                    <div class="card-body">
                        <div class="form-group">
                            <label for="inputTitle">Title</label>
                            <input type="text" id="inputTitle" name="title" class="form-control"
                                placeholder="Enter the title of the article">
                        </div>
                        <div class="form-group">
                            <label for="inputCode">Code
                                <i class="far fa-question-circle"
                                    title="Mã code viết liền không dấu, có phân biệt chữ hoa và chữ thường"
                                    style="opacity: .3; font-size: 12px"></i>
                            </label>
                            <input type="text" id="inputCode" name="code" class="form-control"
                                placeholder="Example: GiamGia100k">
                        </div>
                        <div class="form-group">
                            <div class="row">
                                <div class="col-md-6">
                                    <label for="inputStartDate">Start Date</label>
                                    <input type="date" name="start_date" id="inputStartDate" class="form-control">
                                </div>
                                <div class="col-md-6">
                                    <label for="inputEndDate">End Date</label>
                                    <input type="date" name="end_date" id="inputEndDate" class="form-control">
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputNumber">Number</label>
                            <input type="number" name="number" id="inputNumber" class="form-control" min="0" value="0">
                        </div>
                        <div class="form-group">
                            <label for="inputType">Type</label>
                            <select id="inputType" name="type" class="form-control custom-select">
                                <option selected="" value="VND">VND</option>
                                <option value="%">%</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="inputAmount">Amount</label>
                            <input type="number" name="amount" id="inputAmount" class="form-control" min="0" value="0">
                        </div>
                    </div>
                    <!-- /.card-body -->

                    <!-- .card-footer -->
                    <div class="card-footer">
                        <a href="{{ route('admin.promotion.index') }}" class="btn btn-secondary">Cancel</a>
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
