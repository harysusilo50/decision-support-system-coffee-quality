<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class DropHargaAtBijiKopiTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('biji_kopi', function (Blueprint $table) {
            $table->integer('harga');
        });
    }
    
    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('biji_kopi', function (Blueprint $table) {
            $table->dropColumn('harga');
        });
    }
}
