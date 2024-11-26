<?php 

add_action( 'wp_enqueue_scripts', 'salient_child_enqueue_styles', 100);
function salient_child_enqueue_styles() 
{
    $nectar_theme_version = nectar_get_theme_version();
    wp_enqueue_style( 'salient-child-style', get_stylesheet_directory_uri() . '/style.css', '', $nectar_theme_version );
    wp_enqueue_style( 'slick-slider', get_stylesheet_directory_uri() . '/css/slick.css', '', '1' );
        
    if ( is_rtl() ) {
        wp_enqueue_style(  'salient-rtl',  get_template_directory_uri(). '/rtl.css', array(), '1', 'screen' );
    }

    wp_enqueue_script('slick-slider', get_stylesheet_directory_uri() . '/js/slick.js', array('jquery'), null, true);
    wp_enqueue_script( 'custom-script', get_stylesheet_directory_uri() . '/js/custom-script.js',array('jquery'), rand(), true );
    
    $wp_ajx_array = array( 
        'wp_ajax_url' => admin_url('admin-ajax.php'),
        'prevArrow' => get_stylesheet_directory_uri() . '/images/slider-left.png',
        'nextArrow' => get_stylesheet_directory_uri() . '/images/slider-right.png'
    );
    wp_localize_script( 'custom-script', 'admin_ajaax', $wp_ajx_array );// localize ajax url in script
}

require_once (get_stylesheet_directory() . "/includes/custom-function.php");
require_once (get_stylesheet_directory() . "/includes/custom-widgets.php");

//add SVG to allowed file uploads
add_action('upload_mimes', 'add_file_types_to_uploads');
function add_file_types_to_uploads($file_types) 
{
    $new_filetypes = array();
    $new_filetypes['svg'] = 'image/svg';
    $file_types = array_merge($file_types, $new_filetypes);
    return $file_types;
}

add_filter("redux/salient_redux/field/typography/custom_fonts", "salient_redux_custom_fonts");
function salient_redux_custom_fonts() {
    return array(
        'Custom Fonts' => array(
            'Rockness' => 'Rockness',
            'Product Sans' => 'Product Sans',	
        )
    );
}
