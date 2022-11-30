<?php

namespace App\Http\Controllers;

use App\Models\PegawaiModel;
use GrahamCampbell\ResultType\Success;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PegawaiController extends Controller
{
    public function index()
    {
       $pegawai = PegawaiModel::all();
        return view('pegawai.datapegawai')->with('pegawai', $pegawai);
    } 
    public function create(){
        return view('Pegawai.tambahpegawai');
    }
    public function store(Request $request){
        PegawaiModel::create([
            'name'=>$request->name,
            'email'=>$request->email,
            'alamat'=>$request->alamat
        ]);
        return redirect(route('pegawai.datapegawai'));
    }
    public function edit($id){
        $pegawai = PegawaiModel::whereId($id)->first();
        return view('Pegawai.editpegawai')->with('pegawai', $pegawai);
    }
    public function update($id, Request $request){
        PegawaiModel::whereId($id)->update([
            'name'=>$request->name,
            'email'=>$request->email,
            'alamat'=>$request->alamat,
        ]);
        return redirect(route('pegawai.datapegawai'));
    }
    public function delete($id){
        PegawaiModel::whereId($id)->delete();
        return redirect()->back();
    }
}
