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
        Schema::create('BTT_QUAN_TRI', function (Blueprint $table) {
            $table->id();
            $table->string('bttTaiKhoan',255)->unique();
            $table->string('bttMatKhau',255);
            $table->tinyInteger('bttTrangThai');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('BTT_QUAN_TRI');
    }
};
