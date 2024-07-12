<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Pembina;
use Illuminate\Http\Request;

class PembinaController extends Controller
{
    public function index()
    {
        $pembinas = Pembina::all();
        return view('admin.pembinas.index', compact('pembinas'));
    }

    public function create()
    {
        return view('admin.pembinas.create');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            "nama" => 'required|string|max:50',
            "gender" => 'required|in:M,F',
            "tgl_lahir" => 'required|date',
            "tmp_lahir" => 'required|string|max:30',
            "keahlian" => 'required|string|max:200'
        ]);

        if (isset($request->id)) {
            $pembina = Pembina::find($request->id);
            $pembina->update($data);
        } else {
            Pembina::create($data);
        }

        return redirect()->route('pembinas.index');
    }

    public function update(Request $request, string $id)
    {
        $data = $request->validate([
            "nama" => 'required|string|max:50',
            "gender" => 'required|in:M,F',
            "tgl_lahir" => 'required|date',
            "tmp_lahir" => 'required|string|max:30',
            "keahlian" => 'required|string|max:200'
        ]);

        $pembina = Pembina::findOrFail($id);
        $pembina->update($data);

        return redirect()->route('pembinas.index');
    }

    public function delete(string $id)
    {
        $pembina = Pembina::find($id);
        $pembina->delete();
        return redirect()->route('pembinas.index');
    }

    public function edit(string $id)
    {
        $pembina = Pembina::find($id);
        if (!$pembina) {
            return redirect()->back();
        }
        return view('admin.pembinas.edit', compact('pembina'));
    }
}
