<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateResepTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('resep', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_transaksi')->unsigned()->nullable();
            $table->string('nama')->nullable();
            $table->string('alamat')->nullable();
            $table->string('nama_dokter')->nullable();
            $table->string('no_telp')->nullable();
            $table->integer('umur')->nullable();
            $table->boolean('eksternal');
            $table->timestamps();
            $table
              ->foreign('id_transaksi')
              ->references('id')
              ->on('transaksi')
              ->onDelete('restrict');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('resep', function (Blueprint $table) {
            $table->dropForeign(['id_transaksi']);
        });
        Schema::dropIfExists('resep');
    }
}
