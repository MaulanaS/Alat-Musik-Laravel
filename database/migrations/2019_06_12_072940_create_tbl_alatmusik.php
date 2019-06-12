<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTblAlatmusik extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_alatmusik', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nama_alat', 10);
            $table->string('merk', 100);
            $table->string('harga', 100);
            $table->string('stok', 100);
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
        Schema::dropIfExists('tbl_alatmusik');
    }
}
