<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pegawai;

class pegawaiController extends Controller
{
    public function index(){
        $Pegawai = Pegawai::all();
        return view('pegawai.index',compact(['Pegawai']));
    }
    public function create(){
        return view("pegawai.create");
    }
    public function store(Request $request){

            Pegawai::create($request->except(['_token','submit']));
            return redirect(route('pegawai.index'));
    }
    public function edit($id){

        $Pegawai = Pegawai::find($id);
        return view("pegawai.edit",compact(['Pegawai']));
    }
    public function update($id, Request $request){

        $Pegawai = Pegawai::find($id);
        $Pegawai->update($request->except(['_token','submit']));
        return redirect(route('pegawai.index'));
    }
    public function delete($id){

        $Pegawai = Pegawai::find($id);
        $Pegawai->delete();
        return redirect(route('pegawai.index'));
    }
}