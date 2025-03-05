// Initialize and add the map
function initMap() {
    // The location of Uluru
    var uluru = { lat: 51.076340, lng: -114.131523 };
    var uluru1 = { lat: 51.0790, lng: -113.9839 };
    var uluru2 = { lat: 50.9903, lng: -114.0974 };
    var uluru3 = { lat: 51.0654, lng: -114.1333 };
    var uluru4 = { lat:51.0419, lng: -114.0722};
    var uluru5 = {lat:50.8824, lng:-113.9509};
    var uluru6 = {lat:51.0746, lng:-114.1484};
    // The map, centered at Uluru
    var map = new google.maps.Map(document.getElementById("map"), {
      zoom: 10,
      center: uluru,
    });
    // The marker, positioned at Uluru
    var marker = new google.maps.Marker({
      icon: 'http://maps.google.com/mapfiles/ms/icons/blue-dot.png',
      position: uluru,
      map: map,
      
    });
    var marker1 = new google.maps.Marker({
      position: uluru1,
      map: map,
      
    });
  
    var marker2 = new google.maps.Marker({
      position: uluru2,
      map: map,
    
    });
  
    var marker3 = new google.maps.Marker({
      position: uluru3,
      map: map,
    
    });
    var marker4 = new google.maps.Marker({
      position: uluru4,
      map: map,
    
    });
    var marker5 = new google.maps.Marker({
      position: uluru5,
      map: map,
    
    });
    var marker6 = new google.maps.Marker({
      position: uluru6,
      map: map,
    
    });
  }
  
  window.initMap = initMap;