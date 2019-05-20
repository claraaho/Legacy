<?php
/**
 * The template for displaying all single posts.
 *
 * @package Legacy_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

      <section class="services-block">
        <img src="<?php echo the_field('services_background_image'); ?>">
        <div class="container-fluid">
          <div class="row">
            <div class="col-12">
              <h4 class="test"><?php echo the_field('services_subtitle'); ?></h4>
              <h2><?php echo the_field('services_title'); ?></h2>
              <h3><?php echo the_field('services_heading'); ?></h3>
            </div>
          	<div class="col-12"></div>
        		<div class="col-12">
        			<?php echo the_field('services_excerpt'); ?>
        		</div>
      		</div>
    		</div>
    	</section>

      <section class="container-fluid about-block">
        <div class="row">
          <div class="col-12">
            <h4 class="test"><?php echo the_field('about_subtitle'); ?></h4>
            <h2><?php echo the_field('about_title'); ?></h2>
            <h3><?php echo the_field('about_heading'); ?></h3>
          </div>
          <div class="col"-12></div>
          <div class="col-12">
            <?php echo the_field('about_excerpt'); ?>
          </div>
        </div>
      </section>
            
      <section class="container-fluid press-release-block">
        <div class="row">
          <div class="col-12">
            <h4 class="test"><?php echo the_field('press_release_subtitle'); ?></h4>
            <h2><?php echo the_field('press_release_title'); ?></h2>
            <h3><?php echo the_field('press_release_heading'); ?></h3>
          </div>
          <div class="col"-12></div>
          <div class="col-12">
            <?php echo the_field('press_release_excerpt'); ?>
          </div>
        </div>
      </section>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
