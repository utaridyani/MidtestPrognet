@extends('layouts.header')
@section('content')
<div class="container-fluid">
  <div class="row">
    <div class="col">
      <div class="card">
        <div class="card-header">
          <h3 class="card-title">Detail Satuan</h3>
          <div class="card-tools">
            <a href="/satuan" class="btn btn-sm btn-danger">
              Close
            </a>
          </div>
        </div>
        <div class="card-body">
          <form action="#">
            <div class="form-group">
              <label for="kode_satuan">Kode Satuan</label>
              <input name="kode_satuan" value = "{{ $satuan->kode_satuan }}" class="form-control" disabled>
            </div>
              <div class="form-group">
                <label for="nama_satuan">Nama Satuan</label>
                <input name="nama_satuan" value = "{{ $satuan->nama_satuan }}" class="form-control" disabled>
              </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection