<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDataPenjualanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('data_penjualan', function (Blueprint $table) {
            $table->id();
            $table->foreignId('biji_kopi_id')->constrained('biji_kopi')->onDelete('cascade');
            $table->integer('jumlah_penjualan');
            $table->string('tanggal_penjualan');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('data_penjualan');
    }
}
