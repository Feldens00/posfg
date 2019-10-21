<?php
/*
Template Name: Units
*/
get_header(); ?>
	<style>
      /* Set the size of the div element that contains the map */
      #map {
        height: 400px;  /* The height is 400 pixels */
        width: 100%;  /* The width is the width of the web page */
       }
    </style>
	<div class="main main-container-fluid">
	
		<!-- specialties -->
		<div class="grid-container full">
		   <div class="grid-x grid-margin-x grid-padding-y">
		      <div class="cell small-12">
		         <div class="grid-container">
		            <div class="grid-x grid-margin-x">
		            	<div class="cell small-12 text-center margin-bottom-1">
			               	<h3>My Google Maps Demo</h3>
			               	<!--The div element for the map -->
			               	<div id="map"></div>
		              	</div>
		            </div>
		         </div>
		      </div>    
		   </div>
		</div>

	</div>
	    
	<script>
		// Initialize and add the map
		function initMap() {
			// The location of Uluru
			var uluru = {lat: -25.344, lng: 131.036};
			// The map, centered at Uluru
			var map = new google.maps.Map(
			  document.getElementById('map'), {zoom: 4, center: uluru});
			// The marker, positioned at Uluru
			var marker = new google.maps.Marker({position: uluru, map: map});
		}
	</script>
	<script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCzDiNy0-AXgLRhh78ZrvgLYqxMiKu6a9c&callback=initMap">
	</script>
<?php get_footer(); ?>
