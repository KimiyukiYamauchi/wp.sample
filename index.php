<?php get_header(); ?>

<!-- content -->
<div id="content">

<?php if(is_category()): ?>
<p id="pagetitle"><?php single_cat_title(); ?></p>
<?php endif; ?>

<?php if(is_month()): ?>
<p id="pagetitle">
<?php 

//single_month_title(); 
//echo $m;
$thisyear = substr($m, 0, 4);
$thismonth = substr($m, 4, 2);
echo $thisyear . '年' . $thismonth . '月';

?>
</p>
<?php endif; ?>

<?php if(have_posts()): while(have_posts()): the_post(); ?>

<div class="post">
<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>

<?php the_content(); ?>

<p class="postinfo">
<?php echo get_the_date(); ?> <?php the_time(); ?>
 | 
category : <?php the_category(', '); ?>
 |
<a href="<?php comments_link(); ?>">コメント
<?php comments_number(' (0) ', ' (1) ', ' (%) '); ?></a>
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

<?php if(is_archive()): ?>
<p class="pagelink">
<span class="oldpage">
<?php next_posts_link('&laquo; 古い記事'); ?>
</span>

<span class="newpage">
<?php previous_posts_link('新しい記事 &raquo; '); ?>
</span>
</p>
<?php endif; ?>

<?php comments_template(); ?>
</div>

<!-- サイドバー -->
<div id="sidebar">

<ul>
<?php dynamic_sidebar(); ?>
</ul>

<p class="feed">
<img src="<?php bloginfo('template_url'); ?>/feed-icon-28x28.png" alt="*" width="28" height="28" />
<a href="<?php bloginfo('rss2_url') ?>">
RSS FEED
</a>
</p>

</div>

<?php get_footer(); ?>
