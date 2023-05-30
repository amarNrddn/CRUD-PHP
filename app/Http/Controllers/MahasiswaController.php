<?php

namespace App\Http\Controllers;

use App\Models\Mahasiswa;
use Illuminate\Http\Request;

class MahasiswaController extends Controller
{
    public function home(Request $request){
        $addDataAll = Mahasiswa::all();
        return view('index', ['data'=>$addDataAll]);
    }
    
    public function edit(){
        return view('edit');
    }

    public function add(){
        return view('add');
    }

    // add data
    public function addData (request $request) {

        // $req = $request->all();
        // dd($req); buat menampilkan di konsoll

        $addData = new Mahasiswa();

        $addData-> nama = $request->nama;
        $addData-> nbi = $request->nbi;
        $addData-> kelas = $request->kelas;
        $addData-> praktikum = $request->praktikum;
        $addData-> sesi = $request->sesi;
        $addData->save();

        return redirect('/');
    }

    //delet
    public function deletData ($id) {
        $deleteData = Mahasiswa::find($id);
        $deleteData->delete();
        return redirect('/');
    }

    //update Data
    public function updateData (request $request) {

        // $req = $request->all();
        // dd($req); buat menampilkan di konsoll

        Mahasiswa::where('id', $request->id)->update(
            [
                'nama'=>$request->nama,
                'nbi'=>$request->nbi,
                'kelas'=>$request->kelas,
                'praktikum'=>$request->praktikum,
                'sesi'=>$request->sesi,
            ]
        );

        return redirect('/');
    }

}

