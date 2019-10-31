<!-- single post unit -->
<div id="single-unit">
	<?php if (have_posts()): while (have_posts()) : the_post(); ?>

		<!-- title - date -->
		<div class="grid-container full">
		   <div class="grid-x grid-margin-x grid-padding-y">
		      	<div class="cell small-12">
		         	<div class="grid-container">
		         		<div class="grid-x grid-margin-x">
		         			<div class="cell small-12 medium-12 large-12 text-center">
			            		<div class="grid-x">
				            		<div class="cell small-12 medium-12 large-12 padding-bottom-1">
				            			<h4 class="color-primary"><?php the_title();?></h4>
				            		</div>
				            		<div class="cell small-12 medium-8 large-8 padding-horizontal-1">
										<?php the_content(); ?>
				            		</div>
				         			<div class="cell small-12 medium-4 large-4 padding-horizontal-1 text-center">
				         				<div class="grid-x">
						            		<div class="cell small-12 medium-12 large-12">
						            			<iframe src="<?php the_field('unit-maps');?>" width="100%" height="300" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
						            		</div>
						            		<div class="cell small-12 medium-12 large-12 padding-top-1 text-left">
						            			<h4 class="color-primary"><?php the_field('unit-address'); ;?></h4>
						            		</div>
						            		<div class="cell small-12 medium-12 large-12 text-left">
												<h4 class="color-primary"><?php the_field('unit-cep'); ;?></h4>
						            		</div>
						            		<div class="cell small-12 medium-12 large-12 text-left">
												<h4 class="color-primary"><?php the_field('unit-city'); ;?></h4>
						            		</div>
					            		</div>
								  	</div> 
			            		</div>
			            	</div>
		         		</div>
		         	</div>
		      	</div>  
		   </div>
		</div>
	<?php endwhile; ?>
	<?php else: ?>

	        <h1>O post não foi encontrado</h1>

	<?php endif; ?>
</div>
<!-- /single post unit -->