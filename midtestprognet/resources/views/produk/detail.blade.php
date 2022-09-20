@extends('layouts.header')
@section('content')
<div class="container-fluid">
  <div class="row">
    <div class="col">
      <div class="card">
        <div class="card-header">
          <h3 class="card-title">Detail Merk</h3>
          <div class="card-tools">
            <a href="/produk" class="btn btn-sm btn-danger">
              Close
            </a>
          </div>
        </div>
        <div class="card-body">
            <form action="#">
              <div class="form-group">
                <label for="kode_produk">Kode Produk</label>
                <input name="kode_produk" value = "{{ $produk->kode }}" class="form-control" disabled>
              </div>
              <div class="form-group">
                <label for="nama_produk">Nama Produk</label>
                <input name="nama_produk" value = "{{ $produk->nama_produk }}" class="form-control" disabled>
              </div>
              <div class="form-group">
                <label for="merk">Merk</label>
                <input name="merk" value = "{{ $produk->merk->nama_merk }}" class="form-control" disabled>
              </div>
              <div class="form-group">
                <label for="satuan">Satuan</label>
                <input name="satuan" value = "{{ $produk->satuan->nama_satuan }}" class="form-control" disabled>
              </div>
              <div class="form-group">
                <label for="stok">Stok</label>
                <input name="stok" value = "{{ $produk->stok }}" class="form-control" disabled>
              </div>
              <div class="form-group">
                <label for="supplier">Supplier</label>
                <input name="supplier" value = "{{ $produk->supplier->nama_supplier }}" class="form-control" disabled>
              </div>
              <div class="form-group">
                <label for="harga_jual">Harga Jual</label>
                <input name="harga_jual" value = "@uang($produk->harga_jual)"class="form-control" disabled>
              </div>
              <div class="form-group">
                <label for="merk">Merk</label>
                <input name="merk" value = "{{ $produk->merk->nama_merk }}" class="form-control" disabled>
              </div>
              <div class="row" style="margin-bottom: 15px;">
                <div class="col-">
                  <div class="col-sm-3" style="padding-left: unset;">
                    <label class="bmd-label-floating">Foto Barang</label>
                  </div>
                  <div class="col-sm-9" style="padding-left: unset;">
                    <!-- <label for="image" class="form-label">Photo</label> -->
                    <img src="{{ URL::to('/') }}/foto/{{ $produk->foto_barang }}" class="media-avatar rounded" width="420px" height="300px"/>
                    <label class="bmd-label-floating">{{ $produk->foto_barang }}</label>
                    </div>
                  </div>
                </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection