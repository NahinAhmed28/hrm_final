<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDesignationTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('designation', function(Blueprint $table)
		{
			$table->increments('id');
			$table->unsignedInteger('deptID');
			$table->foreign('deptID')
      			  ->references('id')->on('department')
      			  ->onUpdate('cascade')
      			  ->onDelete('cascade');
            $table->unsignedBigInteger('status')->comment('1=Actve,2=Inactive')->default(1);
      		$table->string('designation',100);
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
		Schema::drop('designation');
	}

}
