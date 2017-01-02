<div class="testimonial">
	<?php if ( ! empty( $instance['title'] ) ) : ?>
		<?php echo $args['before_title'] . esc_html( $instance['title'] ) . $args['after_title'] ?>
	<?php endif; ?>
	<?php if ( ! empty( $instance['sub_title'] ) ) : ?>
		<h4 class="widget-sub-title"><?php echo esc_html( $instance['sub_title'] ); ?></h4>
	<?php endif; ?>
	<div id="testimonial-slider" class="carousel slide  carousel-fade testimonial-slider text-left" data-ride="carousel">
		<div class="carousel-inner" role="listbox">
			<?php foreach( $instance['menus'] as $i => $menu ) : ?>
				<div class="item">
					<div class="testimonial-container">
						<?php if ( ! empty( $menu['service_icon'] ) ) :
							$icon_styles = array();
							if(!empty($menu['icon_size'])) $icon_styles[] = 'font-size: '.intval($menu['icon_size']).'px';
							if(!empty($menu['icon_color'])) $icon_styles[] = 'color: '.$menu['icon_color'];
							echo  siteorigin_widget_get_icon( $menu['service_icon'], $icon_styles );
						endif; ?>
						<?php if ( ! empty( $menu['menu_title'] ) ) : ?>
							<h3 class="margin-top-40 margin-bottom-20" style="color: <?php echo $menu['title_color']; ?>"><span><?php echo esc_html( $menu['menu_title'] ); ?></span></h3>
						<?php endif; ?>
						<?php if ( ! empty( $menu['menu_price'] ) ) : ?>
							<p><span><?php echo esc_html( $menu['menu_price'] ); ?></span></p>
						<?php endif; ?>
						<?php if ( ! empty( $menu['texteditor'] ) ) : ?>
							<div class="testimonial-details"><blockquote><?php echo  $menu['texteditor'] ; ?></blockquote></div>
						<?php endif; ?>
					</div>
				</div>
			<?php endforeach; ?>
		</div>
		<div class="full-width testimonial-arrow">
			<!-- Controls -->
			<a class="" href="#testimonial-slider" role="button" data-slide="prev">
				<i class="fa fa-long-arrow-left"></i>
			</a>
			<a class="" href="#testimonial-slider" role="button" data-slide="next">
				<i class="fa fa-long-arrow-right"></i>
			</a>
		</div>
	</div>
	<script>
		jQuery(document).ready(function () {
			if(jQuery('#testimonial-slider').length){
				jQuery('#testimonial-slider').find('.item').first().addClass('active');
			}
		});
	</script>
</div>