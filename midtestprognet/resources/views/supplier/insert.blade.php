@extends('layouts.header')
@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col">
            <div class="card">
                <div class="card-header">
                    <div class="card-tools">
                        <a href="/satuan" class="btn btn-sm btn-danger">
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
                    <form method="post" action="/suppliercreate" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label for="nama_supplier">Nama Supplier</label>
                            <input type="text" name="nama_supplier" id="nama_supplier" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="alamat">Alamat</label>
                            <input type="text" name="alamat" id="alamat" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="kontak">Kontak</label>
                            <input type="text" name="kontak" id="kontak" class="form-control">
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