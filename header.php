<!DOCTYPE html>
<html>
<head>
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
	<header>
		<div class="container">
			<h1>Dark theme</h1>
			<?php 
			if(has_nav_menu('primary')){
				wp_nav_menu( array(
					'theme_location'  => 'primary',
					'container'       => 'nav',
					'container_class' => 'menu-container',
					'menu_class'      => 'menu',
					'fallback_cb'     => false,
				) );
			} 
			?>
		</div>
	</header>