@extends('layouts.app')

@section('content')
<div class="container scroll-content">
    <h1 class="mb-1">Manajemen Produk</h1>
    <hr>
    <a href="{{ route('add products') }}" class="btn btn-primary mb-3">Tambah Data</a>
    <div class="alert alert-primary">
     <b>
        Nama Toko:
     </b>
     {{$nama_toko}}
     <br>
     <b>
        Alamat Toko:
     </b>
      {{$alamat_toko}}
     <br>
     <b>
        Kontak Toko:
     </b>
      {{ $telepon_toko }}
    </div>
    <div class="card">
        <div class="card-header">
            <h6>List Produk Kami</h6>
        </div>
  <div class="card-body">
   <table class="table table-striped table-bordered">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Nama Barang</th>
      <th scope="col">Harga Satuan</th>
      <th scope="col">Stok</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>Sepeda</td>
      <td>500000</td>
      <td>2</td>
      <td>
        <button type="button" class="btn btn-success btn-sm">Edit</button>
        <button type="button" class="btn btn-danger btn-sm">Hapus</button>
      </td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>Sepatu Roda</td>
      <td>150000</td>
      <td>5</td>
      <td>
        <button type="button" class="btn btn-success btn-sm">Edit</button>
        <button type="button" class="btn btn-danger btn-sm">Hapus</button>
      </td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td>Skateboard</td>
      <td>350000</td>
      <td>1</td>
      <td>
        <button type="button" class="btn btn-success btn-sm">Edit</button>
        <button type="button" class="btn btn-danger btn-sm">Hapus</button>
      </td>
    </tr>
    <tr>
      <th scope="row">4</th>
      <td>Skuter</td>
      <td>1500000</td>
      <td>6</td>
      <td>
        <button type="button" class="btn btn-success btn-sm">Edit</button>
        <button type="button" class="btn btn-danger btn-sm">Hapus</button>
      </td>
    </tr>
  </tbody>
</table>
  </div>
</div>
</div>
@endsection
