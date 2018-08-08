<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package WordPress
 * @subpackage Accelerate Marketing
 * @since Accelerate Marketing 2.0
 */

get_header(); ?>

	<div id="primary" class="site-content">
		<div class="main-content haha" role="main">
				<h1 class="haha-text">HA HA</h1>
				<h2 class="haha-text">Not much to see here.</h2>
				<h2 class="haha-text">Yea, we're unamused too. Go back to the <a href="http://localhost:8888/accelerate/">homepage</a> here.</h2>
				<img id="minion-pic" src="<?php echo get_stylesheet_directory_uri(); ?>/img/minion.gif" alt="Minion 404 image">
		</div><!-- .main-content -->

	</div><!-- #primary -->

<?php get_footer(); ?>