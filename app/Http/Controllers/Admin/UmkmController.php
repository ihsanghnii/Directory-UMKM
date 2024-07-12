<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Kabkota;
use App\Models\KategoriUmkm;
use App\Models\Pembina;
use App\Models\Umkm;
use Illuminate\Http\Request;

class UmkmController extends Controller
{
    public function index()
    {
        $umkms = Umkm::all();
        return view('admin.umkms.index', compact('umkms'));
    }

    public function create()
    {
        $kabkotas = Kabkota::all();
        $kategori_umkms = KategoriUmkm::all();
        $pembinas = Pembina::all();
        return view('admin.umkms.create', compact('kabkotas', 'kategori_umkms', 'pembinas'));
    }

    public function store(Request $request)
    {
        $data = $request->validate([
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

        if ($request->has('id')) {
            $umkm = Umkm::find($request->id);
            $umkm->update($data);
        } else {
            Umkm::create($data);
        }

        return redirect()->route('umkms.index');
    }

    public function edit($id)
    {
        $umkm = Umkm::findOrFail($id);
        $kabkotas = Kabkota::all();
        $kategori_umkms = KategoriUmkm::all();
        $pembinas = Pembina::all();
        return view('admin.umkms.edit', compact('umkm', 'kabkotas', 'kategori_umkms', 'pembinas'));
    }

    public function delete($id)
    {
        $umkm = Umkm::findOrFail($id);
        $umkm->delete();

        return redirect()->route('umkms.index');
    }

    public function update(Request $request, $id)
    {
        $umkm = Umkm::findOrFail($id);

        $umkm->update($request->all());

        return redirect()->route('umkms.index')->with('success', 'UMKM updated successfully');
    }
}