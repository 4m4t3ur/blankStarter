<?php
// Enqueues jQuery the way it should be added to Wordpress
function my_scripts() {
		wp_enqueue_script('jquery');
}
add_action('wp_enqueue_scripts', 'my_scripts');
?>
