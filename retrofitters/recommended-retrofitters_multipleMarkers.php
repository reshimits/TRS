<!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html lang="en"> <!--<![endif]-->

<head>

	<!-- Basic Page Needs
  ================================================== -->
	<meta charset="utf-8">
	<title>Recommended Retrofitters from The Retrofit Source | Innovative Headlight Upgrades</title>
	<meta name="description" content="Ready for a high performance xenon or bi-xenon headlight retrofit, but don't have the time or confidence to perform the conversion yourself? Our Recommended Retrofitters program is open to only the best shops throughout North America.">
	<meta name="author" content="THROTTLE, LTD. is a Columbus Ohio based boutique graphic design firm. We consult, strategize, design, build and manage web site, brand identity and print collateral projects for SME businesses. www.throttlestudios.com">

	<!-- Mobile Specific Metas
  ================================================== -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<meta name="format-detection" content="telephone=no" />

	<!-- CSS
  ================================================== -->
	<link rel="stylesheet" href="../css/base.css">
	<link rel="stylesheet" href="../css/global.css">
    <link rel="stylesheet" href="../css/layout-utility.css">

	<!--[if lt IE 9]><script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script><![endif]-->

	<!-- Javascript [primary]
  ================================================== -->
  	<script type="text/javascript" src="../javascript/jquery-1.10.2.min.js"></script>
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCbwL9YqHseLTFieUq445j-3uRDWCv0gKA&sensor=true"></script>	
    <script type="text/javascript" charset="utf-8">
		function MM_swapImgRestore() { //v3.0
		  var i,x,a=document.MM_sr; for(i=0;a&&i<a.length&&(x=a[i])&&x.oSrc;i++) x.src=x.oSrc;
		}
		function MM_preloadImages() { //v3.0
		  var d=document; if(d.images){ if(!d.MM_p) d.MM_p=new Array();
			var i,j=d.MM_p.length,a=MM_preloadImages.arguments; for(i=0; i<a.length; i++)
			if (a[i].indexOf("#")!=0){ d.MM_p[j]=new Image; d.MM_p[j++].src=a[i];}}
		}
		
		function MM_findObj(n, d) { //v4.01
		  var p,i,x;  if(!d) d=document; if((p=n.indexOf("?"))>0&&parent.frames.length) {
			d=parent.frames[n.substring(p+1)].document; n=n.substring(0,p);}
		  if(!(x=d[n])&&d.all) x=d.all[n]; for (i=0;!x&&i<d.forms.length;i++) x=d.forms[i][n];
		  for(i=0;!x&&d.layers&&i<d.layers.length;i++) x=MM_findObj(n,d.layers[i].document);
		  if(!x && d.getElementById) x=d.getElementById(n); return x;
		}
		
		function MM_swapImage() { //v3.0
		  var i,j=0,x,a=MM_swapImage.arguments; document.MM_sr=new Array; for(i=0;i<(a.length-2);i+=3)
		   if ((x=MM_findObj(a[i]))!=null){document.MM_sr[j++]=x; if(!x.oSrc) x.oSrc=x.src; x.src=a[i+2];}
		}
	</script>
    
	<!-- Favicons
  ================================================== -->
	<link rel="shortcut icon" href="images/favicon.ico">


</head>
<body onLoad="MM_preloadImages('../images/btn_bg-orangeDark.png','../images/btn_bg-blueDark.png','../images/btn_bg-grayDark.png')">



	<!-- Recommended Retrofitters
	================================================== -->

 
    <?php require('../include/header.html');?>
    <div class="navMain hide460"><?php require('../include/navMain.html');?></div>
    <div class="navMobile mobile-only"><?php require('../include/navMobile.html');?></div>
    
        <div class="container" id="contact">
        	<div class="full column">
        	<div class="bodyContainer">
            	
                <div class="utility-header"><h1>Recommended Retrofitters</h1></div>
                
            	<div class="utility-sideColContainer2">
                	<div class="utility-intro">
                    	<h3>Our Recommended Retrofitters program is open to only the best shops throughout North America- so feel confident that by contacting one of our affiliates below you will receive nothing but the best.<br><br> 
                        <span class="weightRegular-styleNormal">These shops have proven themselves to offer excellent craftsmanship, professional customer service, reasonable turnaround times, and fair pricing to their clients.<br><br> 
						Customers who choose to have their headlights professionally done by one of our Recommended Retrofitters are eligible for a discount on their parts as well as free shipping to that shop. Contact us or your retrofitter for details!</span></h3>
					</div>	
                </div>    
                
                <div class="utility-contentContainer2">
                    <div class="retrofittersMapContainer mobile-hide">
                    	<div class="retrofittersMap" id="retrofittersMap-trs"></div>
                    </div>
                </div>
                
                <div class="utility-contentContainer3">
                	
                </div>
            	    
            </div> 
            </div>       
        </div>
        
        
    
	<?php require('../include/footer.html');?>
        
    
    

<!-- Javascript [secondary]
================================================== -->
	<!-- Map --> 
