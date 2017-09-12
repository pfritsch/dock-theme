
<?php global $post;
$args = array( 'posts_per_page' => 3 );
$myposts = get_posts( $args );
if ( !empty($myposts) ) : ?>
<section class="news-list">
 <div class="row">
   <div class="main-content news-gallery">
     <?php foreach ( $myposts as $post ) : setup_postdata( $post ); ?>
       <article class="news post-content">
         <a href="<?php the_permalink(); ?>" class="news-link">
           <?php if ( has_post_thumbnail() ) { ?>
             <figure>
             <?php the_post_thumbnail('thumbnail'); ?>
             </figure>
           <?php } ?>
           <div>
             <h2 class="news-title post-title"><?php the_title(); ?></h2>
             <span class="news-date"><?php echo get_the_date(); ?></span>
           </div>
         </a>
       </article>
     <?php endforeach; ?>
     <?php wp_reset_postdata(); ?>
   </div>
 </div>
</section>
<?php endif; ?>
