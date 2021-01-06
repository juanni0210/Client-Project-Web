<h3>Featured Posts</h3>

<?php 
$args = array (
                      'category_name' => 'featured',
                      'pagination' => false,
                      'posts_per_page' => '3',
                      'order' => 'DESC',
                      'orderby' => 'date'
);
$favoritepost = new WP_Query( $args );

if ( $favoritepost->have_posts() ) {
          while ( $favoritepost->have_posts() ) {
          $favoritepost->the_post();
?>

<h5> <a href="<?php the_permalink(); ?>"> <?php the_title();?> </a> </h5> 
<p><?php the_time('F j, Y'); ?> by <?php the_author(); ?>&nbsp; &nbsp;<em><?php the_category(', '); ?></em></p>

<?php the_content(); ?>
<hr>

<?php
}
} else {
     echo "<p>Please add Posts to Category: <em>featured</em></p>";
}

// Restore original Post Data
wp_reset_postdata();
?>


<?php
// Get the ID of a given category

$category_id = get_cat_ID( 'featured' );

// Get the URL of this category

$category_link = get_category_link( $category_id );

?>

<p><a href="<?php echo esc_url( $category_link ); ?>" title="featured">More Posts &raquo;</a></p>