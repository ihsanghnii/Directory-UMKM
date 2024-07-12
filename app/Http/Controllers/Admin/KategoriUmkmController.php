<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\KategoriUmkm;
use Illuminate\Http\Request;

class KategoriUmkmController extends Controller
{
    public function index()
    {


        $kategori_umkms = KategoriUmkm::all();

        return view('admin.kategori_umkms.index', compact('kategori_umkms'));
    }

    public function create(){
        return view('admin.kategori_umkms.create');
       }
    
       public function store(Request $request){
        //dd($request);
        $data = $request->validate([
          "nama" => 'required'
        ]);
        if (isset($request->id)) {
          $kategori_umkms = KategoriUmkm::find($request->id);
          $kategori_umkms->update([
              "nama" => $request->nama
          ]);
        } else {
          KategoriUmkm::create($data);
        }
        
        return redirect()->route('kategori_umkms.index');
       }
    
       public function delete(string $id)
       {
          $kategori_umkms = KategoriUmkm::find($id);
          $kategori_umkms->delete();
          return redirect()->route('kategori_umkms.index');
       }
    
       public function edit(string $id)
       {
        $kategori_umkms = KategoriUmkm::find($id);
        if (!$kategori_umkms) {
          return redirect()->back();
        } 
        return view('admin.kategori_umkms.edit', compact('kategori_umkms'));
       }
}
