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
    <script src="/SnabbTrucks/resources/assets/js/hireTruck.js"></script>

    {{--Google Map Div--}}
    <div id="googleMap" style="width: 100%; height: 450px;"></div>

    <div class="row" style="margin-top: 20px;">
        <div class="col s4">
          <div class="card">
            <div class="card-content white-text">
              <span class="card-title">SELECT A TRUCK</span>

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
@endsection

{{--Footer--}}
