<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\View;

/////////////////////////////////////////////////////////
//    Booking Controller
//    Authored On: 29 Jan 2016
/////////////////////////////////////////////////////////

class BookingController extends Controller
{
    /////////////////////////////////////////////////////////
    //    This Function takes source and destination
    //    Place ID from Request and
    //    calculates estimated Fare, estimated Distance
    //    and returns View Hire Truck
    //    Authored On: 30 Jan 2016
    /////////////////////////////////////////////////////////

    public function hireTruck()
    {
        $sourceID = Input::get('source');
        $destID = Input::get('destination');


        return View::make('hire-truck')->with('sourceID', $sourceID)
                                        ->with('destID', $destID);

    }

    /////////////////////////////////////////////////////////
    //    This Function takes source and destination Place
    //    ID as parameter and returns View PAckers and Movers
    //    Authored On: 30 Jan 2016
    /////////////////////////////////////////////////////////
    public function packerMover()
    {
        $sourceID = Input::get('source');
        $destID = Input::get('destination');
        return View::make('packers-movers');
    }
}
