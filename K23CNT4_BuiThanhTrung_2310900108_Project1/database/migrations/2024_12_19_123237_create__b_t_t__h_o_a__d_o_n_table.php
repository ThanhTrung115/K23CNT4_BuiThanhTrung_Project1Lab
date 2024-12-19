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
        Schema::create('BTT_HOA_DON', function (Blueprint $table) {
            $table->id();
            $table->string('bttMaHoaDon',255)->unique();
            $table->bigInteger('bttMaKhachHang')->references('id')->on('BTT_KHACH_HANG');
            $table->date('bttNgayHoaDon');
            $table->string('bttHoTenKhachHang',255);
            $table->string('bttEmail',255);
            $table->string('bttDienThoai',255);
            $table->string('bttDiaChi',255);
            $table->float('bttTongTriGia');
            $table->tinyInteger('bttTrangThai');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('BTT_HOA_DON');
    }
};
