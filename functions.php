<?php

//bootstrap
function load_css(){
    wp_register_style('bootstrap', get_template_directory_uri() . '/css/bootstrap.min.css', array(), false, 'all' );
    wp_enqueue_style('bootstrap');



}
//stylesheets
function load_stylesheets()
{
    wp_register_style('stylesheet', get_template_directory_uri() . '/style.css', '', 1, 'all');
    wp_enqueue_style('stylesheet');
}
add_action('wp_enqueue_scripts', 'load_stylesheets');



add_action('wp_enqueue_scripts', 'load_css');

function load_js(){
    wp_enqueue_script('jquery');

    wp_register_script('bootstrap', get_template_directory_uri() . '/js/bootstrap.min.js', 'jquery', false, true);
    wp_enqueue_script('bootstrap');

}
add_action('wp_enqueue_scripts', 'load_js');

function load_javascript()
{
    wp_register_script('custom', get_template_directory_uri() . '/app.js', 'jquery', 1, true);
    wp_enqueue_script('custom');

}

add_action('wp_enqueue_scripts', 'load_javascript');


//theme option
add_theme_support('menus');
add_theme_support('post-thumbnails');
add_theme_support('widgets');

//menus
register_nav_menus(
array(
    'top-menu' => 'Top Menu Location',
    'mobile-menu' => 'Mobile Menu Location',
    'footer-menu' => 'Footer Menu Location',


)
);


//custom img size
add_image_size('blog-large', 800,400, true);
add_image_size('blog-small', 300,200, true);
add_image_size('post-img', 100, 100, true);

//register sidebar
function my_sidebars()
{
    register_sidebar(
        array(
            'name' => 'Page Sidebar',
            'id' =>'page-sidebar',
            'before_title' => '<h4 class="widget-title">',
            'after_title' => '</h4>'
        )
        );

        register_sidebar(
            array(
                'name' => 'Blog Sidebar',
                'id' =>'blog-sidebar',
                'before_title' => '<h4 class="widget-title">',
                'after_title' => '</h4>'
            )
            );
}
add_action('widgets_init','my_sidebars');

function my_first_post_type()
{
    $args= array(
        'labels'=> array(
            'name' => 'Coffees',
            'singular_name'=> 'Coffee'
        ),
            'hierarchical' => true,
            'public'=> true,
            'has_archive'=>true,
            'menu_icon'=> 'dashicons-coffee',
            'supports'=> array('title','editor', 'thumbnail','custom-fields'),
           // 'rewrite'=> array('slag'=>'s')
    );

    register_post_type('coffees', $args);
}
add_action('init','my_first_post_type');

function my_first_taxonomy()
{

    $args = array(

        'labels'=> array(
            'name' => 'Sorts',
            'singular_name'=> 'Sort'
        ),
        'public' => true,
        'hierarchical'=>true,
    );
        register_taxonomy('Sorts' , array('coffees'), $args);
}
add_action('init', 'my_first_taxonomy');
//shortcodes
function my_shortcode()
{
    return get_template_part('includes/latest', 'coffees');
    

}
add_shortcode('coffee_sorts', 'my_shortcode');



function my_phone()
{
    return '<a href="tel:000 000 0000">000-000-0000</a>';

}
add_shortcode('phone', 'my_phone');

//woocommerce
function mytheme_add_woocommerce_support() {
    add_theme_support( 'woocommerce' );
}

add_action( 'after_setup_theme', 'mytheme_add_woocommerce_support' );



//form
add_action('wp_ajax_enquiry', 'enquiry_form');
add_action('wp_ajax_nopriv_enquiry', 'enquiry_form');//if not logged in

function enquiry_form()
{


$formdata = [];
wp_parse_str($_POST['enquiry'], $formdata);

//who gets the email
$admin_email = get_option('admin_email');


//email headers
$headers[] = 'Content-Type: text/html; charset=UTF-8';
$headers[] ='From:'. $admin_email;
$headers[] ='Reply-to:' . $formdata['email'];

$send_to = $admin_email;
// subject
$subject = "Enquiry form" . $formdata['name'];

$message = '';

foreach($formdata as $index=> $field)

{
    $message .='<strong>' .$index . '</strong>:' . $field . '<br />';
}


try{
    if(wp_mail($send_to, $subject, $message, $headers))
    {
        wp_send_json_success('Email Sent');
    }
    else{
        wp_send_json_error('Error');
    }
} catch (Exception $e)
{
    wp_send_json_error($e->getMessage());
}
   // $data = json_encode($_POST);
wp_send_json_success($formdata['name']);
}