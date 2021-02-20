<?php query_posts( 'post_type=slider&posts_per_page=10' ); ?>
<?php if ( have_posts() ) : ?>

    <section class="banner">
        <div class="swiper-container-banner">
            <div class="swiper-wrapper">

				<?php while ( have_posts() ) :
					the_post(); ?>
                    <div class="swiper-slide">

						<? $slider_image = get_field( 'image' ); ?>

                        <div class="banner__img" style="background-image: url('<?php echo $slider_image['url'] ?>');">
                            <div class="wrapper banner__wrapper">
                                <div class="banner__block">
                                    <h2 class="banner__title"><?php the_title(); ?></h2>

                                    <h3 class="banner__subtitle"><?php the_field( 'slajder_-_podzagolovok' ); ?></h3>

									<?php if ( have_rows( 'slider_buttons' ) ): ?>
										<?php while ( have_rows( 'slider_buttons' ) ): the_row();

											$slider_buttons_name = get_sub_field( 'slider_buttons_name' );
											$slider_buttons_link = get_sub_field( 'slider_buttons_link' );

											?>

                                            <a href="<?php echo $slider_buttons_link; ?>"
                                               class="btn banner__btn"><?php echo $slider_buttons_name; ?></a>

										<?php endwhile; ?>
									<?php endif; ?>

                                </div>
                            </div>
                        </div>
                        
                    </div>

				<?php endwhile; ?>

            </div>
            <div class="banner-next">
                        &gt;
                        </div>
                        <div class="banner-prev">
                        &lt;
                        </div>
            <div class="banner__form">

				<?php echo do_shortcode( '[contact-form-7 id="4839" title="СВЯЗАТЬСЯ С НАМИ - Слайдер на главной"]' ) ?>

            </div>

        </div>
    </section>
<?php endif; ?>

<?php wp_reset_query() ?>
<?php unset( $slider_text ); ?>
