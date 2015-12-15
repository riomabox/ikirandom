<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Inventories extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('inventories', function (Blueprint $table){
			$table->increments('id');
			$table->integer('purchase_id');
			$table->integer('sale_id');
			$table->integer('product_id');
			$table->integer('quantity');
			$table->integer('purchase_price');
			$table->integer('sale_price');
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
		Schema::drop('iventories');
	}

}
