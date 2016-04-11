// Ajax Call to Select Truck and Display Cost
function selectTruck()
{
  $.ajax({
      url : "https://maps.googleapis.com/maps/api/geocode/json?place_id=" + placeID + "&key=AIzaSyDTPWN__X_moAy4Nty0TgEJKMkynbw-n6U",
      type : "GET",
      dataType : "json",
      success : function(result)
      {
          if(result)
          {
              $('#sourceLocationLat').html(result.results[0].geometry.location.lat);
              $('#sourceLocationLong').html(result.results[0].geometry.location.lng);
          }
      }
  });

}


//Modal Triggers
$(document).ready(function()
{
    $('.modal-trigger').leanModal();
});

//Before Document Loads
$(document).before(function()
{
  $('.modal-trigger').leanModal();
    $('#sourceID').load();
    $('#destID').load();
    var sourceID = getParameterByName('source');
    var destID = getParameterByName('destination');
    setSourceLatLong(sourceID);
    setDestLatLong(destID);
    google.maps.event.addDomListener(window, 'load', initialize);
});

//Reads URL Parameters
function getParameterByName(name)
{
    name = name.replace(/[\[]/, "\\[").replace(/[\]]/, "\\]");
    var regex = new RegExp("[\\?&]" + name + "=([^&#]*)"),
        results = regex.exec(location.search);
    return results === null ? "" : decodeURIComponent(results[1].replace(/\+/g, " "));
}

//Sets Source Latitude Longitude, calls GeoCoding API takes input PlaceID
function setSourceLatLong(placeID)
{
    $.ajax({
        url : "https://maps.googleapis.com/maps/api/geocode/json?place_id=" + placeID + "&key=AIzaSyDTPWN__X_moAy4Nty0TgEJKMkynbw-n6U",
        type : "GET",
        dataType : "json",
        success : function(result)
        {
            if(result)
            {
                $('#sourceLocationLat').html(result.results[0].geometry.location.lat);
                $('#sourceLocationLong').html(result.results[0].geometry.location.lng);
            }
        }
    });
}

//Sets Destination Latitude Longitude, calls GeoCoding API takes input PlaceID
function setDestLatLong(placeID)
{
    $.ajax({
        url : "https://maps.googleapis.com/maps/api/geocode/json?place_id=" + placeID + "&key=AIzaSyDTPWN__X_moAy4Nty0TgEJKMkynbw-n6U",
        type : "GET",
        dataType : "json",
        success : function(result)
        {
            if(result)
            {
                $('#destLocationLat').html(result.results[0].geometry.location.lat);
                $('#destLocationLong').html(result.results[0].geometry.location.lng);
            }
        }
    });
}

//Initializes Google Map
function initialize()
{
    //Get All Lats And Longs
    var sourceLat = $('#sourceLocationLat').text();
    var sourceLong = $('#sourceLocationLong').text();
    var destLat = $('#destLocationLat').text();
    var destLong = $('#destLocationLong').text();
    //Calculate Map Center
    var mapCenterLat = (parseFloat(sourceLat) + parseFloat(destLat))/2;
    var mapCenterLong = (parseFloat(sourceLong) + parseFloat(destLong))/2;
    //Set Map Properties
    var mapProp = {
        center:new google.maps.LatLng(mapCenterLat,mapCenterLong),
        zoom:4,
        disableDefaultUI:true,
        mapTypeId:google.maps.MapTypeId.ROADMAP
    };

    var latlng =[ new google.maps.LatLng(sourceLat, sourceLong),
                  new google.maps.LatLng(destLat, destLong)
                ];
    var latlngbounds = new google.maps.LatLngBounds();
    for (var i = 0; i < latlng.length; i++)
    {
      latlngbounds.extend(latlng[i]);
    }
    //Assign Map to Map DOM
    var map=new google.maps.Map(document.getElementById("googleMap"),mapProp);
    //Fit Map to LatLongBounds
    map.fitBounds(latlngbounds);
    //Source Marker
    var source_marker= new google.maps.Marker({
        position: new google.maps.LatLng(sourceLat,sourceLong),
        icon: '../resources/assets/img/source_icon.png',
        animation:google.maps.Animation.DROP
    });
    //Destination Marker
    var destination_marker= new google.maps.Marker({
        position: new google.maps.LatLng(destLat,destLong),
        icon: '../resources/assets/img/destination_icon.png',
        animation:google.maps.Animation.DROP
    });
    //Set Both Markers on Map
    source_marker.setMap(map);
    destination_marker.setMap(map);
}
