<section class="donate-box">
    <h4 class="donate-box__title"><?php the_field( 'donate_box_title' ); ?></h4>
	<?php if ( get_field( 'donate_box_blurb' ) ) : ?>
        <div class="donate-box__blurb">
            <p><?php the_field( 'donate_box_blurb' ); ?></p>
        </div>
	<?php endif; ?>
	<?php if ( have_rows( 'donate_box_amounts' ) ) : ?>
        <div class="donate-box__form">

            <ul class="donate-box__form__buttons">

				<?php while ( have_rows( 'donate_box_amounts' ) ) : the_row(); ?>
                    <li>
                        <form action="https://www.nowdonate.com/checkout" method="POST" target="_blank">
                            <input type="hidden" name="nowDonate" value="true"/>
                            <input type="hidden" name="charitySelect" value="21277"/>
                            <input type="hidden" name="checkoutColour1" value="f6d500"/>
                            <input type="hidden" name="checkoutColour2" value="000000"/>
                            <input type="hidden" name="checkoutBackground" value="1589.jpg"/>
                            <input type="hidden" name="checkoutAppeal" value=""/>
                            <input type="hidden" name="donationCurrency" value="GBP"/>
                            <input type="hidden" name="widget" value="true"/>
                            <input type="hidden" name="checkoutKey" value="9gk8uje3rdt130503tl4"/>
                            <input type="hidden" name="donationAmount"
                                   value="<?php the_sub_field( 'donate_box_amount' ); ?>"/>

                            <button class="donate-box__form__amount-button">
								<?php the_sub_field( 'donate_box_button_text' ); ?>
                            </button>
                        </form>
                    </li>
				<?php endwhile; ?>
            </ul>
        </div>
	<?php endif; ?>
</section>
