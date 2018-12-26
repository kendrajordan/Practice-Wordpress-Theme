<?php
  function resources(){
    wp_enqueue_style('style', get_stylesheet_uri());
  }

add_action('wp_enqueue_scripts','resources');


//Get top get_top_ancestor
function get_top_ancestor_id(){
  global $post;
  if($post->post_parent){

    $ancestors = array_reverse(get_post_ancestors($post->ID));

    return $ancestors[0];
  }else{
    return $post->ID;
  }
}
//Does page have children?
function has_children(){
  global $post;
  $pages = get_pages('child_of='.$post->ID);
  return count($pages);
}
// Customize excerpt word count length
function custom_excerpt_length(){
  return 10;
}
add_filter('excerpt_length','custom_excerpt_length');
//Theme setup
function practice_setup(){
  // Navigation menus
    register_nav_menus(
      array(
        'primary' => __( 'Primary Menu' ),
        'footer' => __( 'Footer Menu' )

      )
    );

  //Add featured image support
  add_theme_support('post-thumbnails');
  //image sizes width,height, hard(true) or soft cropping()
  add_image_size('small-thumbnail',180, 120,true);
  add_image_size('banner-image', 920,210, array('left','top'));

  //Add post format support
  add_theme_support('post-formats', array('aside','gallery','link'));
}
add_action('after_setup_theme','practice_setup');

//Add Our Widget Locations
function ourWidgetsInit(){
  register_sidebar( array(
    'name' =>'Sidebar',
    'id' =>'sidebar1',
    'before_widget' =>'<div class="widget-item">',
    'after_widget' =>'</div>',
    'before_title'  => '<h4 class="special-title">',
    'after_title'   => '</h4>',

  ));

  register_sidebar( array(
    'name' =>'Footer Area 1',
    'id' =>'footer1',
    'before_widget' =>'<div class="widget-item">',
    'after_widget' =>'</div>',
    'before_title'  => '<h4 class="special-title">',
    'after_title'   => '</h4>',
  ));

  register_sidebar( array(
    'name' =>'Footer Area 2',
    'id' =>'footer2',
    'before_widget' =>'<div class="widget-item">',
    'after_widget' =>'</div>',
    'before_title'  => '<h4 class="special-title">',
    'after_title'   => '</h4>',
  ));
  register_sidebar( array(
    'name' =>'Footer Area 3',
    'id' =>'footer3',
    'before_widget' =>'<div class="widget-item">',
    'after_widget' =>'</div>',
    'before_title'  => '<h4 class="special-title">',
    'after_title'   => '</h4>',
  ));
  register_sidebar( array(
    'name' =>'Footer Area 4',
    'id' =>'footer4',
    'before_widget' =>'<div class="widget-item">',
    'after_widget' =>'</div>',
    'before_title'  => '<h4 class="special-title">',
    'after_title'   => '</h4>',
  ));
}
add_action('widgets_init','ourWidgetsInit');

//Customize Appeearance options
function practice_customize_register($wp_customize){
  $wp_customize->add_setting('practice_link_color', array(
    'default' =>'#006ec3',
    'transport'=>'refresh',
  ));
  $wp_customize->add_setting('practice_btn_color', array(
    'default' =>'#006ec3',
    'transport'=>'refresh',
  ));
  $wp_customize->add_setting('practice_body_color', array(
    'default' =>'#ffffff',
    'transport'=>'refresh',
  ));
  $wp_customize->add_setting('practice_siteNavHover_color', array(
    'default' =>'#ECECEC',
    'transport'=>'refresh',
  ));
  $wp_customize->add_section('practice_standard_colors', array(
    'title'=>__('Standard Colors','DemoTemplate'),
    'priority' => 30,
  ));
  $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize,'practice_link_color_control',
  array(
    'label' =>__('Link Color','DemoTemplate'),
    'section' =>'practice_standard_colors',
    'settings' =>'practice_link_color',
  )));
  $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize,'practice_btn_color_control',
  array(
    'label' =>__('Button Color','DemoTemplate'),
    'section' =>'practice_standard_colors',
    'settings' =>'practice_btn_color',
  )));
  $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize,'practice_body_color_control',
  array(
    'label' =>__('Body Color','DemoTemplate'),
    'section' =>'practice_standard_colors',
    'settings' =>'practice_body_color',
  )));
  $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize,'practice_siteNavHover_color_control',
  array(
    'label' =>__('Navigation Hover Color','DemoTemplate'),
    'section' =>'practice_standard_colors',
    'settings' =>'practice_siteNavHover_color',
  )));

}
add_action('customize_register','practice_customize_register');
// Output Customize CSS

function practice_customize_css() {
    ?>
        <style>
            a:link,
            a:visited {
                color:<?php echo get_theme_mod('practice_link_color');?>;
            }
            .site-header nav ul li.current-menu-item a:link,
            .site-header nav ul li.current-menu-item a:visited,
            .site-header nav ul li.current-page-ancestor a:link,
            .site-header nav ul li.current-page-ancestor a:visited{
              background-color:<?php echo get_theme_mod('practice_link_color');?>;
            }
            .btn-a,
            .btn-a:link,
            .btn-a:visited,
            #searchsubmit{
              background-color:<?php echo get_theme_mod('practice_btn_color');?>;
            }
            body{
              background-color:<?php echo get_theme_mod('practice_body_color');?>;
            }
            .site-header nav ul li a:hover{
              background-color:<?php echo get_theme_mod('practice_siteNavHover_color');?>;
            }
        </style>
    <?php
}
add_action('wp_head', 'practice_customize_css');

//adding WooCommerce support
add_action( 'after_setup_theme', function() {
	add_theme_support( 'woocommerce' );
} );
