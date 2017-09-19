<?php $categories = get_the_category();
if(count($categories) > 0 && $categories != NULL) { ?>
	<div class="category-block">
		<strong>Categories:</strong>
		<?php foreach($categories as $category) {
			$category_link = get_tag_link($category->term_id); ?>
			<a class="category" href="<?php echo $category_link ?>"><?php echo $category->name; ?></a><?php

			if(end($categories) !== $category) {
				echo ',';
			}
		} ?>
	</div>
<?php } ?>
