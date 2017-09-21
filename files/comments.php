<?php if(post_password_required()) return; ?>

<h2>Comments</h2>
<div id="comments" class="comments-section">
	<ul id="comments-list">
		<?php wp_list_comments(array(
			'avatar_size'	=> 48,
			'short_ping'	=> true
		)); ?>
	</ul>

	<div class="comment-form">
		<?php comment_form(); ?>
	</div>
</div>
