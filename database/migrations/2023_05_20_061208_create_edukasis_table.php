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
        Schema::create('edukasis', function (Blueprint $table) 
        {
            $table->id()->unique();
            $table->longText('materi');
            $table->longText('judul');
            $table->longText('paragraf1');
            $table->longText('paragraf2')->nullable();
            $table->longText('paragraf3')->nullable();
            $table->longText('paragraf4')->nullable();
            $table->longText('paragraf5')->nullable();
            $table->longText('image');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('edukasis');
    }
};
