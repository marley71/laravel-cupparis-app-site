<?php

use Illuminate\Database\Migrations\Migration;
use Gecche\Breeze\Database\Schema\Blueprint;

class CreateCupSiteVideosTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('cup_site_videos', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('link');
            $table->string('nome_it')->nullable();
            $table->text('descrizione_it')->nullable();
			$table->enum('type',['youtube'])->default('youtube');
			$table->integer('ordine')->unsigned()->default(0);
            $table->string('mediable_type')->nullable();
            $table->integer('mediable_id')->unsigned()->nullable();
            $table->timestamps();
            $table->nullableOwnerships();
            $table->unique(['mediable_type','mediable_id','ordine']);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('cup_site_videos');
	}

}
