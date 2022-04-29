<? php

function basetheme_register_styles() {
    $version = wp_get_theme()-> get( "Version" );
    wp_enqueue_style('basetheme-mainsheet', get_template_directory_uri() . "/style.css", array('basetheme-bootstrap'), $version, "all");
    wp_enqueue_style('basetheme-bootstrap', "https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" . "/style.css", array(), "4.4.1", "all");
    wp_enqueue_style('basetheme-fontawesome', "https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css" . "/style.css", array(), "5.13.0", "all");
}

add_action('wp_engueue_scripts', 'basetheme-mainsheet');

?>
