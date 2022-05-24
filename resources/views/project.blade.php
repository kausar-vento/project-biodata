@extends('layouts.navbar')

@section('navbar-alka')
<div id="loading"></div>
<div class="box">
    <div class="gambar" id="image">
        <img id="sliderImage1" src="images/foto1.png" style="width: 40%" alt="">
        <img id="sliderImage2" src="images/foto2.png" style="width: 40%" alt="">
    </div>
    <div>
        <b>
            <center><p class="jdl">{{ $tittle }}</p></center>
        </b>
    </div>
    <div class="form">
        <form action="" method="GET">
            <li>Aplikasi E - Commerce Warehousenesia Export Menggunakan Laravel (Belum Jadi)</li>
            <li>Aplikasi Sistem Pembayaran Uang Sekolah Sederhana GOSPP Menggunakan Laravel</li>
            <li>Website Blogger Menggunakan Laravel</li>
            <li>Website Cerita Online Menggunakan PHP</li>
            <li>Aplikasi Pembelian Buku Menggunakan JAVA</li>
            <tr>
                <td><a href="/data_diri_alka"><input type="button" class="sbt3" value="Kembali Ke Menu Awal"></td></a>
            </tr>
        </form>
    </div>
</div>
<script src="js_biodata/jquery-3.6.0.js"></script>
<script src="js_biodata/animasi.js"></script>
<script>
    var loading = document.getElementById('loading');

    window.addEventListener('load', function () {
        loading.style.display = "none";
    });

</script>
@endsection
