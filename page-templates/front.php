<?php
/*
Template Name: Front
*/
get_header(); ?>

<?php do_action( 'foundationpress_before_content' ); ?>

<?php if(have_posts()): ?>
	<main id="page" role="main">
		<div class="row">
			<div class="main-content">
				<!-- Page content -->
				<?php while ( have_posts() ) : the_post(); ?>
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
				<?php endwhile; ?>
			</div>
		</div>
	</main>
<?php endif; ?>

<!-- Projects List -->
<?php get_template_part( 'template-parts/projects-list' ); ?>
<?php get_template_part( 'template-parts/filters' ); ?>


<?php global $post;
	$args = array( 'posts_per_page' => 4 );
	$myposts = get_posts( $args );
	if ( !empty($myposts) ) : ?>
	<section class="news-list">
		<div class="row">
			<div class="main-content">
				<?php foreach ( $myposts as $post ) : setup_postdata( $post ); ?>
					<article class="news post-content">
						<a href="<?php the_permalink(); ?>">
							<h2 class="news-title post-title"><?php the_title(); ?></h2>
							<span class="news-date"><?php echo get_the_date(); ?></span>
						</a>
					</article>
				<?php endforeach; ?>
				<?php wp_reset_postdata(); ?>
			</div>
		</div>
	</section>
<?php endif; ?>
<?php do_action( 'foundationpress_after_content' ); ?>

<?php get_footer();
