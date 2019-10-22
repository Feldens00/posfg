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

      var categorycourse = '<?php echo $_GET['category_course'];?>';
      var contpage = 0;
      var npostspage = <?php echo  get_option( 'posts_per_page' ); ?> ;
      var exclude = 0;

      if (categorycourse == null) {
         categorycourse = 0;
      }
      
      firstLoad(categorycourse,'#list-course','course',contpage,npostspage,exclude); 

      //carrega posts ao chegar ao fim da pagina
      $(window).scroll(function() {
         if($(window).scrollTop() + window.innerHeight >= $(document).height() - 1  && load == true) {
            
            contpage++;
            loadMore(categorycourse,'#list-course','course',contpage,npostspage,exclude); 
            
         }
      });

   }); 
</script>