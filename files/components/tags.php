<?php $tags = get_the_tags();
if(count($tags) > 0 && $tags != NULL) { ?>
	<div class="tag-block">
		<strong>Tags:</strong>
		<?php foreach($tags as $tag) {
			$tag_link = get_tag_link($tag->term_id); ?>
			<a class="tag" href="<?php echo $tag_link ?>"><?php echo $tag->name; ?></a><?php

			if(end($tags) !== $tag) {
				echo ',';
			}
		} ?>
	</div>
<?php } ?>
