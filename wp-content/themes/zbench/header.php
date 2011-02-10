<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head profile="http://gmpg.org/xfn/11">
	<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
<?php $the_title = wp_title(' - ', false); if ($the_title != '') : ?>
    <title><?php echo wp_title('',false); ?> | <?php bloginfo('name'); ?></title>
<?php else : ?>
    <title><?php bloginfo('name'); ?><?php if ( $paged < 2 ) {} else { echo (' - page '); echo ($paged);}?></title>
<?php endif; ?>
	<?php if ( is_singular() && get_option( 'thread_comments' ) ) wp_enqueue_script( 'comment-reply' ); ?>
	<?php $options = get_option('zBench_options'); ?>
	<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>" />
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
	<?php wp_head(); ?></head>
<body <?php body_class(); ?>>
<div id="nav">
	<div id="menus"><?php  wp_nav_menu( array( 'container_class' => 'nav_menu', 'theme_location' => 'primary' ) ); ?></div>
	<div id="search">
		<?php get_search_form(); ?>
	</div>
</div>
<div id="wrapper">
	<div id="header">
		<h1><a href="<?php echo home_url(); ?>"><?php bloginfo('name') ?></a></h1>
		<h2><?php bloginfo('description');?></h2>
		<div class="clear"></div>
		<div id="rss"><a href="<?php if($options['rss_url'] <> '') { echo($options['rss_url']); } else { bloginfo('rss2_url'); } ?>" rel="nofollow" title="RSS Feed">RSS Feed</a></div>
		<?php if($options['twitter_url'] <> '') : ?>
			<div id="twitter"><a href="<?php echo($options['twitter_url']); ?>" rel="nofollow" title="Follow me on twitter.">Follow me on twitter.</a></div>
		<?php endif; ?>
		<?php if($options['facebook_url'] <> '') : ?>
			<div id="facebook"><a href="<?php echo($options['facebook_url']); ?>" rel="nofollow" title="Facebook">Facebook</a></div>
		<?php endif; ?>
	</div>
<hr />
