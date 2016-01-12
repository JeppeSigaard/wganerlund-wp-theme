<?php
add_theme_support('widgets');
$widget_fields = array(
   'name'          => __( 'Standard sidebar', 'smamo' ),
	'id'            => 'default-sidebar',
	'description'   => 'Widgets der vises på alle sider',
    'class'         => 'widget',
	'before_widget' => '<div class="widget">',
	'after_widget'  => '</div>',
	'before_title'  => '<div class="widget-header"><h3>',
	'after_title'   => '</h3><div class="widget-arrow square-icon icon-next"><svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 20 20">
<path d="M9.163 4.516c0.418 0.408 4.502 4.695 4.502 4.695 0.223 0.219 0.335 0.504 0.335 0.789s-0.112 0.57-0.335 0.787c0 0-4.084 4.289-4.502 4.695-0.418 0.408-1.17 0.436-1.615 0-0.446-0.434-0.481-1.041 0-1.574l3.747-3.908-3.747-3.908c-0.481-0.533-0.446-1.141 0-1.576s1.197-0.409 1.615 0z"></path>
</svg>
</div></div>', 
);

// opret standardområde
register_sidebar($widget_fields);


// opret indlægsområde
$widget_fields['name'] = 'Indlægssiders widgets';
$widget_fields['id'] = 'post-widgets';
$widget_fields['description'] = 'Viser widgets på nyhedssider';
register_sidebar($widget_fields);



require 'widget/register-widget-tax.php';
require 'widget/register-widget-areas.php';


// Fjern standardwidgets
function unregister_default_widgets() {
     unregister_widget('WP_Widget_Pages');
     unregister_widget('WP_Widget_Calendar');
     unregister_widget('WP_Widget_Archives');
     unregister_widget('WP_Widget_Links');
     unregister_widget('WP_Widget_Meta');
     unregister_widget('WP_Widget_Search');
     // unregister_widget('WP_Widget_Text');
     unregister_widget('WP_Widget_Categories');
     unregister_widget('WP_Widget_Recent_Posts');
     unregister_widget('WP_Widget_Recent_Comments');
     unregister_widget('WP_Widget_RSS');
     unregister_widget('WP_Widget_Tag_Cloud');
     //unregister_widget('WP_Nav_Menu_Widget');
     unregister_widget('Twenty_Eleven_Ephemera_Widget');
 }
 add_action('widgets_init', 'unregister_default_widgets', 11);

// require 'widget/image-widget.php';
require 'widget/link-widget.php';