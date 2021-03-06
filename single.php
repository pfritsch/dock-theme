<?php
/**
 * The template for displaying all single posts and attachments
 *
 * @package FoundationPress
 * @since FoundationPress 1.0.0
 */

get_header(); ?>

<?php if ( has_post_thumbnail() ) { ?>
  <div class="row">
    <figure class="news-thumbnail">
      <?php the_post_thumbnail('thumbnail'); ?>
    </figure>
  </div>
<?php } ?>
<main id="single-post" role="main">
	<div class="main-content">
		<?php do_action( 'foundationpress_before_content' ); ?>
		<?php while ( have_posts() ) : the_post(); ?>
			<article <?php post_class('post-content') ?> id="post-<?php the_ID(); ?>">
				<header>
					<h1 class="entry-title"><?php the_title(); ?></h1>
					<div class="post-meta">
						<?php foundationpress_entry_meta(); ?>
					</div>
				</header>
				<?php do_action( 'foundationpress_post_before_entry_content' ); ?>
				<div class="entry-content">
					<?php the_content(); ?>
					<?php edit_post_link( __( 'Edit', 'foundationpress' ), '<span class="edit-link">', '</span>' ); ?>
				</div>
				<footer>
					<?php wp_link_pages( array('before' => '<nav id="page-nav"><p>' . __( 'Pages:', 'foundationpress' ), 'after' => '</p></nav>' ) ); ?>
					<p><?php the_tags(); ?></p>
				</footer>
				<?php the_post_navigation(); ?>
				<?php do_action( 'foundationpress_post_before_comments' ); ?>
				<?php comments_template(); ?>
				<?php do_action( 'foundationpress_post_after_comments' ); ?>
			</article>
		<?php endwhile;?>

		<?php do_action( 'foundationpress_after_content' ); ?>
		<?php /* get_sidebar(); */ ?>
	</div>
</main>
<?php get_footer();
