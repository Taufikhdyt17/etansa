<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDetailSuratsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('detail_surat', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('surat_id')->unsigned();
            $table->foreign('surat_id')
                  ->references('id')->on('surat')
                  ->onDelete('cascade');
            $table->bigInteger('user_id')->unsigned();
            $table->foreign('user_id')
                  ->references('id')->on('users')
                  ->onDelete('cascade');
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
        Schema::dropIfExists('detail_surat');
    }
}
