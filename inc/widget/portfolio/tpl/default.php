<?php if ( ! empty( $instance['title'] ) ) : ?>
	<?php echo $args['before_title'] . esc_html( $instance['title'] ) . $args['after_title'] ?>
<?php endif; ?>
<?php if ( ! empty( $instance['sub_title'] ) ) : ?>
	<h4 class="widget-sub-title"><?php echo esc_html( $instance['sub_title'] ); ?></h4>
<?php endif; ?>

<?php foreach( $instance['menus'] as $i => $menu ) : ?>
	<div class="themetim-portfolio-list overflow portfolio-list col-md-<?php echo esc_attr( $instance['per_row'] ); ?> col-sm-<?php echo esc_attr( $instance['per_row'] ); ?> col-xs-12 padding-null">
		<div class="position-relative">
			<div class="portfolio-image">
				<?php
				$profile_picture = $menu['profile_picture'];
				$profile_picture_fallback = $menu['profile_picture_fallback'];
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
				<?php if ( ! empty( $menu['menu_title'] ) ) : ?>
					<h1 class="text-capitalize margin-bottom-0"><span><?php echo esc_html( $menu['menu_title'] ); ?></span></h1>
				<?php endif; ?>
				<?php if ( ! empty( $menu['menu_price'] ) ) : ?>
					<p><span><?php echo esc_html( $menu['menu_price'] ); ?></span></p>
				<?php endif; ?>
				<?php if ( ! empty( $menu['texteditor'] ) ) : ?>
					<div class="portfolio-text"><?php echo  $menu['texteditor'] ; ?></div>
				<?php endif; ?>
			</div>
		</div>
	</div>
<?php endforeach; ?>
