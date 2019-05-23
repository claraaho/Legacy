<?php
/**
 * The template for displaying all single posts.
 *
 * @package Legacy_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

      <section class="hero-block home-block">
        <?php if( have_rows('hero_slider') ): ?>
          <ul class="slides carousel">
            <?php while( have_rows('hero_slider') ): the_row(); ?>
              <li class="sliders carousel-cell">
                <img src="<?php the_sub_field('hero_background_image'); ?>">
                <div class="container-fluid shared-container slider-container">
                  <div class="row first-row">
                    <div class="col-12 slider-content">
                      <div class="row nested-row">
                        <div class="col-12 container-heading slider-container-heading">
                          <h4 class="test"><?php the_sub_field('hero_category'); ?></h4>
                          <h2><?php the_sub_field('hero_title'); ?></h2>
                          <h3><?php the_sub_field('hero_heading'); ?></h3>
                        </div>
                        <div class="col-12 container-content">
                          <?php the_sub_field('hero_excerpt'); ?>
                          <?php $link = get_sub_field('hero_link');
	                        if( $link ): ?>
	                          <a class="slider-link" href="<?php echo $link['url']; ?>" target="<?php echo $link['target']; ?>"><p><?php echo $link['title']; ?></p><span></span></a>
	                        <?php endif; ?>
                        </div>
                      </div>  
                    </div>
                    <div class="col-12 container-icon">
                      <?php the_sub_field('hero_icon'); ?>
                    </div>
                  </div>
                </div>
              </li>
            <?php endwhile; ?>
          </ul>
        <?php endif;?>
    	</section>

      <section class="about-block home-block">
        <img src="<?php echo the_field('about_background_image'); ?>">
        <div class="container-fluid about-container shared-container">
      <div class="row first-row">
          <div class="col-12 container-heading about-container-heading">
            <h4 class="test"><?php echo the_field('about_subtitle'); ?></h4>
            <h2><?php echo the_field('about_title'); ?></h2>
            <h3><?php echo the_field('about_heading'); ?></h3>
          </div>
          <div class="col-12 container-arrow"></div>
          <div class="col-12 container-content">
            <?php echo the_field('about_excerpt'); ?>
          </div>
        </div>
        </div>
      </section>
            
      <section class="footer-block home-block">
      <?php if( have_rows('footer_slider') ): ?>
          <ul class="slides carousel">
            <?php while( have_rows('footer_slider') ): the_row(); ?>
              <li class="sliders carousel-cell">
                <img src="<?php the_sub_field('footer_background_image'); ?>">
                <div class="container-fluid shared-container slider-container">
                  <div class="row first-row">
                    <div class="col-12 slider-content">
                      <div class="row nested-row">
                        <div class="col-12 container-heading slider-container-heading">
                          <h4><?php the_sub_field('footer_category'); ?></h4>
                          <h2><?php the_sub_field('footer_title'); ?></h2>
                          <h3><?php the_sub_field('footer_heading'); ?></h3>
                        </div>
                        <div class="col-12 container-content">
                          <?php the_sub_field('footer_excerpt'); ?>
                          <?php $link2 = get_sub_field('footer_link');
	                        if( $link2 ): ?>
	                          <a class="slider-link" href="<?php echo $link2['url']; ?>" target="<?php echo $link2['target']; ?>"><p><?php echo $link2['title']; ?></p><span></span></a>
	                        <?php endif; ?>
                        </div>
                      </div>  
                    </div>
                    <div class="col-12 container-icon">
                      <?php the_sub_field('footer_icon'); ?>
                    </div>
                  </div>
                </div>
              </li>
            <?php endwhile; ?>
          </ul>
        <?php endif;?>
      </section>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
