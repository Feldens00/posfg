function firstLoad(category,idElement,type,page,nposts,exclude){

   var dados = {
      'type': type,
      'page': page,
      'nposts': nposts,
      'exclude': exclude,
      'action': 'postList',
      'category': category
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

           var content = contentGenerator(type,posts,row,category);
           $(idElement + " .content").append(content);
           row++;
        }

      }
   });
}

//get post list
function loadMore(category,idElement,type,page,nposts,exclude){

   var dados = {
      'type': type,
      'page': page,
      'nposts': nposts,
      'exclude': exclude,
      'action': 'postList',
      'category': category
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
             var content = contentGenerator(type,posts,row,category);
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

function contentGenerator(type,posts,row,category) {
  var content = 0;
  if (type == 'news' || type == 'course') {
    content = '<div class="grid-container full post">\
          <div class="grid-x grid-margin-x">\
             <div class="cell small-12">\
                <div class="grid-container padding-vertical-2">\
                   <div class="grid-x grid-margin-x">\
                      <div class="cell small-12 medium-3 large-3 padding-bottom-2 text-center">\
                         <a href="' + posts[row]["link"] + '">\
                            <img class="img-thumb" alt="'+ posts[row]["thumbalt"] +'" src="' + posts[row]["thumbimg"] + '">\
                         </a>\
                   </div>\
                   <div class="cell small-12 medium-9 large-9">\
                      <div class="middle-align">\
                            <a href="' + posts[row]["link"] + '" name="btn-link-post">\
                            <h2 class="text-center medium-text-left large-text-left color-primary">' + posts[row]["title"] + '</h2>\
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

  if (type == 'unit') {
    content = '<div class="cell small-auto medium-3 large-3 text-center">\
      <a href="' + posts[row]["link"] + '">\
        <img alt="'+ posts[row]["thumbalt"] +'" src="'+ posts[row]["thumbimg"] + '">\
      </a>\
      <h5 class="color-primary">' + posts[row]["title"] + '</h5>\
    </div>';
  }

  if (type == 'news' && category == 'highlight') {
    content = '<div class="cell small-auto medium-auto large-auto text-center container-hover">\
      <a href="' + posts[row]["link"] + '" name="btn-link-post">\
        <div class="cell small-12 image-overlay" style="background-image: url('+ posts[row]["featimg"] + ');">\
        </div>\
        <div class="content-hover">\
            <p class="white-text">' + posts[row]["title"] + '</p>\
        </div>\
      </a>\
    </div>';
  }

  return content;
}

function videocaller(videoID){
    html="<iframe id='ytplayer' type='text/html' width='100%' height='95%' src='https://www.youtube.com/embed/"+videoID+"?autoplay=1&rel=0' frameborder='0'/>";
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

/*Chat start*/
var _glc =_glc || []; _glc.push('ag9zfmNsaWNrZGVza2NoYXRyEQsSB3dpZGdldHMYj67t8QMM');
var glcpath = (('https:' == document.location.protocol) ? 'https://my.clickdesk.com/clickdesk-ui/browser/' : 
'//my.clickdesk.com/clickdesk-ui/browser/');
var glcp = (('https:' == document.location.protocol) ? 'https://' : 'http://');
var glcspt = document.createElement('script'); glcspt.type = 'text/javascript'; 
glcspt.async = true; glcspt.src = glcpath + 'livechat-new.js';
var s = document.getElementsByTagName('script')[0];s.parentNode.insertBefore(glcspt, s);
/*Chat end*/