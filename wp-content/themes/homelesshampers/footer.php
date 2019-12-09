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

?>

</div><!-- #content -->

<footer class="site__footer">

    <div class="site__footer__social-media-donate-container">
        <div class="site__footer__social-media-donate-wrapper">

            <div class="site__footer__social-media">
                <div class="site__footer__social-media__facebook">
                    <div class="site__footer__social-media__title site__footer__social-media__title--facebook">Facebook Likes</div>
                    <p class="site__footer__social-media__number">6,458</p>
                    <a href="#" class="btn btn--secondary">Like our page</a>
                </div>
                <div class="site__footer__social-media__twitter">
                    <div class="site__footer__social-media__title site__footer__social-media__title--twitter">Twitter Followers</div>
                    <p class="site__footer__social-media__number">199</p>
                    <a href="#" class="btn btn--secondary">Follow us</a>
                </div>

            </div>
            <div class="site__footer__donate-box">
                <h5>Donate today</h5>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore.</p>
                <form action="/" method="POST" class="site__footer__donate-box__form">
                    <input type="text" name="amount" placeholder="Enter amount...">
                    <button type="submit">Donate &gt;</button>
                </form>
            </div>

        </div>
    </div>

    <div class="site__footer__legal-container">
        <div class="site__footer__legal">

            <ul class="site__footer__legal__menu">
                <li><a href="#">Our Mission</a></li>
                <li><a href="#">Supporters</a></li>
                <li><a href="#">Our Team</a></li>
                <li><a href="#">Get Involved</a></li>
                <li><a href="#">Contact Us</a></li>
            </ul>

            <div class="site__footer__legal__copyright">
                &copy; Homeless Hampers 2019. All rights reserved.<br>Registered charity number 12345678. <a
                        href="#">Privacy policy</a>
            </div>

        </div>
    </div>

</footer><!-- .site__footer -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
