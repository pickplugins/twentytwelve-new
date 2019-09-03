<?php

if ( ! defined('ABSPATH')) exit;  // if direct access

if( class_exists( 'WP_Customize_Control' ) ):
	class WP_Customize_Social_links extends WP_Customize_Control {
		public $type = 'social_links';

		public function render_content() {


		    //var_dump($this->link());

		    $PickPlugins_social_links = PickPlugins_social_links();

			?>
            <div class="social-links">
                <span class="customize-control-title"><?php echo esc_html( $this->label ); ?></span>
                <p><?php echo esc_html( $this->description ); ?></p>

	            <?php

	            foreach ($PickPlugins_social_links as $link){

		            ?>
                    <div class="item">
                        <div class="name"><?php echo $link['name']; ?></div>
                        <div class=""><input placeholder="" name="" <?php $this->link(); ?> type="text" value="<?php echo esc_attr($link['icon']); ?>"></div>
                        <div class=""><input placeholder="social profile url" <?php $this->link(); ?> type="text" value="<?php echo $link['url']; ?>"></div>

                    </div>
		            <?php
	            }

	            ?>

            </div>


			<?php
		}
	}
endif;



Kirki::add_panel( 'PickPlugins_contact', array(
	'priority'    => 10,
	'title'       => __( 'Contact & Social', 'pickplugins-2019' ),
	//'description' => __( '', 'pickplugins-2019' ),
) );;


Kirki::add_section( 'PickPlugins_social', array(
	'title'          => __( 'Social Profile Links', 'pickplugins-2019' ),
	'description'    => __( 'Social media site profile links.', 'pickplugins-2019' ),
	'panel'          => 'PickPlugins_contact', // Not typically needed.
	'priority'       => 160,
	'capability'     => 'edit_theme_options',
	'theme_supports' => '', // Rarely needed.
) );


Kirki::add_field( 'PickPlugins_social_links', array(
	'type'        => 'repeater',
	'label'       => esc_attr__( 'Social Profile Links', 'pickplugins-2019' ),
	'section'     => 'PickPlugins_social',
	'priority'    => 10,
	'row_label' => array(
		'type' => 'text',
		'value' => esc_attr__('Social link', 'pickplugins-2019' ),
	),
	'settings'    => 'PickPlugins_social_links',
	'default'     => array( PickPlugins_social_links()
	),
	'fields' => array(
		'link_icon' => array(
			'type'        => 'textarea',
			'label'       => esc_attr__( 'Link Icon', 'pickplugins-2019' ),
			'description' => esc_attr__( 'This will be the icon for your link', 'pickplugins-2019' ),
			'default'     => '',
			//'sanitize_callback' => 'sanitize_PickPlugins_social'
	),
		'link_url' => array(
			'type'        => 'link',
			'label'       => esc_attr__( 'Link URL', 'pickplugins-2019' ),
			'description' => esc_attr__( 'This will be the link URL', 'pickplugins-2019' ),
			'default'     => '',
		),
	)
) );





