<?php

namespace App\Http\Controllers;

use App\Models\merk;
use App\Models\satuan;
use Illuminate\Http\Request;

class SatuanController extends Controller
{
    public function index(request $request)
    {
        $listsatuan = satuan::orderBy('created_at', 'desc')->paginate(20);
        $data = array('title' => 'Satuan Produk',
                'listsatuan' => $listsatuan);
        return view('satuan.index', $data)->with('no', ($request->input('page', 1) - 1) * 20);
    }

    public function insert()
    {
        $data = array('title' => 'Insert Satuan Produk');
        return view('satuan.insert', $data);
    }

    public function create(Request $request)
    {
        $this->validate($request,[
            'nama_satuan' => 'required'
        ]);

        $satuan = satuan::latest('id')->pluck('id')->first();

        $data = array(
            'kode_satuan' => "S-".$satuan+1,
            'nama_satuan' => $request->nama_satuan,
        );

        satuan::create($data);
        return redirect('/satuan')->with('sucesss', 'Data Berhasil Disimpan');
    }

    public function detail($id)
    {
        $satuan = satuan::Find($id);
        $data = array('title' => 'Detail Satuan',
                'satuan' =>$satuan);
        return view ('satuan.detail', $data);
    }
}
