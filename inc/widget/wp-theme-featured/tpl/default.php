<div class="wp-theme-title">
	<?php if ( ! empty( $instance['title'] ) ) : ?>
		<?php echo $args['before_title'] . esc_html( $instance['title'] ) . $args['after_title'] ?>
	<?php endif; ?>
	<?php if ( ! empty( $instance['sub_title'] ) ) : ?>
		<h3 class="widget-sub-title"><?php echo esc_html( $instance['sub_title'] ); ?></h3>
	<?php endif; ?>
	<?php if ( ! empty( $instance['description'] ) ) : ?>
		<div class="short-description overflow">
			<?php echo $instance['description']; ?>
		</div>
	<?php endif; ?>
	<?php if ( ! empty( $instance['button1'] ) ) : ?>
		<a href="<?php echo sow_esc_url( $instance['button1'] ) ?>" class="download-url btn btn-default btn-block" target="_blank">Download Free Version</a>
	<?php endif; ?>
	<?php if ( ! empty( $instance['button2'] ) ) : ?>
		<a href="<?php echo sow_esc_url( $instance['button2'] ) ?>" class="download-url btn btn-primary btn-block" target="_blank">View Demo</a>
	<?php endif; ?>
	<?php if ( ! empty( $instance['license'] ) ) : ?>
		<div class="theme-license overflow">
			<?php echo $instance['license']; ?>
		</div>
	<?php endif; ?>
</div>