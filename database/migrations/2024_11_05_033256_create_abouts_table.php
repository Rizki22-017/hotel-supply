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
        Schema::create('abouts', function (Blueprint $table) {
            $table->id();
            $table->string('highlight'); // Perbaiki 'highligt' menjadi 'highlight'
            $table->text('about_desc'); // Ubah jika 'about_desc' adalah teks
            $table->json('about_poin1'); // Menggunakan tipe json untuk menyimpan array
            $table->json('about_poin2'); // Menggunakan tipe json untuk menyimpan array
            $table->string('leader_pict'); // Pastikan untuk menentukan tipe data yang sesuai
            $table->string('leader_name'); // Pastikan untuk menentukan tipe data yang sesuai
            $table->string('phone'); // Pastikan untuk menentukan tipe data yang sesuai
            $table->text('history'); // Ubah jika 'history' adalah teks
            $table->json('brand'); // Menggunakan tipe json untuk menyimpan array
            $table->string('vision');
            $table->json('mission');
            $table->string('address'); // Pastikan untuk menentukan tipe data yang sesuai
            $table->string('wa_sumatera'); // Pastikan untuk menentukan tipe data yang sesuai
            $table->string('wa_jawa'); // Pastikan untuk menentukan tipe data yang sesuai
            $table->string('email'); // Pastikan untuk menentukan tipe data yang sesuai
            $table->string('operational'); // Pastikan untuk menentukan tipe data yang sesuai
            $table->string('twitter'); // Pastikan untuk menentukan tipe data yang sesuai
            $table->string('facebook'); // Pastikan untuk menentukan tipe data yang sesuai
            $table->string('instagram'); // Pastikan untuk menentukan tipe data yang sesuai
            $table->string('linkedin'); // Pastikan untuk menentukan tipe data yang sesuai

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('abouts');
    }
};
