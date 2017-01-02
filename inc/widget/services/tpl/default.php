<div class="services">
	<?php if ( ! empty( $instance['title'] ) ) : ?>
		<?php echo $args['before_title'] . esc_html( $instance['title'] ) . $args['after_title'] ?>
	<?php endif; ?>
	<?php if ( ! empty( $instance['sub_title'] ) ) : ?>
		<h4 class="widget-sub-title"><?php echo esc_html( $instance['sub_title'] ); ?></h4>
	<?php endif; ?>
	<div id="services-slider" class="carousel slide services-slider" data-ride="carousel">
		<div class="carousel-inner" role="listbox">
			<?php foreach( $instance['menus'] as $i => $menu ) : ?>
				<div class="item item-fix">
					<div class="services-container">
						<?php if ( ! empty( $menu['service_icon'] ) ) :
							$icon_styles = array();
							if(!empty($menu['icon_size'])) $icon_styles[] = 'font-size: '.intval($menu['icon_size']).'px';
							if(!empty($menu['icon_color'])) $icon_styles[] = 'color: '.$menu['icon_color'];
							echo  siteorigin_widget_get_icon( $menu['service_icon'], $icon_styles );
						endif; ?>
						<?php if ( ! empty( $menu['menu_title'] ) ) : ?>
							<h1 class="margin-top-40 margin-bottom-20"><span style="background: <?php echo $menu['title_color']; ?>"><?php echo esc_html( $menu['menu_title'] ); ?></span></h1>
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
	<script>
		jQuery(document).ready(function () {
			if(jQuery('#services-slider').length){
				jQuery('#services-slider').find('.item-fix').first().addClass('active');
				var services = jQuery(".carousel");
				services.append("<ol class='carousel-indicators services-indicators'></ol>");
				var servicesindicators = jQuery(".services-indicators");
				services.find(".carousel-inner").children(".item-fix").each(function(index) {
					(index === 0) ?
						servicesindicators.append("<li data-target='#services-slider' data-slide-to='"+index+"' class='active'></li>") :
						servicesindicators.append("<li data-target='#services-slider' data-slide-to='"+index+"'></li>");
				});
			}


		});
	</script>
</div>