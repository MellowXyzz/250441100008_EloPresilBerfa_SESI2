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
        Schema::create('pesanans', function (Blueprint $table) {
            $table->bigInteger('id');
            $table->foreignId('menu_id')
                    ->constrained('menus');

            $table->mediumText('nama_pelanggan');
            $table->integer('nomor_meja');
            $table->integer('jumlah');
            $table->integer('total_harga');
            $table->enum('status',['diproses','selesai','dibatalkan']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pesanans');
    }
};
