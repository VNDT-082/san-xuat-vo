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
        Schema::create('ChiTietDonHang', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->integer('SoLuong')->default(1);
            $table->double('Gia');
            $table->foreignId('DonHang_id')->constrained('DonHang');
            $table->foreignId('Vo_id')->constrained('Vo');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ChiTietDonHang');
    }
};
