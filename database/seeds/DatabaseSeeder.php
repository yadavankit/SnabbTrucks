<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use App\User;
use App\Truck;
use App\Driver;
use App\DriverIdentity;
use App\DriverContact;



/////////////////////////////////////////////////////////
//    Database Seeder
//    Authored On: 29 Jan 2016
/////////////////////////////////////////////////////////

class DatabaseSeeder extends Seeder
{
    /////////////////////////////////////////////////////////
    //    This function Calls all Seeders
    //    Authored On: 29 Jan 2016
    /////////////////////////////////////////////////////////

    public function run()
    {
        $this->call(UserTableSeeder::class);
        $this->call(TrucksTableSeeder::class);
        $this->call(DriversTableSeeder::class);
        $this->call(DriverIdentitiesTableSeeder::class);
        $this->call(DriverContactsTableSeeder::class);
    }
}




/////////////////////////////////////////////////////////
//    Users Table Seeder
//    Authored On: 29 Jan 2016
/////////////////////////////////////////////////////////

class UserTableSeeder extends Seeder
{
    public function run()
    {
        $faker= Faker::create();

        User::truncate();

        foreach(range(1,50) as $index)
        {
            User::create(
                [
                    'name'     => $faker->name,
                    'email'    => $faker->email,
                    'password' => \Hash::make( $faker->password ),
                ]
            );
        }
    }
}

/////////////////////////////////////////////////////////
//    Trucks Table Seeder
//    Authored On: 29 Jan 2016
/////////////////////////////////////////////////////////

class TrucksTableSeeder extends Seeder
{
    public function run()
    {
        $faker = Faker::create();

        Truck::truncate();

        foreach (range(1, 50) as $index)
        {
            Truck::create(
                [
                    'category_id' => rand(1,10),
                    'truck_name'  => $faker->firstName,
                    'truck_number' => rand(1000, 9999),
                    'driver_id'    => rand(1, 100),
                    'truck_status'   => rand(0,1),
                ]
            );
        }
    }
}

/////////////////////////////////////////////////////////
//    Drivers Table Seeder
//    Authored On: 29 Jan 2016
/////////////////////////////////////////////////////////

class DriversTableSeeder extends Seeder
{
    public function run()
    {
        $faker = Faker::create();

        Driver::truncate();

        foreach (range(1, 50) as $index)
        {
            Driver::create(
                [
                    'driver_name'  => $faker->name,
                ]
            );
        }
    }
}


/////////////////////////////////////////////////////////
//    DriverIdentities Table Seeder
//    Authored On: 29 Jan 2016
/////////////////////////////////////////////////////////

class DriverIdentitiesTableSeeder extends Seeder
{
    public function run()
    {
        $faker = Faker::create();

        DriverIdentity::truncate();

        foreach (range(1, 100) as $index)
        {
            DriverIdentity::create(
                [
                    'driver_id'  => rand(1,50),
                    'identity_number' => rand(10000000,99999999),
                ]
            );
        }
    }
}

/////////////////////////////////////////////////////////
//    DriverContacts Table Seeder
//    Authored On: 29 Jan 2016
/////////////////////////////////////////////////////////

class DriverContactsTableSeeder extends Seeder
{
    public function run()
    {
        $faker = Faker::create();

        DriverContact::truncate();

        foreach (range(1, 100) as $index)
        {
            DriverContact::create(
                [
                    'driver_id'  => rand(1,50),
                    'mobile_number' => rand(1000000000,9999999999),
                    'address' => $faker->address,
                ]
            );
        }
    }
}
