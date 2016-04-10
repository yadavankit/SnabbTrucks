<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

/////////////////////////////////////////////////////////
//    Driver Identities Table Migration
//    Authored On: 29 Jan 2016
/////////////////////////////////////////////////////////

class CreateDriverIdentitiesTable extends Migration
{
    public function up()
    {
        //
        Schema::create('driver_identities', function(Blueprint $table)
        {
            $table->increments('id');
            $table->integer('driver_id');
            $table->char('identity_number');

        });
    }

    public function down()
    {
        //
        Schema::drop('driver_identities');
    }
}
