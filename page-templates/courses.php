<?php
/*
Template Name: Courses
*/
get_header(); ?>
	<div class="main main-container-fluid" id="page-courses">
	
		<!-- specialties -->
		<div class="grid-container full">
			<div class="grid-x grid-padding-x grid-padding-y">
	    		
	    		<?php
		    		$terms = get_terms([
			    		'taxonomy' => 'category_course',
			    		'hide_empty' => false
					]);
	    		?>
	    		<?php foreach ($terms as $row ):?>

		      	<div class="cell small-auto medium-2 large-2 text-center category-course">
		      		<a href="<?php echo get_site_url() .'/course/?category_course='.$row->slug;?>">
		      			<div class="bg-category-course" style="background-image: url(<?php echo get_template_directory_uri().'/src/assets/images/thumb-'.$row->slug.'.png'; ?>);"></div>
		      			<!-- <img alt="<?php echo $row->name; ?>" src="<?php echo get_template_directory_uri().'/src/assets/images/thumb-'.$row->slug.'.png'; ?>"> -->
		      		</a>
		      	</div> 

	    		<?php endforeach ?>
		         
			</div>
		</div>

	</div>
<?php get_footer(); ?>
