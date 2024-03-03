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
        Schema::create('tintuc', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('TieuDe');
            $table->text('NoiDung');
            $table->string('HinhAnh')->default('default.jpg');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tintuc');
    }
};
