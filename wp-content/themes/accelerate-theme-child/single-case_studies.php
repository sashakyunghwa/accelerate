<?php
/**
 * The template for displaying case studies
 *

 *
 * @package WordPress
 * @subpackage Accelerate_Theme
 * @since Accelerate Theme 1.1
 */

get_header(); ?>
<div id="primary" class="site-content">
    <div class="main-content" role="main">
    
    <?php while ( have_posts() ) : the_post();
        $size = 'full';
        $services = get_field('services');
        $client = get_field('client');
        $link = get_field('site_link');
        $image_1 = get_field('image_1');
        $image_2 = get_field('image_2');
        $image_3 = get_field('image_3'); ?>

    <article class="case-study">
        <aside class="case-study-sidebar">
            <h2><?php the_title(); ?></h2>
            <h4><?php echo $services; ?></h4>
            <h4>Client: <?php echo $client; ?></h4>
            
            <?php the_content(); ?>

            <p><strong><a class="links" href="<?php echo $link; ?>">Site Link</a></strong></p>
        </aside>

        <div class="case-study-images">
            <?php if($image_1) {
                echo wp_get_attachment_image( $image_1, $size );
            } ?>

            <?php if($image_2) {
                echo wp_get_attachment_image( $image_2, $size );
            } ?>

            <?php if($image_3) {
                echo wp_get_attachment_image( $image_3, $size );
            } ?>
        </div>
        <a class="read-more-link back-to-work-link" href="<?php echo site_url('/case-studies/') ?>">Back to Work</a> 
    </article>
    <?php endwhile; // end of the loop. ?>
    </div><!-- .main-content -->
</div><!-- #primary -->
<?php get_footer(); ?>

