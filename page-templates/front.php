<?php
/*
Template Name: Front
*/
get_header(); ?>

<?php do_action( 'foundationpress_before_content' ); ?>

<?php if(have_posts()):
	while ( have_posts() ) : the_post();
	if (!empty_content(get_the_content())): ?>
	<main id="page" role="main">
		<div class="row">
			<div class="main-content">
				<!-- Page content -->
					<section class="intro" role="main">
						<div <?php post_class('page-content') ?> id="post-<?php the_ID(); ?>">
							<?php do_action( 'foundationpress_page_before_entry_content' ); ?>
							<div class="entry-content">
								<?php the_content(); ?>
							</div>
							<footer>
								<?php wp_link_pages( array('before' => '<nav id="page-nav"><p>' . __( 'Pages:', 'foundationpress' ), 'after' => '</p></nav>' ) ); ?>
								<p><?php the_tags(); ?></p>
							</footer>
							<?php do_action( 'foundationpress_page_before_comments' ); ?>
							<?php comments_template(); ?>
							<?php do_action( 'foundationpress_page_after_comments' ); ?>
						</div>
					</section>
			</div>
		</div>
	</main>
	<?php endif;
 endwhile;
endif; ?>


<!-- Posts list -->
<?php get_template_part( 'template-parts/news' ); ?>


<!-- Projects List -->
<?php get_template_part( 'template-parts/projects-list' ); ?>

<!-- Filters -->
<?php get_template_part( 'template-parts/filters' ); ?>

<?php do_action( 'foundationpress_after_content' ); ?>

<?php get_footer();
