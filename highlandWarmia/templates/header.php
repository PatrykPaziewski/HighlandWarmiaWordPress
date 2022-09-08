<div id="header" class="header">
    <?php wp_nav_menu(array('container_class' => 'menu-header', 'theme_location' => 'headerLeft')); ?>
    <img class="site-logo header-image" src="<?php echo (get_theme_file_uri("/assets/images/site-logo.png")); ?>" />
	<?php wp_nav_menu(array('container_class' => 'menu-header', 'theme_location' => 'headerRight')); ?>
</div>
