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
            $table->string('highlight');
            $table->text('about_desc');
            $table->json('about_poin1')->nullable();
            $table->json('about_poin2')->nullable();
            $table->string('leader_pict');
            $table->string('leader_name');
            $table->string('phone')->nullable();
            // $table->text('history');
            // $table->json('brand');
            $table->string('vision');
            $table->json('mission');
            $table->string('address');
            $table->string('wa_sumatera');
            $table->string('wa_jawa');
            $table->string('email');
            // $table->string('operational');
            $table->string('twitter');
            $table->string('facebook');
            $table->string('instagram');
            $table->string('linkedin');
            $table->string('shopee')->nullable();

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
