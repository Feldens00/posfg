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
	<div class="main main-container-fluid" id="page-units">
	
		<!-- specialties -->
		<div class="grid-container full">
		   <div class="grid-x grid-margin-x grid-padding-y">
		      <div class="cell small-12">
		         <div class="grid-container">
		            <div class="grid-x grid-margin-x">
		            	<div class="cell small-12 text-center margin-bottom-1" id="map-container">
		            		<img src="<?php echo get_template_directory_uri().'/src/assets/images/brasil-map.png'; ?>" alt="Mapa do brasil" style="height: auto;max-height: 75vh;width: auto;">
		              	</div>
		            </div>
		         </div>
		      </div>    
		   </div>
		</div>

	</div>
<?php get_footer(); ?>
