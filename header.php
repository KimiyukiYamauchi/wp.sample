<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="ja">
<head>
<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>;charset=<?php bloginfo('charset'); ?>" />
<title><?php bloginfo('name'); ?><?php wp_title(); ?></title>
<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" />
<link rel="alternate" type="application/rss+xml" title="RSS フィード" href="<?php bloginfo('rss2_url'); ?>" />
</head>
<body>

<!-- container -->
<div id="container">

<!-- header -->
<div id="header">
<h1><a href="<?php echo home_url(); ?>"><?php bloginfo('name'); ?></a></h1>
<p id="desc"><?php bloginfo('description'); ?></p>
<p id="image"><img src="<?php bloginfo('template_url'); ?>/header.jpg" alt="*" width="760" height="200" /></p>
</div>

<!-- ナビゲーションバー -->
<div id="nav">
<?php wp_nav_menu(array(
	'theme_location' => 'navigation'
)); ?>
</div>
