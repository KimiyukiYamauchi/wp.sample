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

// カスタムメニュー
register_nav_menus(array(
	'navigation' => 'ナビゲーションバー'
));

// カスタムヘッダー
//add_custom_image_header('', 'admin_header_style');
//function admin_header_style(){}

add_theme_support('custom-header');

define('NO_HEADER_TEXT', true);

define('HEADER_IMAGE', '%s/default_header.jpg');

define('HEADER_IMAGE_WIDTH', 760);

define('HEADER_IMAGE_HEIGHT', 200);

// カスタム背景
//add_custom_background();

add_theme_support('custom-background');

?>
