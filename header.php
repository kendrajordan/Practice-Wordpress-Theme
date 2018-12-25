<!DOCTYPE html>
<!--https://codex.wordpress.org/Theme_Development#Template_File_Checklist-->
<!-- Adding language attributes -->
<html <?php language_attributes(); ?>>
  <head>
    <meta charset="<?php bloginfo('charset');?>">
    <meta name="viewport" content="width=device-width">
    <!--Adding an un-optimized title-->
    <title><?php wp_title(); ?></title>
    <!--wordpress will have the final word for styling-->
    <?php wp_head(); ?>
  </head>
  <body <?php body_class(); ?>>
    <div class='container'>
      <!--site-header-->
      <header class="site-header">

        <!-- header search -->
        <div class="hd-search">
          <?php get_search_form();?>
        </div><!--/header search-->
        <h1><a href="<?php echo home_url();?>"><?php bloginfo('name');?></a></h1>
        <h5><?php
        if(is_page('adopt-a-charger') ){ ?>
            Fully Charge Your Community

      <?php  }
        else{
          bloginfo('description');
        }
        ?></h5>

        <!--navigation-->
        <nav class="site-nav">
          <!-- Unordered nav list -->

<?php wp_nav_menu( array( 'theme_location' => 'primary' ) ); ?>
        </nav>
      </header><!--/site-header-->
