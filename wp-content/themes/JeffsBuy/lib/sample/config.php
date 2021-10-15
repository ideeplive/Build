<?php
    /**
     * ReduxFramework Sample Config File
     * For full documentation, please visit: http://docs.reduxframework.com/
     */

    if ( ! class_exists( 'Redux' ) ) {
        return;
    }


    // This is your option name where all the Redux data is stored.
    $opt_name = "deeplive";

    // This line is only for altering the demo. Can be easily removed.
    $opt_name = apply_filters( 'redux_demo/opt_name', $opt_name );

    /*
     *
     * --> Used within different fields. Simply examples. Search for ACTUAL DECLARATION for field examples
     *
     */

    $sampleHTML = '';
    if ( file_exists( dirname( __FILE__ ) . '/info-html.html' ) ) {
        Redux_Functions::initWpFilesystem();

        global $wp_filesystem;

        $sampleHTML = $wp_filesystem->get_contents( dirname( __FILE__ ) . '/info-html.html' );
    }

    // Background Patterns Reader
    $sample_patterns_path = ReduxFramework::$_dir . '../sample/patterns/';
    $sample_patterns_url  = ReduxFramework::$_url . '../sample/patterns/';
    $sample_patterns      = array();
    
    if ( is_dir( $sample_patterns_path ) ) {

        if ( $sample_patterns_dir = opendir( $sample_patterns_path ) ) {
            $sample_patterns = array();

            while ( ( $sample_patterns_file = readdir( $sample_patterns_dir ) ) !== false ) {

                if ( stristr( $sample_patterns_file, '.png' ) !== false || stristr( $sample_patterns_file, '.jpg' ) !== false ) {
                    $name              = explode( '.', $sample_patterns_file );
                    $name              = str_replace( '.' . end( $name ), '', $sample_patterns_file );
                    $sample_patterns[] = array(
                        'alt' => $name,
                        'img' => $sample_patterns_url . $sample_patterns_file
                    );
                }
            }
        }
    }

    /**
     * ---> SET ARGUMENTS
     * All the possible arguments for Redux.
     * For full documentation on arguments, please refer to: https://github.com/ReduxFramework/ReduxFramework/wiki/Arguments
     * */

    $theme = wp_get_theme(); // For use with some settings. Not necessary.

    $args = array(
        // TYPICAL -> Change these values as you need/desire
        'opt_name'             => $opt_name,
        // This is where your data is stored in the database and also becomes your global variable name.
        'display_name'         => $theme->get( 'Name' ),
        // Name that appears at the top of your panel
        'display_version'      => $theme->get( 'Version' ),
        // Version that appears at the top of your panel
        'menu_type'            => 'menu',
        //Specify if the admin menu should appear or not. Options: menu or submenu (Under appearance only)
        'allow_sub_menu'       => true,
        // Show the sections below the admin menu item or not
        'menu_title'           => __( 'Jeffs Options', 'deeplive' ),
        'page_title'           => __( 'Jeffs Options', 'deeplive' ),
        // You will need to generate a Google API key to use this feature.
        // Please visit: https://developers.google.com/fonts/docs/developer_api#Auth
        'google_api_key'       => '',
        // Set it you want google fonts to update weekly. A google_api_key value is required.
        'google_update_weekly' => false,
        // Must be defined to add google fonts to the typography module
        'async_typography'     => false,
        // Use a asynchronous font on the front end or font string
        //'disable_google_fonts_link' => true,                    // Disable this in case you want to create your own google fonts loader
        'admin_bar'            => true,
        // Show the panel pages on the admin bar
        'admin_bar_icon'       => 'dashicons-smiley',
        // Choose an icon for the admin bar menu
        'admin_bar_priority'   => 50,
        // Choose an priority for the admin bar menu
        'global_variable'      => '',
        // Set a different name for your global variable other than the opt_name
        'dev_mode'             => false,
        // Show the time the page took to load, etc
        'update_notice'        => true,
        // If dev_mode is enabled, will notify developer of updated versions available in the GitHub Repo
        'customizer'           => false,
        // Enable basic customizer support
        //'open_expanded'     => true,                    // Allow you to start the panel in an expanded way initially.
        //'disable_save_warn' => true,                    // Disable the save warning when a user changes a field

        // OPTIONAL -> Give you extra features
        'page_priority'        => 1,
        // Order where the menu appears in the admin area. If there is any conflict, something will not show. Warning.
        'page_parent'          => 'themes.php',
        // For a full list of options, visit: http://codex.wordpress.org/Function_Reference/add_submenu_page#Parameters
        'page_permissions'     => 'manage_options',
        // Permissions needed to access the options panel.
        'menu_icon'            => 'dashicons-smiley',
        // Specify a custom URL to an icon
        'last_tab'             => '',
        // Force your panel to always open to a specific tab (by id)
        'page_icon'            => 'icon-themes',
        // Icon displayed in the admin panel next to your menu_title
        'page_slug'            => 'redux_demo',
        // Page slug used to denote the panel, will be based off page title then menu title then opt_name if not provided
        'save_defaults'        => true,
        // On load save the defaults to DB before user clicks save or not
        'default_show'         => false,
        // If true, shows the default value next to each field that is not the default value.
        'default_mark'         => '',
        // What to print by the field's title if the value shown is default. Suggested: *
        'show_import_export'   => false,
        // Shows the Import/Export panel when not used as a field.

        // CAREFUL -> These options are for advanced use only
        'transient_time'       => 60 * MINUTE_IN_SECONDS,
        'output'               => true,
        // Global shut-off for dynamic CSS output by the framework. Will also disable google fonts output
        'output_tag'           => true,
        // Allows dynamic CSS to be generated for customizer and google fonts, but stops the dynamic CSS from going to the head
         'footer_credit'     => 'Developed By Deep',                   // Disable the footer credit of Redux. Please leave if you can help it.

        // FUTURE -> Not in use yet, but reserved or partially implemented. Use at your own risk.
        'database'             => '',
        // possible: options, theme_mods, theme_mods_expanded, transient. Not fully functional, warning!
        'use_cdn'              => true,
        // If you prefer not to use the CDN for Select2, Ace Editor, and others, you may download the Redux Vendor Support plugin yourself and run locally or embed it in your code.

        // HINTS
        'hints'                => array(
            'icon'          => 'el el-question-sign',
            'icon_position' => 'right',
            'icon_color'    => 'lightgray',
            'icon_size'     => 'normal',
            'tip_style'     => array(
                'color'   => 'red',
                'shadow'  => true,
                'rounded' => false,
                'style'   => '',
            ),
            'tip_position'  => array(
                'my' => 'top left',
                'at' => 'bottom right',
            ),
            'tip_effect'    => array(
                'show' => array(
                    'effect'   => 'slide',
                    'duration' => '500',
                    'event'    => 'mouseover',
                ),
                'hide' => array(
                    'effect'   => 'slide',
                    'duration' => '500',
                    'event'    => 'click mouseleave',
                ),
            ),
        )
    );

    // ADMIN BAR LINKS -> Setup custom links in the admin bar menu as external items.
 /*   $args['admin_bar_links'][] = array(
        'id'    => 'redux-docs',
        'href'  => 'http://docs.reduxframework.com/',
        'title' => __( 'Documentation', 'deeplive' ),
    );

    $args['admin_bar_links'][] = array(
        //'id'    => 'redux-support',
        'href'  => 'https://github.com/ReduxFramework/redux-framework/issues',
        'title' => __( 'Support', 'deeplive' ),
    );

    $args['admin_bar_links'][] = array(
        'id'    => 'redux-extensions',
        'href'  => 'reduxframework.com/extensions',
        'title' => __( 'Extensions', 'deeplive' ),
    );
*/
    // SOCIAL ICONS -> Setup custom links in the footer for quick links in your panel footer icons.
    $args['share_icons'][] = array(
        'url'   => 'https://github.com/ideeplive',
        'title' => 'Visit us on GitHub',
        'icon'  => 'el el-github'
        //'img'   => '', // You can use icon OR img. IMG needs to be a full URL.
    );
    $args['share_icons'][] = array(
        'url'   => 'https://www.facebook.com/ideeplive',
        'title' => 'Like us on Facebook',
        'icon'  => 'el el-facebook'
    );
    $args['share_icons'][] = array(
        'url'   => 'http://twitter.com/ideeplive',
        'title' => 'Follow us on Twitter',
        'icon'  => 'el el-twitter'
    );
    $args['share_icons'][] = array(
        'url'   => 'http://www.linkedin.com/deeplive',
        'title' => 'Find us on LinkedIn',
        'icon'  => 'el el-linkedin'
    );

    // Panel Intro text -> before the form
    if ( ! isset( $args['global_variable'] ) || $args['global_variable'] !== false ) {
        if ( ! empty( $args['global_variable'] ) ) {
            $v = $args['global_variable'];
        } else {
            $v = str_replace( '-', '_', $args['opt_name'] );
        }
        $args['intro_text'] = sprintf( __( 'Hi Jeff ! Welcome To JeffsBuy Option Panel', 'deeplive' ), $v );
    } else {
        $args['intro_text'] = __( '<p>This text is displayed above the options panel. It isn\'t required, but more info is always better! The intro_text field accepts all HTML.</p>', 'redux-framework-demo' );
    }

    // Add content after the form.
    $args['footer_text'] = __( 'If Have any problem with this website Just Contact Me', 'deeplive' );

    Redux::setArgs( $opt_name, $args );

    /*
     * ---> END ARGUMENTS
     */


    /*
     * ---> START HELP TABS
     */

    $tabs = array(
        array(
            'id'      => 'redux-help-tab-1',
            'title'   => __( 'Theme Information 1', 'deeplive' ),
            'content' => __( '<p>This is the tab content, HTML is allowed.</p>', 'deeplive' )
        ),
        array(
            'id'      => 'redux-help-tab-2',
            'title'   => __( 'Theme Information 2', 'deeplive' ),
            'content' => __( '<p>This is the tab content, HTML is allowed.</p>', 'deeplive' )
        )
    );
    Redux::setHelpTab( $opt_name, $tabs );

    // Set the help sidebar
    $content = __( '<p>This is the sidebar content, HTML is allowed.</p>', 'deeplive' );
    Redux::setHelpSidebar( $opt_name, $content );


    /*
     * <--- END HELP TABS
     */


    /*
     *
     * ---> START SECTIONS
     *
     */

    /*

        As of Redux 3.5+, there is an extensive API. This API can be used in a mix/match mode allowing for


     */

