<?php

namespace App\Http\Controllers;

use App\Models\supplier;
use Illuminate\Http\Request;

class SupplierController extends Controller
{
    public function index(request $request)
    {
        $listsupplier = supplier::orderBy('created_at', 'desc')->paginate(20);
        $data = array('title' => 'Supplier',
                'listsupplier' => $listsupplier);
        return view('supplier.index', $data)->with('no', ($request->input('page', 1) - 1) * 20);
    }

    public function insert()
    {
        $data = array('title' => 'Insert Supplier');
        return view('supplier.insert', $data);
    }

    public function create(Request $request)
    {
        $this->validate($request, [
            'nama_supplier' => 'required',
            'alamat' => 'required',
            'kontak' => 'required'
        ]);

        $supplier = supplier::latest('id')->pluck('id')->first();

        $data = array(
            'kode_supplier' => "SP-".$supplier+1,
            'nama_supplier' => $request->nama_supplier,
            'alamat' => $request->alamat,
            'kontak' => $request->kontak,
        );

        supplier::create($data);
        return redirect('/supplier')->with('sucesss', 'Data Berhasil Disimpan');

    }

    public function detail($id)
    {
        $supplier = supplier::Find($id);
        $data = array('title' => 'Detail Supplier',
                'supplier' => $supplier);
        return view('supplier.detail', $data);
    }
}
