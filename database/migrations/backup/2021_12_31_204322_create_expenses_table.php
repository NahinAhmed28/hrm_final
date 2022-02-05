<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateExpensesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('expenses', function (Blueprint $table) {
            $table->id();
            $table->string('itemName');
            $table->string('slug')->nullable();
            $table->date('purchaseDate');
            $table->string('purchaseFrom');
            $table->double('price');
            $table->string('bill',100)->nullable(); //Attachement for the bill
            $table->tinyInteger('status')->unsigned()->default('1')->comment('1=>active, 0=>Inactive');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('expenses');
    }
}
