<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="ja">
<head>
<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>;charset=<?php bloginfo('charset'); ?>" />
<title><?php bloginfo('name'); ?><?php wp_title(); ?></title>
<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" />
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

<!-- content -->
<div id="content">
<?php if(have_posts()): while(have_posts()): the_post(); ?>

<div class="post">
<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>

<?php the_content(); ?>

<p class="postinfo">
<?php echo get_the_date(); ?> <?php the_time(); ?>
 | 
	 category : <?php the_category(', '); ?>
</p>
</div>

<?php if(is_single()): ?>
<p class="pagelink">
<span class="oldpage">
<?php previous_post_link(); ?>
</span>

<span class="newpage">
<?php next_post_link(); ?>
</span>
</p>
<?php endif; ?>

<?php endwhile; endif; ?>

<?php if(is_home()): ?>
<p class="pagelink">
<span class="oldpage">
<?php next_posts_link('&laquo; 古い記事'); ?>
</span>

<span class="newpage">
<?php previous_posts_link('新しい記事 &raquo;'); ?>
</span>
</p>
<?php endif; ?>

</div>

<!-- サイドバー -->
<div id="sidebar">
ここはサイドバーです。
</div>

<!-- フッター -->
<div id="footer">
<address>Copyright &copy; <a href="mailto:<?php bloginfo('admin_email'); ?>">Hidamari Diary</a>, All rights reserved.</address>
</div>

</div>
	
</body>
</html>
