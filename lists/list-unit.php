<!-- list news -->
<div id="list-unit" class="grid-container">
   <?php if (have_posts()):?>
   <div class="content grid-x grid-padding-x grid-padding-y">
   
   </div>

   <div class="nav-pagination text-center padding-vertical-1 hide">
      <hr>
      <h5>Sem mais Unidades!</h5>
   </div>

   <?php else: ?>
      <div>
       <?php echo ('Nenhum resultado encontrado'); ?>
      </div>
   <?php endif; ?>
</div>
<script type="text/javascript">
   load = true;
   jQuery(document).ready(function($) {
      var category = 0;
      var contpage = 0;
      var npostspage = 12;
      var exclude = 0;
      firstLoad(category,'#list-unit','unit',contpage,npostspage,exclude); 

      //carrega posts ao chegar ao fim da pagina
      $(window).scroll(function() {
         if($(window).scrollTop() + window.innerHeight >= $(document).height() - 1  && load == true) {
            
            contpage++;
            loadMore(category,'#list-unit','unit',contpage,npostspage,exclude); 
            
         }
      });

   }); 
</script>