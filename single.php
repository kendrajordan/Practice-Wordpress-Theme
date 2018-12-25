
<?php
// Adding a header
get_header();
// Looping through the posts, if there are posts
  if(have_posts()){
    while(have_posts()){
      the_post();?>
      <article class="post">
        <h2><a href="<?php the_permalink();?>"><?php the_title(); ?></a></h2>
        <!--php date formatting and author-->
        <p class='post_info'><?php the_time('F jS,Y g:i a'); ?> | by <a href='<?php echo get_author_posts_url(get_the_author_meta('ID'));?>'><?php the_author(); ?></a> | Posted in
          <?php
          $categories = get_the_category();
          $seperator = ", ";
          $output = '';
          if($categories){
            foreach($categories as $category){
              $output .="<a href='" . get_category_link($category->term_id) ."'> " . $category->cat_name . "</a>". $seperator ;
            }
            echo trim($output, $seperator);
          }
           ?>
        </p>
        <!-- input a featured image -->
        <?php the_post_thumbnail('banner-image');?>
        <?php if(has_post_format()){ 
           get_template_part('content',get_post_format());
          }else{
            the_content();
          }?>
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
