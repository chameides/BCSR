var gmarkers = []; 
var walkingPaths = []; 
var walkingPathMarkers = []; 

var select_html = '';

var markerImage = {
  url: '/_images/campus-map-marker.png',
  size: new google.maps.Size(21, 33),
  origin: new google.maps.Point(0,0),
  anchor: new google.maps.Point(11, 32)
};
// Shapes define the clickable region of the icon.
var shape = {
  coords: [1, 1, 1, 20, 18, 20, 18 , 1],
  type: 'poly'
};

window.onload = function () {
// ==== first part of the select box ===
var select_html = '<select onChange="handleSelected(this)">' + '<option selected> - Select a location - <\/option>';


var mapOptions = {
  zoom: 17,
  center: new google.maps.LatLng(42.20918571, -73.38180542),
  mapTypeId: google.maps.MapTypeId.SATELLITE,
  mapTypeControl: true
};

var infowindow = new google.maps.InfoWindow({ content: '', maxWidth: 312 });
var map = new google.maps.Map(document.getElementById('map-canvas'), mapOptions);


var i = 0;
var interval = setInterval(function () {

  if(i == locations.length){
    clearInterval(interval);

    drawWalkingPaths(map, walkingPathCoordinates);

// ===== final part of the select box =====
select_html += '<\/select>';
$("#selection").html(select_html);
}
else{
  placeMarker(map, locations[i], infowindow);

// ======= Add the entry to the select box =====
select_html += '<option> ' + locations[i].name + '<\/option>';

i++;
}

}, 100);


// Initialize the map and the custom overlay.
google.maps.event.addDomListener(window, 'load');

google.maps.event.addListener(map, 'zoom_changed', function(e) {
  if(map.zoom >= 17) {
    for (var i=0; i<walkingPaths.length; i++) {
      walkingPaths[i].setVisible(true);
      walkingPathMarkers[i].setVisible(true);
    }
  }
  else {
    for (var i=0; i<walkingPaths.length; i++) {
      walkingPaths[i].setVisible(false);
      walkingPathMarkers[i].setVisible(false);
    }
  }
});


// Remove initial state of navigation to make room for map without interference.
$('.section-nav, .navbar-brand').removeClass('initial');
$('.section-nav').addClass('tucked');
$('.section-nav').addClass('shaded');

}


function placeMarker(map, location, infowindow){

  var myLatLng = new google.maps.LatLng(location.lat, location.long);
  var marker = new google.maps.Marker({
    position: myLatLng,
    map: map,
    icon: markerImage,
    shape: shape,
    title: location.name,
    photo: location.photo,
    description: location.description,
    zIndex: location.zindex,
    linkhref: location.linkhref,
    animation: google.maps.Animation.DROP
  });

  (function (marker) {
    google.maps.event.addListener(marker, 'click', function() {
      var infoContent = '';
      infoContent += "<div class='map-info-window'>\n";
      if (this.photo){
        infoContent += "<img src='/_images/campus-map/" + this.photo + "'>\n";
      }
      infoContent += "<h4>" + this.title + "</h4>\n";
      if (this.description){
        infoContent += "<p>" + this.description + "</p>\n";
      }
      infoContent += "<h4 class='read-more'><a href='"+this.linkhref+"'><i class='fa fa-angle-right' aria-hidden='true'></i> READ MORE</a></h4>\n";
      infoContent += "</div>\n";
      infowindow.setContent(infoContent);
      infowindow.open(map, this);
    });
  })(marker);

// ==========================================================
// save the info we need to use later
gmarkers.push(marker);
}

function drawWalkingPaths(map, walkingPathCoordinates){
  var lineSymbol = {
    path: 'M 0,-1 0,1',
    strokeOpacity: 1,
    strokeWeight: 4,
    scale: 1
  };

  var walkingPathColors = new Object();
  //the circle color is png
  walkingPathColors = { 'cyan': '#1674BB', 'yellow': '#7e746d', 'orange': '#262421', 'red': '#be2126', 'purple': '#b83a93' };

  var walkingPathLabelPosition = new Object();
  walkingPathLabelPosition['cyan'] = new google.maps.LatLng(42.2104259647603,-73.3821160111201);
  walkingPathLabelPosition['yellow'] = new google.maps.LatLng(42.2087262950657,-73.3836306823871);
  walkingPathLabelPosition['orange'] = new google.maps.LatLng(42.2102319909573,-73.3794504870724);
  walkingPathLabelPosition['red'] = new google.maps.LatLng( 42.207357,-73.380734);
  walkingPathLabelPosition['purple'] = new google.maps.LatLng( 42.208921,-73.374541);


  for(walkingPathName in walkingPathCoordinates){
    walkingPath = new google.maps.Polyline({
      path: walkingPathCoordinates[walkingPathName],
      strokeOpacity: 0,
      icons: [{
        icon: lineSymbol,
        offset: '0',
        repeat: '10px'
      }],
      geodesic: true,
      strokeColor: walkingPathColors[walkingPathName],
      strokeWeight: 2,
//      zIndex: 50
});
    walkingPath.setMap(map);
    walkingPaths.push(walkingPath);

// Add Walking Time Marker
var image = {
  url: '/_images/campus-map/path-label-' + walkingPathName + '.png',
// This marker is 60 pixels wide by 60 pixels tall.
size: new google.maps.Size(60, 60),
// The origin for this image is 0,0.
origin: new google.maps.Point(0,0),
// The anchor for this image is the base of the flagpole at 30,30.
anchor: new google.maps.Point(30, 30)
};
var myLatLng = walkingPathLabelPosition[walkingPathName];
walkingPathMarker = new google.maps.Marker({
  position: myLatLng,
  map: map,
  icon: image,
  zIndex: 10
});
walkingPathMarkers.push(walkingPathMarker);
//console.log("Marker z-index " + walkingPathName + ": " + marker.getZIndex())

}
}

// ======= This function handles selections from the select box ====
// === If the dummy entry is selected, the info window is closed ==
function handleSelected(opt) {
  var i = opt.selectedIndex - 1; 
  if (i > -1) {
    google.maps.event.trigger(gmarkers[i],"click");
  }
  else {
    infowindow.close();
  }
// Scroll to top
$("html, body").animate({ scrollTop: 0 });
}