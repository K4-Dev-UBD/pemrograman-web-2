<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MasterMahasiswaController extends Controller {
    private $mainTable = 'mahasiswa';

    public function displayData() {
        $getDatas = DB::table($this->mainTable)->get();
        return view('mahasiswa.index', ['datas' => $getDatas]);
    }

    public function displayEditForm($id) {
        $getData = DB::table($this->mainTable)->where('id', $id)->get();
        return view('mahasiswa.editForm', ['data' => $getData]);
    }

    public function insertData(Request $req) {
        DB::table($this->mainTable)->insert([
            'nim' => $req->input_nim,
            'nama' => $req->input_nama,
            'mata_kuliah' => $req->input_matakuliah,
            'jenis_kelamin' => $req->input_jenis_kelamin,
            'tanggal_lahir' => $req->input_tanggal_lahir,
            'prodi' => $req->input_prodi,
        ]);

        return redirect('/mahasiswa');
    }

    public function updateData(Request $req, $id) {
        DB::table($this->mainTable)->where('id', $id)->update([
            'nim' => $req->input_nim,
            'nama' => $req->input_nama,
            'mata_kuliah' => $req->input_matakuliah,
            'jenis_kelamin' => $req->input_jenis_kelamin,
            'tanggal_lahir' => $req->input_tanggal_lahir,
            'prodi' => $req->input_prodi,
        ]);

        return redirect('/mahasiswa');
    }

    public function deleteData($id) {
        DB::table($this->mainTable)->where('id', $id)->delete();
        return redirect('/mahasiswa');
    }
}
