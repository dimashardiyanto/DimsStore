@extends('layouts.app')
@section('title', 'Data Barang')
@section('content')
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">List Barang</h6>
        </div>
        <div class="card-body">
            <a href="{{ route('create.barang') }}" class="btn btn-primary mb-3"><i class="fas fa-plus"></i> Create Barang</a>
            <div class="table-responsive">
                <table class="table table-bordered table-striped" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Kode barang</th>
                            <th>Nama Barang</th>
                            <th>Kategori</th>
                            <th>Harga</th>
                            <th>Jumlah</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($barang as $row)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $row->kode_barang }}</td>
                                <td>{{ $row->nama_barang }}</td>
                                <td>{{ $row->kategori_barang }}</td>
                                <td>Rp.{{ number_format($row->harga) }}</td>
                                <td>{{ $row->jumlah }}</td>
                                <td>
                                    <a href="{{ route('barang.edit', $row->id) }}" class="btn btn-sm btn-warning"><i
                                            class="fas fa-edit"></i> Edit</a>
                                    <a href="{{ route('barang.delete', $row->id) }}" class="btn btn-sm btn-danger"><i
                                            class="fas fa-trash" id="delete"></i> Delete</a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
