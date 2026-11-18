@extends('layouts.master')

@section('content')
    <h3>Daftar produk kami</h3>
    
    <button class="btn btn-primary mb-3">Tambah Data</button>

    <div class="card">
        <div class="card-header">
            Produk Kami
        </div>
        <div class="card-body p-0">
            <table class="table table-bordered table-striped m-0">
                <thead>
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Nama Produk</th>
                        <th scope="col">Stok</th>
                        <th scope="col">Harga</th>
                        <th scope="col">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($products as $item)
                        <tr>
                            <th scope="row">{{ $item['no'] }}</th>
                            <td>{{ $item['nama'] }}</td>
                            <td>{{ $item['stok'] }}</td>
                            <td>{{ $item['harga'] }}</td>
                            <td>
                                <button class="btn btn-danger btn-sm">Delete</button>
                                <button class="btn btn-warning btn-sm text-white">Edit</button>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection