<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCanvasEntitiesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('canvas_entities', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('name');
			$table->integer('x');
			$table->integer('y');
			$table->integer('dx');
			$table->integer('dy');
			$table->integer('radius');
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
		Schema::drop('canvas_entities');
	}

}