// -> Header Fields Start
    Redux::setSection( $opt_name, array(
        'title'            => __( 'Header', 'deeplive' ),
        'id'               => 'header',
        'desc'             => __( 'These are Header fields', 'deeplive' ),
        'customizer_width' => '400px',
        'icon'             => 'el el-home'
    ) );
// -> Logo Section Start
    Redux::setSection( $opt_name, array(
        'title'            => __( 'Logo', 'deeplive' ),
        'id'               => 'header-sub',
        'subsection'       => true,
        'customizer_width' => '450px',
        'desc'             => __( 'This area for Top Section with Logo', 'deeplive' ),
        'fields'           => array(
            array(
                'id'       => 'logo',
                'type'     => 'media',
                'title'    => __( 'Logo', 'deeplive' ),
                'subtitle' => __( 'Header Logo', 'deeplive' ),
                'desc'     => __( 'Upload Your Logo Only use png format mot Use Other Type', 'deeplive' ),
                'url'	   => false,
				'preview'  => true,		
            ),
            array(
                'id'       => 'logo-text-one',
                'type'     => 'text',
                'title'    => __( 'Logo Text', 'deeplive' ),
                'subtitle' => __( 'Logo Text One', 'deeplive' ),
                'desc'     => __( 'Enter Your First Text Logo', 'deeplive' ),
                'placeholder' => 'Logo Text One',
				'default'     => 'effs',
                ),
            array(
                'id'       => 'logo-text-one-color',
                'type'     => 'color',
                'title'    => __( 'Text Color One', 'deeplive' ),
                'subtitle' => __( 'Text Color', 'deeplive' ),
                'desc'     => __( 'Change Your First Text Logo Color', 'deeplive' ),
                'default'     => '#FF912E',
            ),
            array(
                'id'       => 'logo-text-two',
                'type'     => 'text',
                'title'    => __( 'Logo Text Two', 'deeplive' ),
                'subtitle' => __( 'Logo Text', 'deeplive' ),
                'desc'     => __( 'Enter Your Secend Text Logo', 'deeplive' ),
				'placeholder' => 'Logo Text Two',
				'default'     => 'Buy',
            ),
			array(
                'id'       => 'logo-text-two-color',
                'type'     => 'color',
                'title'    => __( 'Logo Text Color Two', 'deeplive' ),
                'subtitle' => __( 'Logo Text Color', 'deeplive' ),
                'desc'     => __( 'Enter Your Secend Logo Text Color', 'deeplive' ),
                'default'     => '#F46D34',
            ),
        )
    ) );
