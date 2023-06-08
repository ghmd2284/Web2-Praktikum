@extends('admin.layout.appadmin')
@section('content')
    <h1 class="mt-4">Kategori Produk</h1>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item"><a href="{{url('dashboard')}}">Dashboard</a></li>
        <li class="breadcrumb-item active">Kategori</li>
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
            <i class="fas fa-list-unstyled me-1"></i>
            Kategori Produk
        </div>
        <div class="card-body">
            @if (session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            @endif
            <a href="{{ url('kategori/create')}}" class="btn btn-primary">Create</a>
            <table id="datatablesSimple">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nama</th>
                        <th>Aksi</th>
                </thead>
                <tfoot>
                    <tr>
                        <th>ID</th>
                        <th>Nama</th>
                        <th>Aksi</th>
                    </tr>
                </tfoot>
                <tbody>
                    @foreach ($kategoriProduk as $kat)
                        <tr>
                            <td>{{ $kat->id }}</td>
                            <td>{{ $kat->nama }}</td>
                            <td><a href="{{ url('kategori/edit/' . $kat->id) }}" class="btn btn-warning">Edit</a>
                                <a onclick="return confrim('Apakah anda yakin ingin menghapus data tabel?')"
                                    href="{{ url('kategori/delete/' . $kat->id) }}" class="btn btn-danger">Hapus</a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