<script type="text/javascript">
	var gardner = new google.maps.LatLng(39.973119, -83.100724);
	var hotelsOH = [
	  ['Hyatt Place', 40.077835, -83.135411, 1],
	  ['Courtyard by Marriot', 39.998703, -83.124859, 2],
	  ['Country Inn', 39.974493, -83.151936, 3],
	  ['Drury Inn', 40.078280, -83.132045, 4],
	  ];
	var bounds = new google.maps.LatLngBounds (); //  Create a new viewpoint bound

	
	function initialize() {
	  var mapOptions = {
          mapTypeId: google.maps.MapTypeId.ROADMAP,
		  disableDefaultUI: true,
		  mapTypeControl: false,
		  panControl: true,
		  panControlOptions: {
			position: google.maps.ControlPosition.TOP_RIGHT
		  },
    	  scaleControl: false,
		  zoomControl: true,
		  zoomControlOptions: {
		    style: google.maps.ZoomControlStyle.SMALL,
			position: google.maps.ControlPosition.TOP_RIGHT
		  },
		  styles: [ {
		    "stylers": [
				{ "visibility": "on" },
				{ "saturation": -80 },
				{ "lightness": 25 }
				]
		    } ]
	  }
	  
	  var map = new google.maps.Map(document.getElementById("retrofittersMap-trs"), mapOptions);
	  
	  setMarkers(map, hotelsOH);
	  
	  infowindow = new google.maps.InfoWindow({  //  Create 1 infowindow without content, prior to markers. Content will be attached to this later.
		content: "loading...", 
		disableAutoPan: false,
		});
		
		google.maps.event.addListener(infowindow, "closeclick", function(event) {
			//map.setZoom(6);
			map.fitBounds (bounds);
		});
		//  Fit these bounds to the map
		map.fitBounds (bounds);
		
	  }
	  
	  
	function setMarkers(map, locations) {
	  // Add markers to the map
	
	  // Marker sizes are expressed as a Size of X,Y
	  // where the origin of the image (0,0) is located
	  // in the top left of the image.
	
	  // Origins, anchor positions and coordinates of the marker
	  // increase in the X direction to the right and in
	  // the Y direction down.
	  var mapMarker1 = new google.maps.MarkerImage("/client/trs/images/mapMarker_trs2x.png", null, null, new google.maps.Point(32, 56), new google.maps.Size(39,56));
	  	var marker = new google.maps.Marker({ 
			position: gardner, 
			map: map, 
			flat: true,
			clickable: false,
			title: 'Gardner, Inc.',
			icon: mapMarker1,
			animation: google.maps.Animation.DROP,
		});
		
	  var mapMarker2 = new google.maps.MarkerImage("/client/trs/images/mapMarker_rr2x.png", null, null, new google.maps.Point(22, 37), new google.maps.Size(26,37));
	  	for (var i = 0; i < locations.length; i++) {
			var hotels = locations[i];
			var myLatLng = new google.maps.LatLng(hotels[1], hotels[2]);
			var marker = new google.maps.Marker({
				position: myLatLng,
				map: map,
				icon: mapMarker2,
				
			});
	  
	  bounds.extend(new google.maps.LatLng(hotels[1], hotels[2]));
		
	  var contentString = '<div class="infoWindowContainer">'+
	  					  '<span class="infoWindowTitle">#Hotel_Name#</span>'+
                          '<span class="infoWindowCopy">#Hotel_Address#</span>'+
                          '<span class="infoWindowCopy" id="infoWindowCopy-address">#Hotel_City#, #Hotel_State# #Hotel_Zip#</span>'+
						  '<span class="infoWindowCopy"><strong>P: </strong>#Hotel_Phone#</span>'+
						  '<span class="infoWindowCopy" id="infoWindowCopy-col2"><strong>F: </strong>#Hotel_Fax#</span>'+
						  '<span class="infoWindowCopy"><strong>RATE: </strong>#Hotel_Rate#/night</span>'+
						  '<span class="infoWindowNote">*Be sure to request the Gardner rate.</span>'+
						  '<span class="infoWindowWebsite"><a href="#Hotel_Website#">Website</a></span>'+
						  '<span class="infoWindowCopy" id="infoWindowCopy-col1"><strong>DIRECTIONS: </strong></span>'+
						  '<span class="infoWindowCopy"><a href="#"><strong>To Gardner</strong></a></span>'+
						  '<span class="infoWindowCopy" id="infoWindowCopy-col2"><a href="#"><strong>From Your Location</strong></a></span>'+
						  '</div>';
						  
	  var infowindow = new google.maps.InfoWindow;
        bindInfoW(marker, contentString, infowindow);
	  }
	  function bindInfoW(marker, contentString, infowindow)
	  {
        google.maps.event.addListener(marker, 'click', function() {
            infowindow.setContent(contentString);
            infowindow.open(map, marker);
        });
	  }
	}
	
	google.maps.event.addDomListener(window, 'load', initialize); 
	  
</script>
  
<!-- End Document
================================================== -->
</body>

</html>