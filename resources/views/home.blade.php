{{--Extend Master--}}
@extends('master')

{{--Title as Home--}}
@section('title', 'Home')

{{--Section Content--}}
@section('content')

  {{--Login Page JS--}}
  <script src="/SnabbTrucks/resources/assets/js/home.js"></script>

  {{--Full screen slider--}}
  <div class="slider fullscreen">
    <ul class="slides">
      <li>
        <img src="https://freightlinertrucks.com/Content/media/trucks/on-highway/splash-on-highway-trucks.jpg">
        <div class="caption center-align container row">
          <h3>Snabb Trucks</h3>
          <h5 class="light grey-text text-lighten-3">We help you move.</h5>
          <br><br>
          <form id="sourceDestForm">
            {{--Source Address--}}
            <div id="sourceDiv" class="black-text card col s5 left">
              <div class="input-field">
                <input id="searchSourceArea" onkeyup="fetchSourcePlaces()" type="text">
                <label for="searchSourceArea">Select Source Address</label>
              </div>
              {{--Source Area Suggestion--}}
              <div id="selectSourceArea">
                <select id= "selectSourceAreaList" style="margin-top: -15px;" class="browser-default black-text">
                </select>
              </div>
            </div>
            <div class="col s1 center" style="padding-left: 30px;">
              <i class="large material-icons">arrow_forward</i>
            </div>
            {{--Destination Address--}}
            <div id="destinationDiv" class="black-text card col s5 right">
              <div class="input-field">
                <input id="searchDestinationArea" onkeyup="fetchDestinationPlaces()" type="text">
                <label for="searchDestinationArea">Select Destination Address</label>
              </div>
              {{--Destination Area Suggestion--}}
              <div id="selectDestinationArea">
                <select id= "selectDestinationAreaList" style="margin-top: -15px;" class="browser-default black-text">
                </select>
              </div>
            </div>
            {{--Buttons Div--}}
            <div id="hireTruck" style="position: absolute; left: 150px; top: 350px;" class="container">
              <div class="row">
                {{--Hire Truck Button--}}
                <div class="col s6 left" style="z-index: +1;">
                  <a id="hireTruckButton" onclick="submitHireTruckForm()" class="btn-large waves-effect waves-light brown lighten-1 btn">HIRE TRUCK</a>
                </div>
                {{--Packers And Movers Button--}}
                <div class="col s6 right" style="z-index: +1;">
                  <a id="packersButton" onclick="submitPackersForm()" class="btn-large waves-effect waves-light brown lighten-1 btn">PACKERS & MOVERS</a>
                </div>
              </div>
            </div>
          </form>
        </div>
      </li>
    </ul>
  </div>
@endsection
