
<?php
// Adding a header
get_header();
?>
<!--site-content-->
<div class="site-content clearfix">
    <!--main-column-->
    <div class='main-column'>
        <?php
        // Looping through the posts, if there are posts
          if(have_posts()){
            while(have_posts()){

              the_post();

               get_template_part('content',get_post_format());

            }
          }
          else{
            echo '<p>No content found</p>';
          }
          ?>
    </div>
    <!--/main-column-->

    <!--secondary-column-->
      <?php get_sidebar();?>
    <!--/secondary-column-->


</div>
<!--/site-content-->
  <?php
  //Adding a footer
  get_footer();
 ?>
