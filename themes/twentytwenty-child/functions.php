

<?php
// var_dump(get_template_directory_uri());
function my_theme_enqeue_styles() {
    $path_style = get_template_directory_uri().'/style.css';
    wp_enqueue_style('parent-style', $path_style);
}
add_action('wp_enqueue_scripts','my_theme_enqeue_styles');
wp_register_style('Boostrap4', 'https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css');
wp_enqueue_style('Boostrap4');