<?php
/*
Template Name: Home
*/
get_header(); ?>
<div class="main main-container-fluid" id="page-home">
	
	<?php get_template_part('components/carousel-banner'); ?>
	
	<!-- specialties -->
	<div class="grid-container full bg-light-grey">
	   <div class="grid-x grid-margin-x grid-padding-y">
	      <div class="cell small-12">
	         <div class="grid-container">
	            <div class="grid-x grid-margin-x">
	            	<div class="cell small-12 text-center margin-bottom-1">
		               	<h4 class="color-primary">INVISTA NO SEU POTENCIAL</h4>
		               	<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
	              	</div>
	               	<div class="cell small-12 medium-4 large-4 text-center">
		               	<i class="fas fa-user fa-3x" style="color: grey;"></i>
		               	<h6>SUPORTE ACADÊMICO</h6>
		               	<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus id auctor quam. Ut vel nulla vitae sem hendrerit fringilla nec sit amet mauris.</p>
	               	</div>
	               	<div class="cell small-12 medium-4 large-4 text-center">
		               	<i class="fas fa-user fa-3x" style="color: grey;"></i>
		               	<h6>AMBIENTE VIRTUAL</h6>
		               	<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus id auctor quam. Ut vel nulla vitae sem hendrerit fringilla nec sit amet mauris.</p>
	               	</div>
	               	<div class="cell small-12 medium-4 large-4 text-center">
	               		<i class="fas fa-user fa-3x" style="color: grey;"></i>
	               		<h6>CONDIÇÕES E MENSALIDADES ACESSÍVEIS</h6>
	               		<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus id auctor quam. Ut vel nulla vitae sem hendrerit fringilla nec sit amet mauris.</p>
	               	</div>
	            </div>
	         </div>
	      </div>    
	   </div>
	</div>

	<?php get_template_part('sections/highlight'); ?>

	<!-- partner -->
	<div class="grid-container full bg-texture" style="background-image: url(<?php echo get_template_directory_uri().'/src/assets/images/bg-headers.png'; ?>);">
	   <div class="grid-x grid-margin-x grid-padding-y">
	      <div class="cell small-12">
	         <div class="grid-container">
	            <div class="grid-x grid-margin-x">
	            	<div class="cell small-12 text-center margin-bottom-1">
		               	<h4 class="white-text">SEJA NOSSO PARCEIRO</h4>
		               	<p class="white-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit.Lorem ipsum dolor sit amet, consectetur adipiscing elit.Lorem ipsum dolor sit amet, consectetur adipiscing elit.Lorem ipsum dolor sit amet, consectetur adipiscing elit.Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
		               	<a href="#" class="button secondary">Learn More</a>
	              	</div>
	            </div>
	         </div>
	      </div>    
	   </div>
	</div>

	<!-- forms -->
	<div class="grid-container full">
	   <div class="grid-x grid-margin-x grid-padding-y">
	      <div class="cell small-12">
	         <div class="grid-container">
	            <div class="grid-x grid-margin-x">
	               	<div class="cell small-12 medium-6 large-6 text-center">
			           	<div class="grid-container">
			           	    <div class="grid-x grid-padding-x">
			           	    	<div class="medium-12 cell text-center">
			           	    		<h4 class="color-primary">INSCREVA-SE</h4>
			           	    	</div>
		           	      	    <?php 
		           	          	    $subscribe = Util::getWidget('subscribe-form'); 
		           	          	    echo $subscribe; 
		           	      	    ?>
			           	  	</div>
			           	</div>
	               	</div>
	               	<div class="cell small-12 medium-6 large-6 text-center">
			           	  <div class="grid-container">
			           	    <div class="grid-x grid-padding-x">
			           	    	<div class="medium-12 cell text-center">
			           	    		<h4 class="color-primary">NEWSLETTER</h4>
			           	    	</div>
		           	      	    <?php 
		           	          	    $newsletter = Util::getWidget('newsletter-course'); 
		           	          	    echo $newsletter; 
		           	      	    ?>
			           	    </div>
			           	  </div>
	               	</div>
	            </div>
	         </div>
	      </div>    
	   </div>
	</div>
</div>

<?php get_footer(); ?>
