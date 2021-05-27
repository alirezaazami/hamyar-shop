<?php
/**
 * ReduxFramework Sample Config File
 * For full documentation, please visit: http://devs.redux.io/
 *
 * @package Redux Framework
 */

defined( 'ABSPATH' ) || exit;

if ( ! class_exists( 'Redux' ) ) {
    return;
}

// This is your option name where all the Redux data is stored.
$opt_name = 'hamyar_shop_'.get_locale();  // YOU MUST CHANGE THIS.  DO NOT USE 'redux_demo' IN YOUR PROJECT!!!

// Uncomment to disable demo mode.
/* Redux::disable_demo(); */  // phpcs:ignore Squiz.PHP.CommentedOutCode

$dir = dirname( __FILE__ ) . '/';

// Used to execept HTML tags in description arguments where esc_html would remove.
$kses_exceptions = array(
    'a'      => array(
        'href' => array(),
    ),
    'strong' => array(),
    'br'     => array(),
    'code'   => array(),
);

/*
 * ---> BEGIN ARGUMENTS
 */

/**
 * All the possible arguments for Redux.
 * For full documentation on arguments, please refer to: https://devs.redux.io/core/arguments/
 */
$theme = wp_get_theme(); // For use with some settings. Not necessary.

// TYPICAL -> Change these values as you need/desire.
$args = array(
    // This is where your data is stored in the database and also becomes your global variable name.
    'opt_name'                  => $opt_name,

    // Name that appears at the top of your panel.
    'display_name'              => $theme->get( 'Name' ),

    // Version that appears at the top of your panel.
    'display_version'           => $theme->get( 'Version' ),

    // Specify if the admin menu should appear or not. Options: menu or submenu (Under appearance only).
    'menu_type'                 => 'menu',

    // Show the sections below the admin menu item or not.
    'allow_sub_menu'            => true,

    // The text to appear in the admin menu.
    'menu_title'                => esc_html__( 'hamyar Options', 'your-textdomain-here' ),

    // The text to appear on the page title.
    'page_title'                => esc_html__( 'hamyar Options', 'your-textdomain-here' ),

    // Enabled the Webfonts typography module to use asynchronous fonts.
    'async_typography'          => false,

    // Disable to create your own google fonts loader.
    'disable_google_fonts_link' => false,

    // Show the panel pages on the admin bar.
    'admin_bar'                 => true,

    // Icon for the admin bar menu.
    'admin_bar_icon'            => 'dashicons-portfolio',

    // Priority for the admin bar menu.
    'admin_bar_priority'        => 50,

    // Sets a different name for your global variable other than the opt_name.
    'global_variable'           => '',

    // Show the time the page took to load, etc (forced on while on localhost or when WP_DEBUG is enabled).
    'dev_mode'                  => false,

    // Enable basic customizer support.
    'customizer'                => true,

    // Allow the panel to opened expanded.
    'open_expanded'             => false,

    // Disable the save warning when a user changes a field.
    'disable_save_warn'         => false,

    // Order where the menu appears in the admin area. If there is any conflict, something will not show. Warning.
    'page_priority'             => null,

    // For a full list of options, visit: http://codex.wordpress.org/Function_Reference/add_submenu_page#Parameters.
    'page_parent'               => 'themes.php',

    // Permissions needed to access the options panel.
    'page_permissions'          => 'manage_options',

    // Specify a custom URL to an icon.
    'menu_icon'                 => '',

    // Force your panel to always open to a specific tab (by id).
    'last_tab'                  => '',

    // Icon displayed in the admin panel next to your menu_title.
    'page_icon'                 => 'icon-themes',

    // Page slug used to denote the panel, will be based off page title, then menu title, then opt_name if not provided.
    'page_slug'                 => $opt_name,

    // On load save the defaults to DB before user clicks save.
    'save_defaults'             => true,

    // Display the default value next to each field when not set to the default value.
    'default_show'              => false,

    // What to print by the field's title if the value shown is default.
    'default_mark'              => '*',

    // Shows the Import/Export panel when not used as a field.
    'show_import_export'        => true,

    // The time transinets will expire when the 'database' arg is set.
    'transient_time'            => 60 * MINUTE_IN_SECONDS,

    // Global shut-off for dynamic CSS output by the framework. Will also disable google fonts output.
    'output'                    => true,

    // Allows dynamic CSS to be generated for customizer and google fonts,
    // but stops the dynamic CSS from going to the page head.
    'output_tag'                => true,

    // Disable the footer credit of Redux. Please leave if you can help it.
    'footer_credit'             => '',

    // If you prefer not to use the CDN for ACE Editor.
    // You may download the Redux Vendor Support plugin to run locally or embed it in your code.
    'use_cdn'                   => true,

    // Set the theme of the option panel.  Use 'wp' to use a more modern style, default is classic.
    'admin_theme'               => 'wp',

    // HINTS.
    'hints'                     => array(
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
    ),

    // FUTURE -> Not in use yet, but reserved or partially implemented. Use at your own risk.
    // possible: options, theme_mods, theme_mods_expanded, transient. Not fully functional, warning!
    'database'                  => '',
    'network_admin'             => true,
);

Redux::set_args( $opt_name, $args );

/*
 * ---> END ARGUMENTS
 */

/*
 * ---> START HELP TABS
 */
