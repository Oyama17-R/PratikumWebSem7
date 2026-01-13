<<<<<<< HEAD
@extends('layouts.master')

@section('content')
<div class="row">
    <div class="col-lg-12">
        <div class="card shadow">
            <div class="card-header">
                <h6 class="m-0 font-weight-bold text-primary">Form Edit</h6>
            </div>
            <!-- Card Body -->
            <div class="card-body">
                <form method="post" action="/admin/barang/update/{{$data->id}}">
                    @csrf
                    <div class="form-group">
                        Kode Barang
                        <input type="text" class="form-control" name="kode" required value="{{$data->kode}}">
                    </div>
                    <div class="form-group">
                        Nama Barang
                        <input type="text" class="form-control" name="nama" required value="{{$data->nama}}">
                    </div>
                    <div class="form-group">
                        Stok
                        <input type="text" class="form-control" name="stok" required value="{{$data->stok}}">
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-primary btn-lg"> <i class="fa fa-save"></i> UPDATE</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
    
=======
@extends('layouts.master')

@section('content')
<div class="row">
    <div class="col-lg-12">
        <div class="card shadow">
            <div class="card-header">
                <h6 class="m-0 font-weight-bold text-primary">Form Edit</h6>
            </div>
            <!-- Card Body -->
            <div class="card-body">
                <form method="post" action="/admin/barang/update/{{$data->id}}">
                    @csrf
                    <div class="form-group">
                        Kode Barang
                        <input type="text" class="form-control" name="kode" required value="{{$data->kode}}">
                    </div>
                    <div class="form-group">
                        Nama Barang
                        <input type="text" class="form-control" name="nama" required value="{{$data->nama}}">
                    </div>
                    <div class="form-group">
                        Stok
                        <input type="text" class="form-control" name="stok" required value="{{$data->stok}}">
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-primary btn-lg"> <i class="fa fa-save"></i> UPDATE</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
    
>>>>>>> 5a9bda5596de1b64cb74c4607ff594b279d73817
@endsection