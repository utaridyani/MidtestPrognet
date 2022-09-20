@extends('layouts.header')
@section('content')
<div class="container-fluid">
  <div class="row">
    <div class="col">
      <div class="card">
        <div class="card-header">
          <h3 class="card-title">Detail Merk</h3>
          <div class="card-tools">
            <a href="/merk" class="btn btn-sm btn-danger">
              Close
            </a>
          </div>
        </div>
        <div class="card-body">
            <form action="#">
              <div class="form-group">
                <label for="kode_merk">Kode Merk</label>
                <input name="kode_merk" value = "{{ $merk->kode_merk }}" class="form-control" disabled>
              </div>
              <div class="form-group">
                <label for="nama_merk">Nama Merek</label>
                <input name="nama_merk" value = "{{ $merk->nama_merk }}" class="form-control" disabled>
              </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection