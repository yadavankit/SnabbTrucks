<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

/////////////////////////////////////////////////////////
//    Drivers Table Migration
//    Authored On: 29 Jan 2016
/////////////////////////////////////////////////////////

class CreateDriversTable extends Migration
{
    public function up()
    {
        Schema::create('drivers', function(Blueprint $table)
        {
            $table->increments('id');
            $table->char('driver_name');
        });
    }

    public function down()
    {
        //
        Schema::drop('drivers');
    }
}
