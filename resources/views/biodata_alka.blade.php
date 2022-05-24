@extends('layouts.navbar')

@section('navbar-alka')

<div class="container-xl" style="margin-top:30px">
    <div class="row">
        <div class="col-sm-4">
            <img class="img-fluid" src="images/foto1.png" style="width: 80%;">
        </div>
        <div class="col-sm-8">
            <h2>{{ $nama }}</h2>
            <h5>{{ $tanggal_lahir }}</h5>
            <p>Perkenalkan Nama Saya <b>Muhamad Al Kausar Ramadhan</b> Saya Mahasiswa <b>{{ $kampus }}
                </b>Prodi D-IV Teknik Informatika Dan Usia Saya Adalah <b>{{ $usia }}</b>. Saya Beragama <b>{{ $agama }}</b>. Saya Lahir Di <b>{{ $tempat_lahir }}</b>. Cita - Cita Saya Adalah Menjadi
            <b> {{ $cita }}</b></p>
            <br>
            <h2>PENDIDIKAN</h2>
            <li>{{ $sd }}</li>
            <li>{{ $smp }}</li>
            <li>{{ $smk }}</li>
            <br>
            <h2>Project Yang Pernah Dibuat</h2>
            <li>Aplikasi E - Commerce Warehousenesia Export Menggunakan Laravel (Belum Jadi)</li>
            <li>Aplikasi Sistem Pembayaran Uang Sekolah Sederhana Menggunakan Laravel</li>
            <li>Website Blogger Menggunakan Laravel</li>
            <li>Website Cerita Online Menggunakan PHP Native</li>
            <li>Aplikasi Pembelian Buku Menggunakan JAVA NETBEANS</li>
        </div>
    </div>
</div>
@endsection
