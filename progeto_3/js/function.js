
window.onload = function(){
 
	var map;

	  
      function initMap() {
      	  map = new google.maps.Map(document.getElementById("mapa"), {
          center: {lat:-23.5074201, lng:-46.7732305},
          scrollwheel: false,
          zoom: 13,

        });
	
	}

	function addmarker(lat ,lng,icon,content,click){
		var latlng = {'lat':lat,'lng':lng};

		var Marker = new google.maps.Marker({
			position:latlng,
			map:map,
			icon:icon
		});

		var infoWindow = new google.maps.InfoWindow({
			content:content,
			maxwhidth:300,
			pixelOffset: new google.maps.Size(0,1),
		});
		 if (click == true) {
			google.maps.event.addListener(Marker,'click', function(){
			infoWindow.open(map,Marker);})
		}else{
			
			infoWindow.open(map,Marker);
		};
	
	}

	initMap();
	var conteudo = '<p style = "font-size:16px;/padding:8px;/border-bottom:2px solid black"/>Minha localização</p>';
	addmarker(-23.5074201,-46.7732305,'',conteudo ,true);

} 