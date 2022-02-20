<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateExpensesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('expenses', function(Blueprint $table)
		{
            $table->increments('id');
            $table->string('itemName');
            $table->string('slug')->nullable();
            $table->date('purchaseDate');
            $table->string('purchaseFrom');
            $table->double('price');
            $table->string('bill',100)->nullable(); //Attachment for the bill
            $table->unsignedBigInteger('status')->comment('1=Actve,2=Inactive')->default(1);
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
		Schema::drop('expenses');
	}

}
