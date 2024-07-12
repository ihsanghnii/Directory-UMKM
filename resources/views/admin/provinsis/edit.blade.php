@extends('admin.layouts.app')
@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Provinsi</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{ url ('admin')}}">Home</a></li>
              <li class="breadcrumb-item active">Provinsi</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Edit Provinsi</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <a href="{{route('provinsis.index')}}" class="btn btn-success btn-sm">Kembali</a>
                <form action="{{route('provinsis.store')}}" method="POST">
                    @csrf
                    <input type="hidden" name="id" value="{{ $provinsi->id }}">
                    <div class="card-body">
                        <div class="form-group row">
                            <label for="nama">Nama Provinsi</label>
                            <input type="text" class="form-control" id="nama" name="nama" value="{{ $provinsi->nama }}" required>
                        </div>
                        <div class="form-group row">
                            <label for="ibukota">Ibukota</label>
                            <input type="text" class="form-control" id="ibukota" name="ibukota" value="{{ $provinsi->ibukota }}" required>
                        </div>
                        <div class="form-group row">
                            <label for="latitude">Latitude <small> (dapat di cek di google map, contoh : -7.780667) </small></label>
                            <input type="number" class="form-control" id="latitude" name="latitude" value="{{ $provinsi->latitude }}" required>
                        </div>
                        <div class="form-group row">
                            <label for="longitude">Longitude <small> (dapat di cek di google map, contoh : 58.260089) </small></label>
                            <input type="number" class="form-control" id="longitude" name="longitude" value="{{ $provinsi->longitude }}" required>
                        </div>
                    </div>
                    <!-- /.card-body -->

                    <div class="d-flex justify-content">
                        <input type="submit" value="Edit" class="btn btn-primary">
                    </div>
                </form>
                
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
</div>
  <!-- /.content-wrapper -->
@endsection