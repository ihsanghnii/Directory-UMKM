<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Kabkota;
use App\Models\Provinsi;
use Illuminate\Http\Request;

class KabkotaController extends Controller
{
    public function index()
    {
        $kabkotas = Kabkota::with('provinsi')->get();
        return view('admin.kabkotas.index', compact('kabkotas'));
    }

    public function create()
    {
        $provinsis = Provinsi::all();
        return view('admin.kabkotas.create', compact('provinsis'));
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'nama' => 'required|string|max:100',
            'latitude' => 'required|numeric',
            'longitude' => 'required|numeric',
            'provinsi_id' => 'required|exists:provinsis,id'
        ]);

        if ($request->has('id')) {
            $kabkota = Kabkota::find($request->id);
            $kabkota->update($data);
        } else {
            Kabkota::create($data);
        }

        return redirect()->route('kabkotas.index');
    }

    public function edit($id)
    {
        $kabkota = Kabkota::findOrFail($id);
        $provinsis = Provinsi::all();
        return view('admin.kabkotas.edit', compact('kabkota', 'provinsis'));
    }

    public function delete($id)
    {
        $kabkota = Kabkota::findOrFail($id);
        $kabkota->delete();

        return redirect()->route('kabkotas.index');
    }
}
