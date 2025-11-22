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
        Schema::create('kalkulasi_heads', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('user_id');
            $table->date('tgl');
            $table->string('nama');
            $table->string('gender');
            $table->float('age');
            $table->float('bb');
            $table->float('tb');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('kalkulasi_heads');
    }
};
