<?php

namespace App\Http\Controllers;

use App\Models\Pasien;
use Illuminate\Http\Request;

class PasienController extends Controller
{
    public function index()
    {
        $pasiens = Pasien::orderBy('id', 'desc')->get();
        $total = Pasien::count();
        return view('home', compact(['pasiens', 'total']));
    }
    
    public function create() {
        return view ('create');
    }

    public function save(Request $request) {
        $validation = $request -> validate([
            'Nama_Pasien' => 'required',
            'No_Hp' => 'required',
            'Alamat_Pasien' => 'required',
        ]);
        $data = Pasien::create($validation);
        if ($data) {
            session() -> flash ('success', 'Pasien Data Add Successfully');
            return redirect(route('home'));
        }
        else {
            session() -> flash ('error', 'Some problem occure!');
            return redirect(route('create'));
        }
    }

    public function edit($id)
    {
        $pasiens = Pasien::findOrFail($id);
        return view('update', compact('pasiens'));
    }

    public function update (Request $request, $id) {
        $pasiens = Pasien::findOrFail($id);
        $Nama_Pasien = $request->Nama_Pasien;
        $No_Hp = $request->No_Hp;
        $Alamat_Pasien = $request->Alamat_Pasien;

        $pasiens->Nama_Pasien = $Nama_Pasien;
        $pasiens->No_Hp = $No_Hp;
        $pasiens->Alamat_Pasien = $Alamat_Pasien;
        $data = $pasiens->save();
        if ($data) {
            session()->flash('success', 'Data Pasien Update Successfully');
            return redirect(route('home'));
        } else {
            session()->flash('error', 'Some problem occure');
            return redirect(route('update'));
        }
    }

    public function delete($id)
    {
        $pasiens = Pasien::findOrFail($id)->delete();
        if ($pasiens) {
            session()->flash('success', 'Data Pasien Deleted Successfully');
            return redirect(route('home'));
        } else {
            session()->flash('error', 'Data Pasien Failed to Delete');
            return redirect(route('home'));
        }
    }
}
