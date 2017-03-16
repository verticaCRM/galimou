<?php

add_theme_support('menus');
add_theme_support('post-thumbnails');
add_theme_support('title-tag');


function wpt_create_widget( $name, $id, $description ) {

	register_sidebar(array(
		'name' => __( $name ),	 
		'id' => $id, 
		'description' => __( $description ),
		'before_widget' => '<div class="widget">',
		'after_widget' => '</div>',
		'before_title' => '<h2 class="module-heading">',
		'after_title' => '</h2>'
	));

    register_sidebar( array(
'name' => 'Footer Sidebar 1',
'id' => 'footer-sidebar-1',
'description' => 'Appears in the footer area',
'before_widget' => '<aside id="%1$s" class="widget %2$s">',
'after_widget' => '</aside>',
'before_title' => '<h3 class="widget-title">',
'after_title' => '</h3>',
) );
register_sidebar( array(
'name' => 'Footer Sidebar 2',
'id' => 'footer-sidebar-2',
'description' => 'Appears in the footer area',
'before_widget' => '<aside id="%1$s" class="widget %2$s">',
'after_widget' => '</aside>',
'before_title' => '<h3 class="widget-title">',
'after_title' => '</h3>',
) );
register_sidebar( array(
'name' => 'Footer Sidebar 3',
'id' => 'footer-sidebar-3',
'description' => 'Appears in the footer area',
'before_widget' => '<aside id="%1$s" class="widget %2$s">',
'after_widget' => '</aside>',
'before_title' => '<h3 class="widget-title">',
'after_title' => '</h3>',
) );
    
}

wpt_create_widget( 'Page Sidebar', 'page', 'Displays on the side of pages with a sidebar' );
wpt_create_widget( 'Blog Sidebar', 'blog', 'Displays on the side of pages in the blog section' );




function register_theme_menus() {
    register_nav_menus(
        array(
        'primary-menu' =>  ('Primary Menu')
        )
            );
    }
add_action('init', 'register_theme_menus' );



function wpt_theme_styles() {wp_enqueue_style( 'style_css', get_template_directory_uri(). '/css/style.css');
                             wp_enqueue_style( 'main_css', 'http://fonts.googleapis.com/css?family=Roboto:400,300,500,700');
                             wp_enqueue_style( 'goolefont_css', get_template_directory_uri(). '/style.css');
                            
                            }
add_action('wp_enqueue_scripts','wpt_theme_styles');

function wpt_theme_js(){
    wp_enqueue_script('jquery');
    
    
}
add_action('wp_enqueue_scripts','wpt_theme_js');    




?>
