<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

/////////////////////////////////////////////////////////
//    Driver Contact Table Migration
//    Authored On: 29 Jan 2016
/////////////////////////////////////////////////////////

class CreateDriverContactsTable extends Migration
{
    public function up()
    {
        Schema::create('driver_contacts', function(Blueprint $table)
        {
            $table->integer('driver_id');
            $table->bigInteger('mobile_number', 10);
        });
    }

    public function down()
    {
        Schema::drop('driver_contacts');
    }
}
