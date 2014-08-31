<?php
/*
Template Name: ビジネスサイト風テンプレート
*/
?>

<?php get_header(); ?>

<!-- content -->
<div id="topcontent">


<?php if(have_posts()): while(have_posts()): the_post(); ?>

<p><img src="<?php bloginfo('template_url'); ?>/topimage.jpg" alt="*" width="760" height="370" /></p>


<?php the_content(); ?>


<?php endwhile; endif; ?>


</div>


<?php get_footer(); ?>
