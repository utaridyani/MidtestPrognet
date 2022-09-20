@extends('layouts.header')
@section('content')
<div class="container-fluid">
  <div class="row">
    <div class="col">
      <div class="card">
        <div class="card-header">
          <div class="card-tools">
              <a href="/insertproduk" class="btn btn-sm btn-success">
                  New Product
              </a>
          </div>
      </div>
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
                  <th>Aksi</th>
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
                  <td>
                    <form action="/produkdelete/{{ $produk->id }}" method="post">
                    @csrf  
                    <a href="/detailproduk/{{ $produk->id }}" class="btn btn-sm btn-success mr-2 mb-2"><i class="fa fa-info"></i></a>
                    <a href="/updateproduk/{{ $produk->id }}" class="btn btn-sm btn-primary mr-2 mb-2"><i class="fa fa-cogs"></i></a>
                    <form action="/produkdelete/{{ $produk->id }}" method="post">
                      <button href="/produkdelete/{{ $produk->id }}" class="btn btn-sm btn-danger mb-2" type="submit" onclick="return confirm('Yakin Ingin Mengapus Data?')"><i class="fa fa-trash"></i>
                      </button>
                    </form>
                    </td>
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