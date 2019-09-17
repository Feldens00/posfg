<!-- carousel banner-->
<?php
    $query_args = array(
      'post_type' => 'news',
      //'posts_per_page' => 1,
      'tax_query' => array(
        array(
          'taxonomy' => 'category_news',
          'field'    => 'slug',
          'terms'    => 'banner'
        ),
      ),
    );
  $the_query = new WP_Query($query_args);
  $cont = 0;
?>
<div class="grid-container full">
	<div class="grid-x">
		<div class="cell small-12">
			<div class="orbit" role="region" aria-label="Favorite Text Ever" data-orbit id="banner-home">
				<ul class="orbit-container">
					<button class="orbit-previous" aria-label="previous"><span class="show-for-sr">Previous Slide</span>&#9664;</button>
					<button class="orbit-next" aria-label="next"><span class="show-for-sr">Next Slide</span>&#9654;</button>
					<?php while ($the_query->have_posts()): $the_query->the_post();?>
						<li class="<?php  echo $cont == 0 ? "is-active" : " "; ?> orbit-slide">
						  	<div class="grid-container full">
		  					   <div class="grid-x grid-margin-x">
		  					      <div class="cell small-12"  style="background-image: url(<?php the_field('background-banner'); ?>);background-size: cover; background-position: center;">
		  					         <div class="grid-container">
		  					            <div class="grid-x grid-margin-x">
		  					               <div class="cell small-12 medium-6 large-6 align-middle padding-vertical-2">
		  					               	<div class="middle-align">
		  					               		<h2 class="white-text"><?php the_field('title-banner'); ?></h2>
		  					               		<p class="white-text"><?php the_field('text-banner'); ?></p>
		  					               		<a href="<?php echo get_post_permalink();?>" class="button secondary">Saiba Mais</a>
		  					               	</div>
		  					               </div>
		  					               <div class="cell small-12 medium-6 large-6 text-center"><img src="<?php the_field('icon-banner'); ?>"></div>
		  					            </div>
		  					         </div>
		  					      </div>    
		  					   </div>
		  					</div>
						</li>
					
					<?php
						$cont++;
						endwhile; 
					?>
				</ul>
		    </div>
		</div>
	</div>
</div>
