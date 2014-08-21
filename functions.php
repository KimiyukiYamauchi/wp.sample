<?php

// ウィジェット
register_sidebar();

// 受信したコメント
function mydesign($comment, $args, $depth){
	$GLOBALS['comment'] = $comment; ?>

<li class="compost">
<?php comment_text(); ?>
<p class="cominfo">
<?php comment_date(); ?> <?php comment_time(); ?>
 | 
<?php comment_author_link(); ?>
</p>

<?php
}


?>
