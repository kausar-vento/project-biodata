@extends('layouts.navbar_admin')

@section('navbar-admin')

<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Edit Post</h1>
    @yield('navbar-admin')
</div>

<div class="col-lg-8 mb-5">
    <form method="POST" action="{{ route('admin-post.update', $data->id) }}">
        @method('PUT')
        @csrf
        <div class="input-group mb-3">
            <label class="input-group-text" for="inputGroupSelect01">Category</label>
            <select class="form-select" name="category_id" id="inputGroupSelect01">
                @foreach ($data_category as $item)
                <option value="{{$item->id}}">{{ $item->name}}</option>
                @endforeach
            </select>
        </div>

        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Judul Artikel</label>
            <input type="text" name="tittle" class="form-control @error('tittle') is-invalid @enderror"
                id="exampleInputEmail1" aria-describedby="emailHelp" value="{{ old('tittle', $data->tittle)}}">
            @error('tittle')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Pembuat Cerita</label>
            <input type="text" name="creator" class="form-control @error('creator') is-invalid @enderror"
                id="exampleInputEmail1" aria-describedby="emailHelp" value="{{ old('creator', $data->creator)}}">
            @error('creator')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Isi Cerita</label>
            <textarea name="isi" class="form-control @error('isi') is-invalid @enderror"
                aria-label="With textarea">{{ old('isi', $data->isi)}}</textarea>
            @error('isi')
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
                <a href="/admin-post" class="btn btn-dark ml-4">Cancel <img
                        src="https://img.icons8.com/ios-glyphs/30/000000/cancel.png" /></a>
            </div>
        </div>
    </form>
</div>
@endsection
