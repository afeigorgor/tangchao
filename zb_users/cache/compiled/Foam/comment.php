<div class="msg" id="cmt<?php  echo $comment->ID;  ?>">
<div class="msgtxt">
<div class="msgtxtbogy">
<div class="msgname"><a href="<?php  echo $comment->Author->HomePage;  ?>" rel="nofollow" target="_blank"><?php  echo $comment->Author->Name;  ?></a>&nbsp;&nbsp;<span><?php  echo $comment->Time();  ?>&nbsp;<a href="#comments" onclick="RevertComment('<?php  echo $comment->ID;  ?>')">回复该留言</a></span></div>
<div class="msgarticle"><?php  echo $comment->Content;  ?>
<?php  foreach ( $comment->Comments as $comment) { ?>
<?php  include $this->GetTemplate('comment');  ?>
<?php }   ?></div>
</div>
</div>
<div class="msgimg"><a href="<?php  echo $comment->Author->HomePage;  ?>" rel="nofollow" target="_blank"><img class="avatar" src="<?php  echo $comment->Author->Avatar;  ?>" alt="" width="32" /></a></div>
</div>