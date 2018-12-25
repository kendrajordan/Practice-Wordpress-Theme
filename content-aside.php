<article class='post-aside'>
  <?php if(is_search() || is_archive() || is_front_page()){?>
      <a href='<?php the_permalink();?>'class='mini-meta'><?php the_author();?> @<?php the_time(' F j, Y');?></a>
      <p>
      <?php  echo  get_the_excerpt();?>
      <a href="<?php the_permalink();?>">Read more&raquo;</a>
    </p>
 <?php }else{?>
  <a href='<?php the_permalink();?>'class='mini-meta'><?php the_author();?> @<?php the_time(' F j, Y');?></a>
  <?php the_content();} ?>
</article>
