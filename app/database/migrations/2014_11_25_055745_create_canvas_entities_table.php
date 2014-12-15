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
			$table->string('x');
			$table->string('y');
			$table->string('dx');
			$table->string('dy');
			$table->string('radius');
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
