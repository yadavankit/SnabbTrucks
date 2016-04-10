<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

/////////////////////////////////////////////////////////
//    Drop Drivers Table (Modifications)
//    Authored On: 29 Jan 2016
/////////////////////////////////////////////////////////

class DropDriverContactsTable extends Migration
{
    public function up()
    {
        Schema::drop('driver_contacts');
    }

    public function down()
    {

    }
}
