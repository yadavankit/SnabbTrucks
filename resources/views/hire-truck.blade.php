{{--Extends Master--}}
@extends('master')

{{--Include Top Navigation Bar--}}
@include('includes.top-nav-bar')

{{--Title as Home--}}
@section('title', 'Home')

{{--Section Content--}}
@section('content')

    {{--Google Map API Script--}}
    <script src="http://maps.googleapis.com/maps/api/js"></script>

    {{--Hire Truck JS--}}
    <script type="text/javascript" src="/SnabbTrucks/resources/assets/js/hireTruck.js"></script>

    {{--Google Map Div--}}
    <div id="googleMap" style="width: 100%; height: 450px;"></div>

    <div class="row" style="margin-top: 20px;">
        <div class="col s4">
          <div class="card">
            <div class="card-content dark-text">
              <center><a class="btn-floating btn-large waves-effect waves-light red modal-trigger" href="#modal1"><i class="material-icons">local_shipping</i></a></center>
              <center><h5>CHOOSE YOUR TRUCK</h5></center>

            </div>
          </div>
        </div>
        <div class="col s4">
          <div class="card teal">
            <div class="card-content white-text">
              <span class="card-title">WHAT IS THE COST?</span>
              <p>I am a very simple card. I am good at containing small bits of information.
              I am convenient because I require little markup to use effectively.</p>
            </div>
          </div>
        </div>
        <div class="col s4">
          <div class="card teal">
            <div class="card-content white-text">
              <span class="card-title">MAKE YOUR ORDER</span>
              <p>I am a very simple card. I am good at containing small bits of information.
              I am convenient because I require little markup to use effectively.</p>
            </div>
          </div>
        </div>
    </div>

    {{--Truck Select Modal--}}
    <div id= "modal1" class= "modal">
      <div class="modal-content">
        <h4>Choose a Truck :</h4>

        <div class="row">

        @foreach($trucks as $truck)

          <div class="col s4">
            <div class="card">
              <div class="card-image waves-effect waves-block waves-light">
                <img class="activator" src="https://www.truckworksllc.com/wordpress/wp-content/uploads/2015/07/Truck-Type-Thumbnails-Wildland-Brush-480x300-c-center.jpg">
              </div>
              <div class="card-content">
                <span class="card-title activator grey-text text-darken-4">{{$truck->truck_name}}<i class="material-icons right">more_vert</i></span>
                <center><a class="btn" onclick="selectTruck()">SELECT</a></center>
              </div>
              <div class="card-reveal">
                <span class="card-title grey-text text-darken-4">{{$truck->truck_name}}<i class="material-icons right">close</i></span>
                <p>Here is some more information about this product that is only revealed once clicked on</p>
              </div>
            </div>
          </div>

        @endforeach
      </div>



    </div>
    </div>

    {{--Just for Backend--}}
    <div style="visibility: hidden; width: 0px; height:0px;">
        <div id="sourceLocationLat">
        </div>
        <div id="sourceLocationLong">
        </div>
        <div id="destLocationLat">
        </div>
        <div id="destLocationLong">
        </div>
        <div id = "sourceID">
            {{ $sourceID }}
        </div>
        <div id="destID">
            {{ $destID }}
        </div>
        <div id="source">
        </div>
    </div>

    {{--Footer--}}
    @include('includes.footer')

@endsection
