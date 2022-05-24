@extends('layouts.navbar')

@section('navbar-alka')

<h1 class="mb-5">Post Category : {{ $category }}</h1>
@foreach ($posts as $data)
<article class=" mb-5">
    <h2>
        <a href="/baca-selengkapnya/{{ $data->slug }}">{{ $data->tittle }}</a>
    </h2>
    <p>{{ $data->excerpt }}</p>
</article>
@endforeach

@endsection
