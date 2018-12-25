
<?php
// Adding a header
get_header();
// Looping through the posts, if there are posts
  if(have_posts()){?>
    <h2>Search results for: <?php the_search_query(); ?></h2>

    <?php
    while(have_posts()){

      the_post();

      get_template_part('content',get_post_format());

    }
  }
  else{
    echo '<p>No content found</p>';
  }
  //Adding a footer
  get_footer();
 ?>
