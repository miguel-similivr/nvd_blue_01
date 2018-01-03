<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDatalogsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('datalogs', function (Blueprint $table) {
            $table->increments('id');
            $table->string('enginecode');
            $table->double('data');
            $table->integer('car_id')->unsigned();
            $table->timestamps();
        });

        Schema::table('datalogs', function (Blueprint $table) {
            $table->foreign('car_id')->references('id')->on('cars');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('datalogs');
    }
}
