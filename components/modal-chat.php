<!-- modal chat -->
<div id="container-chat" style="display: grid;position: fixed;z-index: 100;right: 0;bottom: 5rem">
  <a data-toggle="modal-chat">
    <img src="<?php echo get_template_directory_uri().'/src/assets/images/icon-tabs.png'; ?>" width="80" height="80" alt="Chat Menu">
  </a>
</div>

<div class="large reveal" id="modal-chat" data-reveal data-animation-in="slide-in-down fast" data-animation-out="slide-out-up fast">
  <div class="grid-container">
    <div class="grid-x grid-margin-x">
      <div class="cell small-12 medium-8 medium-offset-2 large-8 large-offset-2 text-center">
          <h4 class="color-primary">Como deseja nos contatar?</h4>
          <div class="grid-x grid-margin-x">
             <div class="cell small-4 medium-4 large-4 text-center">
                <a href="#" data-toggle="call-container">
                  <img src="<?php echo get_template_directory_uri().'/src/assets/images/icon-chat.png'; ?>" width="80" height="80" alt="Contato">
                  <p>Ligamos para você</p>
                </a>
              </div>
              <div class="cell small-4 medium-4 large-4 text-center">
                <a id='whatsAppCel' href='https://api.whatsapp.com/send?phone=5511995264317&text=Olá!%20Gostaria%20de%20mais%20informações%20sobre%20a%20Instituição.'>
                  <img src="<?php echo get_template_directory_uri().'/src/assets/images/icon-phone.png'; ?>" width="80" height="80" alt="Whatsapp">
                  <p>Whatsapp</p>
                </a>
              </div>
              <div class="cell small-4 medium-4 large-4 text-center">
                <a href="#" id="livilyChatLink" onclick="$('#modal-chat').foundation('close');" class="livilyChatButton ClickdeskChatLink hide-for-small-only" image="false" onclick="return false;">
                  <img src="<?php echo get_template_directory_uri().'/src/assets/images/icon-suport.png'; ?>" width="80" height="80" alt="Chat">
                  <p>Chat Online</p>
                </a>
                <a href="//my.clickdesk.com/cdMob?id=all_ag9zfmNsaWNrZGVza2NoYXRyDwsSBXVzZXJzGJ6To-gDDA" class="show-for-small-only" target="_blank">
                  <img src="<?php echo get_template_directory_uri().'/src/assets/images/icon-suport.png'; ?>" width="80" height="80" alt="Chat">
                  <p>Chat Online</p>
                </a>
             </div>
             <div class="cell small-12 medium-12 large-12 text-center callout" id="call-container" data-toggler=".is-show" >
                <p>Preencha o formulário abaixo e nós entraremos em contato</p>
                <?php 
                    $contact = Util::getWidget('contact-form'); 
                    echo $contact; 
                ?>
             </div>
          </div>
       </div>
    </div>
  </div>
  <button class="close-button" data-close aria-label="Close reveal" type="button">
    <span aria-hidden="true">&times;</span>
  </button>
</div>

<script>
$(document).ready(function(){
  $("#livilyChatLink").click(function(){
    $('#modal-chat').foundation('close');
  });
});
</script>