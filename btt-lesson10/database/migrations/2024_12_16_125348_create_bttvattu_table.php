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
        Schema::create('bttvattu', function (Blueprint $table) {
            // $table->id();
            // $table->timestamps();
            $table->string('bttMaVTu')->primary();
            $table->string('bttTenVTu')->unique();
            $table->string('bttDvTinh');
            $table->float('bttPhanTram');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bttvattu');
    }
};
