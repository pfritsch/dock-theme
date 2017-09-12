<?php
/**
 * The template for displaying pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages and that
 * other "pages" on your WordPress site will use a different template.
 *
 * @package FoundationPress
 * @since FoundationPress 1.0.0
 */

 get_header(); ?>

 <?php get_template_part( 'template-parts/featured-image' ); ?>

<main id="page" role="main">
  <div class="row">
    <div class="main-content">
      <?php do_action( 'foundationpress_before_content' ); ?>
      <?php do_action( 'foundationpress_after_content' ); ?>
      </div>
   </div>
</main>

<?php get_template_part( 'template-parts/filters' ); ?>
<?php get_template_part( 'template-parts/projects-grid' ); ?>

<?php get_footer();
