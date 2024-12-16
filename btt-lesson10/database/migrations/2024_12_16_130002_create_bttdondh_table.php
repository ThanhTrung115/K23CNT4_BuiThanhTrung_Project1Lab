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
        Schema::create('bttdondh', function (Blueprint $table) {
            // $table->id();
            // $table->timestamps();
            $table->string('bttSoDH');
            $table->string('bttMaVTu');
            $table->integer('bttSlDat');
            // Tạo khóa chính trên 2 cột (bttSoDH, bttMaVTu)
            $table->primary(['bttSoDH','bttMaVTu']);
            // Khóa ngoại
            $table->foreign('bttSoDH')->references('bttSoDH')->on('bttdondh');
            $table->foreign('bttMaVTu')->references('bttMaVTu')->on('bttvattu');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bttdondh');
    }
};
