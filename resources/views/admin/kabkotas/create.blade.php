@extends('admin.layouts.app')
@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Kabupaten Kota</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{ url('admin') }}">Home</a></li>
                            <li class="breadcrumb-item active">Kabupaten Kota</li>
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
                                <h3 class="card-title">Tambah Data Kabupaten Kota</h3>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body">
                                <a href="{{ route('kabkotas.index') }}" class="btn btn-success btn-sm">Kembali</a>
                                <form action="{{ route('kabkotas.store') }}" method="post">
                                    @csrf
                                    <div class="form-group">
                                        <label for="nama">Nama</label>
                                        <input type="text" class="form-control" id="nama" name="nama" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="latitude">Latitude <small> (dapat di cek di google map, contoh : -7.780667) </small></label>
                                        <input type="number" class="form-control" id="latitude" name="latitude" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="longitude">Longitude <small> (dapat di cek di google map, contoh : 58.260089) </small></label>
                                        <input type="number" class="form-control" id="longitude" name="longitude" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="provinsi_id">Provinsi</label>
                                        <select class="form-control" id="provinsi_id" name="provinsi_id" required>
                                            @foreach ($provinsis as $provinsi)
                                                <option value="{{ $provinsi->id }}">{{ $provinsi->nama }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="d-flex justify-content">
                                        <input type="submit" value="Tambah" class="btn btn-primary">
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
