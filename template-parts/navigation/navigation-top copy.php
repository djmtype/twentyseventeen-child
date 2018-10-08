
<nav id="site-navigation" class="main-navigation collapse navbar-collapse" role="navigation" aria-label="<?php esc_attr_e( 'Top Menu', 'twentyseventeen-child' ); ?>">
	<button class="menu-toggle" aria-controls="top-menu" aria-expanded="false">
		<?php
		echo twentyseventeen_get_svg( array( 'icon' => 'bars' ) );
		echo twentyseventeen_get_svg( array( 'icon' => 'close' ) );
		_e( 'Menu', 'twentyseventeen' );
		?>
	</button>

 <?php
    if ( has_nav_menu( 'top' ) ) {
      wp_nav_menu( array(
        'theme_location' => 'top',
        'menu_id'        => 'top-menu',
        'container'      => false,
        'walker'         => new Aria_Walker_Nav_Menu(),
        'items_wrap'     => '<ul id="%1$s" class="%2$s" role="menubar">%3$s</ul>',
      ) );
    }
  ?>

	<?php if ( ( twentyseventeen_is_frontpage() || ( is_home() && is_front_page() ) ) && has_custom_header() ) : ?>
		<a href="#content" class="menu-scroll-down"><?php echo twentyseventeen_get_svg( array( 'icon' => 'arrow-right' ) ); ?><span class="screen-reader-text"><?php _e( 'Scroll down to content', 'twentyseventeen' ); ?></span></a>
	<?php endif; ?>
</nav><!-- #site-navigation -->


