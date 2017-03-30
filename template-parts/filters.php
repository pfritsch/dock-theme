<section class="filters">
  <div class="row">
    <div class="main-content">
      <ul class="filters-list categories">
        <?php
          $args = array(
          'orderby' => 'slug',
          'hide_empty' => 1,
          'parent' => 0,
          'exclude' => '1'
          );
          $categories = get_categories( $args );
          $current_categories = get_the_category();
          $current_categoryID = $current_categories[0]->cat_ID;
          foreach ( $categories as $category ) {
            $url = get_category_link( $category->term_id );
            if($current_categoryID == $category->term_id) $url = get_permalink( get_page_by_title( 'Projets' ));
            ?>
            <li class="filter-item<?php if($current_categoryID == $category->term_id) echo ' current-cat'; ?>">
              <a href="<?php echo esc_url($url) ?>">
                <svg class="icon is-inline"><use xlink:href="#icon-<?php echo $category->slug; ?>" /></svg>
                <span><?php echo $category->name; ?></span>
              </a>
            </li>
          <?php } ?>
      </ul>
    </div>
  </div>
</section>
