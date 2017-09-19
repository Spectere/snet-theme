<!DOCTYPE html>
<html <?php language_attributes(); ?>>
	<head>
		<meta charset="<?php bloginfo("charset"); ?>" />
		<title><?php wp_title(); ?></title>
		<link rel="profile" href="http://gmpg.org/xfn/11" />
		<link rel="pingback" href="<?php bloginfo("pingback_url"); ?>" />
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
		<link href="https://fonts.googleapis.com/css?family=Crimson+Text:400,400i,600,600i|Raleway:200" rel="stylesheet">
		<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>" />
		<?php if(is_singular() && get_option('thread_comments')) wp_enqueue_script('comment-reply'); ?>
		<?php wp_head(); ?>
	</head>

	<body <?php body_class(); ?>>
		<div id="container">
			<div class="row">
				<div id="left-sidebar-pane" class="col-sm-4 col-md-3 col-lg-3">
					<?php get_sidebar(); ?>
				</div>