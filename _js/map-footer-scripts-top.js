function placeMarker(a,b,c){var d=new google.maps.LatLng(b.lat,b["long"]),e=new google.maps.Marker({position:d,map:a,icon:markerImage,shape:shape,title:b.name,photo:b.photo,description:b.description,zIndex:b.zindex,linkhref:b.linkhref,animation:google.maps.Animation.DROP});!function(b){google.maps.event.addListener(b,"click",function(){var b="";b+="<div class='map-info-window'>\n",this.photo&&(b+="<img src='/_images/campus-map/"+this.photo+"'>\n"),b+="<h4>"+this.title+"</h4>\n",this.description&&(b+="<p>"+this.description+"</p>\n"),b+="<h4 class='read-more'><a href='"+this.linkhref+"'><i class='fa fa-angle-right' aria-hidden='true'></i> READ MORE</a></h4>\n",b+="</div>\n",c.setContent(b),c.open(a,this)})}(e),gmarkers.push(e)}function drawWalkingPaths(a,b){var c={path:"M 0,-1 0,1",strokeOpacity:1,strokeWeight:4,scale:1},d=new Object;d={cyan:"#5cb7b7",yellow:"#e1be22",orange:"#eb6a23",red:"#be2126",purple:"#b83a93"};var e=new Object;e.cyan=new google.maps.LatLng(42.2104259647603,-73.3821160111201),e.yellow=new google.maps.LatLng(42.2087262950657,-73.3836306823871),e.orange=new google.maps.LatLng(42.2102319909573,-73.3794504870724),e.red=new google.maps.LatLng(42.207357,-73.380734),e.purple=new google.maps.LatLng(42.208921,-73.374541);for(walkingPathName in b){walkingPath=new google.maps.Polyline({path:b[walkingPathName],strokeOpacity:0,icons:[{icon:c,offset:"0",repeat:"10px"}],geodesic:!0,strokeColor:d[walkingPathName],strokeWeight:2}),walkingPath.setMap(a),walkingPaths.push(walkingPath);var f={url:"/_images/campus-map/path-label-"+walkingPathName+".png",size:new google.maps.Size(60,60),origin:new google.maps.Point(0,0),anchor:new google.maps.Point(30,30)},g=e[walkingPathName];walkingPathMarker=new google.maps.Marker({position:g,map:a,icon:f,zIndex:10}),walkingPathMarkers.push(walkingPathMarker)}}function handleSelected(a){var b=a.selectedIndex-1;b>-1?google.maps.event.trigger(gmarkers[b],"click"):infowindow.close(),$("html, body").animate({scrollTop:0})}var gmarkers=[],walkingPaths=[],walkingPathMarkers=[],select_html="",markerImage={url:"/_images/campus-map-marker.png",size:new google.maps.Size(21,33),origin:new google.maps.Point(0,0),anchor:new google.maps.Point(11,32)},shape={coords:[1,1,1,20,18,20,18,1],type:"poly"};window.onload=function(){var a='<select onChange="handleSelected(this)"><option selected> - Select a location - </option>',b={zoom:17,center:new google.maps.LatLng(42.20918571,-73.38180542),mapTypeId:google.maps.MapTypeId.SATELLITE,mapTypeControl:!0},c=new google.maps.InfoWindow({content:"",maxWidth:312}),d=new google.maps.Map(document.getElementById("map-canvas"),b),e=0,f=setInterval(function(){e==locations.length?(clearInterval(f),drawWalkingPaths(d,walkingPathCoordinates),a+="</select>",$("#selection").html(a)):(placeMarker(d,locations[e],c),a+="<option> "+locations[e].name+"</option>",e++)},100);google.maps.event.addDomListener(window,"load"),google.maps.event.addListener(d,"zoom_changed",function(a){if(d.zoom>=17)for(var b=0;b<walkingPaths.length;b++)walkingPaths[b].setVisible(!0),walkingPathMarkers[b].setVisible(!0);else for(var b=0;b<walkingPaths.length;b++)walkingPaths[b].setVisible(!1),walkingPathMarkers[b].setVisible(!1)}),$(".section-nav, .navbar-brand").removeClass("initial"),$(".section-nav").addClass("tucked"),$(".section-nav").addClass("shaded")};