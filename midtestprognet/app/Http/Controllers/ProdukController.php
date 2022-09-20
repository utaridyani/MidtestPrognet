<?php

namespace App\Http\Controllers;

use App\Models\merk;
use App\Models\produk;
use App\Models\satuan;
use App\Models\supplier;
use Illuminate\Http\Request;

class ProdukController extends Controller
{
    public function index(request $request) 
    {
        $listproduk = produk::orderBy('created_at', 'desc')->paginate(20);
        $data = array('title' => 'Produk',
                'listproduk' => $listproduk);
        return view('produk.index', $data)->with('no', ($request->input('page', 1) - 1) * 20);
    }

    public function insert()
    {
        $listmerk = merk::orderBy('nama_merk', 'asc')->get();
        $listsatuan = satuan::orderBy('nama_satuan', 'asc')->get();
        $listsupplier = supplier::orderBy('nama_supplier', 'asc')->get();
        $data = array('title' => 'Insert Supplier',
                'listmerk' => $listmerk,
                'listsatuan' => $listsatuan,
                'listsupplier' => $listsupplier);
        return view('produk.insert', $data);
    }

    public function create(Request $request)
    {
        $this->validate($request, [
            'nama_produk' => 'required',
            'merk' => 'required',
            'satuan' => 'required',
            'stok' => 'required|numeric',
            'supplier' => 'required',
            'harga_jual' => 'required|numeric',
            'foto_barang' => 'required|image|mimes:jepg,png,jpg|max:2048'
        ]);

        $image = $request->file('foto_barang');
        $new_image= rand().".".$image ->getClientOriginalExtension();

        $produk = produk::latest('id')->pluck('id')->first();

        $data = array(
            'kode' => "P-".$produk+1,
            'nama_produk' => $request->nama_produk,
            'id_merk' => $request->merk,
            'id_satuan' => $request->satuan,
            'stok' => $request->stok,
            'id_supplier' => $request->supplier,
            'harga_jual' => $request->harga_jual,
            'foto_barang' => $new_image
        );
        $image->move(public_path('foto'),$new_image);
        produk::create($data);

        return redirect('/produk')->with('success', 'Data berhasil disimpan');
    }

    public function detail($id)
    {
        $produk = produk::Find($id);
        $data = array('title' => 'Detail Produk',
                'produk' => $produk);
        return view('produk.detail', $data);
    }

    public function update($id)
    {
        $produk = produk::Find($id);
        $listmerk = merk::orderBy('nama_merk', 'asc')->get();
        $listsatuan = satuan::orderBy('nama_satuan', 'asc')->get();
        $listsupplier = supplier::orderBy('nama_supplier', 'asc')->get();

        $data = array('title' => 'Update Produk',
                'produk' => $produk,
                'listmerk' => $listmerk,
                'listsatuan' => $listsatuan,
                'listsupplier' => $listsupplier);
        return view('produk.update', $data);
    }

    public function saveupdate(Request $request, $id)
    {
        $this->validate($request, [
            'nama_produk' => 'required',
            'merk' => 'required',
            'satuan' => 'required',
            'stok' => 'required|numeric',
            'supplier' => 'required',
            'harga_jual' => 'required|numeric',
            'foto_barang' => 'required|image|mimes:jepg,png,jpg|max:2048'
        ]);

        $image = $request->file('foto_barang');
        $new_image= rand().".".$image ->getClientOriginalExtension();

        $data = array(
            'kode' => $request->kode,
            'nama_produk' => $request->nama_produk,
            'id_merk' => $request->merk,
            'id_satuan' => $request->satuan,
            'stok' => $request->stok,
            'id_supplier' => $request->supplier,
            'harga_jual' => $request->harga_jual,
            'foto_barang' => $new_image
        );

        $image->move(public_path('foto'),$new_image);
        $produk=produk::find($id);
        $produk->delete();
        produk::create($data);
        return redirect('/produk')->with('success', 'Data berhasil disimpan');

    }

    public function destroy($id)
    {
        $produk=produk::find($id);
        $produk->delete();
        return redirect('/produk');
    }
}
