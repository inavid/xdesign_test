<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBannerTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('banner', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('tipobanner_id');
            $table->foreign('tipobanner_id')->references('id')->on('catalogo_tipo_banner');
            $table->string('periodo')->nullable();
            $table->string('fecha');
            $table->string('hora')->nullable();
            $table->string('flyer');
            $table->string('link')->nullable();
            $table->string('background');
            $table->string('correo')->nullable();
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
        //
        Schema::dropIfExists('banner');
    }
}
