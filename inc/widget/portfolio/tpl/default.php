<?php if ( ! empty( $instance['title'] ) ) : ?>
	<?php echo $args['before_title'] . esc_html( $instance['title'] ) . $args['after_title'] ?>
<?php endif; ?>
<?php if ( ! empty( $instance['sub_title'] ) ) : ?>
	<h4 class="widget-sub-title"><?php echo esc_html( $instance['sub_title'] ); ?></h4>
<?php endif; ?>

<?php foreach( $instance['menus'] as $i => $portfolio ) : ?>
	<div class="themetim-portfolio-list overflow portfolio-list col-md-<?php echo esc_attr( $instance['per_row'] ); ?> col-sm-12 col-xs-12 padding-null">
		<div class="position-relative">
			<div class="portfolio-image">
				<?php
				$profile_picture = $portfolio['profile_picture'];
				$profile_picture_fallback = $portfolio['profile_picture_fallback'];
				$image_details = siteorigin_widgets_get_attachment_image_src(
					$profile_picture,
					'',
					$profile_picture_fallback
				);
				if ( ! empty( $image_details ) ) {
					echo '<img src="' . esc_url( $image_details[0] ) . '" class="img-responsive" />';
				}
				?>
			</div>
			<div class="portfolio-details">
				<?php if ( ! empty( $portfolio['menu_title'] ) ) : ?>
					<h1 class="text-capitalize margin-bottom-0"><span><?php echo esc_html( $portfolio['menu_title'] ); ?></span></h1>
				<?php endif; ?>
				<?php if ( ! empty( $portfolio['menu_price'] ) ) : ?>
					<p><span><?php echo esc_html( $portfolio['menu_price'] ); ?></span></p>
				<?php endif; ?>
				<?php if ( ! empty( $portfolio['texteditor'] ) ) : ?>
					<div class="portfolio-text"><?php echo  $portfolio['texteditor'] ; ?></div>
				<?php endif; ?>
				<?php if ( ! empty( $portfolio['demo_url'] ) ) : ?>
					<div  class="portfolio-text">
						<a href="<?php echo esc_url( home_url( '/' ) ); ?>template/?demo=<?php echo $portfolio['demo_url']; ?>"  target="_blank">View Demo</a>
					</div>
				<?php endif; ?>
			</div>
		</div>
	</div>
<?php endforeach; ?>
