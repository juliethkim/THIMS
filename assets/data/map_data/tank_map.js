


		var osmLink = '<a href="http://openstreetmap.org">OpenStreetMap</a>',
			thunLink = '<a href="http://thunderforest.com/">Thunderforest</a>';
        
		var osmUrl = 'http://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png',
            osmAttrib = '&copy; ' + osmLink + ' Contributors',
            landUrl = 'http://{s}.tile.thunderforest.com/landscape/{z}/{x}/{y}.png',
            thunAttrib = '&copy; '+osmLink+' Contributors & '+thunLink;

		var osmMap = L.tileLayer(osmUrl, {attribution: osmAttrib}),
            landMap = L.tileLayer(landUrl, {attribution: thunAttrib});
			
		var gm = L.tileLayer( 'https://mt1.google.com/vt/lyrs=s&x={x}&y={y}&z={z}', {
			attribution: 'Map data &copy; <a href="http://openstreetmap.org/"> OpenStreetMap </a> contributors, ' +
			'<a href="http://creativecommons.org/"> CC-BY-SA </a>, ' +
			'Imagery © <a href="http://mapbox.com">Mapbox</a>',
			id: 'examples.map-i875mjb7'});
			
		var markersLayer = new L.LayerGroup();	//layer contain searched elements
		
		var baseLayers = {
			"OSM Mapnik": osmMap,
			"Landscape": landMap,
			"Google": gm
		};
		
		var overlayMaps = {
			"Tanks": markersLayer
		};

		var map = new L.Map('map', 
	                   {zoom: 10,
					   center: new L.latLng(data[0].loc),
					   layers: [osmMap, markersLayer]});	//set center from first location

		L.control.layers(baseLayers, overlayMaps).addTo(map);

		var controlSearch = new L.Control.Search({
			position:'topleft',		
			layer: markersLayer,
			initial: false,
			zoom: 20,
			marker: false
		});

	map.addControl( controlSearch );

	// The map with markers from json data
	for(i in data) {
		var title = data[i].name,	//value searched
			loc = data[i].loc,		//position found
			marker = new L.Marker(new L.latLng(loc), {title: title} );//set property being searched
		marker.bindPopup('title: '+ title );
		markersLayer.addLayer(marker);
	}
