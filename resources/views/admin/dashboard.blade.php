@extends('admin.layouts.app')

@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">DASHBOARD UMKM</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{ url('/') }}">Home</a></li>
                            <li class="breadcrumb-item active">DASHBOARD UMKM</li>
                        </ol>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->

        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <!-- Small boxes (Stat box) -->
                <div class="row">
                    <x-box caption="Kategori UMKM" total="{{ $kategoriUmkmCount }}" bg="bg-info" icon="ion-ios-list" url="admin/kategori"/>
                    <x-box caption="Pembina" total="{{ $pembinaCount }}" bg="bg-success" icon="ion-ios-people" url="admin/pembina" />
                    <x-box caption="Provinsi" total="{{ $provinsiCount }}" bg="bg-warning" icon="ion-ios-location" url="admin/provinsi" />
                    <x-box caption="Kabkota" total="{{ $kabkotaCount }}" bg="bg-danger" icon="ion-ios-home" url="admin/kabkota" />
                    <x-box caption="UMKM" total="{{ $umkmCount }}" bg="bg-primary" icon="ion-ios-briefcase" url="admin/umkm" />
                </div>
                <!-- /.row -->
            </div><!-- /.container-fluid -->
        </section>
        <!-- /.content -->
    </div>
@endsection