$help_tabs = array(
    array(
        'id'      => 'redux-help-tab-1',
        'title'   => esc_html__( 'Theme Information 1', 'your-textdomain-here' ),
        'content' => '<p>' . esc_html__( 'This is the tab content, HTML is allowed.', 'your-textdomain-here' ) . '</p>',
    ),
    array(
        'id'      => 'redux-help-tab-2',
        'title'   => esc_html__( 'Theme Information 2', 'your-textdomain-here' ),
        'content' => '<p>' . esc_html__( 'This is the tab content, HTML is allowed.', 'your-textdomain-here' ) . '</p>',
    ),
);
Redux::set_help_tab( $opt_name, $help_tabs );

// Set the help sidebar.
$content = '<p>' . esc_html__( 'This is the sidebar content, HTML is allowed.', 'your-textdomain-here' ) . '</p>';

Redux::set_help_sidebar( $opt_name, $content );

/*
 * <--- END HELP TABS
 */

// -> START Basic Fields
Redux::set_section(
    $opt_name,
    array(
        'title'            => esc_html__( 'general', 'hamyar' ),
        'id'               => 'general',
        'customizer_width' => '400px',
        'icon'             => 'el el-home',
        'fields'    =>array(
            array(
                'id'         => 'logo',
                'type'       => 'media',
                'title'      => esc_html__( 'select your logo', 'hamyar' ),
                'full_width' => true,

                // Can be set to false to allow any media type, or can also be set to any mime type.
                'mode'       => false,
            ),
        )
    )
);


Redux::set_section(
    $opt_name,
    array(
        'title'            => esc_html__( 'footer item', 'hamyar' ),
        'id'               => 'footer',
        'customizer_width' => '400px',
        'icon'             => 'el el-home',
        'fields'=>array(
            array(
                'id'      => 'footer-text',
                'type'    => 'editor',
                'title'   => esc_html__( 'add your footer text', 'hamyar' ),
                'full_width' => true,
                'args'    => array(
                    'wpautop'       => false,
                    'media_buttons' => false,
                    'textarea_rows' => 10,
                    'teeny'         => false,
                    'quicktags'     => false,
                ),
            ),
            array(
                'id'   => 'divider-1',
                'type' => 'divide',
            ),
            array(
                'id'       => 'footer-multi-text',
                'type'     => 'multi_text',
                'title'    => esc_html__( 'add footer sub text', 'hamyar' ),
                'desc'     => esc_html__( 'this items is show under top text', 'hamyar' ),
            ),
            array(
                'id'   => 'divide-2',
                'type' => 'divide',
            ),
            array(
                'id'       => 'enable-instagram',
                'type'     => 'switch',
                'title'    => esc_html__( 'enable instagram', 'hamyar' ),
                'subtitle' => wp_kses_post( __( 'Click <code>On</code> to show instagram on footer', 'hamyar' ) ),
                'default'  => false,
            ),
            array(
                'id'       => 'intagram-url',
                'type'     => 'text',
                'title'    => esc_html__( 'instagram address', 'hamyar' ),
                'required' => array( 'enable-instagram', '=', true ),
            ),
            array(
                'id'       => 'intagram-text',
                'type'     => 'text',
                'title'    => esc_html__( 'instagram text', 'hamyar' ),
                'required' => array( 'enable-instagram', '=', true ),
            ),
            array(
                'id'   => 'divide-3',
                'type' => 'divide',
            ),
            array(
                'id'       => 'enable-telegram',
                'type'     => 'switch',
                'title'    => esc_html__( 'enable telegram', 'hamyar' ),
                'subtitle' => wp_kses_post( __( 'Click <code>On</code> to show telegram on footer', 'hamyar' ) ),
                'default'  => false,
            ),
            array(
                'id'       => 'telegram-url',
                'type'     => 'text',
                'title'    => esc_html__( 'telegram address', 'hamyar' ),
                'required' => array( 'enable-telegram', '=', true ),
            ),
            array(
                'id'       => 'telegram-text',
                'type'     => 'text',
                'title'    => esc_html__( 'telegram text', 'hamyar' ),
                'required' => array( 'enable-telegram', '=', true ),
            ),
            array(
                'id'   => 'divide-4',
                'type' => 'divide',
            ),
            array(
                'id'       => 'enable-whatsapp',
                'type'     => 'switch',
                'title'    => esc_html__( 'enable whatsapp', 'hamyar' ),
                'subtitle' => wp_kses_post( __( 'Click <code>On</code> to show whatsapp on footer', 'hamyar' ) ),
                'default'  => false,
            ),
            array(
                'id'       => 'whatsapp-url',
                'type'     => 'text',
                'title'    => esc_html__( 'whatsapp address', 'hamyar' ),
                'required' => array( 'enable-whatsapp', '=', true ),
            ),
            array(
                'id'       => 'whatsapp-text',
                'type'     => 'text',
                'title'    => esc_html__( 'whatsapp text', 'hamyar' ),
                'required' => array( 'enable-whatsapp', '=', true ),
            ),
            array(
                'id'   => 'divide-4',
                'type' => 'divide',
            ),
        )
    )
);


function hamyar_shop_get_option($name,$default=null){
    $option=get_option('hamyar_shop_'.get_locale());
    $value= (isset($option[$name]) && !empty($option[$name]))? $option[$name] : $default;
    return $value;
}