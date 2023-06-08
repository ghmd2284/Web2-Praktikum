@extends('admin.layout.appadmin')
@section('content')
    <h1 class="mt-4">Daftar Produk</h1>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item"><a href="{{ url('dashboard') }}">Dashboard</a></li>
        <li class="breadcrumb-item active">Daftar Produk</li>
    </ol>
    {{-- <div class="card mb-4">
        <div class="card-body">
            DataTables is a third party plugin that is used to generate the demo table below. For more information about
            DataTables, please visit the
            <a target="_blank" href="https://datatables.net/">official DataTables documentation</a>
            .
        </div>
    </div> --}}
    <div class="card mb-4">
        <div class="card-header">
            <i class="fas fa-list me-1"></i>
            Daftar Produk
        </div>
        <div class="card-body">
            @if (session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            @endif
            <div>
                <a class="btn btn-primary" href="{{ url('produk/create') }}">Create</a>
            </div>
            <table id="datatablesSimple">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Kode</th>
                        <th>Nama</th>
                        <th>Harga Jual</th>
                        <th>Harga Beli</th>
                        <th>Stok</th>
                        <th>Min Stok</th>
                        <th>Deskripsi</th>
                        <th>Kategori Produk</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tfoot>
                    <tr>
                        <th>No</th>
                        <th>Kode</th>
                        <th>Nama</th>
                        <th>Harga Jual</th>
                        <th>Harga Beli</th>
                        <th>Stok</th>
                        <th>Min Stok</th>
                        <th>Deskripsi</th>
                        <th>Kategori Produk</th>
                        <th>Aksi</th>
                    </tr>
                </tfoot>
                <tbody>
                    @php $no = 1; @endphp
                    @foreach ($produk as $p)
                        <tr>
                            <td>{{ $no }}</td>
                            <td>{{ $p->kode }}</td>
                            <td>{{ $p->nama }}</td>
                            <td>{{ number_format($p->harga_jual) }}</td>
                            <td>{{ number_format($p->harga_beli) }}</td>
                            <td>{{ $p->stok }}</td>
                            <td>{{ $p->min_stok }}</td>
                            <td>{{ $p->deskripsi }}</td>
                            <td>{{ $p->nama_kategori }}</td>
                            <td><a href="{{ url('produk/edit/' . $p->id) }}" class="btn btn-warning">Edit</a>
                                <a onclick="return confrim('Apakah anda yakin ingin menghapus data tabel?')"
                                    href="{{ url('produk/delete/' . $p->id) }}" class="btn btn-danger">Hapus</a>
                            </td>
                        </tr>
                        @php $no++; @endphp
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
