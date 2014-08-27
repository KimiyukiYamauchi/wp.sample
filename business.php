<?php
/*
Template Name: ビジネスサイト風テンプレート
*/
?>

<?php get_header(); ?>

<!-- content -->
<div id="content" class="page">


<?php if(have_posts()): while(have_posts()): the_post(); ?>

<div class="post">
<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>

<?php the_content(); ?>

</div>


<?php endwhile; endif; ?>


</div>


<?php get_footer(); ?>
