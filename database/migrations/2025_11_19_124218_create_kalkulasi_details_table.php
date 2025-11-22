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
        Schema::create('kalkulasi_details', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('kalkulasi_id');
            $table->string('z_score');
            $table->string('status');
            $table->string('kategori');
            $table->float('bb/u')->nullable();
            $table->float('tb/u')->nullable();
            $table->float('bb/tb')->nullable();
            $table->longText('penjelasan');
            $table->longText('rekomendasi');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('kalkulasi_details');
    }
};
