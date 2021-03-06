<div class="container">
  <div class="row chat-window col-xs-5 col-md-3" id="chat_window_1" style="margin-left:10px;">
    <div class="col-xs-12 col-md-12">
      <div class="panel panel-default">
        <div class="panel-heading top-bar">
          <div class="col-md-8 col-xs-8">
            <h3 class="panel-title"><span class="glyphicon glyphicon-comment"></span> Chat - Miguel</h3> </div>
          <div class="col-md-4 col-xs-4" style="text-align: right;"> <a href="#"><span id="minim_chat_window" class="glyphicon glyphicon-minus icon_minim"></span></a> <a href="#"><span class="glyphicon glyphicon-remove icon_close" data-id="chat_window_1"></span></a> </div>
        </div>
        <div class="panel-body msg_container_base">
          <?php showMsg();?>
        </div>
        <div class="panel-footer">
          <div class="input-group">
            <input id="btn-input" type="text" class="form-control input-sm chat_input" placeholder="Write your message here..." /> <span class="input-group-btn">
                        <button class="btn btn-primary btn-sm" id="btn-chat">Send</button>
                        </span> </div>
        </div>
      </div>
    </div>
  </div>
  <div class="btn-group dropup">
    <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown"> <span class="glyphicon glyphicon-cog"></span> <span class="sr-only">Toggle Dropdown</span> </button>
    <ul class="dropdown-menu" role="menu">
      <li><a href="#" id="new_chat"><span class="glyphicon glyphicon-plus"></span> Novo</a></li>
      <li><a href="#"><span class="glyphicon glyphicon-list"></span> Ver outras</a></li>
      <li><a href="#"><span class="glyphicon glyphicon-remove"></span> Fechar Tudo</a></li>
      <li class="divider"></li>
      <li><a href="#"><span class="glyphicon glyphicon-eye-close"></span> Invisivel</a></li>
    </ul>
  </div>
</div>