@extends('layouts.header')
@section('content')
<div class="container-fluid">
  <div class="row">
    <div class="col">
      <div class="card">
        <div class="card-header">
          <h3 class="card-title">Detail Supplier</h3>
          <div class="card-tools">
            <a href="/supplier" class="btn btn-sm btn-danger">
              Close
            </a>
          </div>
        </div>
        <div class="card-body">
          <form action="#">
            <div class="form-group">
              <label for="kode_supplier">Kode Supplier</label>
              <input name="kode_supplier" value = "{{ $supplier->kode_supplier }}" class="form-control" disabled>
            </div>
            <div class="form-group">
              <label for="nama_supplier">Nama Supplier</label>
              <input name="nama_supplier" value = "{{ $supplier->nama_supplier }}" class="form-control" disabled>
            </div>
            <div class="form-group">
              <label for="alamat">Alamat Supplier</label>
              <input name="alamat" value = "{{ $supplier->alamat }}" class="form-control" disabled>
            </div>
            <div class="form-group">
              <label for="kontak">Kontak Supplier</label>
              <input name="kontak" value = "{{ $supplier->kontak }}" class="form-control" disabled>
            </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection