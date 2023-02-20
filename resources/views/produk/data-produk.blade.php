@extends('layouts.home-layouts')
@section('content')
<div class="card">
    <div class="card-header mb-5">
      Crud Data Produk / Paket Cucian Laundry
    </div>
    <div class="card-body">
        <button type="button" class="btn btn-primary mb-4">Tambah +</button>

        <table class="table table-striped">
            <thead>
                <tr>
                  <th scope="col">No</th>
                  <th scope="col">ID Outlet</th>
                  <th scope="col">Jenis</th>
                  <th scope="col">Nama Paket</th>
                  <th scope="col">Harga</th>
                  <th scope="col">Aksi</th>
  
                </tr>
              </thead>
        </table>
    </div>
  </div>
@endsection