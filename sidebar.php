<div id="sidebar">
<?php get_search_form(); ?>
<aside>
<h2>About me</h2>
<p>
I'm a designer, artist-in-hibernation, and professor at Canisius College.<br>
I live in Snyder, NY, right outside of Buffalo.<br>
I design icons for <a href="http://wordpress.org/about">WordPress.</a>
</p>
</aside>

<aside>
<h2>Recent Posts</h2>
<ul>
<?php
	$recent_posts = wp_get_recent_posts();
	foreach( $recent_posts as $recent ){
		echo '<li><a href="' . get_permalink($recent["ID"]) . '" title="Look '.esc_attr($recent["post_title"]).'" >' .   $recent["post_title"].'</a> </li> ';
	}
?>
</ul>
</aside>

<aside>
<h2>Archives</h2>
<ul>
<?php wp_get_archives( array( 'type' => 'monthly', 'limit' => 1000 ) ); ?>
</ul>
</aside>

</div><!-- #sidebar -->