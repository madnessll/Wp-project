<?php

remove_action('wp_head',             'print_emoji_detection_script', 7 );
remove_action('admin_print_scripts', 'print_emoji_detection_script' );
remove_action('wp_print_styles',     'print_emoji_styles' );
remove_action('admin_print_styles',  'print_emoji_styles' );

remove_action('wp_head', 'wp_resource_hints', 2 ); //remove dns-prefetch
remove_action('wp_head', 'wp_generator'); //remove meta name="generator"
remove_action('wp_head', 'wlwmanifest_link'); //remove wlwmanifest
remove_action('wp_head', 'rsd_link'); // remove EditURI
remove_action('wp_head', 'rest_output_link_wp_head');// remove 'https://api.w.org/
remove_action('wp_head', 'rel_canonical'); //remove canonical
remove_action('wp_head', 'wp_shortlink_wp_head', 10); //remove shortlink
remove_action('wp_head', 'wp_oembed_add_discovery_links'); //remove alternate


add_action('wp_enqueue_scripts', 'site_scripts');
function site_scripts() {
  $version = '0.0.0.0';
   wp_enqueue_style('google-fonts', 'https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600&family=Nunito:wght@600;700;800&family=Pacifico&display=swap', array(), null);

  wp_enqueue_style('font-awesome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css', array(), '5.10.0');
  wp_enqueue_style('bootstrap-icons', 'https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css', array(), '1.4.1');

  wp_enqueue_style('animate', get_template_directory_uri() . '/verstka/lib/animate/animate.min.css', array(), $version);
  wp_enqueue_style('owlcarousel', get_template_directory_uri() . '/verstka/lib/owlcarousel/assets/owl.carousel.min.css', array(), $version);
  wp_enqueue_style('tempusdominus', get_template_directory_uri() . '/verstka/lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css', array(), $version);

  wp_enqueue_style('bootstrap', get_template_directory_uri() . '/verstka/css/bootstrap.min.css', array(), $version);

  wp_enqueue_style('style', get_template_directory_uri() . '/verstka/css/style.css', array(), $version);

  // ......................

   wp_enqueue_script('jquery', 'https://code.jquery.com/jquery-3.4.1.min.js', array(), '3.4.1', true);
    wp_enqueue_script('bootstrap-bundle', 'https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js', array('jquery'), '5.0.0', true);
    wp_enqueue_script('wow', get_template_directory_uri() . '/verstka/lib/wow/wow.min.js', array(), $version, true);
    wp_enqueue_script('easing', get_template_directory_uri() . '/verstka/lib/easing/easing.min.js', array(), $version, true);
    wp_enqueue_script('waypoints', get_template_directory_uri() . '/verstka/lib/waypoints/waypoints.min.js', array(), $version, true);
    wp_enqueue_script('counterup', get_template_directory_uri() . '/verstka/lib/counterup/counterup.min.js', array(), $version, true);
    wp_enqueue_script('owlcarousel', get_template_directory_uri() . '/verstka/lib/owlcarousel/owl.carousel.min.js', array(), $version, true);
    wp_enqueue_script('moment', get_template_directory_uri() . '/verstka/lib/tempusdominus/js/moment.min.js', array(), $version, true);
    wp_enqueue_script('moment-timezone', get_template_directory_uri() . '/verstka/lib/tempusdominus/js/moment-timezone.min.js', array(), $version, true);
    wp_enqueue_script('tempusdominus', get_template_directory_uri() . '/verstka/lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js', array(), $version, true);

    // Template JavaScript
    wp_enqueue_script('main', get_template_directory_uri() . '/verstka/js/main.js', array('jquery'), $version, true);
    wp_enqueue_script('form', get_template_directory_uri() . '/verstka/js/form.js', array('jquery'), $version, true);

}
add_action('wp_ajax_send_mail', 'send_mail');
add_action('wp_ajax_nopriv_send_mail', 'send_mail');
function send_mail(){
  $name = $_POST['name'];
  $email = $_POST['email'];
  $select1 = $_POST['select1'];
  $message = $_POST['message'];

  $to = 'tolyann358@gmail.com';
  $subject = 'The subject';
  $message = 'The message.';

// удалим фильтры, которые могут изменять заголовок $headers
remove_all_filters( 'wp_mail_from' );
remove_all_filters( 'wp_mail_from_name' );

$headers = array(
	'From: Me Myself <me@example.net>',
	'content-type: text/html',
	'cc: John Q Codex <jqc@wordpress.org>',
	'cc: John2 Codex <j2qc@wordpress.org>',
	'bcc: iluvwp@wordpress.org', // тут можно использовать только простой email адрес
);

wp_mail( $to, $email, $message, $headers );
wp_die();
}



add_action( 'after_setup_theme', 'theme_support' );
function theme_support() {
	register_nav_menu( 'menu_main_header', 'Меню в шапке' );
}

require_once get_template_directory() . '/hide-admin.php';

Kama_Collapse_Toolbar::init();




add_action( 'after_setup_theme', 'crb_load' );
function crb_load() {
    require_once( 'includes/carbon-fields/vendor/autoload.php' );
    \Carbon_Fields\Carbon_Fields::boot();
}

add_action('carbon_fields_register_fields', 'register_carbon_fields');
function register_carbon_fields(){
  require_once( 'includes/carbon-fields-options/theme-options.php' );
  require_once( 'includes/carbon-fields-options/post-meta.php' );
}

require_once 'class-wp-bootstrap-navwalker.php';

function add_additional_class_on_li($classes, $item, $args) {
    if ($item->title == 'Pages') {
        $classes[] = 'your-custom-class';
    }
    return $classes;
}
add_filter('nav_menu_css_class', 'add_additional_class_on_li', 1, 3);

function add_additional_class_on_a($atts, $item, $args) {
    if ($item->title == 'Pages') {
        $atts['class'] = 'nav-link your-custom-class';
    }
    return $atts;
}
add_filter('nav_menu_link_attributes', 'add_additional_class_on_a', 10, 3);


function handle_custom_form_submission() {
    if (isset($_POST['cf7_custom_form_submitted'])) {
        $name = sanitize_text_field($_POST['text-419']);
        $email = sanitize_email($_POST['email-260']);
        $date = sanitize_text_field($_POST['date-692']);
        $people = sanitize_text_field($_POST['menu-840']);
        $message = sanitize_textarea_field($_POST['textarea-672']);

        // Здесь вы можете обработать данные формы, например, отправить email или сохранить в базе данных.
        
        // Пример отправки email
        $to = 'tolyann358@gmail.com';
        $subject = 'New Reservation';
        $body = "Name: $name\nEmail: $email\nDate: $date\nPeople: $people\nMessage: $message";
        $headers = array('Content-Type: text/plain; charset=UTF-8');

        wp_mail($to, $subject, $body, $headers);
    }
}
add_action('init', 'handle_custom_form_submission');

