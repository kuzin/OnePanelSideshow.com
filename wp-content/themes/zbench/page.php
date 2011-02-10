<?php get_header() ?>
<div id="content">
	<?php the_post(); ?>
	<div <?php post_class('post post-page'); ?> id="post-<?php the_ID(); ?>"><!-- post div -->
		<h2 class="title title-single"><?php the_title() ?></h2>
		<?php if ('open' == $post->comment_status) { ?>
		<div class="post-info-top">
			<span id="addcomment"><a href="#respond"  rel="nofollow" title="Leave a comment ?">Leave a comment</a><?php comments_number(' (0)', ' (1)', ' (%)'); ?></span>
			<span id="gotocomments"><a href="#comments"  rel="nofollow" title="Go to comments ?">Go to comments</a></span>
		</div>
		<?php } else { ?>
		<div class="post-info-top" style="height:1px;"></div>
		<?php } ?>
		<div class="fixed"></div>
		<div class="entry">
			<?php the_content(); ?>
			<?php wp_link_pages('before=<div class="nav_link"><strong>Pages: </strong>&after=</div>&next_or_number=number&pagelink=<span class="page_number">%</span>'); ?>
		</div><!-- END entry -->
	</div><!-- END post -->
	<?php comments_template( '', true ); ?>
</div><!--content-->
<?php get_sidebar() ?>
<?php get_footer() ?>