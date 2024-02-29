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
        Schema::create('CongTy', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('TenCongTy');
            $table->string('TenVietTat');
            $table->string('NguoiDaiDien')->nullable();
            $table->string('DiaChi')->nullable();
            $table->string('Logo')->default('logo-empty.jpg');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('CongTy');
    }
};
