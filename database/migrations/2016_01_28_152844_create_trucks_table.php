<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

/////////////////////////////////////////////////////////
//    Trucks Table Migration
//    Authored On: 29 Jan 2016
/////////////////////////////////////////////////////////

class CreateTrucksTable extends Migration
{
    public function up()
    {
        Schema::create('trucks', function(Blueprint $table)
        {
            $table->increments('id');
            $table->integer('category_id');
            $table->char('truck_name');
            $table->char('truck_number');
            $table->integer('driver_id');
            $table->boolean('truck_status');
        });
    }

    public function down()
    {
        Schema::drop('trucks');
    }
}
