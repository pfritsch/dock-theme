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
  <div class="row">
    <div class="main-content">
      <p class="text-center">
        <a href="<?php echo get_permalink( get_page_by_path( 'projets' )); ?>" class="button hollow  portfolio-button">
          <span>Voir tous les projets</span>
        </a>
      </p>
    </div>
  </div>
</section>
