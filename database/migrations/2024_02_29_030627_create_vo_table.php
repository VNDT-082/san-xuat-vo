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
        Schema::create('Vo', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('TenVo');
            $table->string('ChatLieu')->nullable();
            $table->string('MoTa')->nullable();
            $table->string('Phai')->default('Phù hợp cả nam và nữ');
            $table->double('Gia');
            $table->string('HinhAnh')->default('default.jpg');
            $table->boolean('HinhThuc')->default(true); //true = gia cong><mua si le
            $table->boolean('TrangThai')->default(true); // trang thai con ban hay khong

            $table->integer('SoLuongTon')->default(0);
            $table->foreignId('LoaiVo_id')->constrained('LoaiVo');
            $table->foreignId('CongTy_id')->constrained('CongTy');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('Vo');
    }
};
