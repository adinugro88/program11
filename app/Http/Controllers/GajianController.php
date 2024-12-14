<?php

namespace App\Http\Controllers;

use App\Models\Gaji;
use App\Models\Karyawan;
use App\Models\DetailGaji;
use Illuminate\Http\Request;

class GajianController extends Controller
{
    public function index()
    {
        $gajian = Gaji::all();
        // dd($gajian);
        return view('gajian.index', compact('gajian'));
    }

    public function create()
    {
        $karyawan = Karyawan::all();
        return view('gajian.create', compact('karyawan'));
    }

    public function store(Request $request)
    {
        Gaji::create($request->all());

        return redirect()->route('gajian.index')
            ->with('success', 'Gaji created successfully.');
    }

    public function show($id)
    {
        $gajian = Gaji::find($id);
        $detailGaji = DetailGaji::where('gaji_id', $id)->get();

        // dd($detailGaji);
        return view('gajian.show', compact('gajian', 'detailGaji'));
    }

    public function edit($id)
    {
        $gajian = Gaji::find($id);
        $karyawan = Karyawan::all();
        return view('gajian.edit', compact('gajian', 'karyawan'));
    }

    public function update(Request $request, $id)
    {

        $gaji = Gaji::find($id);
        $gaji->update($request->all());

        return redirect()->route('gajian.index')
            ->with('success', 'Gaji updated successfully.');
    }

    public function destroy($id)
    {
        $gaji = Gaji::find($id);
        $gaji->delete();

        return redirect()->route('gajian.index')
            ->with('success', 'Gaji deleted successfully.');
    }
}
