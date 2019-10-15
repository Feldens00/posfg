<!-- single post course -->
<?php if (have_posts()): while (have_posts()) : the_post(); ?>
	<!-- header post -->
	<div class="grid-container full" style="background-image: url(<?php the_field('course-banner'); ?>);background-size:cover; background-repeat: no-repeat;">
	   <div class="grid-x grid-margin-x">
	      <div class="cell small-12">
	         <div class="grid-container">
	            <div class="grid-x grid-margin-x">
	            	<div class="cell small-12 medium-6 large-6 text-center">
	            		<?php 
	            		$image = get_field('course-icon');
	            		if( !empty( $image ) ): ?>
	            			<img src="<?php echo esc_url($image['url']); ?>" width="300" height="150" alt="<?php echo esc_attr($image['alt']); ?>">
	            		<?php endif; ?>
	            	</div>
	            	<div class="cell small-12 medium-6 large-6 padding-vertical-2">
	               		<div class="middle-align">
	               			<h2 class="white-text"><?php the_title(); ?></h2>
	               			<p class="white-text"><?php the_field('course-description'); ?></p>
	               		</div>
	               </div>
	            </div>
	         </div>
	      </div>    
	   </div>
	</div>

	<!-- presentation -->
	<div class="grid-container full">
	   <div class="grid-x grid-margin-x grid-padding-y">
	      <div class="cell small-12">
	         <div class="grid-container">
	            <div class="grid-x grid-margin-x">
	               	<div class="cell small-12 medium-6 large-6 text-center">
	               		<div class="middle-align">
	               			<h3>Apresentação</h3>
	               			<p><?php the_content(); ?></p>
	               		</div>
	               	</div>
	               	<div class="cell small-12 medium-6 large-6 text-center">
               			<?php get_template_part('components/carousel-ytb'); ?>
	               	</div>
	            </div>
	         </div>
	      </div>    
	   </div>
	</div>

	<!-- information -->
	<div class="grid-container full padding-vertical-3" style="background-image: url(https://trello-attachments.s3.amazonaws.com/5be0325a009b196c5d3cd231/5d1dec79d9ced17214753f7b/efd175b75381dd00a28afde1e4b56736/bg-0002.png);">
	   <div class="grid-x grid-margin-x">
	      <div class="cell small-12">
	         <div class="grid-container">
	            <div class="grid-x grid-margin-x">
	               <div class="cell small-12 medium-8 large-8  align-middle">
	               	<div class="middle-align">
	               		<ul class="tabs" data-tabs id="example-tabs">
	               		  <li class="tabs-title is-active"><a href="#panel1" aria-selected="true">Disciplinas</a></li>
	               		  <li class="tabs-title"><a data-tabs-target="panel2" href="#panel2">Saiba Mais</a></li>
	               		  <li class="tabs-title"><a data-tabs-target="panel3" href="#panel3">Coordenador</a></li>
	               		</ul>
	               		<div class="tabs-content" data-tabs-content="example-tabs">
	               		  <div class="tabs-panel is-active" id="panel1">
	               		    <?php the_field('course-class'); ?>
	               		  </div>
	               		  <div class="tabs-panel" id="panel2">
	               		    <?php the_field('course-about'); ?>
	               		  </div>
	               		  <div class="tabs-panel" id="panel3">
	               		    <?php the_field('course-coordinator'); ?>
	               		  </div>
	               		</div>
	               	</div>
	               </div>
	               <div class="cell small-12 medium-4 large-4 padding-vertical-2">
	               		<div class="middle-align">
			           	  <div class="grid-container">
			           	    <div class="grid-x grid-padding-x">
			           	    	<div class="medium-12 cell text-center">
			           	    		<h4 class="white-text">INSCREVA-SE</h4>
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

	<!-- details -->
	<div class="grid-container full" style="background-color: #5DA8E8;">
	   <div class="grid-x grid-margin-x grid-padding-y">
	      <div class="cell small-12">
	         <div class="grid-container">
	            <div class="grid-x grid-margin-x">
	            	<div class="cell small-12 text-center margin-bottom-1">
		               	<h4 class="white-text">DESTAQUES</h4>
	              	</div>
	              	<?php 
	           			$array = Util::getWidgetArrayImg('details-course');
	           			$itens = $array['items'];
	           			foreach ($itens as $row):?>
	           				<div class="cell small-auto medium-auto large-auto text-center">
			           			<img src="<?php echo $row['img']?>" width="100" height="100">
			           			<p class="white-text"><?php echo $row['title']?></p>
	               			</div>
	           		<?php endforeach; ?>
	            </div>
	         </div>
	      </div>    
	   </div>
	</div>

	<?php get_template_part('sections/review'); ?>

<?php endwhile; ?>
<?php else: ?>

        <h1>O post não foi encontrado</h1>

<?php endif; ?>
<!-- /single post course -->