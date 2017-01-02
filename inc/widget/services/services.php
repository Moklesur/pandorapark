<?php
/**
 * Team widget.
 *
 * @package themetim
 */

class Themetim_Services_Widget extends SiteOrigin_Widget {

	function __construct() {

		parent::__construct(
			'themetim-services-widget',
			__( 'Our Services', 'themetim' ),
			array(
				'description' => __( 'Our Service', 'themetim' ),
			),
			array(),
			array(

				'title' => array(
					'type'  => 'text',
					'label' => __( 'Title', 'themetim' ),
				),
				'sub_title' => array(
					'type' => 'text',
					'label' => __( 'Sub Title', 'themetim' ),
				),
				'menus' => array(
					'type'       => 'repeater',
					'label'      => __( 'Services', 'themetim' ),
					'item_name'  => __( 'Item', 'themetim' ),
					'item_label' => array(
						'selector'     => "[id*='prefix-themetim-services-']",
						'update_event' => 'change',
						'value_method' => 'val',
					),
					'fields' => array(
						'service_icon' => array(
							'type' => 'icon',
							'label' => __('Select an icon', 'themetim'),
						),
						'icon_size' => array(
							'type' => 'number',
							'label' => __( 'Icon Size', 'themetim' ),
							'default' => '100'
						),
						'icon_color' => array(
							'type' => 'color',
							'label' => __( 'Icon Color', 'themetim' ),
							'default' => '#000'
						),
						'menu_title' => array(
							'type'  => 'text',
							'label' => __( 'Title', 'themetim' ),
						),
						'title_color' => array(
							'type' => 'color',
							'label' => __( 'Title color', 'themetim' ),
							'default' => '#000'
						),
						'menu_price' => array(
							'type'  => 'text',
							'label' => __( 'Sub Title', 'themetim' ),
						),
						'texteditor' => array(
							'type' => 'tinymce',
							'label' => __( '', 'widget-form-fields-text-domain' ),
							'default' => '',
							'rows' => 10,
							'default_editor' => 'html',
							'button_filters' => array(
								'mce_buttons' => array( $this, 'filter_mce_buttons' ),
								'mce_buttons_2' => array( $this, 'filter_mce_buttons_2' ),
								'mce_buttons_3' => array( $this, 'filter_mce_buttons_3' ),
								'mce_buttons_4' => array( $this, 'filter_mce_buttons_5' ),
								'quicktags_settings' => array( $this, 'filter_quicktags_settings' ),
							),
						),
					),
				),
			)
		);
	}

	function get_template_name( $instance ) {
		return 'default';
	}
}

siteorigin_widget_register( 'themetim-services-widget', __FILE__, 'Themetim_Services_Widget' );
