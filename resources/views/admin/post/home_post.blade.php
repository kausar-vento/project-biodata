@extends('layouts.navbar_admin')
@section('navbar-admin')

<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Dashboard Post</h1>
    @yield('navbar-admin')
</div>

@if (session()->has('success'))
<div class="alert alert-success alert-dismissible fade show" role="alert">
    {{ session('success') }}
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
@endif

<div class="card">
    <h5 class="card-header"><a class="btn btn-primary" href="/admin-post/create">Tambah
            Post</a></h5>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-striped table-bordered first">
                <thead>
                    <tr>
                        <th>Nomor Post</th>
                        <th>Kategory</th>
                        <th>Judul</th>
                        <th>Creator</th>
                        <th>Isi Cerita</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($data_post as $p)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $p->category->name }}</td>
                        <td>{{ $p->tittle }}</td>
                        <td class="text-truncate" style="max-width: 150px;">{{ $p->creator }}</td>
                        <td class="text-truncate" style="max-width: 150px;">{{ $p->isi }}</td>
                        <td>
                            <a class="badge bg-info" href="{{ route('admin-post.edit', $p->id)}}">
                                <img src="https://img.icons8.com/material-two-tone/24/000000/edit--v1.png" />
                            </a>
                            <form action="{{ route('admin-post.destroy', $p->id)}}" method="post" class="d-inline">
                            @method('DELETE')
                            @csrf
                            <button type="submit" class="badge bg-danger border-0"
                                onclick="return confirm('Yakin Ingin Hapus Post Ini?')"><img
                                    src="https://img.icons8.com/fluency/24/000000/filled-trash.png" /></button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>

@endsection
