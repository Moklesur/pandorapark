<div class="services">
	<?php if ( ! empty( $instance['title'] ) ) : ?>
		<?php echo $args['before_title'] . esc_html( $instance['title'] ) . $args['after_title'] ?>
	<?php endif; ?>
	<?php if ( ! empty( $instance['sub_title'] ) ) : ?>
		<h4 class="widget-sub-title"><?php echo esc_html( $instance['sub_title'] ); ?></h4>
	<?php endif; ?>
	<div class="services-slider">
		<?php foreach( $instance['menus'] as $i => $menu ) : ?>
			<div class="item item-fix col-md-4 col-sm-4 col-xs-12">
				<div class="services-container">
					<?php if ( ! empty( $menu['service_icon'] ) ) :
						$icon_styles = array();
						if(!empty($menu['icon_size'])) $icon_styles[] = 'font-size: '.intval($menu['icon_size']).'px';
						if(!empty($menu['icon_color'])) $icon_styles[] = 'color: '.$menu['icon_color'];
						echo  siteorigin_widget_get_icon( $menu['service_icon'], $icon_styles );
					endif; ?>
					<?php if ( ! empty( $menu['menu_title'] ) ) : ?>
						<h1 class="margin-top-30 margin-bottom-20"><span style="background: <?php echo $menu['title_color']; ?>"><?php echo esc_html( $menu['menu_title'] ); ?></span></h1>
					<?php endif; ?>
					<?php if ( ! empty( $menu['menu_price'] ) ) : ?>
						<p><span><?php echo esc_html( $menu['menu_price'] ); ?></span></p>
					<?php endif; ?>
					<?php if ( ! empty( $menu['texteditor'] ) ) : ?>
						<div class="services-details"><?php echo  $menu['texteditor'] ; ?></div>
					<?php endif; ?>
				</div>
			</div>
		<?php endforeach; ?>
	</div>
</div>