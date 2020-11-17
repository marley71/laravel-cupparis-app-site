<?php

use Illuminate\Database\Migrations\Migration;
use Gecche\Breeze\Database\Schema\Blueprint;

class CreateCupSiteNewsVideoTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('cup_site_news_videos', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('link');
			$table->enum('type',['youtube'])->default('youtube');
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
		Schema::drop('cup_site_news_videos');
	}

}
