<?php
function teelink_enqueues()
{

    wp_enqueue_style(
        'teelink-style',
        get_stylesheet_uri(),
        array(),
        wp_get_theme()->get('Version'),
        'all'
    );

    // Load normalize.css
    wp_enqueue_style(
        'normalize',
        get_theme_file_uri('/assets/css/normalize.css'),
        array(),
        '8.0.1'
    );

}

add_action('wp_enqueue_scripts', 'teelink_enqueues');


// Custom Login
// function custom_login_logo_url()
// {
//     return home_url();
// }
// add_filter('login_headerurl', 'custom_login_logo_url');

// function custom_login_logo_title()
// {
//     return 'Back to ' . get_bloginfo('name');
// }
// add_filter('login_headertext', 'custom_login_logo_title');

// function custom_login_styles()
// {
//     wp_enqueue_style('custom-login', get_stylesheet_directory_uri() . '/custom-login.css');
// }
// add_action('login_enqueue_scripts', 'custom_login_styles');

/**
 * Enqueue AOS (Animate On Scroll) library
 */
// function paws_enqueue_aos()
// {
//     // Enqueue AOS CSS
//     wp_enqueue_style(
//         'aos-css',
//         'https://unpkg.com/aos@2.3.1/dist/aos.css',
//         array(),
//         '2.3.1'
//     );

//     // Enqueue AOS JS
//     wp_enqueue_script(
//         'aos-js',
//         'https://unpkg.com/aos@2.3.1/dist/aos.js',
//         array(),
//         '2.3.1',
//         true
//     );

//     // Enqueue AOS initialization
//     wp_enqueue_script(
//         'aos-init',
//         get_theme_file_uri('/assets/js/aos-init.js'),
//         array('aos-js'),
//         '1.0.0',
//         true
//     );
// }
// add_action('wp_enqueue_scripts', 'paws_enqueue_aos');


// Allow SVG
// add_filter( 'wp_check_filetype_and_ext', function($data, $file, $filename, $mimes) {

//     global $wp_version;
//     if ( $wp_version !== '4.7.1' ) {
//        return $data;
//     }
  
//     $filetype = wp_check_filetype( $filename, $mimes );
  
//     return [
//         'ext'             => $filetype['ext'],
//         'type'            => $filetype['type'],
//         'proper_filename' => $data['proper_filename']
//     ];
  
//   }, 10, 4 );
  
//   function cc_mime_types( $mimes ){
//     $mimes['svg'] = 'image/svg+xml';
//     return $mimes;
//   }
//   add_filter( 'upload_mimes', 'cc_mime_types' );
  
//   function fix_svg() {
//     echo '<style type="text/css">
//           .attachment-266x266, .thumbnail img {
//                width: 100% !important;
//                height: auto !important;
//           }
//           </style>';
//   }
//   add_action( 'admin_head', 'fix_svg' );

//   function yoast_to_bottom(){
// 	return 'low';
// }
// add_filter( 'wpseo_metabox_prio', 'yoast_to_bottom' );
