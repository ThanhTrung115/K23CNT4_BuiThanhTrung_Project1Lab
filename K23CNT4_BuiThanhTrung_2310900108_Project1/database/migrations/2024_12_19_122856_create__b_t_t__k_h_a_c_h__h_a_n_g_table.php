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
        Schema::create('BTT_KHACH_HANG', function (Blueprint $table) {
            $table->id();
            $table->string('bttMaKhachHang',255)->unique();
            $table->string('bttHoTenKhachHang',255);
            $table->string('bttEmail',255);
            $table->string('bttMatKhau',255);
            $table->string('bttDienThoai',255);
            $table->string('bttDiaChi',255);
            $table->date('bttNgayDangKy');
            $table->tinyInteger('bttTrangThai');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('BTT_KHACH_HANG');
    }
};
