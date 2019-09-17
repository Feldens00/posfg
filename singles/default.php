<!-- single post default -->
<?php if (have_posts()): while (have_posts()) : the_post(); ?>

	<div class="grid-container">
	    <div class="grid-x grid-margin-x">
	    	<div class="cell small-12">
	    		<h2><?php the_title(); ?></h2>
	    	</div>
	    	<div class="cell small-12">
	       		<p><?php the_content(); ?></p>
	       </div>
	    </div>
	 </div>

<?php endwhile; ?>
<?php else: ?>

        <h1>O post não foi encontrado</h1>

<?php endif; ?>
<!-- /single post default -->