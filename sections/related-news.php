<!-- related news -->
<div id="related-news">
    <?php if (have_posts()): ?>
      <div class="content">
      
      </div>

      <div class="nav-pagination text-center padding-vertical-1 hide">
         <hr>
         <h5>Sem mais Notícias!</h5>
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
      var npostspage = 3 ;
      var exclude = <?php echo get_the_ID();?>;
      firstLoad(category,'#related-news','news',contpage,npostspage,exclude); 

      //carrega posts ao chegar ao fim da pagina
      $(window).scroll(function() {
         if($(window).scrollTop() + window.innerHeight >= $(document).height() - 1  && load == true) {
            contpage++;
            loadMore(category,'#related-news','news',contpage,npostspage,exclude); 
            
         }
      });

   }); 
</script>