<?php

namespace App\Http\Controllers;

use App\Models\pegawai;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;

class pegawaiController extends Controller
{

    public function index()
    {
        $pegawai = pegawai::all();
        return view('Admin.Pegawai.index')->with('pegawai', $pegawai);
    }

    public function create()
    {
        return view('Admin.Pegawai.create');
    }

    public function store(Request $request)
    {
        pegawai::create([
            'name' => $request->name,
            'email' => $request->email,
            'alamat' => $request->alamat
        ]);
        return redirect()->route('pegawai.index')->with('success', 'Tambah Data Success');
    }


    public function edit($id)
    {
        $pegawai = pegawai::whereId($id)->first();
        return view('admin.Pegawai.edit')->with('pegawai', $pegawai);
    }



    public function update($id, Request $request)
    {
        $date = Carbon::now();

        pegawai::whereId($id)->update([
            'name' => $request->name,
            'email' => $request->email,
            'alamat' => $request->alamat,
            'updated_at' => $date
        ]);

        return redirect()->route('pegawai.index')->with('success', 'Update Data Success');
    }

    public function delete($id)
    {
        pegawai::whereId($id)->delete();
        return redirect()->back()->with('success', 'Delete Data Success');
    }
}
