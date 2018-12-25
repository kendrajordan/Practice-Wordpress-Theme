<?php
// Adding a header
get_header();?>
<!--site-content-->
<div class="site-content">

  <?php
  // Looping through the posts, if there are posts
    if(have_posts()){
      while(have_posts()){
        the_post();
      the_content();

      }
    }
    else{
      echo '<p>No content found</p>';
    }?>

    <!--home-columns-->
    <div class='home-columns'>
      <div class='one-third'>
        <h2>Links</h2>
          <?php
          // Looping through the posts, if there are posts
          //Uncategorized posts loop begins here
          $uncategorizedPosts = new WP_Query('cat=13&posts_per_page=2');

            if($uncategorizedPosts -> have_posts()){
              while($uncategorizedPosts -> have_posts()){
                $uncategorizedPosts -> the_post();?>
                
                 <?php get_template_part('content',get_post_format());?>

            <?php  }
            }
            else{

            }
            wp_reset_postdata();
            ?>
        </div>
        <div class='one-third'>
          <h2>My Ev Experiences</h2>
            <?php
            // Looping through the posts, if there are posts
            //Uncategorized posts loop begins here
            $EVStoriesPosts = new WP_Query('cat=2&posts_per_page=2');

              if(  $EVStoriesPosts -> have_posts()){
                while(  $EVStoriesPosts -> have_posts()){
                    $EVStoriesPosts -> the_post();?>
                   <?php get_template_part('content',get_post_format());?>
              <?php  }
              }
              else{

              }
              wp_reset_postdata();
              ?>
          </div>
          <div class='one-third'>
            <h2>Alerts</h2>
              <?php
              // Looping through the posts, if there are posts
              //Uncategorized posts loop begins here
              $galleryPosts = new WP_Query('cat=12&posts_per_page=2');

                if(  $galleryPosts -> have_posts()){
                  while(  $galleryPosts -> have_posts()){
                      $galleryPosts -> the_post();?>
                     <?php get_template_part('content',get_post_format());?>
                <?php  }
                }
                else{

                }
                wp_reset_postdata();
                ?>
            </div>
        </div>
        <!--/home-columns-->
</div>
<!--/site-content-->

  <?php
  //Adding a footer
  get_footer();
 ?>
