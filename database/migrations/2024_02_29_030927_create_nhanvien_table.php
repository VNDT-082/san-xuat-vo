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
        Schema::create('NhanVien', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('TenNhanVien');
            $table->boolean('Phai')->default(true);
            $table->string('sdt')->unique(); //dafault la sdt cua tai khoan
            $table->string('email')->unique(); //default la email cua tai khoan
            $table->string('HinhAnh')->default('user-default.jpg');
            $table->string('DiaChi')->nullable();
            $table->double('CanCuoc')->nullable();
            $table->date('NgaySinh')->nullable();
            $table->date('NgayVaoLam')->nullable();
            $table->double('LuongCoBan')->default(0);
            $table->foreignId('users_id')->constrained('users');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('NhanVien');
    }
};
