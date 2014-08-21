<div id="comments">

<?php if(have_comments()): ?>
<h3>コメント</h3>

<ul>
<?php wp_list_comments('callback=mydesign'); ?>
</ul>
<?php endif; ?>

<?php comment_form(); ?>

<p id="comfeed">
<?php post_comments_feed_link(); ?>
</p>

</div>
