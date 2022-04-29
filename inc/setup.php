<?php 
//carrega css e js do site
function pd_theme_styles()
{
	wp_enqueue_style('theme_css', get_template_directory_uri().'/assets/css/theme.css');
	wp_enqueue_script('theme_js', get_template_directory_uri().'/assets/js/script.js', array('jquery'), false);
}

//ativa e registra suporte ao menu
function pd_theme_setup()
{
	//add_theme_support('menus');
	add_theme_support('post-thumbnails');
	register_nav_menu('primary', __('Primary Menu', 'dark'));
}

//registrar widgets
function pd_theme_widget()
{	
	register_sidebar(array(
		'name' => __( 'Sidebar right', 'dark' ),
		'id' => 'pd_sidebar',
		'description' => __('Um sidebar basico para meu tema','dark'),
		'before_title' => '<h4 class="widget-title" >',
		'after_title' => '</h4>',
		'before_widget' => '<div class="widget-container %2$s" id="%1$s">',
		'after_widget' => '</div>'

	)
	);
	
}
 ?>