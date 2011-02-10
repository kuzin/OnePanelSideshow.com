<?php
/**
 * @package WordPress
 * @subpackage Default_Theme
 */
// Do not delete these lines
	if (!empty($_SERVER['SCRIPT_FILENAME']) && 'comments.php' == basename($_SERVER['SCRIPT_FILENAME']))
		die ('Please do not load this page directly. Thanks!');
	if ( post_password_required() ) { ?>
		<p class="nocomments">This post is password protected. Enter the password to view comments.</p>
	<?php
		return;
	}
$countComments = 0;
$countPings = 0;
if($post->comment_count > 0) {
	$comments_list = array();
	$pings_list = array();
	foreach($comments as $comment) {
		if('comment' == get_comment_type()) $comments_list[++$countComments] = $comment;
		else $pings_list[++$countPings] = $comment;
	}
}
?>
<!-- You can start editing here. -->

	<?php if ( have_comments() ) { ?>
			<div id="comments-div"><span id="comments-addcomment"><a href="#respond"  rel="nofollow" title="Leave a comment ?">Leave a comment</a></span><h2 id="comments"><?php comments_number('0', '1', '%' );?> Comments.</h2></div>
			<ol class="commentlist" id="thecomments">
					<?php wp_list_comments('type=comment&callback=mytheme_comment'); ?>
			</ol>
			<div class="navigation"><?php paginate_comments_links(); ?></div>
	<?php } else { // this is displayed if there are no comments so far ?>
	<?php if ( ! comments_open() && !is_page() ) { ?>
			<div id="comments-div"><h2 id="comments"><?php _e( 'Comments are closed.' ); ?></h2></div>
	<?php } // end ! comments_open() ?>

	<?php } // end have_comments() ?>

	<?php
		// This is stupid fields customization
		function zbench_comment_fields ($fields) {
			foreach ($fields as $name => $field) {
				$fields[$name] = preg_replace('/(<label(?:.*?)>(?:.*?)<\/label>)\s*(<span class="required">\*<\/span>)?\s*(<input(?:.*?)\/>)/','\3\1\2',$field);
			}
			return $fields;
		}
		add_filter('comment_form_default_fields', 'zbench_comment_fields');
	?>

	<?php include(TEMPLATEPATH . '/smiley.php');?>
	<?php comment_form('comment_field=<p class="comment-form-comment"><textarea aria-required="true" rows="8" cols="45" name="comment" id="comment" onkeydown="if(event.ctrlKey){if(event.keyCode==13){document.getElementById(\'submit\').click();return false}};"></textarea></p><p>'.$smilies.'</p>'); ?>

	<?php if($countPings > 0) { ?>
		<div class="trackbacks-pingbacks">
			<h3>Trackbacks and Pingbacks:</h3>
			<ul id="pinglist">
				<?php foreach($pings_list as $comment) : 
						if('pingback' == get_comment_type()) $pingtype = 'Pingback';
						else $pingtype = 'Trackback';
				?>
				<li id="comment-<?php echo $comment->comment_ID ?>">
					<?php comment_author_link(); ?> - <?php echo $pingtype; ?> on <?php echo mysql2date('Y/m/d/ H:i', $comment->comment_date); ?>
				</li>
				<?php endforeach; ?>
			</ul>
		</div>
	<?php } ?>