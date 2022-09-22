<div id="header" class="header">
    <?php wp_nav_menu(array('container_class' => 'menu-header', 'theme_location' => 'headerLeft')); ?>
    <img class="site-logo header-image" src="<?php echo (get_theme_file_uri("/assets/images/site-logo.png")); ?>" />
	<?php wp_nav_menu(array('container_class' => 'menu-header', 'theme_location' => 'headerRight')); ?>
</div>
<div id="mobile-header" class="mobile-header">
    <div id="menuToggle">
        <input type="checkbox" />
        <span class="exit"></span>
        <span class="exit"></span>
        <span class="exit"></span>
        <ul id="menu" class="menu-mobilne">
            <div class="menu-background">

            </div>
            <?php wp_nav_menu(array('container_class' => 'menu-header', 'theme_location' => 'HeaderMobile')); ?>
        </ul>
    </div>
    <img class="site-logo header-image" src="<?php echo (get_theme_file_uri("/assets/images/site-logo.png")); ?>" />
</div>
