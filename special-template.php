<?php
/*Template Name:Special Layout
*/
// Adding a header
get_header();
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


          <div class='info-column'>
            <h4>Disclaimer title</h4>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.
              Phasellus vehicula enim quis magna fermentum rhoncus. Sed
              efficitur cursus urna eu pretium. Aliquam sagittis condimentum
              tortor vel rhoncus.</p>
          </div>
          <?php the_content();?>
      </article>

      <?php
    }
  }
  else{
    echo '<p>No content found</p>';
  }
  //Adding a footer
  get_footer();
 ?>