// -> End Logo Section
    Redux::setSection( $opt_name, array(
        'title'      => __( 'Logo Font', 'deeplive' ),
        'id'         => 'logo-font-change-sub',
        'desc'       => __('full documentation on this field visit:', 'deeplive' ),
        'subsection' => true,
        'fields'     => array(
            array(
				'id'                => 'logo-font',
				'type'              => 'typography',
				'title'             => esc_html__( 'Logo Font', 'deeplive' ),
				'subtitle'          => esc_html__( 'Header Logo Font', 'deeplive' ),
				'google'            => true,
				'font-backup' 		=> true,
				'subsets'      		=> false,
				'color'        		=> false,
				'default'           => array(
					'color'         => '',
					'font-size'     => '30px',
					'font-family'   => 'Arial, Helvetica, sans-serif',
					
				),
			),
        ),
    ) );
// -> Header Fields End

// -> HomePage Section Start
    Redux::setSection( $opt_name, array(
        'title'            => __( 'Home Page', 'deeplive' ),
        'id'               => 'homepage',
        'customizer_width' => '500px',
        'icon'             => 'el el-brush',
    ) );

    Redux::setSection( $opt_name, array(
        'title'      => __( 'Home Page', 'deeplive' ),
        'id'         => 'home-page-sub',
        'desc'       => __( 'For full documentation on this field, visit: ', 'deeplive' ),
        'subsection' => true,
        'fields'     => array(
            array(
				'id'      => 'homepage-blocks',
				'type'    => 'sorter',
				'title'   => 'Homepage Layout Manager',
				'desc'    => 'Organize how you want the layout to appear on the homepage',
				'compiler' => 'true',
				'options' => array(
						'enabled'  => array(
							'slider' => 'Slider',
							'mens'   => 'mens',
							'womens' => 'womens',
							'accessories' => 'accessories',
							'electronics' => 'electronics',
							'home' => 'home',
							'kids' => 'kids',
							'appliances' => 'appliances',
						),
						'disabled' => array(),

					),
				),
			),
            ));
	// -> HomePage Section End
    // -> START Banner Selection
    Redux::setSection( $opt_name, array(
        'title' => __( 'Banner', 'deeplive' ),
        'id'    => 'banner',
        'desc'  => __( 'This is Banner Section ', 'deeplive' ),
        'icon'  => 'el el-graph'
    ) );

    Redux::setSection( $opt_name, array(
        'title'      => __( 'Banner Image', 'deeplive' ),
        'id'         => 'banner-image',
        'desc'       => __( 'This Field For Banner', 'deeplive' ),
        'subsection' => true,
        'fields'     => array(
            array(
				'id'       => 'banner-image-real',
				'type'     => 'media',
				'title'    => esc_html__( 'Banner Image', 'deeplive' ),
				'subtitle' => esc_html__( 'Add Banner Image', 'deeplive' ),
				'desc'     => esc_html__( 'This Field is  for Banner Image', 'deeplive' ),
				'default'  => array( 'url' => 'https://via.placeholder.com/1680x700.png' ),
				'url'	   => false,
				'preview'  => true,
			),
            array(
				'id'        => 'banner-h1',
				'type'      => 'textarea',
				'title'     => esc_html__( 'Banner Head Quote', 'deeplive' ),
				'subtitle'  => esc_html__( 'Subtitle', 'deeplive' ),
				'desc'      => esc_html__( 'Field Description', 'deeplive' ),
				'default'   => 'Change Your Website Title',
			),
			array(
				'id'        => 'banner-para',
				'type'      => 'textarea',
				'title'     => esc_html__( 'Banner Paragraph', 'deeplive' ),
				'subtitle'  => esc_html__( 'Subtitle', 'deeplive' ),
				'desc'      => esc_html__( 'Field Description', 'deeplive' ),
				'default'   => 'Change Your Secend Title',
			),
        ),
    ) );
	// -> START Banner Selection
    // -> START Body Selection
    Redux::setSection( $opt_name, array(
        'title' => __( 'Body', 'deeplive' ),
        'id'    => 'body',
        'desc'  => __( '', 'deeplive' ),
        'icon'  => 'el el-align-justify'
    ) );

    Redux::setSection( $opt_name, array(
        'title'      => __( 'Body Color', 'deeplive' ),
        'id'         => 'body-sub',
        'desc'       => __( 'This Field For Banner', 'deeplive' ),
        'subsection' => true,
        'fields'     => array(
            array(
				'id'       => 'body-color',
				'type'     => 'color',
				'title'    => esc_html__( 'Banner Image', 'deeplive' ),
				'subtitle' => esc_html__( 'Add Banner Image', 'deeplive' ),
				'desc'     => esc_html__( 'This Field is  for Banner Image', 'deeplive' ),
				'default'  => '#FFFFFF',
			),
        ),
    ) );
