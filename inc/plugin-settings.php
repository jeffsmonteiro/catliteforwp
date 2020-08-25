<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

function catforwp_settings_page() {

  if ( current_user_can('manage_options') ) {
    
    // Create Config Array

    $config_array             = array();
    $config_array['prefix']   = 'catforwp_';
    $config_array['tabs']     = true;
    $config_array['menu']     = array(
      'page_title'            => esc_html__( 'Cool Admin Theme Lite', 'catforwp' ),
      'menu_title'            => esc_html__( 'Cool Admin Theme Lite', 'catforwp' ),
      'capability'            => 'manage_options',
      'slug'                  => 'catforwp',
      'icon'                  => 'dashicons-performance',
    //'position'              => 10,
      'submenu'               => true,
      'parent'                => 'options-general.php',
    );

    $config_array['sections'] = array(
    
      array(
        'id'    => 'emojify_section',
        'title' => esc_html__( 'Emojify Settings', 'catforwp' ),
        'desc'  => esc_html__( 'Thanks for using this plugin! Currently, Emojify offers 60 pre-configured emojis for the most popular plugins of WP.org repository. So, the major part of plugins will not display an icon on admin menu after activation. In this case, is recommended that you create a custom css to add this emoji. Over time, new emojis will be added by default.', "catforwp" ),
      ),
      array(
        'id'    => 'help_section',
        'title' => esc_html__( 'Help', 'catforwp' ),
        'desc'  => esc_html__( '', 'catforwp' )
      )
    );

    $config_array['fields']   = array(
    
      'emojify_section' => array(
        
        array(
          'id'    => 'emojify',
          'label' => esc_html__( 'Emojify Menu', 'catforwp' ),
          'desc'  => esc_html__( 'Check if you want to replace icons of the admin menu by emojis 😁', 'catforwp' ),
          'type'  => 'checkbox',
        ),
        array(
          'id'          => 'cat_custom_style',
          'label'       => esc_html__( 'Custom CSS', 'catforwp' ),
          'desc'        => esc_html__( 'Add new emojis using custom CSS code.', 'catforwp' ),
          'type'        => 'textarea',
          'default'     => 
".catforwp-emojify #menu-dashboard > a::before{
  content: '📺';
}"
        ),
        array(
          'id'    => 'bepro',
          'label' => esc_html__( 'Be a PRO!', 'catforwp' ),
          'type'  => 'html',
          'desc'  => sprintf(esc_html__( '%1$s', 'catforwp' ),'
            <div class="bepro">
              <h3>🚨 '.esc_html__( 'Get a White Label Admin with the Pro', 'catforwp' ).'</h3>
              <ul>
                <li>'.esc_html__( '- Hide the WordPress brand in the navigation bar', 'catforwp' ).'</li>
                <li>'.esc_html__('- Use your own brand on the top bar','catforwp').'</li>
                <li>'.esc_html__('- Replace the WordPress brand with your own brand on the login page','catforwp').'</li>
                <li>'.esc_html__('- Change the brand link on the login page to your homepage','catforwp').'</li>
                <li>'.esc_html__('- Change the background color of the login page','catforwp').'</li>
                <li>'.esc_html__('- Replace the WordPress brand with your brand in the edit block (Gutenberg)','catforwp').'</li>
                <li>'.esc_html__('- Add a custom favicon to the Admin Area','catforwp').'</li>
                <li>'.esc_html__('- Choose emojis for all sidebar menus using a picker','catforwp').'</li>
                <li>'.esc_html__('- Hide or replace WordPress text at the bottom of the Admin Area','catforwp').'</li>
                <li>'.esc_html__('- Hide the WordPress version text at the bottom of the Admin Area','catforwp').'</li>
                <li>'.esc_html__('- Remove non functional widgets from dashboard','catforwp').'</li>
                <li><strong>'.esc_html__('- And more ...','catforwp').' </strong></li>
              </ul>
              <h3>👉 '.esc_html__('Check it out at ','catforwp').'<a href="https://wpadmintheme.com" target="_blank">'.esc_html__('wpadmintheme.com','catforwp').'</a></h3>
            </div>
          ')
        ),
        
        // this section is generated dinamically
        // if necessary, you can add some fields here
        // they will displayed before the emoji selectors
      ),

      'help_section' => array(
        array(
          'id'    => 'question_1',
          'label' => esc_html__( "Emojify not working", "catforwp" ),
          'desc'  => esc_html__( "To enable emojify you need to check the option on Emojify Settings tab. If Emojify is already enabled, can be your OS don't have emoji characteres installed.", "catforwp" ),
          'type'  => 'html'
        ),
        array(
          'id'    => 'question_2',
          'label' => esc_html__( "Where do I customize emojis?", "catforwp" ),
          'desc'  => esc_html__( "On free version you have a default set of emojis, but only for 60 items (the most popular). If you want to customize these items or add new items (when you get new plugins not coverted by our default sytlesheet), you can use the Custom CSS field to do it.", "catforwp" ),
          'type'  => 'html'
        ),
        array(
          'id'    => 'question_3',
          'label' => esc_html__( "Can I use custom icons and emojis?", "catforwp" ),
          'desc'  => esc_html__( "Maybe. After activation of the Emojify feature, all icons are replaced by emojis. May you can use the Custom CSS field to make changes. If you know a little bit of CSS you will do it.", "catforwp" ),
          'type'  => 'html'
        ),
        array(
          'id'    => 'question_4',
          'label' => esc_html__( "Emojis that I set in the Custom CSS are not displayed", "catforwp" ),
          'desc'  => esc_html__( "Try to clear browser cache and refresh the page. If you are using some cache plugin like Total Cache, try to refresh the cache.", "catforwp" ),
          'type'  => 'html'
        ),
        array(
          'id'    => 'question_6',
          'label' => esc_html__( "Some emojis don't appear in the menu", "catforwp" ),
          'desc'  => esc_html__( "Our plugin cover the 60 most populars in WordPress Plugin Repository, maybe the plugin that you are using are not covered. So, try to add the emoji using the Custom CSS field.", "catforwp" ),
          'type'  => 'html'
        ),
        array(
          'id'    => 'question_7',
          'label' => esc_html__( "Have a bug?", "catforwp" ),
          'desc'  => sprintf( esc_html__( 'Open an issue on %1$s', 'catforwp' ), '<a href="https://github.com/jeffsmonteiro/emojify-white-label-admin-theme/issues/" target="_blank">'.esc_html__('Git Hub Repository', 'catforwp').'</a>'),
          'type'  => 'html'
        ),
      )
    );

    $config_array['links']    = array(
      'plugin_basename' => plugin_basename( __FILE__ ),
      'action_links'    => array(
        array(
          'type' => 'default',
          'text' => esc_html__( 'Settings', 'catforwp' ),
        ),
      ),
    );

    // Pass Config Array to Class Constructor
    $settings_helper = new Boo_Settings_Helper( $config_array );
  }
}

add_action( 'admin_menu', 'catforwp_settings_page', 999);