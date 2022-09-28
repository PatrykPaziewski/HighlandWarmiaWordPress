<div id="header" class="header">
	<?php wp_nav_menu(array('container_class' => 'menu-header', 'theme_location' => 'headerLeft')); ?>
	<a href="http://highlandwarmia.local/">
		<img class="site-logo header-image first" src="<?php echo (get_theme_file_uri("/assets/images/site-logo.png")); ?>">
	</a>
	<a href="http://highlandwarmia.local/">
		<img class="site-logo header-image second" src="<?php echo (get_theme_file_uri("/assets/images/nowe-logo-2.png")); ?>">
	</a>
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

<script>
window.onscroll = function() {
	myFunction()
};

var header = document.getElementById("header");
var sticky = header.offsetTop;

function myFunction() {
	if (window.pageYOffset > sticky) {
		header.classList.add("sticky");
	} else {
		header.classList.remove("sticky");
	}
}
</script>