<?php if ( get_field( 'show_donate_box' ) ) : ?>

    <section class="donate-box">
        <h4 class="donate-box__title"><?php the_field( 'donate_box_title' ); ?></h4>
		<?php if ( get_field( 'donate_box_blurb' ) ) : ?>
            <div class="donate-box__blurb">
                <p><?php the_field( 'donate_box_blurb' ); ?></p>
            </div>
		<?php endif; ?>
		<?php if ( have_rows( 'donate_box_amounts' ) ) : ?>
            <div class="donate-box__form">
                <form action="/" method="POST">
                    <input type="hidden" value="0" class="donate-box__amount-donated">
                    <ul class="donate-box__form__buttons">
						<?php while ( have_rows( 'donate_box_amounts' ) ) : the_row(); ?>
                            <li><a href="#" class="donate-box__form__amount-button"
                                   data-amount="<?php the_sub_field( 'donate_box_amount' ) ?>"><?php the_sub_field( 'donate_box_button_text' ); ?></a>
                            </li>
						<?php endwhile; ?>
                        <li>
                            <button class="donate-box__form__submit-button" type="submit">Next &gt;</button>
                        </li>
                    </ul>
                </form>
            </div>
		<?php endif; ?>
    </section>

<?php endif; ?>