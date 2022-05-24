@extends('layouts.navbar')

@section('navbar-alka')

<article class="mb-5">
    <h2>{{ $selengkapnya->tittle }}</h2>
    <p><a href="/categories/{{ $selengkapnya->category->slug }}" class="text-decoration-none"> {{ $selengkapnya->category->name }}</a></p>
    {!! $selengkapnya->body !!}
</article>
@endsection
