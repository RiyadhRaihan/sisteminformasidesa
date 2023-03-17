<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('warga', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->string('nik');
            $table->string('nokk');
            $table->string('alamat');
            $table->string('url');
            $table->string('agama');
            $table->string('jk');
            $table->string('status_ktp');
            $table->string('pekerjaan');
            $table->string('nobpjs');
            $table->string('npwp');
            $table->string('status_menetap');
            $table->string('status_perkawinan');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('warga');
    }
};
