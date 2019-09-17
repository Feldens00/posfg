

<div class="orbit" role="region" aria-label="Favorite Text Ever" data-orbit>
  <ul class="orbit-container">

    <button class="orbit-previous" aria-label="previous"><span class="show-for-sr">Previous Slide</span>&#9664;</button>
    <button class="orbit-next" aria-label="next"><span class="show-for-sr">Next Slide</span>&#9654;</button>

    <li class="is-active orbit-slide">
      <?php $ytb = Util::previewYtb(get_field('course-video')); ?>
      <div id="videocontainer_<?php echo $VideoID; ?>">
        <div class="videotarget" id="videotarget_<?php echo $ytb["videoID"]; ?>" onClick="videocaller('<?php echo $ytb["videoID"]; ?>')" >
        <div class="videoimage" style="background-image:url('<?php echo $ytb["imageURL"]; ?>')"></div>
      </div>
    </li>
    <?php 
      if (get_field('course-video-2')):
        $ytb = Util::previewYtb(get_field('course-video-2'));
    ?>
      <li class="orbit-slide">
        <div id="videocontainer_<?php echo $VideoID; ?>">
          <div class="videotarget" id="videotarget_<?php echo $ytb["videoID"]; ?>" onClick="videocaller('<?php echo $ytb["videoID"]; ?>')" >
          <div class="videoimage" style="background-image:url('<?php echo $ytb["imageURL"]; ?>')"></div>
        </div>
      </li>
   <?php
      endif;
      if (get_field('course-video-3')):
        $ytb = Util::previewYtb(get_field('course-video-3'));
   ?>
      <li class="orbit-slide">
        <div id="videocontainer_<?php echo $VideoID; ?>">
          <div class="videotarget" id="videotarget_<?php echo $ytb["videoID"]; ?>" onClick="videocaller('<?php echo $ytb["videoID"]; ?>')" >
          <div class="videoimage" style="background-image:url('<?php echo $ytb["imageURL"]; ?>')"></div>
        </div>
      </li>
    <?php endif; ?>

  </ul>
</div>
