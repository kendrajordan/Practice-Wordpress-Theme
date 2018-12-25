<?php
// Adding a header
get_header();?>
<!--site-content-->
<div class="site-content clearfix">
  <!--main-column-->
    <div class='main-column'>
  <?php
  // Looping through the posts, if there are posts
    if(have_posts()){
      while(have_posts()){
        the_post();?>
        <article class="post page">
          <?php if(has_children() || $post->post_parent > 0){?>
            <nav class="site-nav children-links">
              <span class="parent-link"><a href="<?php echo get_the_permalink(get_top_ancestor_id()); ?>"><?php echo get_the_title(get_top_ancestor_id()); ?></a></span>
              <ul>
                  <?php wp_list_pages(
                    array(
                      'child_of' => get_top_ancestor_id(),
                      'title_li' => ''
                    )
                  );?>
              </ul>
            </nav>
          <?php
        }else{
          echo '';
        }?>
          <h2><?php the_title(); ?></h2>
          <?php the_content();?>
        </article>
        <?php
      }
    }
    else{
      echo '<p>No content found</p>';
    }?>

  </div>
  <!--secondary-column-->
    <?php get_sidebar();?>
  <!--/secondary-column-->
</div>
<!--/site-content-->

  <?php
  //Adding a footer
  get_footer();
 ?>
