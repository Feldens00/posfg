<!-- modal chat -->
<div id="container-chat" style="display: grid;position: fixed;z-index: 100;right: 0;bottom: 5rem">
	<a data-toggle="modal-chat">
		<img src="<?php echo get_template_directory_uri().'/src/assets/images/icon-tabs.png'; ?>" width="80" height="80">
	</a>
</div>

<div class="large reveal" id="modal-chat" data-reveal data-animation-in="slide-in-down fast" data-animation-out="slide-out-up fast">
	<div class="grid-container">
		<div class="grid-x grid-margin-x">
		   <div class="cell small-10 small-offset-1 text-center">
		   		<a href="#">
		   			<img src="<?php echo get_template_directory_uri().'/src/assets/images/icon-chat.png'; ?>" width="80" height="80">
		   		</a>
		   		<a href="#">
		   			<img src="<?php echo get_template_directory_uri().'/src/assets/images/icon-phone.png'; ?>" width="80" height="80">
		   		</a>
		   		<a href="#">
		   			<img src="<?php echo get_template_directory_uri().'/src/assets/images/icon-suport.png'; ?>" width="80" height="80">
		   		</a>
		   		
	       	    <?php 
	           	    $newsletter = Util::getWidget('newsletter-course'); 
	           	    echo $newsletter; 
	       	    ?>
		   </div>
		</div>
	</div>
  <button class="close-button" data-close aria-label="Close reveal" type="button">
    <span aria-hidden="true">&times;</span>
  </button>
</div>