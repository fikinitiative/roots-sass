<footer class="content-info" role="contentinfo">
  <div class="container">
    <div class="row">
      <div class="col-sm-3"><?php dynamic_sidebar('sidebar-footer'); ?></div>
      <div class="col-sm-3"><?php dynamic_sidebar('sidebar-footer-two'); ?></div>
      <div class="col-sm-3"><?php dynamic_sidebar('sidebar-footer-three'); ?></div>
      <div class="col-sm-3"><?php dynamic_sidebar('sidebar-footer-four'); ?></div>
    </div>
  </div>
</footer>
<footer class="closing">
    <div class="container">
    <p class="copy">&copy; <?php echo date('Y'); ?> <?php bloginfo('name'); ?></p>
    <?php
        if (has_nav_menu('footer_menu')) :
            wp_nav_menu(array('theme_location' => 'footer_menu', 'menu_class' => 'nav nav-pills'));
        endif;
    ?>
    </div>
</footer>

<?php wp_footer(); ?>
