<div>
  <a href='<?php the_permalink();?>'class='mini-meta'><?php the_author();?> @<?php the_time(' F j, Y');?></a>
  <article class='post-gallery'>
      <h2><?php the_title();?></h2>
      <?php the_content();?>
  </article>
</div>
