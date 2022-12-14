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
        Schema::create('rekams', function (Blueprint $table) {
            $table->id();
            $table->string('no_rm', 10)->unique();
            $table->string('no_bpjs', 20)->unique()->nullable();
            $table->string('prolanis', 30)->nullable();
            $table->string('nama', 100);
            $table->enum('kelamin', ['laki-laki', 'perempuan']);
            $table->date('tgl_lahir');
            $table->string('dusun', 100);
            $table->string('rt', 10);
            $table->string('rw', 10);
            $table->string('desa', 100);
            $table->string('kecamatan', 100);
            $table->string('kota_kab', 100);
            $table->string('no_telp', 13)->nullable();
            $table->string('pemilik_no_telp', 100)->nullable();
            $table->string('ppk_umum', 100)->nullable();
            $table->string('jenis_peserta_bpjs', 100)->nullable();
            $table->date('tgl_mutasi_bpjs')->nullable();
            $table->string('no_kk', 30)->nullable();
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
        Schema::dropIfExists('rekams');
    }
};
