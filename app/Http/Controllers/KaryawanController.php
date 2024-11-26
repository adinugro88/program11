<?php

namespace App\Http\Controllers;

use App\Models\Karyawan;
use Illuminate\Http\Request;

class KaryawanController extends Controller
{
    public function index()
    {
        $data = Karyawan::all();
        return view('karyawan.index', compact('data'));
    }

    public function create()
    {
        return view('karyawan.create');
    }

    public function edit($id)
    {
        $data = Karyawan::find($id);
        return view('karyawan.edit', compact('data', 'id'));
    }
}
