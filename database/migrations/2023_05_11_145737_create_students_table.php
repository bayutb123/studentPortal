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
        Schema::create('students', function (Blueprint $table) {
            $table->id(); // NIM
            $table->string('name', 128);
            $table->string('email',  64);
            $table->string('passwords', 256);
            $table->string('phone', 32);
            $table->string('birthplace', 32);
            $table->date('birthday', 64);
            $table->string('address', 256);
            $table->string('city', 32);
            $table->string('province', 32);
            $table->string('kelurahan', 32);
            $table->string('kecamatan', 32);
            $table->string('gender', 16);
            $table->string('religion', 32);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('students');
    }
};
