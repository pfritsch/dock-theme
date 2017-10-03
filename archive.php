<?php
/**
 * The template for displaying archive pages
 *
 * Used to display archive-type pages if nothing more specific matches a query.
 * For example, puts together date-based pages if no date.php file exists.
 *
 * If you'd like to further customize these archive views, you may create a
 * new template file for each one. For example, tag.php (Tag archives),
 * category.php (Category archives), author.php (Author archives), etc.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package FoundationPress
 * @since FoundationPress 1.0.0
 */

get_header(); ?>

	<?php if ( have_posts() ) : ?>

		<section id="portfolio" class="portfolio-grid">
			<div class="expanded row">
				<div class="grid-container">
					<?php $loop = new WP_Query( array( 'post_type' => 'projet', 'posts_per_page' => -1 ) ); ?>
					<?php while ( have_posts() ) : the_post(); ?>
						<?php get_template_part( 'template-parts/project-item' ); ?>
					<?php endwhile; ?>
				</div>
			</div>
		</section>
		<?php else : ?>
			<main id="page" role="main">
				<div class="main-content">
					<?php get_template_part( 'template-parts/content', 'none' ); ?>
				</div>
			</main>
		<?php endif; // End have_posts() check. ?>

    	<?php get_template_part( 'template-parts/filters' ); ?>

<?php get_footer();
