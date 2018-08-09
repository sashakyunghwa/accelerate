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
			<?php while ( have_posts() ) : the_post(); ?>
				<?php the_content(); ?>
			<?php endwhile; // end of the loop. ?>
		</div><!-- .main-content -->
	</div><!-- #primary -->

	<section class="about-content">
		<?php while ( have_posts() ) : the_post();
			$header = get_field('header');
			$header_description = get_field('header_description');
			$title_1 = get_field('service_title_1');
			$title_2 = get_field('service_title_2');
			$title_3 = get_field('service_title_3');
			$description_1 = get_field('service_description_1');
			$description_2 = get_field('service_description_2');
			$description_3 = get_field('service_description_3');
			$image_1 = get_field('service_image_1');
			$image_2 = get_field('service_image_2');
			$image_3 = get_field('service_image_3');
			$size = 'full'; ?>
		<div class="first-div">
			<h3 id="our-service"><?php echo $header ?></h3>
			<p><?php echo $header_description ?></p>
		</div>
		<div class="services">
			<div class="service">
				<figure class="service-image-left">
					<?php echo wp_get_attachment_image( $image_1, $size ); ?>
				</figure>
				<div id="content-strategy" class="service-text-right">
					<h1><?php echo $title_1 ?></h1>
					<p><?php echo $description_1 ?></p>
				</div>
			</div>
			<div class="service">
				<div class="service-text-left">
					<h1><?php echo $title_2 ?></h1>
					<p><?php echo $description_2 ?></p>
				</div>
				<figure class="service-image-right">
					<?php echo wp_get_attachment_image( $image_2, $size ); ?>
				</figure>	
			</div>
			<div class="service">
				<figure class="service-image-left">
					<?php echo wp_get_attachment_image( $image_3, $size ); ?>
				</figure>
				<div class="service-text-right">
					<h1><?php echo $title_3 ?></h1>
					<p><?php echo $description_3 ?></p>
				</div>	
			</div>
			<div class="service">
				<div class="service-text-left">
					<h1><?php echo $title_4 ?></h1>
					<p><?php echo $description_4 ?></p>
				</div>
				<figure class="service-image-right">
					<?php echo wp_get_attachment_image( $image_4, $size ); ?>
				</figure>	
			</div>
		</div>	
		<div class="contact-us">
			<h2>Interested in working with us?</h2>
			<button>Contact Us</button>
		</div>
		<?php endwhile; // end of the loop. ?>
	</section>

<?php get_footer(); ?>


<!-- /* Hardcode */ -->
<!-- <section class="about-content">
		<div class="first-div">
			<h3 id="our-service"><?php the_title(); ?></h3>
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

	</div>#primary -->
