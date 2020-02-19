<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSuratsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('surat', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('pengirim');
            $table->boolean('jenis_surat');
            $table->string('no_surat');
            $table->string('perihal');
            $table->date('tgl_surat');
            $table->time('jam');
            $table->date('tgl_kirim');
            $table->string('file_surat');
            $table->boolean('status_surat');
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
        Schema::dropIfExists('surat');
    }
}
