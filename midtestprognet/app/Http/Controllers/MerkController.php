<?php

namespace App\Http\Controllers;

use App\Models\merk;
use Illuminate\Http\Request;

class MerkController extends Controller
{
    public function index(request $request)
    {
        $listmerk = merk::orderBy('created_at', 'desc')->paginate(20);
        $data = array('title' => 'Merk',
                    'listmerk' => $listmerk);
        return view('merk.index', $data)->with('no', ($request->input('page', 1) - 1) * 20);
    }

    public function insert()
    {
        $data = array('title' => 'Insert Merk');
        return view('merk.insert', $data);
    }

    public function create(Request $request)
    {
        $this->validate($request, [
            'nama_merk' => 'required'
        ]);

        $merk = merk::latest('id')->pluck('id')->first();

        $data = array(
            'kode_merk' => "M-".$merk+1,
            'nama_merk' => $request->nama_merk,
        );

        merk::create($data);
        return redirect('/merk')->with('success', 'Data Berhasil Disimpan');
    }

    public function detail($id)
    {
        $merk = merk::Find($id);
        $data = array('title' => 'Detail Merk',
                'merk' => $merk) ;
        return view ('merk.detail', $data);
    }

    public function update($id)
    {
        $merk = merk::Find($id);
        $data = array('title' => 'Update Merk',
                'merk' => $merk);
        return view('merk.update', $data);
    }
    
    public function saveupdate(Request $request, $id)
    {
        $this->validate($request, [
            'kode_merk' => 'required',
            'nama_merk' => 'required',
        ]);

        $data= array(
            'kode_merk'=> $request->kode_merk,
            'nama_merk' => $request->nama_merk,
        );

        $merk=merk::find($id);
        $merk->delete();
        merk::create($data);
        return redirect('/merk')->with('success', 'Data berhasil disimpan');
    }

    public function delete($id)
    {
        $merk = merk::find($id);
        $merk->delete();
        return redirect('/merk');
    }
}
