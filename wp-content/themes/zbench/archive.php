<?php get_header() ?>
<div id="content">
	<?php the_post(); ?>
	<div class="page-title">
		<?php if ( is_day() ) : ?>
			<h1><?php printf(('Daily Archives: <span>%s</span>'),get_the_time(get_option('date_format'))) ?></h1>
		<?php elseif ( is_month() ) : ?>
			<h1><?php printf(('Monthly Archives: <span>%s</span>'),get_the_time('F Y')) ?></h1>
		<?php elseif ( is_year() ) : ?>
			<h1><?php printf(('Yearly Archives: <span>%s</span>'),get_the_time('Y')) ?></h1>
		<?php elseif ( is_category() ) : ?>
			<h1><?php echo('Category Archives:'); ?> <span><?php single_cat_title() ?></span></h1>
		<?php elseif ( is_tag() ) : ?>
			<h1><?php echo('Tag Archives:'); ?> <span><?php single_tag_title() ?></span></h1>
		<?php elseif ( isset($_GET['paged']) && !empty($_GET['paged']) ) : ?>
			<h1>Blog Archives</h1>
		<?php endif; ?>
	</div><?php rewind_posts(); ?>
	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
	<div <?php post_class(); ?> id="post-<?php the_ID(); ?>"><!-- post div -->
		<h2 class="title"><a href="<?php the_permalink() ?>"><?php the_title() ?></a></h2>
		<div class="post-info-top">
			<span class="post-info-date">Posted by <?php the_author(); ?> on <?php the_time(get_option( 'date_format' )); ?> <?php edit_post_link('Edit', '[', ']'); ?></span>
			<span id="gotocomments"><?php comments_popup_link('0 comments', '1 comment', '% comments'); ?><?php if(function_exists('the_views')) { echo " | ";the_views(); } ?></span>
		</div>
		<div class="fixed"></div>
		<div class="entry">
			<?php the_excerpt(__('&raquo; Read more...')); ?>
		</div><!-- END entry -->
	</div><!-- END post -->
	<?php endwhile; else: ?>
	<div class="post post-single">
		<h2 class="title title-single"><a href="#" title="Error 404 - Not Found">404 Error - Not found</a></h2>
		<div class="post-info-top" style="height:1px;"></div>
		<div class="entry">
			<p>Sorry, but you are looking for something that isn&#8217;t here.</p>
			<h3>Random Posts</h3>
			<ul>
				<?php
					$rand_posts = get_posts('numberposts=5&orderby=rand');
					foreach( $rand_posts as $post ) :
				?>
				<li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
				<?php endforeach; ?>
			</ul>
			<h3>Tag Cloud</h3>
			<?php wp_tag_cloud('smallest=9&largest=22&unit=pt&number=200&format=flat&orderby=name&order=ASC');?>
		</div><!--entry-->
	</div><!--post-->
	<?php endif; ?>
<?php
if(function_exists('wp_page_numbers')) {
	wp_page_numbers();
}
elseif(function_exists('wp_pagenavi')) {
	wp_pagenavi();
} else {
	global $wp_query;
	$total_pages = $wp_query->max_num_pages;
	if ( $total_pages > 1 ) {
		echo '<div id="pagination">';
			posts_nav_link(' | ', __('&laquo; Previous page'), __('Next page &raquo;'));
		echo '</div>';
	}
}
?>
</div><!--content-->
<?php get_sidebar() ?>
<?php get_footer() ?>