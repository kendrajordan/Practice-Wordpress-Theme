<footer class='site-footer'>
  <!--footer-widgets-->
  <div class='footer-widgets'>
    <!--footer-widget-area-->
    <?php if(is_active_sidebar('footer1')){?>
      <div class="footer-widget-area">
        <?php dynamic_sidebar('footer1');?>
      </div>
      <?php}elseif(is_active_sidebar('footer2')){?>
        <div class="footer-widget-area">
          <?php dynamic_sidebar('footer2');?>
        </div>
        <?php}elseif(is_active_sidebar('footer3')){?>
          <div class="footer-widget-area">
            <?php dynamic_sidebar('footer3');?>
          </div>
      <?php}elseif(is_active_sidebar('footer4')){?>
        <div class="footer-widget-area">
          <?php dynamic_sidebar('footer4');?>
        </div>
        <?php
      }?>

    <!--/footer-widget-area-->
  </div>
  <!--/footer-widgets-->
  <nav class="site-nav">
    <!-- Unordered nav list -->
<?php wp_nav_menu( array( 'theme_location' => 'footer' ) ); ?>
  <!-- Unordered nav list -->
  </nav>

  <p><?php bloginfo('name');?> - &copy; <?php echo '2016-'.date('Y');?></p>

</footer>
</div><!--container-->
<?php wp_footer(); ?>
</body>
</html>
