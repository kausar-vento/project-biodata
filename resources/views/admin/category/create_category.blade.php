@extends('layouts.navbar_admin')

@section('navbar-admin')

<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Tambah Post</h1>
    @yield('navbar-admin')
</div>

<div class="col-lg-8 mb-5">
    <form method="POST" action="{{ route('admin-category.store') }}">
        @csrf

        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Nama Kategori</label>
            <input type="text" name="name" class="form-control @error('name') is-invalid @enderror"
                id="exampleInputEmail1" aria-describedby="emailHelp" value="{{ old('name')}}">
            @error('name')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
            @enderror
        </div>

        <div class="row justify-content-between">
            <div class="col-4">
                <button type="submit" class="btn btn-primary">Submit <img
                        src="https://img.icons8.com/ios/30/000000/submit-for-approval.png" /></button>
            </div>
            <div class="col-3">
                <a href="/admin-category" class="btn btn-dark ml-4">Cancel <img
                        src="https://img.icons8.com/ios-glyphs/30/000000/cancel.png" /></a>
            </div>
        </div>
    </form>
</div>
@endsection

