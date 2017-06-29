<?php
/**
 * Team widget.
 *
 * @package themetim
 */

class Themetim_Portfolio_Widget extends SiteOrigin_Widget {

	function __construct() {

		parent::__construct(
			'themetim-portfolio-widget',
			__( 'ThemeTim Portfolio', 'themetim' ),
			array(
				'description' => __( 'Displays Portfolio', 'themetim' ),
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
					'label'      => __( 'Menus', 'themetim' ),
					'item_name'  => __( 'Item', 'themetim' ),
					'item_label' => array(
						'selector'     => "[id*='prefix-themetim-portfolio-']",
						'update_event' => 'change',
						'value_method' => 'val',
					),
					'fields' => array(
						'menu_title' => array(
							'type'  => 'text',
							'label' => __( 'Title', 'themetim' ),
						),
						'menu_price' => array(
							'type'  => 'text',
							'label' => __( 'Price', 'themetim' ),
						),
						'texteditor' => array(
							'type' => 'tinymce',
							'label' => __( '', 'themetim' ),
							'default' => '',
							'rows' => 7,
							'default_editor' => 'html',
							'button_filters' => array(
								'mce_buttons' => array( $this, 'filter_mce_buttons' ),
								'mce_buttons_2' => array( $this, 'filter_mce_buttons_2' ),
								'mce_buttons_3' => array( $this, 'filter_mce_buttons_3' ),
								'mce_buttons_4' => array( $this, 'filter_mce_buttons_5' ),
								'quicktags_settings' => array( $this, 'filter_quicktags_settings' ),
							),
						),
						'demo_url' => array(
							'type' => 'text',
							'label' => __('Demo URL', 'bloogs'),
							'default' => ''
						),
						'profile_picture' => array(
							'type'     => 'media',
							'library'  => 'image',
							'label'    => __( 'Image', 'themetim' ),
							'fallback' => true,
						),
					),
				),
				'per_row' => array(
					'type'    => 'select',
					'label'   => __( 'Portfolio per row', 'themetim' ),
					'default' => 2,
					'options' => array(
						'12' => 1,
						'6' => 2,
						'3' => 3,
						'4' => 4,
					),
				),
			)
		);
	}

	function get_template_name( $instance ) {
		return 'default';
	}
}

siteorigin_widget_register( 'themetim-portfolio-widget', __FILE__, 'Themetim_Portfolio_Widget' );
