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
			$table->decimal('x');
			$table->decimal('y');
			$table->decimal('dx');
			$table->decimal('dy');
			$table->decimal('radius');
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
