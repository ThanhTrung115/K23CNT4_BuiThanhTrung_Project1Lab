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
        Schema::create('BTT_SAN_PHAM', function (Blueprint $table) {
            $table->id();
            $table->string('bttMaSanPham',255)->unique();
            $table->string('bttTenSanPham',255);
            $table->string('bttHinhAnh',255);
            $table->integer('bttSoLuong');
            $table->float('bttDonGia');
            $table->bigInteger('bttMaLoai')->references('id')->on('BTT_LOAI_SAN_PHAM');
            $table->tinyInteger('bttTrangThai');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('BTT_SAN_PHAM');
    }
};
