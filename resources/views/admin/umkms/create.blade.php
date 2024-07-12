@extends('admin.layouts.app')
@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Umkm</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{ url('admin') }}">Home</a></li>
                            <li class="breadcrumb-item active">Umkm</li>
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
                                <h3 class="card-title">Tambah Data Umkm</h3>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body">
                                <a href="{{ route('umkms.index') }}" class="btn btn-success btn-sm">Kembali</a>
                                <form action="{{ route('umkms.store') }}" method="post">
                                    @csrf
                                    <div class="form-group row">
                                        <label for="nama">Nama Umkm</label>
                                        <input type="text" class="form-control" id="nama" name="nama" required>
                                    </div>
                                    <div class="form-group row">
                                        <label for="modal">Modal</label>
                                        <input type="number" class="form-control" id="modal" name="modal" required>
                                    </div>
                                    <div class="form-group row">
                                        <label for="pemilik">Pemilik</label>
                                        <input type="text" class="form-control" id="pemilik" name="pemilik" required>
                                    </div>
                                    <div class="form-group row">
                                        <label for="alamat">Alamat</label>
                                        <textarea class="form-control" name="alamat" id="alamat" rows="5" required></textarea>
                                    </div>
                                    <div class="form-group row">
                                        <label for="website">Website</label>
                                        <input type="text" class="form-control" id="website" name="website">
                                    </div>
                                    <div class="form-group row">
                                        <label for="email">Email</label>
                                        <input type="email" class="form-control" id="email" name="email">
                                    </div>
                                    <div class="form-group row">
                                        <label for="kabkota_id">Kabkota</label>
                                        <select class="form-control" id="kabkota_id" name="kabkota_id" required>
                                            @foreach ($kabkotas as $kabkota)
                                                <option value="{{ $kabkota->id }}">{{ $kabkota->nama }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="form-group row">
                                        <label for="rating">Rating <small>(1 - 5)</small></label>
                                        <input type="number" class="form-control" id="rating" name="rating" min="1" max="5">
                                    </div>
                                    <div class="form-group row">
                                        <label for="kategori_umkm_id">Kategori UMKM</label>
                                        <select class="form-control" id="kategori_umkm_id" name="kategori_umkm_id" required>
                                            @foreach ($kategori_umkms as $kategori_umkm)
                                                <option value="{{ $kategori_umkm->id }}">{{ $kategori_umkm->nama }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="form-group row">
                                        <label for="pembina_id">Pembina</label>
                                        <select class="form-control" id="pembina_id" name="pembina_id" required>
                                            @foreach ($pembinas as $pembina)
                                                <option value="{{ $pembina->id }}">{{ $pembina->nama }}</option>
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