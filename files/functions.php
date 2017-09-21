<?php
function snet_excerpt_more($more) {
	global $post;
	return '&hellip;<div class="post-read-more"><a class="btn btn-primary" href="' . get_permalink($post->ID) . '">View Full Post</a></div>';
}
add_filter('excerpt_more', 'snet_excerpt_more');
?>