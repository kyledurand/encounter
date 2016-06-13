<script src='https://maps.googleapis.com/maps/api/js?key=AIzaSyDxo9QcBtbUfI06fU-G5oOOQboSGdGPLzg&extension=.js'></script>

<script>
  google.maps.event.addDomListener(window, 'load', init);
  var map;
  function init() {
    var mapOptions = {
      center: new google.maps.LatLng(26.0236246,-80.2431056),
      zoom: 15,
      zoomControl: true,
      zoomControlOptions: {
        style: google.maps.ZoomControlStyle.DEFAULT,
      },
      disableDoubleClickZoom: true,
      mapTypeControl: true,
      mapTypeControlOptions: {
        style: google.maps.MapTypeControlStyle.HORIZONTAL_BAR,
      },
      scaleControl: true,
      scrollwheel: false,
      panControl: true,
      streetViewControl: true,
      draggable : true,
      overviewMapControl: true,
      overviewMapControlOptions: {
        opened: false,
      },
      mapTypeId: google.maps.MapTypeId.ROADMAP,
    }
    var mapElement = document.getElementById('map');
    var map = new google.maps.Map(mapElement, mapOptions);
    var locations = [
    ['Bitter Blue Lawn & Garden', 'Bitter Blue Lawn & Garden has been servicing South Florida for over 30 years.  We service most lawn mowers and 2 cycle equipment, including generators and pressure washers.', '954 - 981 - 2626', 'bitterbluelawn@gmail.com', 'http://bitterbluelawn.com', 26.0236175, -80.24307850000002, 'https://mapbuildr.com/assets/img/markers/default.png']
    ];
    for (i = 0; i < locations.length; i++) {
      if (locations[i][1] =='undefined'){ description ='';} else { description = locations[i][1];}
      if (locations[i][2] =='undefined'){ telephone ='';} else { telephone = locations[i][2];}
      if (locations[i][3] =='undefined'){ email ='';} else { email = locations[i][3];}
      if (locations[i][4] =='undefined'){ web ='';} else { web = locations[i][4];}
      if (locations[i][7] =='undefined'){ markericon ='';} else { markericon = locations[i][7];}
      marker = new google.maps.Marker({
        icon: markericon,
        position: new google.maps.LatLng(locations[i][5], locations[i][6]),
        map: map,
        title: locations[i][0],
        desc: description,
        tel: telephone,
        email: email,
        web: web
      });
      link = '';     }

    }
  </script>

  <div id='map'></div>
