<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Provinsi;
use Illuminate\Http\Request;

class ProvinsiController extends Controller
{
    public function index()
    {
        $provinsis = Provinsi::all();
        return view('admin.provinsis.index', compact('provinsis'));
    }

    public function create()
    {
        return view('admin.provinsis.create');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'nama' => 'required|string|max:45',
            'ibukota' => 'required|string|max:45',
            'latitude' => 'required|numeric',
            'longitude' => 'required|numeric'
        ]);

        if ($request->has('id')) {
            $provinsi = Provinsi::find($request->id);
            $provinsi->update($data);
        } else {
            Provinsi::create($data);
        }

        return redirect()->route('provinsis.index');
    }

    public function edit($id)
    {
        $provinsi = Provinsi::findOrFail($id);
        return view('admin.provinsis.edit', compact('provinsi'));
    }

    public function delete($id)
    {
        $provinsi = Provinsi::findOrFail($id);
        $provinsi->delete();

        return redirect()->route('provinsis.index');
    }
}
