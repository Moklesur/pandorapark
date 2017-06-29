<?php
/**
 * Team widget.
 *
 * @package themetim
 */

class Themetim_wp_theme_title extends SiteOrigin_Widget {

	function __construct() {

		parent::__construct(
			'themetim-wp-theme-title',
			__( 'WP Theme Title', 'themetim' ),
			array(
				'description' => __( 'WP Theme Title & Demo Button', 'themetim' ),
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
				'description' => array(
					'type' => 'tinymce',
					'label' => __( '', 'widget-form-fields-text-domain' ),
					'default' => '',
					'rows' => 5,
					'default_editor' => 'html',
					'button_filters' => array(
						'mce_buttons' => array( $this, 'filter_mce_buttons' ),
						'mce_buttons_2' => array( $this, 'filter_mce_buttons_2' ),
						'mce_buttons_3' => array( $this, 'filter_mce_buttons_3' ),
						'mce_buttons_4' => array( $this, 'filter_mce_buttons_5' ),
						'quicktags_settings' => array( $this, 'filter_quicktags_settings' ),
					),
				),
				'button1' => array(
					'type' => 'link',
					'label' => __('Download Free Version', 'themetim'),
					'default' => ''
				),
				'button2' => array(
					'type' => 'link',
					'label' => __('View Demo', 'themetim'),
					'default' => ''
				),
				'license' => array(
					'type' => 'tinymce',
					'label' => __( '', 'widget-form-fields-text-domain' ),
					'default' => '',
					'rows' => 5,
					'default_editor' => 'html',
					'button_filters' => array(
						'mce_buttons' => array( $this, 'filter_mce_buttons' ),
						'mce_buttons_2' => array( $this, 'filter_mce_buttons_2' ),
						'mce_buttons_3' => array( $this, 'filter_mce_buttons_3' ),
						'mce_buttons_4' => array( $this, 'filter_mce_buttons_5' ),
						'quicktags_settings' => array( $this, 'filter_quicktags_settings' ),
					),
				),
			)
		);
	}

	function get_template_name( $instance ) {
		return 'default';
	}
}

siteorigin_widget_register( 'themetim-wp-theme-title', __FILE__, 'Themetim_wp_theme_title' );
