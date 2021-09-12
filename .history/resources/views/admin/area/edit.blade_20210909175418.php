@extends('admin.master')
@section('header')
  <!-- Content Header (Page header) -->

  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0">Add Location </h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Area Location</a></li>
            <li class="breadcrumb-item"><a href="#">Add Location</a></li>
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
        <div class="card card-primary">
          <div class="card-header">
            <h3 class="card-title">General</h3>

            <div class="card-tools">
              <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                <i class="fas fa-minus"></i>
              </button>
            </div>
          </div>
          <div class="card-body">
            <div class="form-group">
                <label for="inputStatus">Quốc Gia</label>
                <select id="inputStatus" class="form-control custom-select">
                  <option selected="" >Việt Nam</option>
                  <option>Ẩn</option>
                </select>
            </div>
            <div class="form-group">
                <label for="inputStatus">Khu vực</label>
                <select id="inputStatus" class="form-control custom-select">
                  <option selected="" >Miền Bắc</option>
                  <option>Miền trung</option>
                  <option>Miền Nam</option>
                </select>
            </div>
            <div class="form-group">
              <label for="inputName">Tên Địa Điểm</label>
              <input type="text" id="inputName" class="form-control">
            </div>
            <div class="form-group">
              <label for="inputDescription">Nội dung</label>
              <textarea id="inputDescription" class="form-control" rows="4"></textarea>
            </div>
            <div class="form-group">
              <label for="inputStatus">Status</label>
              <select id="inputStatus" class="form-control custom-select">
                <option selected="" >Hiển thị</option>
                <option>Ẩn</option>
              </select>
            </div>
          </div>
          <!-- /.card-body -->
        </div>
        <!-- /.card -->
        <div class="row">
            <div class="col-12">
              <a href="#" class="btn btn-secondary">Cancel</a>
              <input type="submit" value="Create new Porject" class="btn btn-success float-right">
            </div>
          </div>
      </div>

  </section>

  <!-- /.content -->
  @endsection