Redux::setSection( $opt_name, array(
        'title'      => __( 'Front Page Body Color', 'deeplive' ),
        'id'         => 'frontpage-color-sub',
        'desc'       => __( 'Hey Jeff This Field for Page Body', 'deeplive' ),
        'subsection' => true,
        'fields'     => array(
            array(
				'id'       => 'frontpage-body-color',
				'type'     => 'color',
				'title'    => esc_html__( 'Body Color', 'deeplive' ),
				'subtitle' => esc_html__( 'Front Page Body Color', 'deeplive' ),
				'desc'     => esc_html__( 'Add Your Front Page Color', 'deeplive' ),
				'default'  => '#FFFFFF',
			),
			array(
				'id'            => 'opt-slider-float',
				'type'          => 'slider',
				'title'         => esc_html__( 'Slider Example 4 with float values', 'deeplive' ),
				'subtitle'      => esc_html__( 'This example displays float values', 'deeplive' ),
				'desc'          => esc_html__( 'Slider description. Min: 0, max: 1, step: .1, default value: .5', 'deeplive' ),
				'default'       => 5,
				'min'           => 1,
				'step'          => .1,
				'max'           => 20,
				'resolution'    => 0.1,
				'display_value' => 'text',
			),
        ),
    ) );
	// -> Body Selection End
	
	// -> Products Selection Start
	    Redux::setSection( $opt_name, array(
        'title' => __( 'Products', 'deeplive' ),
        'id'    => 'products',
        'icon'  => 'el el-shopping-cart'
    ) );

    Redux::setSection( $opt_name, array(
        'title'      => __( 'Products', 'deeplive' ),
        'id'         => 'product-sub',
        'desc'       => __( 'Change Product Color', 'deeplive' ),
        'subsection' => true,
        'fields'     => array(
            array(
				'id'       => 'products-border-color',
				'type'     => 'color',
				'title'    => esc_html__( 'Border Hover Color', 'deeplive' ),
				'subtitle' => esc_html__( 'Products Border Color', 'deeplive' ),
				'desc'     => esc_html__( 'Jeffs This Field for Products Border Color', 'deeplive' ),
				'default' => '#626262',
			),
			array(
				'id'        => 'products-border-color-hover',
				'type'      => 'color',
				'title'     => esc_html__( 'Border Color', 'deeplive' ),
				'subtitle'  => esc_html__( 'Products Border Hover Color', 'deeplive' ),
				'desc'      => esc_html__( 'Jeffs This Field for Products Border Hover Color', 'deeplive' ),
				'default' => '#ebebeb',
			),
			array(
				'id'            => 'shop-content-title',
				'type'          => 'slider',
				'title'         => esc_html__( 'Slider Example 4 with float values', 'deeplive' ),
				'subtitle'      => esc_html__( 'This example displays float values', 'deeplive' ),
				'desc'          => esc_html__( 'Slider description. Min: 0, max: 1, step: .1, default value: .5', 'deeplive' ),
				'default'       => 11,
				'min'           => 1,
				'step'          => .1,
				'max'           => 50,
				'resolution'    => 0.1,
				'display_value' => 'text',
			),
			array(
				'id'            => 'shop-content-des',
				'type'          => 'slider',
				'title'         => esc_html__( 'Slider Example 4 with float values', 'deeplive' ),
				'subtitle'      => esc_html__( 'This example displays float values', 'deeplive' ),
				'desc'          => esc_html__( 'Slider description. Min: 0, max: 1, step: .1, default value: .5', 'deeplive' ),
				'default'       => 13,
				'min'           => 1,
				'step'          => .1,
				'max'           => 50,
				'resolution'    => 0.1,
				'display_value' => 'text',
			),
        ),
    ) );

	// -> Products Selection End
	// -> Contact Selection Start
	    Redux::setSection( $opt_name, array(
        'title' => __( 'Contact', 'deeplive' ),
        'id'    => 'contact',
        'icon'  => 'el el-phone-alt'
    ) );

    Redux::setSection( $opt_name, array(
        'title'      => __( 'Contact', 'deeplive' ),
        'id'         => 'contact-sub',
        'desc'       => __( 'This Field For Contact Section', 'deeplive' ),
        'subsection' => true,
        'fields'     => array(
            array(
				'id'       => 'contact-switch',
				'type'     => 'switch',
				'title'    => esc_html__( 'On and Off The Google Address', 'deeplive' ),
				'subtitle' => esc_html__( 'On or Off', 'deeplive' ),
				'default'  => true,
				'on'       => 'Enabled',
				'off'      => 'Disabled',
			),
			array(
				'id'       => 'contact-left-title',
				'type'     => 'text',
				'title'    => esc_html__( 'Title', 'deeplive' ),
				'subtitle' => esc_html__( 'Left Title', 'deeplive' ),
				'desc'     => esc_html__( 'Contact Page Left Side Title', 'deeplive' ),
				'default'  => 'GET IN TOUCH',
				
			),
			array(
				'id'        => 'contact-left-paragraph',
				'type'      => 'editor',
				'title'     => esc_html__( 'Information', 'deeplive' ),
				'subtitle'  => esc_html__( 'Left Information', 'deeplive' ),
				'desc'      => esc_html__( 'Contact Page Left Side Paragraph Information', 'deeplive' ),
			),
        ),
    ) );
	
	Redux::setSection( $opt_name, array(
        'title'      => __( 'Address Section', 'deeplive' ),
        'id'         => 'address-sub',
        'desc'       => __( 'Address', 'deeplive' ),
        'subsection' => true,
        'fields'     => array(
            array(
				'id'          => 'address-title',
				'type'        => 'text',
				'title'       => esc_html__( 'Address Title', 'deeplive' ),
				'subtitle'    => esc_html__( 'Add Your Title', 'deeplive' ),
				'desc'        => esc_html__( 'Add your Address Title in this Field', 'deeplive' ),
				'default'  => 'Address',
			),
			array(
				'id'          => 'address-one',
				'type'        => 'editor',
				'title'       => esc_html__( 'Address One', 'deeplive' ),
				'subtitle'    => esc_html__( 'Add Address', 'deeplive' ),
				'desc'        => esc_html__( 'Add Your First Address in this Field', 'deeplive' ),
			),
			array(
				'id'          => 'address-two',
				'type'        => 'editor',
				'title'       => esc_html__( 'Address Two', 'deeplive' ),
				'subtitle'    => esc_html__( 'Add Address', 'deeplive' ),
				'desc'        => esc_html__( 'Add Your Second Address in this Field', 'deeplive' ),
			),
			array(
				'id'          => 'address-three',
				'type'        => 'editor',
				'title'       => esc_html__( 'Address Three', 'deeplive' ),
				'subtitle'    => esc_html__( 'Add Address', 'deeplive' ),
				'desc'        => esc_html__( 'Add Your Second Address in this Field', 'deeplive' ),
			),
        ),
    ) );
	// -> Contact Selection End
	// -> 404 Selection Start
	    Redux::setSection( $opt_name, array(
        'title' => __( '404', 'deeplive' ),
        'id'    => '404',
        'icon'  => 'el el-error'
    ) );

    Redux::setSection( $opt_name, array(
        'title'      => __( '404', 'deeplive' ),
        'id'         => '404-sub',
        'desc'       => __( 'This Section For 404 Page', 'deeplive' ),
        'subsection' => true,
        'fields'     => array(
            array(
				'id'       => '404-main',
				'type'     => 'text',
				'title'    => esc_html__( '404 main', 'deeplive' ),
				'subtitle' => esc_html__( 'Add 404 Text', 'deeplive' ),
				'desc'     => esc_html__( 'This Field For 404 Text Section', 'deeplive' ),
				'default'  => '404',
			),
			array(
				'id'       => '404-title',
				'type'     => 'text',
				'title'    => esc_html__( '404 Text', 'deeplive' ),
				'subtitle' => esc_html__( 'Add 404 Text', 'deeplive' ),
				'desc'     => esc_html__( 'This Field For 404 Text Section', 'deeplive' ),
				'default'  => 'You Have Failed',
			),
			array(
				'id'        => '404-des',
				'type'      => 'text',
				'title'     => esc_html__( 'Button Text', 'deeplive' ),
				'subtitle'  => esc_html__( 'Add Button Text', 'deeplive' ),
				'desc'      => esc_html__( 'This Field For 404 Text Section', 'deeplive' ),
				'default'	=> 'Back to Home',
			),
        ),
    ) );

	// -> 404 Selection End
	// -> Coming Soon Selection Start
	    Redux::setSection( $opt_name, array(
        'title' => __( 'Coming Soon', 'deeplive' ),
        'id'    => 'coming-soon',
        'icon'  => 'el el-blind'
    ) );

    Redux::setSection( $opt_name, array(
        'title'      => __( 'Coming Soon', 'deeplive' ),
        'id'         => 'coming-soon-sub',
        'desc'       => __( 'This Section For Coming Soon Page', 'deeplive' ),
        'subsection' => true,
        'fields'     => array(
            array(
				'id'       => 'coming-soon-title',
				'type'     => 'text',
				'title'    => esc_html__( 'Coming Soon Title Text', 'deeplive' ),
				'subtitle' => esc_html__( 'Subtitle', 'deeplive' ),
				'desc'     => esc_html__( 'Field Description', 'your-textdomain-here' ),
				'default'  => 'Coming Soon',
			),
			array(
				'id'        => 'coming-soon-des',
				'type'      => 'text',
				'title'     => esc_html__( 'Text Field w/ Hint', 'your-textdomain-here' ),
				'subtitle'  => esc_html__( 'Subtitle', 'your-textdomain-here' ),
				'desc'      => esc_html__( 'Field Description', 'your-textdomain-here' ),
				'default'   => 'Do not Make Unhappy.',
			),
        ),
    ) );

	// -> 404 Selection End
	// -> About Selection Start
	    Redux::setSection( $opt_name, array(
        'title' => __( 'About', 'deeplive' ),
        'id'    => 'about',
        'icon'  => 'el el-child'
    ) );

    Redux::setSection( $opt_name, array(
        'title'      => __( 'About Us', 'deeplive' ),
        'id'         => 'about-sub',
        'desc'       => __( 'This Section For Coming Soon Page', 'deeplive' ),
        'subsection' => true,
        'fields'     => array(
            array(
				'id'       => 'about-full',
				'type'     => 'editor',
				'title'    => esc_html__( 'About Field', 'deeplive' ),
				'subtitle' => esc_html__( 'Add About Us', 'deeplive' ),
				'desc'     => esc_html__( 'Add About Us Full Description', 'deeplive' ),
				'full_width' => true,
				'args'   => array(
					'textarea_rows'    => 10
				)
			),
        ),
    ) );

	// -> About Selection End
	// -> FAQ Selection Start
	    Redux::setSection( $opt_name, array(
        'title' => __( 'FAQ', 'deeplive' ),
        'id'    => 'faq',
        'icon'  => 'el el-exclamation-sign'
    ) );

    Redux::setSection( $opt_name, array(
        'title'      => __( 'FAQ', 'deeplive' ),
        'id'         => 'faq-sub',
        'desc'       => __( 'Create Your Full Page in this Field', 'deeplive' ),
        'subsection' => true,
        'fields'     => array(
            array(
				'id'       => 'faq-full',
				'type'     => 'editor',
				'title'    => esc_html__( 'FAQ Field', 'deeplive' ),
				'subtitle' => esc_html__( 'Add FAQ', 'deeplive' ),
				'desc'     => esc_html__( 'Add FAQ Full Description', 'deeplive' ),
				'full_width' => true,
			),
        ),
    ) );

	// -> FAQ Selection End
	// -> Footer Selection Start
	    Redux::setSection( $opt_name, array(
        'title' => __( 'Footer', 'deeplive' ),
        'id'    => 'footer',
        'icon'  => 'el el-website'
    ) );

    Redux::setSection( $opt_name, array(
        'title'      => __( 'Footer Color Section', 'deeplive' ),
        'id'         => 'footer-color-sub',
        'desc'       => __( 'This Section For Footer Color Section', 'deeplive' ),
        'subsection' => true,
        'fields'     => array(
            array(
				'id'       => 'footer-background-color',
				'type'     => 'color',
				'title'    => esc_html__( 'Footer Background Color', 'deeplive' ),
				'subtitle' => esc_html__( 'Background Color', 'deeplive' ),
				'desc'     => esc_html__( 'Add Your Footer Background Color', 'deeplive' ),
				'default'   => '#ffffff',
			),
			array(
				'id'       => 'footer-title-color',
				'type'     => 'color',
				'title'    => esc_html__( 'Footer Title Color', 'deeplive' ),
				'subtitle' => esc_html__( 'Title Color', 'deeplive' ),
				'desc'     => esc_html__( 'Add Your Footer Title Color', 'deeplive' ),
				'default'   => '#515151',
			),
			array(
				'id'       => 'footer-paragraph-color',
				'type'     => 'color',
				'title'    => esc_html__( 'Footer Paragraph Color', 'deeplive' ),
				'subtitle' => esc_html__( 'Paragraph Color', 'deeplive' ),
				'desc'     => esc_html__( 'Add Your Footer Paragraph Color', 'deeplive' ),
				'default'   => '#999',
			),
			array(
				'id'       => 'footer-hover-color',
				'type'     => 'color',
				'title'    => esc_html__( 'Footer Hover Color', 'deeplive' ),
				'subtitle' => esc_html__( 'Hover Color', 'deeplive' ),
				'desc'     => esc_html__( 'Add Your Footer Hover Color', 'deeplive' ),
				'default'   => '#666',
			),
        ),
    ) );
	    Redux::setSection( $opt_name, array(
        'title'      => __( 'Footer Copyright Section', 'deeplive' ),
        'id'         => 'footer-copyright-sub',
        'desc'       => __( 'This Section For Footer Copyright Section', 'deeplive' ),
        'subsection' => true,
        'fields'     => array(
            array(
				'id'       => 'footer-copyright-date',
				'type'     => 'text',
				'title'    => esc_html__( 'Site Year', 'deeplive' ),
				'subtitle' => esc_html__( 'Year', 'deeplive' ),
				'desc'     => esc_html__( 'Add Your Website Year', 'deeplive' ),
				'default'  => '2021',
			),
			array(
				'id'       => 'footer-copyright-name',
				'type'     => 'text',
				'title'    => esc_html__( 'Site Name', 'deeplive' ),
				'subtitle' => esc_html__( 'Add Site Name', 'deeplive' ),
				'desc'     => esc_html__( 'Add Your Website Name', 'deeplive' ),
				'default'  => 'jeffsbuy',
			),
			array(
				'id'       => 'footer-text-url',
				'type'     => 'text',
				'title'    => esc_html__( 'Add Link URL', 'deeplive' ),
				'subtitle' => esc_html__( 'Add Link ', 'deeplive' ),
				'desc'     => esc_html__( 'Add Your URL in this Place', 'deeplive' ),
				'validate' => 'url',
				'default'  => 'https://jeffsbuy.com',
			),
        ),
    ) );
	    Redux::setSection( $opt_name, array(
        'title'      => __( 'Footer Sorter', 'deeplive' ),
        'id'         => 'footer-shortable-sub',
        'desc'       => __( 'This Section For Shorting', 'deeplive' ),
        'subsection' => true,
        'fields'     => array(
            array(
				'id'      => 'footer-shortable',
				'type'    => 'sorter',
				'title'   => 'Footer Layout Manager',
				'desc'    => 'Organize how you want the layout to appear on the Footer',
				'compiler' => 'true',
				'options' => array(
						'enabled'  => array(
							'footer-1' => 'Footer 1',
							'footer-2' => 'Footer 2',
							'footer-3' => 'Footer 3',
						),

					),
			)
        ),
    ) );
	Redux::setSection( $opt_name, array(
        'title'      => __( 'Footer Section One', 'deeplive' ),
        'id'         => 'footer-sub-one',
        'desc'       => __( 'This Section For Footer Color Section', 'deeplive' ),
        'subsection' => true,
        'fields'     => array(
            array(
				'id'       => 'footer-left-title',
				'type'     => 'text',
				'title'    => esc_html__( 'Footer Left Title', 'deeplive' ),
				'subtitle' => esc_html__( 'Add Text for this Place', 'deeplive' ),
				'desc'     => esc_html__( 'Use for Footer Left Side Title in this place', 'deeplive' ),
				'default'  => 'Address Section',
			),
			array(
				'id'       => 'footer-left-des',
				'type'     => 'editor',
				'title'    => esc_html__( 'Footer Left Description', 'deeplive' ),
				'subtitle' => esc_html__( 'Add Text for this Place', 'deeplive' ),
				'desc'     => esc_html__( 'Use for Footer Left Side Description in this place', 'deeplive' ),
			),
        ),
    ) );
		Redux::setSection( $opt_name, array(
        'title'      => __( 'Footer Section Two', 'deeplive' ),
        'id'         => 'footer-sub-two',
        'desc'       => __( 'This Section footer Two', 'deeplive' ),
        'subsection' => true,
        'fields'     => array(
            array(
				'id'       => 'footer-center-title',
				'type'     => 'text',
				'title'    => esc_html__( 'Footer Center Title', 'deeplive' ),
				'subtitle' => esc_html__( 'Add Text for this Place', 'deeplive' ),
				'desc'     => esc_html__( 'Use for Footer Left Side Description in this place', 'deeplive' ),
				'default'  => 'About',
			),
			array(
				'id'       => 'footer-center-des',
				'type'     => 'editor',
				'title'    => esc_html__( 'Footer Center Description', 'deeplive' ),
				'subtitle' => esc_html__( 'Add Text for this Place', 'deeplive' ),
				'desc'     => esc_html__( 'Use for Footer center Side Description in this place', 'deeplive' ),
			),
        ),
    ) );
	Redux::setSection( $opt_name, array(
        'title'      => __( 'Footer Section Three', 'deeplive' ),
        'id'         => 'footer-sub-three',
        'desc'       => __( 'This Section footer Two', 'deeplive' ),
        'subsection' => true,
        'fields'     => array(
            array(
				'id'       => 'footer-right-title',
				'type'     => 'text',
				'title'    => esc_html__( 'Footer Center Title', 'deeplive' ),
				'subtitle' => esc_html__( 'Add Text for this Place', 'deeplive' ),
				'desc'     => esc_html__( 'Use for Footer right Side Title in this place', 'deeplive' ),
				'default'  => 'Pages',
			),
           
        ),
    ) );


	// -> Footer Selection End









    Redux::setSection( $opt_name, array(
        'icon'            => 'el el-list-alt',
        'title'           => __( 'Customizer Only', 'redux-framework-demo' ),
        'desc'            => __( '<p class="description">This Section should be visible only in Customizer</p>', 'redux-framework-demo' ),
        'customizer_only' => true,
        'fields'          => array(
            array(
                'id'              => 'opt-customizer-only',
                'type'            => 'select',
                'title'           => __( 'Customizer Only Option', 'redux-framework-demo' ),
                'subtitle'        => __( 'The subtitle is NOT visible in customizer', 'redux-framework-demo' ),
                'desc'            => __( 'The field desc is NOT visible in customizer.', 'redux-framework-demo' ),
                'customizer_only' => true,
                //Must provide key => value pairs for select options
                'options'         => array(
                    '1' => 'Opt 1',
                    '2' => 'Opt 2',
                    '3' => 'Opt 3'
                ),
                'default'         => '2'
            ),
        )
    ) );

   /*
     * <--- END SECTIONS
     */


    /*
     *
     * YOU MUST PREFIX THE FUNCTIONS BELOW AND ACTION FUNCTION CALLS OR ANY OTHER CONFIG MAY OVERRIDE YOUR CODE.
     *
     */

    /*
    *
    * --> Action hook examples
    *
    */

    // If Redux is running as a plugin, this will remove the demo notice and links
    //add_action( 'redux/loaded', 'remove_demo' );

    // Function to test the compiler hook and demo CSS output.
    // Above 10 is a priority, but 2 in necessary to include the dynamically generated CSS to be sent to the function.
    //add_filter('redux/options/' . $opt_name . '/compiler', 'compiler_action', 10, 3);

    // Change the arguments after they've been declared, but before the panel is created
    //add_filter('redux/options/' . $opt_name . '/args', 'change_arguments' );

    // Change the default value of a field after it's been set, but before it's been useds
    //add_filter('redux/options/' . $opt_name . '/defaults', 'change_defaults' );

    // Dynamically add a section. Can be also used to modify sections/fields
    //add_filter('redux/options/' . $opt_name . '/sections', 'dynamic_section');

    /**
     * This is a test function that will let you see when the compiler hook occurs.
     * It only runs if a field    set with compiler=>true is changed.
     * */
    if ( ! function_exists( 'compiler_action' ) ) {
        function compiler_action( $options, $css, $changed_values ) {
            echo '<h1>The compiler hook has run!</h1>';
            echo "<pre>";
            print_r( $changed_values ); // Values that have changed since the last save
            echo "</pre>";
            //print_r($options); //Option values
            //print_r($css); // Compiler selector CSS values  compiler => array( CSS SELECTORS )
        }
    }

    /**
     * Custom function for the callback validation referenced above
     * */
    if ( ! function_exists( 'redux_validate_callback_function' ) ) {
        function redux_validate_callback_function( $field, $value, $existing_value ) {
            $error   = false;
            $warning = false;

            //do your validation
            if ( $value == 1 ) {
                $error = true;
                $value = $existing_value;
            } elseif ( $value == 2 ) {
                $warning = true;
                $value   = $existing_value;
            }

            $return['value'] = $value;

            if ( $error == true ) {
                $field['msg']    = 'your custom error message';
                $return['error'] = $field;
            }

            if ( $warning == true ) {
                $field['msg']      = 'your custom warning message';
                $return['warning'] = $field;
            }

            return $return;
        }
    }

    /**
     * Custom function for the callback referenced above
     */
    if ( ! function_exists( 'redux_my_custom_field' ) ) {
        function redux_my_custom_field( $field, $value ) {
            print_r( $field );
            echo '<br/>';
            print_r( $value );
        }
    }

    /**
     * Custom function for filtering the sections array. Good for child themes to override or add to the sections.
     * Simply include this function in the child themes functions.php file.
     * NOTE: the defined constants for URLs, and directories will NOT be available at this point in a child theme,
     * so you must use get_template_directory_uri() if you want to use any of the built in icons
     * */
    if ( ! function_exists( 'dynamic_section' ) ) {
        function dynamic_section( $sections ) {
            //$sections = array();
            $sections[] = array(
                'title'  => __( 'Section via hook', 'redux-framework-demo' ),
                'desc'   => __( '<p class="description">This is a section created by adding a filter to the sections array. Can be used by child themes to add/remove sections from the options.</p>', 'redux-framework-demo' ),
                'icon'   => 'el el-paper-clip',
                // Leave this as a blank section, no options just some intro text set above.
                'fields' => array()
            );

            return $sections;
        }
    }

    /**
     * Filter hook for filtering the args. Good for child themes to override or add to the args array. Can also be used in other functions.
     * */
    if ( ! function_exists( 'change_arguments' ) ) {
        function change_arguments( $args ) {
            //$args['dev_mode'] = true;

            return $args;
        }
    }

    /**
     * Filter hook for filtering the default value of any given field. Very useful in development mode.
     * */
    if ( ! function_exists( 'change_defaults' ) ) {
        function change_defaults( $defaults ) {
            $defaults['str_replace'] = 'Testing filter hook!';

            return $defaults;
        }
    }

    /**
     * Removes the demo link and the notice of integrated demo from the redux-framework plugin
     */
    if ( ! function_exists( 'remove_demo' ) ) {
        function remove_demo() {
            // Used to hide the demo mode link from the plugin page. Only used when Redux is a plugin.
            if ( class_exists( 'ReduxFrameworkPlugin' ) ) {
                remove_filter( 'plugin_row_meta', array(
                    ReduxFrameworkPlugin::instance(),
                    'plugin_metalinks'
                ), null, 2 );

                // Used to hide the activation notice informing users of the demo panel. Only used when Redux is a plugin.
                remove_action( 'admin_notices', array( ReduxFrameworkPlugin::instance(), 'admin_notices' ) );
            }
        }
    }

