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
        Schema::create('DonHang', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->timestamp('NgayGia')->nullable();
            $table->string('DiaChiGiao')->nullable();
            $table->string('TrangThai');
            $table->boolean('LoaiDonHang')->default(true); //true=dat gia cong><mua si le
            $table->string('GhiChu')->nullable();
            $table->foreignId('NhanVien_id')->constrained('NhanVien');
            $table->foreignId('KhachHang_id')->constrained('KhachHang');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('DonHang');
    }
};
