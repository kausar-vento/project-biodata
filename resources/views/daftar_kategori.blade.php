@extends('layouts.navbar')

@section('navbar-alka')

@foreach ($kategori as $data)
    <ul>
        <li>
            <a href="/categories/{{ $data->slug }}">{{ $data->name }}</a>
        </li>
    </ul>
@endforeach

@endsection
