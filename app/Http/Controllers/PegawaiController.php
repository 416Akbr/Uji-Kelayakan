<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PegawaiController extends Controller
{
    public function index()
    {
    	$data = petugas::get();
    	return view('pegawai', ['data'=> $data]);
    }

    public function create(request $request)
    {
    	\App\Pegawai::create($request->all());
    	return redirect('/pegawai') ->with('sukses', 'data masuk');
    }

    public function edit($id)
    {
    	$pegawai= \App\Pegawai::find($id_pegawai);
    	return view('pegawai/edit',['pegawai'=>$pegawai]);
    }

    public function update($id)
    {
    	$pegawai= \App\Pegawai::find($id_pegawai);
    	$pegawai->update($request->all());
    	return redirect('/pegawai')->with('sukses', 'data diubah');
    }

    public function delete($id)
    {
    	$pegawai = \App\Pegawai::find($id_pegawai);
    	$pegawai->delete($pegawai);
    	return redirect ('/pegawai')->with('sukses', 'data dihapus');
    }
}
