<!-- rs-slider -->

<div class="rs-17">
	<div class="rs-slider">
		<div class="rs-slider-container">

			<?php query_posts('post_type=slider&posts_per_page=10'); ?>
			<?php if ( have_posts() ) : ?>
				<?php while ( have_posts() ) : the_post(); ?>

					<div class="slider-item">
						<div class="slider-info">
							<div class="container">
								<div class="col-xs-12 slider-inner slider-inner-v1 text-center">
									<div class="slider-inner-text">
										<div class="topAnima animated">
											<h2><?php the_title() ?></h2>
											<h3><?php the_content() ?></h3>
										</div>
										<div class="group-buttons bottomAnima animated">
											<a href="<?= get_field('link') ?>" class="btn btn-color" data-target="#order-call2"
											   data-toggle="modal">Посмотреть</a>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="slider-item-img">
							<?php $image = get_field('image'); ?>
							<img src="<?php echo $image?>" class="img-responsive parallaximg slider-img" alt>
						</div>
					</div>

				<?php endwhile; ?>
			<?php endif; ?>


		</div>
	</div>
</div>
<!-- /.rs-slider -->


<?php wp_reset_query() ?>