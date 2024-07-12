<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin as ADMIN;


Route::get('/', function () {
    return view('welcome');
});

Route::prefix('/admin')->group(function() {
    Route::get('/', [ADMIN\DashboardController::class, "index"]);

    //kategori_umkm
    Route::get('/kategori',[ADMIN\KategoriUmkmController::class, "index"])->name('kategori_umkms.index');
    Route::get('/kategori/create', [ADMIN\KategoriUmkmController::class, "create"])->name ('kategori_umkms.create');
    Route::post('/kkategori/store', [ADMIN\KategoriUmkmController::class, "store"])->name ('kategori_umkms.store');
    Route::delete('/kategori/delete/{id}', [ADMIN\KategoriUmkmController::class, "delete"])->name ('kategori_umkms.delete');
    Route::get('/kategori/edit/{id}', [ADMIN\KategoriUmkmController::class, "edit"])->name ('kategori_umkms.edit');  

    //pembina
    Route::get('/pembina',[ADMIN\PembinaController::class, "index"])->name('pembinas.index');
    Route::get('/pembina/create', [ADMIN\PembinaController::class, "create"])->name ('pembinas.create');
    Route::post('/pembina/store', [ADMIN\PembinaController::class, "store"])->name ('pembinas.store');
    Route::delete('/pembina/delete/{id}', [ADMIN\PembinaController::class, "delete"])->name ('pembinas.delete');
    Route::get('/pembina/edit/{id}', [ADMIN\PembinaController::class, "edit"])->name ('pembinas.edit'); 
    Route::post('/pembina/update/{id}', [ADMIN\PembinaController::class, "update"])->name('pembinas.update');

    //provinsi
    Route::get('/provinsi',[ADMIN\ProvinsiController::class, "index"])->name('provinsis.index');
    Route::get('/provinsi/create', [ADMIN\ProvinsiController::class, "create"])->name ('provinsis.create');
    Route::post('/provinsi/store', [ADMIN\ProvinsiController::class, "store"])->name ('provinsis.store');
    Route::delete('/provinsi/delete/{id}', [ADMIN\ProvinsiController::class, "delete"])->name ('provinsis.delete');
    Route::get('/provinsi/edit/{id}', [ADMIN\ProvinsiController::class, "edit"])->name ('provinsis.edit'); 

    //kabkota
    Route::get('/kabkota',[ADMIN\KabkotaController::class, "index"])->name('kabkotas.index');
    Route::get('/kabkota/create', [ADMIN\KabkotaController::class, "create"])->name ('kabkotas.create');
    Route::post('/kabkota/store', [ADMIN\KabkotaController::class, "store"])->name ('kabkotas.store');
    Route::delete('/kabkota/delete/{id}', [ADMIN\KabkotaController::class, "delete"])->name ('kabkotas.delete');
    Route::get('/kabkota/edit/{id}', [ADMIN\KabkotaController::class, "edit"])->name ('kabkotas.edit');

    //umkm
    Route::get('/umkm',[ADMIN\UmkmController::class, "index"])->name('umkms.index');
    Route::get('/umkm/create', [ADMIN\UmkmController::class, "create"])->name ('umkms.create');
    Route::post('/umkm/store', [ADMIN\UmkmController::class, "store"])->name ('umkms.store');
    Route::delete('/umkm/delete/{id}', [ADMIN\UmkmController::class, "delete"])->name ('umkms.delete');
    Route::get('/umkm/edit/{id}', [ADMIN\UmkmController::class, "edit"])->name ('umkms.edit');
    Route::post('/umkm/update/{id}', [ADMIN\UmkmController::class, "update"])->name('umkms.update'); 
});