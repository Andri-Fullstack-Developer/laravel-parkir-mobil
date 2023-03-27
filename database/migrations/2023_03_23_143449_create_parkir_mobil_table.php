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
        //return 'saya malas';
         Schema::create('parkirmobil', function (Blueprint $table) {
             $table->id();
             $table->string('pilihan');
             $table->string('Nplat');
             $table->string('lantai');
             $table->string('nomerlantai')->unique()->change();
             $table->time('jam');
             $table->date('tanggal');
             $table->timestamps();
         });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('parkirmobil');
    }
};
