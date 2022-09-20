<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('produks', function (Blueprint $table) {
            $table->integer('id', '11');
            $table->string('kode');
            $table->string('nama_produk');
            $table->unsignedBiginteger('id_merk')->unsigned();
            $table->unsignedBigInteger('id_satuan')->unsigned();
            $table->integer('stok')->length(11)->unsigned();
            $table->unsignedBigInteger('id_supplier')->unsigned();
            $table->double('harga_jual');
            $table->string('foto_barang');
            $table->timestamps();

            $table->foreign('id_merk')->references('id')->on('merks');
            $table->foreign('id_satuan')->references('id')->on('satuans');
            $table->foreign('id_supplier')->references('id')->on('suppliers');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('produks');
    }
};
