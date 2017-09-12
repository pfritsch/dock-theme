<article class="portfolio-item">
  <a href="<?php the_permalink(); ?>" class="post-link">
    <?php if ( has_post_thumbnail() ) :
      $id = get_post_thumbnail_id();
      $alt = get_post_meta( $id, '_wp_attachment_image_alt', true);
      ?>
      <figure class="post-thumbnail">
        <img src="<?php echo the_post_thumbnail_url('fp-small'); ?>" data-interchange="[<?php echo the_post_thumbnail_url('fp-medium'); ?>, small], [<?php echo the_post_thumbnail_url('fp-large'); ?>, medium]" alt="<?php echo esc_attr( $alt );?>" />
        <noscript><img src="<?php echo the_post_thumbnail_url('fp-large'); ?>" alt="<?php echo esc_attr( $alt );?>" /></noscript>
      </figure>
    <?php endif; ?>
    <div class="post-content">
      <h2 class="post-title"><?php the_title(); ?></h2>
      <?php the_category(); ?>
    </div>
  </a>
</article>
