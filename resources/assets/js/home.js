//Full screen Slider
$(document).ready(function()
{
    $('.slider').slider({ full_width: true, indicators: false});
    $('#selectSourceArea').hide();
    $('#selectDestinationArea').hide();
});

//Submit Form for Truck Hire
function submitHireTruckForm()
{
    var source = $('#selectSourceAreaList').val();
    var dest = $('#selectDestinationAreaList').val();
    var hireTruckRoute = "hireTruck?source="+source+"&destination="+dest;
    window.location.assign(hireTruckRoute);
}

//Submit Form for Packers and Movers
function submitPackersForm()
{
    var source = $('#selectSourceAreaList').val();
    var dest = $('#selectDestinationAreaList').val();
    var hireTruckRoute = "packersMovers?source="+source+"&destination="+dest;
    window.location.assign(hireTruckRoute);
}

//Ajax Auto Complete Google Places for Source
function fetchSourcePlaces()
{
    var searchToken = $("#searchSourceArea").val();

    $.ajax({
        url : "https://maps.googleapis.com/maps/api/place/autocomplete/json?input="+ searchToken + "&types=geocode&key=AIzaSyDTPWN__X_moAy4Nty0TgEJKMkynbw-n6U",
        type : "GET",
        dataType : "json",
        success : function(result)
        {
            $('#selectSourceAreaList').empty();

            if(result)
            {
                $.each(result.predictions, function(i, item)
                {
                    $('#selectSourceAreaList').append('<option class="sourcePlaceOption" onclick="alert("hello")" value="'+ item.place_id + '">'+ item.description +'</option>');
                    $('#selectSourceArea').show();
                });
            }
        }
    });
}

//Ajax Auto Complete Google Places for Destination
function fetchDestinationPlaces()
{
    var searchToken = $("#searchDestinationArea").val();
    $.ajax({
        url : "https://maps.googleapis.com/maps/api/place/autocomplete/json?input="+ searchToken + "&types=geocode&key=AIzaSyDTPWN__X_moAy4Nty0TgEJKMkynbw-n6U",
        type : "GET",
        dataType : "json",
        success : function(result)
        {
            $('#selectDestinationAreaList').empty();
            if(result)
            {
                $.each(result.predictions, function(i, item)
                {
                    $('#selectDestinationAreaList').append('<option class="destPlaceOption" value="'+ item.place_id + '">'+ item.description +'</option>');
                    $('#selectDestinationArea').show();
                });
            }
        }
    });
}
