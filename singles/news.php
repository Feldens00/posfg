<!-- single post news -->
<div id="single-news">
	<?php if (have_posts()): while (have_posts()) : the_post(); ?>

		<!-- header post -->
		<?php 
		$background = get_field('background-banner');
		$background = ($background != null) ? $background : get_template_directory_uri().'/src/assets/images/bg-headers.png'; ?>
		<div class="grid-container full bg-texture" style="background-image: url(<?php echo $background; ?>);">
		</div>

		<!-- title - date -->
		<div class="grid-container full">
		   <div class="grid-x grid-margin-x grid-padding-y">
		      	<div class="cell small-12">
		         	<div class="grid-container">
		         		<div class="grid-x grid-margin-x">
		         			<div class="cell small-12 medium-8 large-8">
	 				            <div class="grid-x grid-margin-x">
	 				            	<div class="cell small-12 medium-12 large-12">
	 				            		<div class="grid-x">
	 					            		<div class="cell small-12 medium-8 large-8">
	 					            			<h4 class="color-primary"><?php the_title();?></h4>
	 					            		</div>
	 					            		<div class="cell small-12 medium-4 large-4 text-right">
	 											<?php the_date( 'Y-m-d', '<h4 class="color-primary">', '</h4>' ); ?>
	 					            		</div>
	 				            		</div>
	 				            		<hr class="custom-hr">
	 				            	</div>
	 				               	<div class="cell small-12 medium-12 large-12 padding-top-2">
	 				               			<?php the_content(); ?>
	 				               	</div>
	 				            </div>
		         			</div>
		         			<div class="cell small-12 medium-4 large-4">
		         				<div class="padding-horizontal-3 padding-top-2 newsletter-news text-center">
		         					<h5>ASSINE A NEWSLETTER</h5>
	     							<?php 
	     					     	    $newsletter = Util::getWidget('newsletter-form'); 
	     					     	    echo $newsletter; 
	     					 	    ?>  
		         				</div>
						  	</div> 
		         		</div>
		         	</div>
		      	</div>  
		   </div>
		</div>
	<?php endwhile; ?>

		<?php get_template_part('sections/related-news');?>
	<?php else: ?>

	        <h1>O post não foi encontrado</h1>

	<?php endif; ?>
</div>
<!-- /single post course -->