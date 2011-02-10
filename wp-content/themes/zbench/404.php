<?php get_header() ?>
<div id="content">
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
</div><!--content-->
<?php get_sidebar() ?>
<?php get_footer() ?>