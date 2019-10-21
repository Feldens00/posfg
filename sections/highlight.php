<!-- highlights -->
<?php
    $query_args = array(
      'post_type' => 'news',
      'posts_per_page' => 5,
      'tax_query' => array(
        array(
          'taxonomy' => 'category_news',
          'field'    => 'slug',
          'terms'    => 'highlight'
        ),
      ),
    );
  $the_query = new WP_Query($query_args);
?>

<div class="grid-container full">
   <div class="grid-x grid-margin-x grid-padding-y">
      <div class="cell small-12">
         <div class="grid-container">
            <div class="grid-x grid-margin-x grid-margin-y">
                <div class="cell small-12 text-center margin-bottom-1">
                  <h4 class="color-primary">DESTAQUES</h4>
                </div>
                <?php while ($the_query->have_posts()): $the_query->the_post();?>

                <div class="cell small-auto medium-auto large-auto text-center container-hover">
                  <a href="<?php echo get_post_permalink(); ?>" name="btn-link-post">
                    <div class="cell small-12 image-overlay" style="background-image: url(<?php echo get_the_post_thumbnail_url();?>); background-size: cover; background-position: center; height: 200px;">
                    </div>
                    <div class="content-hover">
                        <p class="white-text"><?php the_title(); ?></p>
                    </div>
                  </a>
                </div>
                
                <?php endwhile; ?>
            </div>
         </div>
      </div>    
   </div>
</div>