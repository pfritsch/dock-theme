<section id="portfolio" class="portfolio-list">
	<div class="row">
		<div class="main-content">
			<?php $loop = new WP_Query( array( 'post_type' => 'projet', 'posts_per_page' => 3 ) ); ?>
			<?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
				<?php get_template_part( 'template-parts/project-item' ); ?>
			<?php endwhile; ?>
			<?php wp_reset_postdata(); ?>
		</div>
	</div>
</section>
