<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateNoticeboardsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('noticeboards', function(Blueprint $table)
		{
			$table->increments('id');
            $table->string('title');
            $table->text('description');
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
		Schema::drop('noticeboards');
	}

}
