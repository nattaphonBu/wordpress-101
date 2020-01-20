<?php

get_header();

echo 'blog index page';

$args = array(
    'post_type'   => 'post',
    'numberposts' => 10,
    'orderby'     => 'date',
    'order'       => 'DESC'
);

$lastest_posts = get_posts( $args );

echo '<div class="container-fluid">';
echo '<div class="row">';

foreach ( $lastest_posts as $latest_post ){
    $categories = get_the_category( $lates_post->ID );
    
    echo '<div class="col-md-6">';
    foreach ($categories as $category){
        echo ($category->name);
        
    }
    echo '<h4>' . $latest_post->post_title . '</h4>';
    echo '<a href="'.get_permalink( $latest_post->ID ).'"> See Detail </a>';
    echo '<p>' . $latest_post->post_date . '</p>';
    // echo '<img src = "' . get_the_post_thumbnail_url( $latest_post->ID) . ' ">';
    echo '</div>';
}
echo '</div>';
echo '</div>';

get_footer();