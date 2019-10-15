<!-- list course -->
<div id="list-course">
   <?php if (have_posts()):?>
   <div class="content">
   
   </div>

   <div class="nav-pagination text-center padding-vertical-1 hide">
      <hr>
      <h5>Sem mais Cursos!</h5>
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

      var contpage = 0;
      var npostspage = <?php echo  get_option( 'posts_per_page' ); ?> ;
      var exclude = 0;
      firstLoad('#list-course','course',contpage,npostspage,exclude); 

      //carrega posts ao chegar ao fim da pagina
      $(window).scroll(function() {
         if($(window).scrollTop() + $(window).height() == $(document).height()  && load == true) {
            
            contpage++;
            loadMore('#list-course','course',contpage,npostspage,exclude); 
            
         }
      });

   }); 
</script>