@extends('layouts.header')
@section('content')
<div class="container-fluid">
  <div class="row">
    <div class="col">
      <div class="card">
        <div class="card-header">
          <div class="card-tools">
              <a href="/insertsupplier" class="btn btn-sm btn-success">
                  New Supplier
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
                  <th>Kode Supplier</th>
                  <th>Nama Supplier</th>
                  <th>Alamat</th>
                  <th>Kontak</th>
                  <th>Aksi</th>
                </tr>
              </thead>
              <tbody>
                @foreach ($listsupplier as $supplier)
                <tr>
                  <td>{{ $supplier->kode_supplier }}</td>
                  <td>{{ $supplier->nama_supplier }}</td>
                  <td>{{ $supplier->alamat }}</td>
                  <td>{{ $supplier->kontak }}</td>
                  <td>
                    <a href="/detailsupplier/{{ $supplier->id }}" class="btn btn-sm btn-success mr-2 mb-2"><i class="fa fa-info"></i></a>
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