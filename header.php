<?php
/**
 * @package WordPress
 * @subpackage basic
 */
?>

<html>
<head>
<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />

<title>Ben Dunkle's blog...</title>
<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">
<link rel="alternate" type="application/rss+xml" title="RSS 2.0" href="<?php bloginfo('rss2_url'); ?>" />
<link rel="alternate" type="text/xml" title="RSS .92" href="<?php bloginfo('rss_url'); ?>" />
<script type="text/javascript" src="http://code.jquery.com/jquery.min.js"></script>
<link href='http://fonts.googleapis.com/css?family=Arbutus+Slab|Quattrocento+Sans' rel='stylesheet' type='text/css'>	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
	<?php //comments_popup_script(); // off by default ?>
	<?php wp_head(); ?>
</head>

<body>

<div id="wrapper" class="group">


	<header>
		<h1><a href="<?php bloginfo('url'); ?>">Ben Dunkle&rsquo;s Blog</a></h1>
		<p>You might also want to check out<br />
		<a href="http://field2.com">Field 2, my design consultancy</a> | 
		<a href="http://dmaprof.com">My teaching website</a>
		</p>
	</header>
	<div id="content">
				<?php get_sidebar(); ?>
