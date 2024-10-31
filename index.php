<?php
/*
Plugin Name: Nofollow Adder
Version: 1.0
Author:Srikant Kumar
License: GPL2
Description: One of the prime reason behind low traffic is lack of restriction to crawl external links. This simple plugin can restrict crawlers to crawl external links. Just activate the plugin, and search engines crawlers wont crawl any external links.
*/

function nofollowAdder(){
	nofollowAdder_add_nofollow_attribute();
	wp_enqueue_script('nofollow_adder_script',plugins_url("nofollow-adder/scripts.js"),array('jquery'),false);
}
function nofollowAdder_add_nofollow_attribute(){ ?>
<script type="text/javascript">
var rooturl="<?php $url = home_url( '/' ); echo esc_url( $url );?>";
</script>
<?php	
}
add_action('wp_enqueue_scripts','nofollowAdder');