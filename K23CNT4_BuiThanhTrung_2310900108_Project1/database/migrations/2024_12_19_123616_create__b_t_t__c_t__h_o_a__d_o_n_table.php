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
        Schema::create('BTT_CT_HOA_DON', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('bttHoaDonID')->references('id')->on('BTT_HOA_DON');
            $table->bigInteger('bttSanPhamID')->references('id')->on('BTT_SAN_PHAM');
            $table->integer('bttSoLuongMua');
            $table->float('bttDonGiaMua');
            $table->float('bttThanhTien');
            $table->tinyInteger('bttTrangThai');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('BTT_CT_HOA_DON');
    }
};
