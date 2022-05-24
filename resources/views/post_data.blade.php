@extends('layouts.navbar')

@section('navbar-alka')
<style>
    .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
    }

    @media (min-width: 768px) {
        .bd-placeholder-img-lg {
            font-size: 3.5rem;
        }
    }

</style>
<h1 class="text-center mt-4">HALAMAN POSTINGAN</h1>
<form action="/postsData">
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-3 col-md-5">
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text">Judul</span>
                    </div>
                    <input type="text" name="judul" class="form-control" placeholder="Judul Cerita"
                        value="{{request('judul')}}">
                </div>
            </div>
            <div class="col-sm-3 col-md-5">
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text">Pembuat Cerita</span>
                    </div>
                    <input type="text" name="pembuat" class="form-control" placeholder="Creator Cerita"
                        value="{{request('pembuat')}}">
                </div>
            </div>
            <div class="col-sm-3 col-md-2">
                <button class="btn btn-success" type="submit">Search</button>
            </div>
        </div>
    </div>
</form>
@if ($posts->isNotEmpty())
<div class="album py-5">
    <div class="container">
        <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
            @foreach ($posts as $data)
            <div class="col">
                <div class="card shadow-sm">
                    <svg class="bd-placeholder-img card-img-top" width="100%" height="225"
                        xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail"
                        preserveAspectRatio="xMidYMid slice" focusable="false">
                        <title>Placeholder</title>
                        <rect width="100%" height="100%" fill="#55595c" /><text x="50%" y="50%" fill="#eceeef"
                            dy=".3em">{{$data->tittle}}</text>
                    </svg>

                    <div class="card-body">
                        <p class="card-text">{{$data->isi}}</p>
                        <div class="d-flex justify-content-between align-items-center">
                            <div class="btn-group">
                                <button type="button"
                                    class="btn btn-sm btn-outline-secondary">{{$data->creator}}</button>
                                <button type="button"
                                    class="btn btn-sm btn-outline-secondary">{{$data->category->name}}</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>
@else
<div>
    <h2 class="text-center mt-5">POSTINGAN TIDAK DI TEMUKAN</h2>
</div>
@endif


@endsection
