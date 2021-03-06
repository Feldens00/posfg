<!-- reviews -->
<?php
	$post = get_post();
    $query_args = array(
      'post_type' => 'review',
      'posts_per_page' => 4,
      'tax_query' => array(
        array(
          'taxonomy' => 'category_review',
          'field'    => 'slug',
          'terms'    =>  $post->post_name
        ),
      ),
    );
  $the_query = new WP_Query($query_args);
?>
<div class="grid-container full">
   <div class="grid-x grid-margin-x grid-padding-y">
      <div class="cell small-12">
         <div class="grid-container" id="review-container">
            <div class="grid-x grid-margin-x">
            	<div class="cell small-12 text-center margin-bottom-1">
	               	<h4>O QUE OS ALUNOS DIZEM</h4>
              	</div>
              	<?php while ($the_query->have_posts()): $the_query->the_post();?>
               	<div class="cell small-12 medium-3 large-3 text-center padding-bottom-1">
		           	<div class="radius bordered shadow">
		           	  <img src="<?php the_post_thumbnail_url();?>">
		           	  <div class="card-divider">
		           	    <?php the_title(); ?>
		           	  </div>
		           	  <div class="card-section">
		           	    <p><?php the_content(); ?></p>
		           	  </div>
		           	</div>
               	</div>
               	<?php endwhile; ?>
            </div>
         </div>
      </div>    
   </div>
</div>