<?php

namespace App\Http\Controllers;

use App\Models\Kabkota;
use App\Models\KategoriUmkm;
use App\Models\Pembina;
use App\Models\Umkm;
use Illuminate\Http\Request;
use Illuminate\Routing\Route;

class FormController extends Controller
{
    public function create()
    {
        $kabkotas = Kabkota::all();
        $kategori_umkms = KategoriUmkm::all();
        $pembinas = Pembina::all();
        return view('regist', compact('kabkotas', 'kategori_umkms', 'pembinas'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required|string|max:100',
            'modal' => 'required|numeric',
            'pemilik' => 'required|string|max:45',
            'alamat' => 'required|string|max:100',
            'website' => 'nullable|string|max:45',
            'email' => 'nullable|string|max:45',
            'kabkota_id' => 'required|exists:kabkotas,id',
            'rating' => 'nullable|integer|min:0',
            'kategori_umkm_id' => 'required|exists:kategori_umkms,id',
            'pembina_id' => 'required|exists:pembinas,id',
        ]);

        Umkm::create([
            'nama' => $request->input('nama'),
            'modal' => $request->input('modal'),
            'pemilik' => $request->input('pemilik'),
            'alamat' => $request->input('alamat'),
            'website' => $request->input('website'),
            'email' => $request->input('email'),
            'kabkota_id' => $request->input('kabkota_id'),
            'rating' => $request->input('rating'),
            'kategori_umkm_id' => $request->input('kategori_umkm_id'),
            'pembina_id' => $request->input('pembina_id'),
        ]);

        return redirect()->back()->with('success', 'Form submitted successfully!')->with('color="green"');
    }
}