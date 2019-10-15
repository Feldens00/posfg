function firstLoad(idElement,type,page,nposts,exclude){

   var dados = {
      'type': type,
      'page': page,
      'nposts': nposts,
      'exclude': exclude,
      'action': 'postList'
   }
 
   $.ajax({
      type: 'POST',
      url: window.location.origin + '/posfg/wp-admin/admin-ajax.php',
      data: dados,
      success: function( response ){
        posts = JSON.parse(response);
        var row = 0;

        //busca os post ao carregar a pagina
        while (row < posts.length) {

           var content = contentGenerator('news',posts,row);
           $(idElement + " .content").append(content);
           row++;
        }

      }
   });
}

//get post list
function loadMore(idElement,type,page,nposts,exclude){

   var dados = {
      'type': type,
      'page': page,
      'nposts': nposts,
      'exclude': exclude,
      'action': 'postList'
   }

   $.ajax({
      type: 'POST',
      url: window.location.origin + '/posfg/wp-admin/admin-ajax.php',
      data: dados,
      success: function( response ){
        posts = JSON.parse(response);
        if (posts.length != 0) {
          var row = 0;
          //busca os post ao carregar a pagina
          while (row < posts.length ) {
             var content = contentGenerator('news',posts,row);
             $(idElement + " .content").append(content);
             row++;
           }

        } else {
           $(idElement + " .nav-pagination").removeClass("hide");
           load = false;
        }

      }
   });

}

function contentGenerator(type,posts,row) {
  var content = 0;
  if (type == 'news' || type == 'course') {
    content = '<div class="grid-container full post">\
          <div class="grid-x grid-margin-x">\
             <div class="cell small-12">\
                <div class="grid-container padding-vertical-2">\
                   <div class="grid-x grid-margin-x">\
                      <div class="cell small-12 medium-3 large-3 padding-bottom-2 text-center">\
                         <a href="' + posts[row]["link"] + '">\
                            <img class="img-thumb" alt="'+ posts[row]["title"] +'" src="' + posts[row]["thumbimg"] + '">\
                         </a>\
                   </div>\
                   <div class="cell small-12 medium-9 large-9">\
                      <div class="middle-align">\
                            <a href="' + posts[row]["link"] + '" name="btn-link-post">\
                            <h2 class="text-center medium-text-left large-text-left">' + posts[row]["title"] + '</h2>\
                            </a>\
                            <p>' + posts[row]["short"] + '</p>\
                      </div>\
                   </div>\
                </div>\
             </div>\
          </div>\
       </div>\
    </div>';
  }
  return content;
}

function videocaller(videoID){
    html="<iframe id='ytplayer' type='text/html' width='560' height='315' src='https://www.youtube.com/embed/"+videoID+"?autoplay=1&rel=0' frameborder='0'/>";
    document.getElementById("videotarget_"+videoID).innerHTML=html;
}

//setTimeout(function(){ videocaller('<?php echo $VideoID; ?>'); console.log("Chamei videocaller") }, 5000);


// $.fn.isInViewport = function() {
//   var elementTop = $(this).offset().top;
//   var elementBottom = elementTop + $(this).outerHeight();

//   var viewportTop = $(window).scrollTop();
//   var viewportBottom = viewportTop + $(window).height();

//   return elementBottom > viewportTop && elementTop < viewportBottom;
// };

$(window).on('resize scroll', function() {
  $('.checkdiv').each(function() {
      var elid = $(this).attr('id');
    if ($(this).isInViewport()) {
      console.log(elid);
    } else {
      //$('#fixed-' + activeColor).removeClass(activeColor + '-active');
    }
  });
});


