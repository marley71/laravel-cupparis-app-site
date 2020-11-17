<?php

use Illuminate\Database\Migrations\Migration;
use Gecche\Breeze\Database\Schema\Blueprint;

class CreateCupSiteNewsAttachmentTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('cup_site_news_attachments', function(Blueprint $table)
		{
			$table->increments('id');
            $table->string('nome_it')->nullable();
            $table->string('ext', 6);
            $table->text('descrizione_it')->nullable();
            $table->string('nome_en')->nullable();
            $table->text('descrizione_en')->nullable();
            $table->string('nome_es')->nullable();
            $table->text('descrizione_es')->nullable();
            $table->boolean('reserved')->nullable();
            $table->integer('ordine')->unsigned()->default(0);
			$table->integer('cup_site_news_id')->unsigned()->index();
			$table->foreign('cup_site_news_id')->references('id')->on('cup_site_news')->onDelete('cascade');
            $table->timestamps();
            $table->nullableOwnerships();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('cup_site_news_attachments');
	}

}
