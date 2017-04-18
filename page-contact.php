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

  <main id="page" role="main" class="row">
    <div class="main-content">
     <?php do_action( 'foundationpress_before_content' ); ?>
     <?php while ( have_posts() ) : the_post(); ?>
       <article <?php post_class('page-content') ?> id="post-<?php the_ID(); ?>">
           <header class="show-for-sr">
               <h1 class="entry-title"><?php the_title(); ?></h1>
           </header>
           <?php do_action( 'foundationpress_page_before_entry_content' ); ?>
           <div class="entry-content lead">
               <?php the_content(); ?>
               <?php edit_post_link( __( 'Edit', 'foundationpress' ), '<span class="edit-link">', '</span>' ); ?>
           </div>
           <footer>
               <?php wp_link_pages( array('before' => '<nav id="page-nav"><p>' . __( 'Pages:', 'foundationpress' ), 'after' => '</p></nav>' ) ); ?>
               <p><?php the_tags(); ?></p>
           </footer>
           <?php do_action( 'foundationpress_page_before_comments' ); ?>
           <?php comments_template(); ?>
           <?php do_action( 'foundationpress_page_after_comments' ); ?>
       </article>
     <?php endwhile;?>

     <?php do_action( 'foundationpress_after_content' ); ?>
     <?php // get_sidebar(); ?>
    </div>

  </main>
</section>
<section class="container contact-container">
  <div class="row">
    <div class="contact main-content">
      <div class="contact-content">
        <article class="contact-main">
          <?php show_post('parlez-nous-de-votre-projet'); ?>
        </article>
      </div>
      <img src="<?php echo get_template_directory_uri(); ?>/assets/images/sylvain_portrait.jpg" width="396" height="324" alt="La team" class="contact-portrait is-sylvain" />
      <img src="<?php echo get_template_directory_uri(); ?>/assets/images/leo_portrait.jpg" width="396" height="324" alt="La team" class="contact-portrait is-leo" />
    </div>
  </div>
</section>
<?php get_template_part( 'template-parts/map' ); ?>
<?php get_footer();
