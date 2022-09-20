@extends('layouts.header')
@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col">
            <div class="card">
                <div class="card-header">
                    <div class="card-tools">
                        <a href="/produk" class="btn btn-sm btn-danger">
                            Tutup
                        </a>
                    </div>
                </div>
                <div class="card-body">
                    @if(count($errors) > 0)
                    @foreach($errors->all() as $error)
                        <div class="alert alert-warning">{{ $error }}</div>
                    @endforeach
                    @endif
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
                    <form method="post" action="/createproduk" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label for="nama_produk">Nama Produk</label>
                            <input type="text" name="nama_produk" id="nama_produk" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="nama_merk">Nama Merk</label>
                            <select name="merk" id="merk" class="form-control">
                                <option value="">Pilih Merk</option>
                                @foreach ($listmerk as $merk )
                                    <option value="{{ $merk->id }}">{{ $merk->nama_merk }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="nama_satuan">Nama Satuan</label>
                            <select name="satuan" id="satuan" class="form-control">
                                <option value="">Pilih Satuan</option>
                                @foreach ($listsatuan as $satuan )
                                    <option value="{{ $satuan->id }}">{{ $satuan->nama_satuan }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="stok">Stok</label>
                            <input type="text" name="stok" id="stok" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="nama_supplier">Nama Supplier</label>
                            <select name="supplier" id="supplier" class="form-control">
                                <option value="">Pilih Supplier</option>
                                @foreach ($listsupplier as $supplier )
                                    <option value="{{ $supplier->id }}">{{ $supplier->nama_supplier }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="harga_jual">Harga Jual</label>
                            <input type="text" name="harga_jual" id="harga_jual" class="form-control">
                        </div>
                        <div class="row" style="margin-bottom: 15px;">
                            <div class="col-md-12">
                              <div class="col-sm-3" style="padding-left: unset;">
                                <label class="bmd-label-floating">Foto Barang</label>
                              </div>
                              <div class="col">
                                <!-- <label for="image" class="form-label">Photo</label> -->
                                <input class="form-control  @error ('foto') is-invalid @enderror" type="file" id="foto_barang" name="foto_barang">
                                <div class="text-danger">
                                  @error('foto')
                                    {{ $message }}
                                  @enderror
                                </div>
                              </div>
                            </div> 
                          </div> 
                        <div class="form-group">
                            <button type="submit" class="btn btn-primary">Save</button>
                            <button type="reset" class="btn btn-warning">Reset</button>
                        </div>
                        <div class="clearfix"></div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection