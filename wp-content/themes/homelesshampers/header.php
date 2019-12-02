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

            <div class="site__header__nav__main-menu-container">
				<?php
				wp_nav_menu( array(
					'theme_location' => 'main-menu',
					'menu_class'        => 'site__header__main-menu',
				) );
				?>
            </div>

            <button class="hamburger hamburger--collapse site__header__nav__mobile-menu-toggle" aria-controls="primary-menu" aria-expanded="false" type="button">
              <span class="hamburger-box">
                  <span class="hamburger-inner"></span>
              </span>
            </button>

		</nav><!-- .site__header__nav -->

	</header><!-- .site__header -->

	<div id="content" class="site__content">


        <section class="hero hero--home" style="background:linear-gradient(to bottom, rgba(0,0,0,0.5) 0, rgba(0,0,0,0.5) 100%), url(https://placeimg.com/1500/1000/any) center no-repeat; background-size:cover;">
            <div class="hero__content">
                <h2 class="hero__title">The gift of <span class="text--yellow">caring</span></h2>
                <p class="hero__blurb">We are a non-profit campaign aiming to bring hope and support to the homeless of the Yorkshire region. We want to challenge the public perception of the roofless.</p>
                <div class="hero__buttons">
                    <a href="#" class="btn btn--primary btn--large">Get Involved</a>
                    <a href="#" class="btn btn--secondary btn--large">Our Mission</a>
                </div>
            </div>
        </section>

        <section class="donate-box">
            <h3 class="donate-box__title">Donate Today</h3>
            <div class="donate-box__blurb">
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p></div>
            <div class="donate-box__form">
                <form action="/" method="POST">
                    <input type="hidden" value="0" class="donate-box__amount-donated">
                    <ul class="donate-box__form__buttons">
                        <li><a href="#" class="donate-box__form__amount-button" data-amount="5">£5</a></li>
                        <li><a href="#" class="donate-box__form__amount-button" data-amount="10">£10</a></li>
                        <li><a href="#" class="donate-box__form__amount-button" data-amount="25">£25</a></li>
                        <li><a href="#" class="donate-box__form__amount-button" data-amount="50">£50</a></li>
                        <li><a href="#" class="donate-box__form__amount-button" data-amount="100">£100</a></li>
                        <li><button class="donate-box__form__submit-button" type="submit">Next</button> </li>
                    </ul>
                </form>
            </div>
        </section>