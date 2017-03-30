<?php
/**
 * Author: Ole Fredrik Lie
 * URL: http://olefredrik.com
 *
 * FoundationPress functions and definitions
 *
 * Set up the theme and provides some helper functions, which are used in the
 * theme as custom template tags. Others are attached to action and filter
 * hooks in WordPress to change core functionality.
 *
 * @link https://codex.wordpress.org/Theme_Development
 * @package FoundationPress
 * @since FoundationPress 1.0.0
 */

/** Various clean up functions */
require_once( 'library/cleanup.php' );

/** Required for Foundation to work properly */
require_once( 'library/foundation.php' );

/** Register all navigation menus */
require_once( 'library/navigation.php' );

/** Add menu walkers for top-bar and off-canvas */
require_once( 'library/menu-walkers.php' );

/** Create widget areas in sidebar and footer */
require_once( 'library/widget-areas.php' );

/** Return entry meta information for posts */
require_once( 'library/entry-meta.php' );

/** Enqueue scripts */
require_once( 'library/enqueue-scripts.php' );

/** Add theme support */
require_once( 'library/theme-support.php' );

/** Add Nav Options to Customer */
require_once( 'library/custom-nav.php' );

/** Change WP's sticky post class */
require_once( 'library/sticky-posts.php' );

/** Configure responsive image sizes */
require_once( 'library/responsive-images.php' );

/** If your site requires protocol relative url's for theme assets, uncomment the line below */
// require_once( 'library/protocol-relative-theme-assets.php' );


/** Portfolio Custom Post Type */
if ( ! function_exists('projets_post_type') ) {

  // Register Custom Post Type
  function projet_post_type() {

  	$labels = array(
  		'name'                  => _x( 'Projets', 'Post Type General Name', 'dock' ),
  		'singular_name'         => _x( 'Projet', 'Post Type Singular Name', 'dock' ),
  		'menu_name'             => __( 'Projets', 'dock' ),
  		'name_admin_bar'        => __( 'Type de projet', 'dock' ),
  		'archives'              => __( 'Archives des projets', 'dock' ),
  		'attributes'            => __( 'Attributs du projet', 'dock' ),
  		'parent_item_colon'     => __( 'Projet parent:', 'dock' ),
  		'all_items'             => __( 'Tous les projets', 'dock' ),
  		'add_new_item'          => __( 'Ajouter un projet', 'dock' ),
  		'add_new'               => __( 'Ajouter', 'dock' ),
  		'new_item'              => __( 'Nouveau projet', 'dock' ),
  		'edit_item'             => __( 'Modifier', 'dock' ),
  		'update_item'           => __( 'Mettre à jour', 'dock' ),
  		'view_item'             => __( 'Voir', 'dock' ),
  		'view_items'            => __( 'Voir les projets', 'dock' ),
  		'search_items'          => __( 'Rechercher un projet', 'dock' ),
  		'not_found'             => __( 'Aucun résultat', 'dock' ),
  		'not_found_in_trash'    => __( 'Aucun résultat dans la corbeille', 'dock' ),
  		'featured_image'        => __( 'Image à la Une', 'dock' ),
  		'set_featured_image'    => __( 'Mettre une image à la Une', 'dock' ),
  		'remove_featured_image' => __( 'Supprimer l\'image à la Une', 'dock' ),
  		'use_featured_image'    => __( 'Utiliser comme image à la Une', 'dock' ),
  		'insert_into_item'      => __( 'Ajouter au projet', 'dock' ),
  		'uploaded_to_this_item' => __( 'Ajouter un média à ce projet', 'dock' ),
  		'items_list'            => __( 'Liste des projets', 'dock' ),
  		'items_list_navigation' => __( 'Naviguer dans les projets', 'dock' ),
  		'filter_items_list'     => __( 'Filtrer la liste des projets', 'dock' ),
  	);
  	$args = array(
  		'label'                 => __( 'projet', 'dock' ),
  		'description'           => __( 'Project post type', 'dock' ),
  		'labels'                => $labels,
  		'supports'              => array( 'title', 'editor', 'excerpt', 'author', 'thumbnail', 'revisions', 'custom-fields', 'page-attributes', 'post-formats', ),
  		'taxonomies'            => array( 'category' ),
  		'hierarchical'          => true,
  		'public'                => true,
  		'show_ui'               => true,
  		'show_in_menu'          => true,
  		'menu_position'         => 5,
  		'menu_icon'             => 'dashicons-portfolio',
  		'show_in_admin_bar'     => true,
  		'show_in_nav_menus'     => true,
  		'can_export'            => true,
  		'has_archive'           => true,
  		'exclude_from_search'   => false,
  		'publicly_queryable'    => true,
  		'capability_type'       => 'post',
  	);
  	register_post_type( 'projet', $args );

  }
  add_action( 'init', 'projet_post_type', 0 );
}

// Add portfolio in categories page
add_filter('pre_get_posts', 'query_post_type');
function query_post_type($query) {
  if( is_category() ) {
    $post_type = get_query_var('post_type');
    if($post_type)
      $post_type = $post_type;
    else
      $post_type = array('nav_menu_item', 'projet');
      $query->set('post_type',$post_type);
    return $query;
    }
}

function show_post($path) {
  $post = get_page_by_path($path);
  $title = get_the_title($post);
  $content = apply_filters('the_content', $post->post_content);
  echo '<h2 class="team-name">'.$title.'</h2>';
  echo $content;
}
