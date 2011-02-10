<div id="sidebar-border">
	<div id="sidebar">

<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('Primary Widget Area') ) : ?>

<?php if ( is_singular() ) { ?>
<ul>
	<li class="widget">
		<h3>Recent Posts</h3>
		<ul>
			<?php
			$myposts = get_posts('numberposts=5&offset=0&category=0');
			foreach($myposts as $post) : setup_postdata($post);
			?>
			<li><span><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></span></li>
			<?php endforeach; ?>
		</ul>
	</li>
</ul>
<?php } else { ?>
<ul>
	<li class="widget">
		<h3>Random Posts</h3>
		<ul>
			<?php
			$rand_posts = get_posts('numberposts=5&orderby=rand');
			foreach( $rand_posts as $post ) :
			?>
			<li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
			<?php endforeach; ?>
		</ul>
	</li>
</ul>
<?php } ?>
<ul>
	<li class="widget">
		<h3>Search by Tags!</h3>
		<div><?php wp_tag_cloud('smallest=9&largest=18'); ?></div>
	</li>	
	<li class="widget">
		<h3>Archives</h3>
		<ul>
			<?php wp_get_archives( 'type=monthly' ); ?>
		</ul>
	</li>
	<li class="widget">
		<h3>Links</h3>
		<ul>
			<?php wp_list_bookmarks('title_li=&categorize=0&orderby=id'); ?>
		</ul>
		<div class="fixed"></div>
		<h3>Meta</h3>
		<ul>
			<?php wp_register(); ?>
			<li><?php wp_loginout(); ?></li>
			<?php wp_meta(); ?>
		</ul>
	</li>
</ul>

<?php endif; ?>

<?php if ( is_singular() ) { if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('Singular Widget Area') ) : ?>
<?php endif; } ?>

<?php if (!is_singular()) { if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('Not Singular Widget Area') ) : ?>
<?php endif; } ?>

<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('Footer Widget Area') ) : ?>
<?php endif; ?>

	</div><!-- end: #sidebar -->
</div><!-- end: #sidebar-border -->