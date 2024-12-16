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
        Schema::create('bttnhacc', function (Blueprint $table) {
            // $table->id();
            // $table->timestamps();
            $table->string('bttMaNCC')->primary();
            $table->string('bttTenNCC');
            $table->string('bttDiachi');
            $table->string('bttDienthoai');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bttnhacc');
    }
};
