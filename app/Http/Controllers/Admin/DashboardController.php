<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Kabkota;
use App\Models\KategoriUmkm;
use App\Models\Pembina;
use App\Models\Pendaftaran;
use App\Models\Provinsi;
use App\Models\Umkm;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $kategoriUmkmCount = KategoriUmkm::count();
        $pembinaCount = Pembina::count();
        $provinsiCount = Provinsi::count();
        $kabkotaCount = Kabkota::count();
        $umkmCount = Umkm::count();

        return view('admin.dashboard', compact('kategoriUmkmCount', 'pembinaCount', 'provinsiCount', 'kabkotaCount', 'umkmCount'));
    }
}
