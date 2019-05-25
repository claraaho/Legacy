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
                <img class="background-image" src="<?php the_sub_field('hero_background_image'); ?>">
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
                      <?php $icon_link = get_sub_field('hero_icon');
	                    if( $link ): ?>
                        <img src="<?php echo $icon_link; ?>">
                      <?php endif; ?>
                    </div>
                  </div>
                </div>
              </li>
            <?php endwhile; ?>
          </ul>
        <?php endif;?>
    	</section>

      <section class="about-block home-block">
        <div class="container-fluid about-container shared-container">
          <img class="background-image" src="<?php echo the_field('about_background_image'); ?>">  
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
                <img class="background-image" src="<?php the_sub_field('footer_background_image'); ?>">
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
                      <?php $icon_link2 = get_sub_field('footer_icon');
	                    if( $link ): ?>
                        <img src="<?php echo $icon_link2; ?>">
                      <?php endif; ?>
                    </div>
                  </div>
                </div>
              </li>
            <?php endwhile; ?>
          </ul>
        <?php endif;?>
      </section>

      <section class="contact-block">
        <div class="contact-info-container">
          <div class="contact-description-wrapper">
            <h3><?php echo the_field('contact_heading'); ?></h3>
            <p><?php echo the_field('contact_description'); ?></p>
          </div>
          <div class="contact-info-wrapper">
            <p><i class="fas fa-phone"></i><a href="tel:+1<?php echo the_field('contact_telephone'); ?>" class="contact-phone"><?php echo the_field('contact_telephone'); ?></a></p>
            <p><i class="fas fa-envelope-square"></i><a href="mailto:<?php echo the_field('contact_email'); ?>"><?php echo the_field('contact_email'); ?></a>
          </div>
        </div>
        <div class="contact-form-container">
          <?php echo do_shortcode("[contact-form-7 id='130' title='Contact form 1']"); ?>
        </div>
      </section>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
