<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('calon_siswas', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('nik');
            $table->integer('nisn');
            $table->string('name');
            $table->string('email');
            $table->text('nohp');
            $table->text('tempatlahir');
            $table->string('tanggallahir');
            $table->string('agama');
            $table->string('jeniskelamin');
            $table->unsignedBigInteger('idjurusan');
            $table->foreign('idjurusan')->references('id')->on('jurusans');
            $table->unsignedBigInteger('iduser');
            $table->foreign('iduser')->references('id')->on('users');
            
            
            $table->text('alamat');
            $table->unsignedBigInteger('idprovinsi');
            $table->foreign('idprovinsi')->references('id')->on('provinsis');
            $table->unsignedBigInteger('idkabupaten');
            $table->foreign('idkabupaten')->references('id')->on('kabupatens');
            $table->unsignedBigInteger('idkecamatan');
            $table->foreign('idkecamatan')->references('id')->on('kecamatans');
            $table->unsignedBigInteger('idkelurahan');
            $table->foreign('idkelurahan')->references('id')->on('kelurahans');

            $table->unsignedBigInteger('idsekolah');
            $table->foreign('idsekolah')->references('id')->on('data_sekolahs');

            
            $table->string('namaayah');
            $table->string('namaibu');
            $table->string('pekerjaanayah');
            $table->string('pekerjaanibu');
            $table->string('nohportu');
            $table->string('penerimabantuan')->nullable();
            $table->string('status')->default("O");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('calon_siswas');
    }
};
