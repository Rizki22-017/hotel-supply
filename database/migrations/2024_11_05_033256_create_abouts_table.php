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
            $table->highligt();
            $table->about_desc();
            $table->about_poin();
            $table->leader_pict();
            $table->leader_name();
            $table->phone();
            $table->history();
            $table->brand();
            $table->address();
            $table->wa_sumatera();
            $table->wa_jawa();
            $table->email();
            $table->operational();
            $table->twitter();
            $table->facebook();
            $table->instagram();
            $table->linkedin();

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
