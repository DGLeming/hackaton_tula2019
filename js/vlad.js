// Initialize the platform object:
var platform = new H.service.Platform({
	'app_id': 'xqJ4WB5VxflEXQ0dZUvv',
	'app_code': 'ZEvYat0FFrSftO2vRmNB5A',
	useHTTPS: true
});
platform.configure(H.map.render.panorama.RenderEngine);
// Obtain the default map types from the platform object
var pixelRatio = window.devicePixelRatio || 1;
var maptypes = platform.createDefaultLayers({
	tileSize: pixelRatio === 1 ? 256 : 512,
	ppi: pixelRatio === 1 ? undefined : 320,
	lg: 'rus'
});
// Retrieve the target element for the map:
function createMap(numb) {
	map = new H.Map(document.getElementById('mapContainer' + numb), maptypes.normal.map, {
		zoom: 4,
		center: {
			lng: 37.620393,
			lat: 55.753960
		},
		pixelRatio: pixelRatio
	});
	var behavior = new H.mapevents.Behavior(new H.mapevents.MapEvents(map));
	var ui = H.ui.UI.createDefault(map, maptypes, 'ru-RU');
	map_arr.push(map);
	beh_arr.push(behavior);
}
map_arr = [];
beh_arr = [];
createMap(0);
createMap(1);
//var targetElement = document.getElementById('mapContainer');
/////////////////////////////////////////////////////////////////////////////
var markerlists = [];
var intrPlaces = [];
var searchTextF;
var firstPos;

function showMap(numb) {
	// mark_length = markerlist.length;
	// for(var i = 1; i < mark_length; i++) {
	// 	markerlist[1].setVisibility(false);
	// 	markerlist[1].dispose();
	// 	markerlist.pop();
	// }
	//document.getElementById('mapContainer').style.display = 'block';
	// Create the parameters for the geocoding request:
	searchTextF = document.getElementById('address' + numb).value;
	var geocodingParams = {
		searchText: searchTextF
	};
	// Define a callback function to process the geocoding response:
	var onResult = function(result) {
		var locations = result.Response.View[0].Result,
			position,
			marker;
		// Add a marker for each location found
		var isFirstLoc = true;
		for(i = 0; i < locations.length; i++) {
			position = {
				lat: locations[i].Location.DisplayPosition.Latitude,
				lng: locations[i].Location.DisplayPosition.Longitude
			};
			marker = new H.map.Marker(position);
			if(isFirstLoc) { ///эта хрень зумит только для самой близкой точки
				firstPos = position;
				map_arr[numb].setCenter(position);
				map_arr[numb].setZoom(16);
				markerlists[numb] = [];
				markerlists[numb].push(marker);
			}
			console.log(position);
			marker.draggable = true;
			map_arr[numb].addObject(marker);
			//marker.setVisibility(false);
			//console.log(marker);
			isFirstLoc = false;
		}
		var kk = {
			type: ['eat-drink', "sights-museums", "hospital-health-care-facility", "shopping"]
		};
		for(var tt = 0; tt < 4; tt++) {
			placesSearch(platform, kk['type'][tt], numb);
		}
	};
	// Get an instance of the geocoding service:
	var geocoder = platform.getGeocodingService();
	// Call the geocode method with the geocoding parameters,
	// the callback and an error callback function (called if a
	// communication error occurs):
	geocoder.geocode(geocodingParams, onResult, function(e) {
		alert(e);
	});
	// mark_length = markerlist.length;
	// for(var i = 1; i < mark_length; i++) {
	// 	markerlist[1].setVisibility(false);
	// 	markerlist[1].dispose();
	// 	markerlist.pop();
	// }
}

