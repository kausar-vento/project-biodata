<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBiodatasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('biodatas', function (Blueprint $table) {
            $table->id();
            $table->string('tittle');
            $table->string('nama');
            $table->date('tanggal_lahir');
            $table->string('kampus');
            $table->integer('usia');
            $table->string('agama');
            $table->string('tempat_lahir');
            $table->string('cita');
            $table->string('sd');
            $table->string('smp');
            $table->string('smk');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('biodatas');
    }
}
