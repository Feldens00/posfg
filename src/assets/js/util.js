//get post list
function loadMore(type,page,nposts,exclude){

   var dados = {
      'type': type,
      'page': page,
      'nposts': nposts,
      'exclude': exclude,
      'action': 'postList'
   }
      var postarray = new Array();
   $.ajax({
      type: 'POST',
      url: window.location.origin + '/posfg/wp-admin/admin-ajax.php',
      data: dados,
      async: false,
      success: function( response ){
        
        postarray = JSON.parse(response);

      }
   });
   return postarray;
}

function videocaller(videoID){
    html="<iframe id='ytplayer' type='text/html' width='560' height='315' src='https://www.youtube.com/embed/"+videoID+"?autoplay=1&rel=0' frameborder='0'/>";
    document.getElementById("videotarget_"+videoID).innerHTML=html;
}

//setTimeout(function(){ videocaller('<?php echo $VideoID; ?>'); console.log("Chamei videocaller") }, 5000);


$.fn.isInViewport = function() {
  var elementTop = $(this).offset().top;
  var elementBottom = elementTop + $(this).outerHeight();

  var viewportTop = $(window).scrollTop();
  var viewportBottom = viewportTop + $(window).height();

  return elementBottom > viewportTop && elementTop < viewportBottom;
};

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


