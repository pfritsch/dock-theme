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

<?php do_action( 'foundationpress_before_content' ); ?>
<?php if(have_posts()):
	while ( have_posts() ) : the_post();
	if (!empty_content(get_the_content())): ?>
  <main id="page" role="main" class="row">
    <div class="main-content">
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
    </div>
  </main>
	<?php endif;
 endwhile;
endif; ?>
<?php do_action( 'foundationpress_after_content' ); ?>

</section>
<section class="container team-container">
  <div class="row">
    <div class="team main-content">
      <div class="team-content">
        <article class="team-member" data-member="leonard">
          <?php show_post('leonard-dosda'); ?>
        </article>
        <article class="team-member" data-member="sylvain">
          <?php show_post('sylvain-schreck'); ?>
        </article>
      </div>
			<div class="team-pictures">
				<img src="<?php echo get_template_directory_uri(); ?>/assets/images/team-leo.jpg" width="190" height="589" alt="La team" class="team-photo" data-member="leonard" />
				<img src="<?php echo get_template_directory_uri(); ?>/assets/images/team-sylvain.jpg" width="190" height="589" alt="La team" class="team-photo" data-member="sylvain"/>
			</div>
    </div>
  </div>
</section>
<section class="team-works">
  <a href="<?php echo get_permalink( get_page_by_path( 'projets/' ) ); ?>" class="button hollow">Voir nos réalisations</a>
</section>

<?php get_footer();
