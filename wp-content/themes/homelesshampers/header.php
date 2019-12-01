<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'homelesshampers' ); ?></a>

	<header class="site__header">
		<div class="site__header__logo">
			<?php
			the_custom_logo();
			if ( is_front_page() && is_home() ) :
				?>
				<h1 class="site__header__logo__image"><a class="site__header__logo__link" href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
				<?php
			else :
				?>
				<p class="site__header__logo__image"><a class="site__header__logo__link" href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
				<?php
			endif; ?>
		</div><!-- .site__header__logo -->

		<nav class="site__header__nav">

            <button class="hamburger hamburger--collapse site__header__nav__mobile-menu-toggle" aria-controls="primary-menu" aria-expanded="false" type="button">
              <span class="hamburger-box">
                  <span class="hamburger-inner"></span>
              </span>
            </button>

            <div class="site__header__nav__main-menu-container">
	            <?php
	            wp_nav_menu( array(
		            'theme_location' => 'main-menu',
		            'menu_class'        => 'site__header__main-menu',
	            ) );
	            ?>
            </div>

		</nav><!-- .site__header__nav -->

	</header><!-- .site__header -->

	<div id="content" class="site__content">
