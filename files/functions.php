<?php
	function snet_customizer_css() {
		if((bool)get_theme_mod("titlebar_daily_hue", false)) {
			$dayNum = date("z");
			$hue = ($dayNum / 365) * 360;
			?>
				<style type="text/css">
					#title-pane {
						background-color: hsl(<?php echo $hue; ?>, 40%, 40%) !important;
					}

					#subtitle-text-block {
						color: rgba(255, 255, 255, 0.7);
					}
				</style>
			<?php
		}
	}
	add_action("wp_head", "snet_customizer_css");

	function snet_customize_register($wp_customize) {
		$wp_customize->add_section("snet_titlebar", array(
			"title" => "Titlebar",
			"priority" => 99
		));

		$wp_customize->add_setting("titlebar_daily_hue", array(
			"default" => false,
			"transport" => "refresh"
		));

		$wp_customize->add_control("titlebar_daily_hue", array(
			"type" => "checkbox",
			"section" => "snet_titlebar",
			"priority" => 10,
			"label" => "Daily, Hue-Shifting Titlebar"
		));
	}
	add_action("customize_register", "snet_customize_register");

	function snet_read_more_link() {
		return '<div class="post-read-more"><a class="btn btn-primary" href="' . get_permalink() . '">View Full Post</a></div>';
	}
	add_filter("the_content_more_link", "snet_read_more_link");

	function snet_setup() {
		add_theme_support("title-tag");
		add_theme_support("automatic-feed-links");

		add_theme_support("html5",	array(
			"comment-form",
			"comment-list",
			"gallery",
			"caption",
			"script",
			"style"
		));
	}
	add_action("after_setup_theme", "snet_setup");

	function snet_widgets_init() {
		register_sidebar(array(
			"name" => "Sidebar",
			"id" => "sidebar-1",
			"description" => "Left Sidebar",
			"before_widget" => '<section id="%1$s" class="widget %2$s">',
			"after_widget" => '</section>',
			"before_title" => '<h2 class="widget-title">',
			"after_title" => '</h2>'
		));
	}
	add_action("widgets_init", "snet_widgets_init");
?>
