@extends('layouts.header')
@section('content')
<div class="container-fluid">
  <div class="row">
    <div class="col">
      <div class="card">
        <div class="card-body">
          @if ($message = Session::get('error'))
            <div class="alert alert-warning">
                <p>{{ $message }}</p>
            </div>
          @endif
          @if ($message = Session::get('success'))
            <div class="alert alert-success">
                <p>{{ $message }}</p>
            </div>
          @endif
          <div class="table-responsive">
            <table class="table table bordered">
              <thead>
                <tr>
                  <th width="50px">Kode Produk</th>
                  <th>Nama Barang</th>
                  <th>Foto Barang</th>
                  <th>Satuan</th>
                  <th>Stok</th>
                  <th>Supplier</th>
                  <th>Harga Jual</th>
                  <th>Merk</th>
                </tr>
              </thead>
              <tbody>
                @foreach ($listproduk as $produk)
                <tr>
                  <td>{{ $produk->kode }}
                  <td>{{ $produk->nama_produk }}</td>
                  <td>{{ $produk->foto_barang }}</td>
                  <td>{{ $produk->satuan->nama_satuan}}</td>
                  <td>{{ $produk->stok }}</td>
                  <td>{{ $produk->supplier->nama_supplier }}</td>
                  <td>@uang($produk->harga_jual)</td>
                  <td>{{ $produk->merk->nama_merk }}</td>
                </tr>
                @endforeach
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection