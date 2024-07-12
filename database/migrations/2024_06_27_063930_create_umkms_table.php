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
        Schema::create('umkms', function (Blueprint $table) {
            $table->id();
            $table->string('nama', 100);
            $table->double('modal');
            $table->string('pemilik', 45);
            $table->string('alamat', 100);
            $table->string('website', 45)->nullable();
            $table->string('email', 45)->nullable();
            $table->unsignedBigInteger('kabkota_id');
            $table->foreign('kabkota_id')->references('id')->on('kabkotas');
            $table->integer('rating')->default(0);
            $table->unsignedBigInteger('kategori_umkm_id');
            $table->foreign('kategori_umkm_id')->references('id')->on('kategori_umkms');
            $table->unsignedBigInteger('pembina_id');
            $table->foreign('pembina_id')->references('id')->on('pembinas');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('umkms');
    }
};
