@extends('admin.layouts.app')
@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Pembina</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{ url ('admin')}}">Home</a></li>
              <li class="breadcrumb-item active">Pembina</li>
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
                <h3 class="card-title">Edit Pembina</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <a href="{{route('pembinas.index')}}" class="btn btn-success btn-sm">Kembali</a>
                <form action="{{ route('pembinas.update', $pembina->id) }}" method="POST">
                    @csrf
                    <div class="card-body">
                        <div class="form-group row">
                            <label for="nama">Nama</label>
                            <input type="text" class="form-control" id="nama" name="nama" value="{{ $pembina->nama }}">
                        </div>
                        <div class="form-group">
                            <label for="gender">Gender</label>
                            <select class="form-control" id="gender" name="gender" required>
                                <option value="M" {{ $pembina->gender == 'M' ? 'selected' : '' }}>Male</option>
                                <option value="F" {{ $pembina->gender == 'F' ? 'selected' : '' }}>Female</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="tgl_lahir">Tanggal Lahir</label>
                            <input type="date" class="form-control" id="tgl_lahir" name="tgl_lahir" value="{{ $pembina->tgl_lahir }}" required>
                        </div>
                        <div class="form-group">
                            <label for="tmp_lahir">Tempat Lahir</label>
                            <input type="text" class="form-control" id="tmp_lahir" name="tmp_lahir" value="{{ $pembina->tmp_lahir }}" required>
                        </div>
                        <div class="form-group">
                            <label for="keahlian">Keahlian</label>
                            <input type="text" class="form-control" id="keahlian" name="keahlian" value="{{ $pembina->keahlian }}" required>
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