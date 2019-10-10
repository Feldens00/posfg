<!-- single post news -->
<div id="single-news">
	<?php if (have_posts()): while (have_posts()) : the_post(); ?>

		<!-- header post -->
		<div class="grid-container full" style="background-image: url(https://trello-attachments.s3.amazonaws.com/5be0325a009b196c5d3cd231/5d1dec79d9ced17214753f7b/efd175b75381dd00a28afde1e4b56736/bg-0002.png);height:50vh;">
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
	 					            		<div class="cell small-6">
	 					            			<h3><?php the_title();?></h3>
	 					            		</div>
	 					            		<div class="cell small-6 text-right">
	 											<?php the_date( 'Y-m-d', '<h4>', '</h4>' ); ?>
	 					            		</div>
	 				            		</div>
	 				            		<hr>
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
	<?php endwhile; ?>

		<?php get_template_part('sections/related-news');?>
	<?php else: ?>

	        <h1>O post não foi encontrado</h1>

	<?php endif; ?>
</div>
<!-- /single post course -->