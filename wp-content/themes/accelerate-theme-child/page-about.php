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
	<div id="primary" class="home-page hero-content">
		<div class="main-content" role="main">
			<?php the_content(); ?>
		</div><!-- .main-content -->
    </div><!-- #primary -->

	<section class="about-content">
		<div class="first-div">
			<h3 id="our-service">Our Services</h3>
			<p>We take pride in our clients and the content we create for them.</p>
			<p>Here's a brief overview of our offered services.</p>
		</div>

		<div class="services">
			<div class="service">
				<figure class="service-image-left">
					<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/bullseye.png" alt="Bulls eye">
				</figure>
				<div id="content-strategy" class="service-text-right">
					<h1>Content Strategy</h1>
					<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Fuga similique fugiat fugit rem dolor hic, tenetur sit iure nostrum, cumque adipisci possimus.</p>
				</div>
			</div>
			<div class="service">
				<div class="service-text-left">
					<h1>Influencer Mapping</h1>
					<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Rerum ipsa officia id vel praesentium commodi modi magnam at illum, sed maxime accusantium quis vitae soluta sit quae minima natus corrupti tempore cumque! Harum officiis, labore explicabo maxime reiciendis error neque omnis autem qui eaque cum quo ad porro similique natus.</p>
				</div>
				<figure class="service-image-right">
					<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/atom.png" alt="atom">
				</figure>	
			</div>
			<div class="service">
				<figure class="service-image-left">
					<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/like.png" alt="like">
				</figure>
				<div class="service-text-right">
					<h1>Social Media Strategy</h1>
					<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Debitis nostrum pariatur aliquam repellendus alias ad voluptatibus doloribus non minima mollitia quasi ullam sunt cum quidem tempore culpa eaque, optio recusandae reprehenderit quibusdam repellat vel repudiandae distinctio. Ipsam similique, cum reprehenderit necessitatibus molestiae alias aspernatur consequuntur nostrum vel dolores! Et facere sit ipsa eligendi cupiditate voluptas dolores delectus, quidem earum inventore quos ea aspernatur odio omnis porro voluptate unde repudiandae temporibus.</p>
				</div>	
			</div>
			<div class="service">
				<div class="service-text-left">
					<h1>Design and Development</h1>
					<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempore et voluptates quas repellendus consequatur, fugit dolore, molestias voluptas debitis laudantium magni aspernatur totam suscipit voluptatibus aliquam molestiae nulla soluta incidunt cum vel impedit quam eum. Magni non cum, corrupti ratione consequatur expedita dolore nostrum praesentium quos aliquid at corporis excepturi.</p>
				</div>
				<figure class="service-image-right">
					<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/design.png" alt="design">
				</figure>	
			</div>
		</div>
	
		<div class="contact-us">
			<h2>Interested in working with us?</h2>
			<button>Contact Us</button>
		</div>
	</section>

	</div><!-- #primary -->

<?php get_footer(); ?>
