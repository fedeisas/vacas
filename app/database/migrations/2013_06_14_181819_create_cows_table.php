<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCowsTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cows', function(Blueprint $table) {
            $table->increments('id');
            $table->integer('senasa_id')->unsigned();
            $table->date('birthdate')->nullable();
            $table->integer('tact_id')->unsigned();
            $table->integer('calving_id')->unsigned();
            $table->integer('nutritional_status')->unsigned();
            $table->integer('status_id')->unsigned();
            $table->integer('year')->unsigned();
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
        Schema::drop('cows');
    }

}
