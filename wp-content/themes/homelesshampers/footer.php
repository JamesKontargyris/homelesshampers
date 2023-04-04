<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package homelesshampers
 */

$homepage_id = get_option( 'page_on_front' ); // footer fields are managed on the homepage in the CMS
?>

</div><!-- #content -->

<footer class="site__footer">

    <div class="site__footer__social-media-donate-container">
        <div class="site__footer__social-media-donate-wrapper">

            <div class="site__footer__social-media">
                <div class="site__footer__social-media__facebook">
                    <div class="site__footer__social-media__title site__footer__social-media__title--facebook">
						<?php the_field( 'footer_facebook_title', $homepage_id ); ?>
                    </div>
                    <a href="https://facebook.com/<?php the_field( 'footer_facebook_page_id', $homepage_id ) ?>"
                       target="_blank"
                       class="btn btn--secondary"><?php the_field( 'footer_facebook_button_text', $homepage_id ); ?></a>
                </div>
                <div class="site__footer__social-media__twitter">
                    <div class="site__footer__social-media__title site__footer__social-media__title--twitter">
						<?php the_field( 'footer_twitter_title', $homepage_id ); ?>
                    </div>
                    <a href="https://twitter.com/<?php the_field( 'footer_twitter_handle', $homepage_id ) ?>"
                       target="_blank"
                       class="btn btn--secondary"><?php the_field( 'footer_twitter_button_text', $homepage_id ); ?></a>
                </div>

            </div>
            <div class="site__footer__donate-box">
                <h5><?php the_field( 'footer_donate_box_title', $homepage_id ); ?></h5>
                <p><?php the_field( 'footer_donate_box_blurb', $homepage_id ); ?></p>
                <form action="https://www.nowdonate.com/checkout" method="POST" target="_blank"
                      class="site__footer__donate-box__form">
                    <input type="hidden" name="nowDonate" value="true"/>
                    <input type="hidden" name="charitySelect" value="21277"/>
                    <input type="hidden" name="checkoutColour1" value="f6d500"/>
                    <input type="hidden" name="checkoutColour2" value="000000"/>
                    <input type="hidden" name="checkoutBackground" value="1589.jpg"/>
                    <input type="hidden" name="checkoutAppeal" value=""/>
                    <input type="hidden" name="donationCurrency" value="GBP"/>
                    <input type="hidden" name="widget" value="true"/>
                    <input type="hidden" name="checkoutKey" value="9gk8uje3rdt130503tl4"/>
                    <input type="text" name="donationAmount" placeholder="Enter amount..."/>

                    <button type="submit"><?php the_field( 'footer_donate_box_button_text', $homepage_id ); ?></button>
                </form>
            </div>

        </div>
    </div>

    <div class="site__footer__legal-container">
        <div class="site__footer__legal">

			<?php
			wp_nav_menu( array(
				'theme_location' => 'footer-menu',
				'menu_class'     => 'site__footer__legal__menu',
			) );
			?>

			<?php if ( is_active_sidebar( 'footer' ) ) : ?>
                <div class="site__footer__legal__copyright">
					<?php dynamic_sidebar( 'footer' ); ?>
                </div>
			<?php endif; ?>

        </div>
    </div>

</footer><!-- .site__footer -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
