<?php if(post_password_required()) return; ?>

<div id="comments" class="comments-section">
	<ul id="comments-list">
		<?php wp_list_comments(array(
			'avatar_size'	=> 48,
			'short_ping'	=> true
		)); ?>
	</ul>

	<?php comment_form(); ?>
</div>
