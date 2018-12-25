<article class='post-link'>
  <a href='<?php the_permalink();?>'class='mini-meta'><?php the_author();?> @<?php the_time(' F j, Y');?></a>

<a href="<?php echo wp_trim_words( get_the_content()); ?>"><?php the_title(); ?></a>
</article>
