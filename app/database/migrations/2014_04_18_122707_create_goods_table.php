<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGoodsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('goods', function(Blueprint $table)
		{
			$table->increments("id");
			$table->integer("user_id");
			$table->integer("goods_id");
			$table->integer("count");
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('goods', function(Blueprint $table)
		{
			//
		});
	}

}
