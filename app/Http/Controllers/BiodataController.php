<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Biodata_;
use App\Models\Biodata;
use App\Models\Tittle;

class BiodataController extends Controller
{
    public static function biodata()
    {
        return view('biodata_alka', [
            "tittle" => Biodata::first()->tittle,
            "nama" => Biodata::first()->nama,
            "tanggal_lahir" => Biodata::first()->tanggal_lahir,
            "kampus" => Biodata::first()->kampus,
            "usia" => Biodata::first()->usia,
            "agama" => Biodata::first()->agama,
            "tempat_lahir" => Biodata::first()->tempat_lahir,
            "cita" => Biodata::first()->cita,
            "sd" => Biodata::first()->sd,
            "smp" => Biodata::first()->smp,
            "smk" => Biodata::first()->smk
        ]);
    }
    
    public static function komentar()
    {
        return view('komentar', [
            "tittle" => Tittle::find(1)->name
        ]);
    }

    public static function halamanAwal()
    {
        return view('halaman_utama', [
            "tittle" => Tittle::find(2)->name
        ]);
    }
}