function showMapC(coords, numb) {
	map = map_arr[numb];
	// mark_length_2 = markerlist[numb].length;
	// for(var i = 0; i < mark_length_2; i++) {
	// 	markerlist[numb][1].setVisibility(false);
	// 	markerlist[numb][1].dispose();
	// 	markerlist[numb].pop();
	// }
	// Define a callback function to process the geocoding response:
	var position,
		marker;
	// Add a marker for each location found
	var isFirstLoc = true;
	position = {
		lat: coords['lat'],
		lng: coords['lng']
	};
	marker = new H.map.Marker(position);
	if(isFirstLoc) { ///эта хрень зумит только для самой близкой точки
		firstPos = position;
		map.setCenter(position);
		map.setZoom(16);
	}
	console.log(position);
	//marker.draggable = true;
	map.addObject(marker);
	markerlist[numb].push(marker);
	//marker.setVisibility(false);
	//console.log(marker);
	isFirstLoc = false;
	var kk = {
		type: ['eat-drink', "sights-museums", "hospital-health-care-facility", "shopping"]
	};
	for(var tt = 0; tt < 4; tt++) {
		placesSearch(platform, kk['type'][tt], numb);
	}
};
// Get an instance of the geocoding service:
//var geocoder = platform.getGeocodingService();
// Call the geocode method with the geocoding parameters,
// the callback and an error callback function (called if a
// communication error occurs):
//////////////////////////////////////////////////////////
function addMarkerToGroup(group, coordinate, html) {
	var marker = new H.map.Marker(coordinate);
	// add custom data to the marker
	marker.setData(html);
	group.addObject(marker);
}
/**
 * Add two markers showing the position of Liverpool and Manchester City football clubs.
 * Clicking on a marker opens an infobubble which holds HTML content related to the marker.
 * @param  {H.Map} map      A HERE Map instance within the application
 */
function addInfoBubble(map) {
	var group = new H.map.Group();
	map.addObject(group);
	// add 'tap' event listener, that opens info bubble, to the group
	group.addEventListener('tap', function(evt) {
		console.log(222);
		// event target is the marker itself, group is a parent event target
		// for all objects that it contains
		var bubble = new H.ui.InfoBubble(evt.target.getPosition(), {
			// read custom data
			content: evt.target.getData()
		});
		// show info bubble
		ui.addBubble(bubble);
	}, false);
	addMarkerToGroup(group, {
		lat: 53.439,
		lng: -2.221
	}, '<div><a href=\'http://www.mcfc.co.uk\' >Manchester City</a>' + '</div><div >City of Manchester Stadium<br>Capacity: 48,000</div>');
	addMarkerToGroup(group, {
		lat: 53.430,
		lng: -2.961
	}, '<div ><a href=\'http://www.liverpoolfc.tv\' >Liverpool</a>' + '</div><div >Anfield<br>Capacity: 45,362</div>');
}
// disable the default draggability of the underlying map
// when starting to drag a marker object:
for(var z = 1; z <= map_arr.length; z++) {
	map_arr[z].addEventListener('dragstart', function(ev) {
		var target = ev.target;
		console.log(z);
		if(target instanceof H.map.Marker) {
			beh_arr[z].disable();
		}
	}, false);
	// re-enable the default draggability of the underlying map
	// when dragging has completed
	map_arr[z].addEventListener('dragend', function(ev) {
		var target = ev.target;
		console.log(z);
		if(target instanceof mapsjs.map.Marker) {
			beh_arr[z].enable();
		}
		//addClickEventListenerToMap(map);    /////// узнается ближайшая точка
	}, false);
	// Listen to the drag event and move the position of the marker
	// as necessary
	map_arr[z].addEventListener('drag', function(ev) {
		var target = ev.target,
			pointer = ev.currentPointer;
		if(target instanceof mapsjs.map.Marker) {
			//console.log(target);
			console.log(z);
			console.log(map_arr);
			target.setPosition(map_arr[z-1].screenToGeo(pointer.viewportX, pointer.viewportY));
			console.log(markerlists);
			var coords = {
				lat: markerlists[z][0].b['lat'],
				lng: markerlists[z][0].b['lng']
			};
			console.log(coords);
		}
	}, false);
}

function setCoord(late, lnge, numb) {
	var coords = {
		lat: late,
		lng: lnge
	};
	map_arr[numb].setCenter(coords);
}
var a;

