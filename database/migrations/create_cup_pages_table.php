<?php

use Gecche\Breeze\Facades\Schema;
use Gecche\Breeze\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;


class CreateCupPagesTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cup_pages', function (Blueprint $table) {
            $table->increments('id');
            $table->string('titolo_it');
            $table->text('content_it');
            $table->text('keywords');

//            $table->integer('area_id')->unsigned()->index();
//            $table->foreign('area_id')->references('id')->on('cup_geo_aree')->onDelete('restrict')->onUpdate('cascade');
            $table->boolean('attivo')->default(1);// varchar(50) DEFAULT NULL,
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('cup_pages');
    }

}
