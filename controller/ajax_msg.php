<?php require('/model/ajax_msg.php') ?>
<?php 

function sentMsg($sentMsg = array()){
  
  echo '<div class="row msg_container base_sent">
          <div class="col-md-10 col-xs-10">
              <div class="messages msg_sent">
                <p>'.$sentMsg['message'].'</p>
                <time datetime="'.str_replace(' ', 'T',$sentMsg['date']).'">'.$sentMsg['personne_1'].' • '.formatDate::Diff($sentMsg['date'], new DateTime()).' </time>
              </div>
          </div>
          <div class="col-md-2 col-xs-2 avatar">
              <img src="http://www.bitrebels.com/wp-content/uploads/2011/02/Original-Facebook-Geek-Profile-Avatar-1.jpg" class=" img-responsive ">
          </div>
      </div>';
}
function receivedMsg($receiveMsg = array()){
  echo '<div class="row msg_container base_receive">
          <div class="col-md-2 col-xs-2 avatar">
              <img src="http://www.bitrebels.com/wp-content/uploads/2011/02/Original-Facebook-Geek-Profile-Avatar-1.jpg" class=" img-responsive ">
          </div>
          <div class="col-md-10 col-xs-10">
              <div class="messages msg_receive">
                <p>'.$receiveMsg['message'].'</p>
                <time datetime="'.$receiveMsg['date'].'">'.$receiveMsg['personne_2'].' • </time>
              </div>
          </div>
      </div>';
}
function showMsg(){
  $messages = getMessagesFrom(2);
  foreach($messages as $message){
    $message['e_id'] == $message['id_1'] ? sentMsg($message) : receivedMsg($message);
  }
}
?>

<?php require('/view/ajax_msg.php') ?>
