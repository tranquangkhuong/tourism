@extends('admin.master')

@push('title', 'Add Payment')

@section('header')
<!-- Content Header (Page header) -->
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0">Add Payment </h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="{{ url('/admin/dashboard') }}"><i class="fa fa-home"></i></a>
                    </li>
                    <li class="breadcrumb-item"><a href="{{ route('admin.payment.index') }}">Payment</a></li>
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
                    <h3 class="card-title">Create new payment</h3>
                    <div class="card-tools">
                        <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                            <i class="fas fa-minus"></i>
                        </button>
                    </div>
                </div>
                <!-- /.card-header-->

                <form action="{{ route('admin.payment.store') }}" method="POST">
                    @csrf
                    <!-- .card-body -->
                    <div class="card-body">
                        <div class="form-group">
                            <label for="inputName">Name</label>
                            <input type="text" id="inputName" name="name" class="form-control"
                                placeholder="Enter payment method name">
                        </div>
                        <div class="form-group">
                            <label for="inputContent">Content</label>
                            <input type="text" id="inputContent" name="content" class="form-control"
                                placeholder="Enter the content of the payment">
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