function placesSearch(platform, typeForF, numb) {
	var placesService = platform.getPlacesService(),
		parameters = { in : firstPos['lat'] + ',' + firstPos['lng'] + ';' + 'r=10000',
				cat: typeForF,
				size: '300'
		};
	console.log(firstPos);
	for(var i = intrPlaces.length - 1; i >= 0; i--) {
		console.log(i);
		intrPlaces[i].setVisibility(false);
		intrPlaces[i].dispose();
		intrPlaces.pop();
	}
	console.log(numb);
	placesService.explore(parameters, function(result) {
		a = result;
		for(var b = 0; b < a['results']['items'].length; b++) {
			//console.log(a['results']['items'][b]['title']);
			//console.log(a['results']['items'][b]['position']);
			position = {
				lat: a['results']['items'][b]['position'][0],
				lng: a['results']['items'][b]['position'][1]
			}; ////////////////////////
			switch(typeForF) {
				case 'eat-drink':
					var iconZ = new H.map.Icon("images/rest.svg", {
						size: {
							w: 32,
							h: 32
						}
					});
					break;
				case 'sights-museums':
					var iconZ = new H.map.Icon("images/mus.svg", {
						size: {
							w: 32,
							h: 32
						}
					});
					break;
				case 'shopping':
					var iconZ = new H.map.Icon("images/shop.svg", {
						size: {
							w: 32,
							h: 32
						}
					});
					break;
				case 'hospital-health-care-facility':
					var iconZ = new H.map.Icon("images/med.svg", {
						size: {
							w: 32,
							h: 32
						}
					});
					break;
			}
			marker = new H.map.Marker(position, {
				icon: iconZ
			});
			marker.setData(a['results']['items'][b]);
			//console.log(position);
			/*hoveredObject = marker;*/
			/*
			if (hoveredObject.icon) {
			    let row = hoveredObject.getData();
			    //console.log(hoveredObject);
			    if (row) {
			        infoBubble.setContent(`
			            <div class="info-bubble-title">Название:`+a['results']['items'][b]['title']+` </div>
			            <div class="info-bubble-label">
			                dasf <br />
			                Volume:fsdf  kg
			            </div>`);
			        
			    }
			} */
			intrPlaces.push(marker);
			map_arr[numb].addObject(marker);
		}
	}, function(error) {
		alert(error);
	});
}
let hoveredObject;
let infoBubble = new H.ui.InfoBubble({
	lat: 0,
	lng: 0
}, {});
infoBubble.addClass('info-bubble');
infoBubble.close();
ui.addBubble(infoBubble);
for (var i = 0; i < beh_arr.length; i++) {
	map_arr[i].addEventListener('pointermove', (e) => {
		if(hoveredObject && hoveredObject !== e.target) {
			infoBubble.close();
		}
		hoveredObject = e.target;
		if(hoveredObject.icon) {
			let row = hoveredObject.getData();
			//console.log(hoveredObject);
			if(row) {
				//let name = row.attributes['NAME'];
				//let address = row.attributes['LOCATION_LABEL'];
				//let volume = row.attributes['VOLUME'];
				let pos = map_arr[i].screenToGeo(e.currentPointer.viewportX, e.currentPointer.viewportY);
				infoBubble.setPosition(pos);
				infoBubble.setContent(`
	                  <div class="info-bubble-title">Название:` + row['title'] + ` </div>
	                  ` + row['vicinity'] + ``);
				infoBubble.open(); //a['results']['items'][b]
			}
		}
	});
}
/*
function addClickEventListenerToMap(map) {
  // add 'tap' listener
    var coords =  {lat: markerlist[0].Ua[0], lng: markerlist[0].Ua[1]};
    console.log(coords);
    findNearestMarker(coords);
  
}

/* function findNearestMarker(coords) {
  var minDist = 99,
    nearest_text = '*None*',
    markerDist,
    // get all objects added to the map
    objects = intrPlaces,
    len = intrPlaces.length,
    i;

  // iterate over objects and calculate distance between them
  for (i = 0; i < len; i += 1) {
    //console.log(coords,objects[i]['P']['position'],objects[i].getPosition());
    
    
    var z1 = objects[i].getPosition()['lng'] * 1000000 - objects[i].getPosition()['lat'] * 1000000; 
    var z2 = coords['lng'] * 1000000 - coords['lat'] * 1000000; 
    var ans = Math.sqrt((z1*z1 + z2*z2)); 
    //console.log(ans);
    markerDist= ans;
    //markerDist = objects[i].getPosition().distance(coords)/100000;
    //console.log(markerDist);
    if (markerDist > minDist) {
      minDist = markerDist;
      //console.log(objects[i]);
      nearest_text = objects[i]['P']['title'];
      console.log(objects[i].getPosition().distance(coords)+objects[i]['P']['title']);
    }
  }

  alert('The nearest marker is: ' + nearest_text);
} */
// Instantiate (and display) a map object: