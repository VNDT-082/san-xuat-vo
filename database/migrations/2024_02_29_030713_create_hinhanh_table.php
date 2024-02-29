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
        Schema::create('HinhAnh', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('FileName')->default('default.jpg');
            $table->foreignId('Vo_id')->constrained('Vo');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('HinhAnh');
    }
};