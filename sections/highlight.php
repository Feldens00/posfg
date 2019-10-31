<!-- highlights -->
<div class="grid-container full" id="highlight">
   <div class="grid-x grid-margin-x grid-padding-y">
      <div class="cell small-12">
         <div class="grid-container">
            <div class="grid-x grid-margin-x grid-margin-y">
                <div class="cell small-12 text-center margin-bottom-1">
                  <h4 class="color-primary">DESTAQUES</h4>
                </div>
            </div>
            <?php if (have_posts()):?>
            <div class="grid-x grid-margin-x grid-margin-y content">
                
            </div>
            <?php endif; ?>
         </div>
      </div>    
   </div>
</div>

<script type="text/javascript">
   load = true;
   jQuery(document).ready(function($) {

      var category = 'highlight';
      var contpage = 0;
      var npostspage = '5';
      var exclude = 0;
      
      firstLoad(category,'#highlight','news',contpage,npostspage,exclude); 
   }); 
</script>