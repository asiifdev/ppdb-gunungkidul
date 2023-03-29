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
        Schema::create('lampirans', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('idcalonsiswa');
            $table->foreign('idcalonsiswa')->references('id')->on('calon_siswas');
            $table->string('raport');
            $table->string('nilaibahasaindonesia');
            $table->string('nilaibahasainggris');
            $table->string('nilaimatematika');
            $table->string('nilaiipa');
            $table->string('totalnilai')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('lampirans');
    }
};
