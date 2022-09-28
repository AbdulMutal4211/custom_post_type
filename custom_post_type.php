<?php
/**** Register Taxonomy Code in Post Type Start */

function register_custom_taxonomy() {
    $args = array(
        'label'        => __( 'Book Category', 'test' ),
        'rewrite'      => array( 'slug' => 'genre' ),
        'hierarchical' => true,
   );
   register_taxonomy( 'book_cat','book', $args );
}
add_action( 'init', 'register_custom_taxonomy', 0 );

/**** Register Taxonomy Code in Post Type End */



/**** Register Post Type Start */

function book_post_type() {
    $labels = array(
        'name'                  => _x( 'Books', 'Post type general name', 'textdomain' ),
        'singular_name'         => _x( 'Book', 'Post type singular name', 'textdomain' ),
        'add_new_item'          => __( 'Add New Book', 'textdomain' ),
        'not_found'             => __( 'No books found.', 'textdomain' ),
        'not_found_in_trash'    => __( 'No books found in Trash.', 'textdomain' ),
    );

    $args = array(
        'labels'             => $labels,
        'public'             => true,
        'menu_icon' => 'dashicons-book',
        'supports'           => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments' ),
        // 'rewrite'            => array( 'slug' => 'book' ),
    );
    register_post_type( 'book', $args );
}

add_action( 'init', 'book_post_type' );

/**** Register Post Type End */
?>

<div class="container">
  <?php
    $paged = get_query_var( 'paged' ) ? get_query_var( 'paged' ) : 1; // setup pagination
    $the_query = new WP_Query( array(
      'post_type' => 'book',
      'paged' => $paged,
      'orderby' =>'ID',
      'order' =>'asc',        
      'posts_per_page' => 9)
     ); 
     
  while ( $the_query->have_posts() ) : $the_query->the_post();        
  ?>

   <div class="row">
       <div class="col span_4">
           <img src="<?php echo the_post_thumbnail_url(); ?>" alt="Image Title">
       </div>
       <div class="col span_8">
           <p><?php echo get_the_content(); ?></p>
       </div>
   </div>

  <?php endwhile; ?>
</div>