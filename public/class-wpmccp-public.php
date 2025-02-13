<?php

/**
 * The public-facing functionality of the plugin.
 *
 * @link       https://www.paypal.me/dorelljames
 * @since      1.0.0
 *
 * @package    WPMCCP
 * @subpackage WPMCCP/public
 */

/**
 * The public-facing functionality of the plugin.
 *
 * Defines the plugin name, version, and two examples hooks for how to
 * enqueue the public-facing stylesheet and JavaScript.
 *
 * @package    WPMCCP
 * @subpackage WPMCCP/public
 * @author     Dorell James Galang <galangdj@gmail.com>
 */
class WPMCCP_Public {

	/**
	 * The ID of this plugin.
	 *
	 * @since    1.0.0
	 * @access   private
	 * @var      string    $plugin_name    The ID of this plugin.
	 */
	private $plugin_name;

	/**
	 * The version of this plugin.
	 *
	 * @since    1.0.0
	 * @access   private
	 * @var      string    $version    The current version of this plugin.
	 */
	private $version;

	/**
	 * Initialize the class and set its properties.
	 *
	 * @since    1.0.0
	 * @param      string    $plugin_name       The name of the plugin.
	 * @param      string    $version    The version of this plugin.
	 */
	public function __construct( $plugin_name, $version ) {

		$this->plugin_name = $plugin_name;
		$this->version = $version;
		$this->WPMCCP_options = get_option($this->plugin_name);

	}

	/**
	 * Messenger chat required div
	 */
    public function wpmccp_messenger_chat() {
		$currentPost = get_post();

		// Get current ref PREFIX to use together with all ref when it exists
		$currentRefPrefix = isset($this->WPMCCP_options['ref_prefix']) && ! empty($this->WPMCCP_options['ref_prefix']) ? $this->WPMCCP_options['ref_prefix'] : null;

		// If ref for current post is set, use it else fallback to post name slug
		$currentRef = isset($this->WPMCCP_options['ref']) && ! empty($this->WPMCCP_options['ref'][$currentPost->ID]) ? $currentRefPrefix . $this->WPMCCP_options['ref'][$currentPost->ID] : $currentRefPrefix . $currentPost->post_name;

		// If global ref override is set, then use it else fallback to last value
		$currentRef = isset($this->WPMCCP_options['ref_override']) && ! empty($this->WPMCCP_options['ref_override']) ? $this->WPMCCP_options['ref_override'] : $currentRef;

		$facebook_page_id = isset($this->WPMCCP_options['facebook_page_id']) ? $this->WPMCCP_options['facebook_page_id'] : null;
		$is_minimized = ! isset($this->WPMCCP_options['is_minimized']) ? false : $this->WPMCCP_options['is_minimized'];
		$is_minimized_str = $is_minimized ? 'true' : 'false';

		$fb_sdk_locale_language = isset($this->WPMCCP_options['fb_sdk_locale_language']) && ! empty($this->WPMCCP_options['fb_sdk_locale_language']) ? $this->WPMCCP_options['fb_sdk_locale_language'] : get_locale();

		$fb_attr_theme_color = isset($this->WPMCCP_options['theme_color']) && ! is_null($this->WPMCCP_options['theme_color']) ? 'theme_color="' . $this->WPMCCP_options['theme_color'] . '"' : "";

		$fb_attr_theme_color = isset($this->WPMCCP_options['theme_color']) && ! is_null($this->WPMCCP_options['theme_color']) ? 'theme_color="' . $this->WPMCCP_options['theme_color'] . '"' : "";
		$fb_attr_logged_in_greeting = isset($this->WPMCCP_options['logged_in_greeting']) && ! is_null($this->WPMCCP_options['logged_in_greeting']) ? 'logged_in_greeting="' . $this->WPMCCP_options['logged_in_greeting'] . '"' : "";
		$fb_attr_logged_out_greeting = isset($this->WPMCCP_options['logged_out_greeting']) && ! is_null($this->WPMCCP_options['logged_out_greeting']) ? 'logged_out_greeting="' . $this->WPMCCP_options['logged_out_greeting'] . '"' : "";
		$fb_attr_greeting_dialog_display = isset($this->WPMCCP_options['greeting_dialog_display']) && ! is_null($this->WPMCCP_options['greeting_dialog_display']) ? 'greeting_dialog_display="' . $this->WPMCCP_options['greeting_dialog_display'] . '"' : "";
		$fb_attr_greeting_dialog_delay = isset($this->WPMCCP_options['greeting_dialog_delay']) && ! is_null($this->WPMCCP_options['greeting_dialog_delay']) ? 'greeting_dialog_delay="' . $this->WPMCCP_options['greeting_dialog_delay'] . '"' : "";

        echo '<div class="fb-customerchat" page_id="' . $facebook_page_id . '" ref="' . $currentRef . '" minimized="' . $is_minimized_str . '"' . $fb_attr_theme_color . $fb_attr_logged_in_greeting . $fb_attr_logged_out_greeting . $fb_attr_greeting_dialog_display . $fb_attr_greeting_dialog_delay . '></div>';
    }

	/**
	 * Facebook SDK to initialize
	 */
    public function wpmccp_fb_sdk() {
		$facebook_app_id = isset($this->WPMCCP_options['custom_fb_sdk_app_id']) && ! empty($this->WPMCCP_options['custom_fb_sdk_app_id']) ? $this->WPMCCP_options['custom_fb_sdk_app_id'] : 1678638095724206;
		$fb_sdk_locale_language = isset($this->WPMCCP_options['fb_sdk_locale_language']) && ! empty($this->WPMCCP_options['fb_sdk_locale_language']) ? $this->WPMCCP_options['fb_sdk_locale_language'] : get_locale();

		echo '<div class="fb-locale" data-lang="' . $fb_sdk_locale_language . '"></div>';
		echo '<script>window.fbAsyncInit=function(){FB.init({appId : "' . $facebook_app_id . '", autoLogAppEvents : true, xfbml : true, version : "v2.11"});}; (function(d, s, id){var js, fjs=d.getElementsByTagName(s)[0]; if (d.getElementById(id)){return;}js=d.createElement(s); js.id=id; js.src="https://connect.facebook.net/' . $fb_sdk_locale_language . '/sdk/xfbml.customerchat.js"; fjs.parentNode.insertBefore(js, fjs);}(document, "script", "facebook-jssdk"));</script>';
    }

	/**
	 * Register the stylesheets for the public-facing side of the site.
	 *
	 * @since    1.0.0
	 */
	public function wpmccp_enqueue_styles() {

		/**
		 * This function is provided for demonstration purposes only.
		 *
		 * An instance of this class should be passed to the run() function
		 * defined in WPMCCP_Loader as all of the hooks are defined
		 * in that particular class.
		 *
		 * The WPMCCP_Loader will then create the relationship
		 * between the defined hooks and the functions defined in this
		 * class.
		 */

		wp_enqueue_style( $this->plugin_name, plugin_dir_url( __FILE__ ) . 'css/wpmccp-public.css', array(), $this->version, 'all' );

	}

	/**
	 * Register the JavaScript for the public-facing side of the site.
	 *
	 * @since    1.0.0
	 */
	public function wpmccp_enqueue_scripts() {

		/**
		 * This function is provided for demonstration purposes only.
		 *
		 * An instance of this class should be passed to the run() function
		 * defined in WPMCCP_Loader as all of the hooks are defined
		 * in that particular class.
		 *
		 * The WPMCCP_Loader will then create the relationship
		 * between the defined hooks and the functions defined in this
		 * class.
		 */

		wp_enqueue_script( $this->plugin_name, plugin_dir_url( __FILE__ ) . 'js/wpmccp-public.js', array( 'jquery' ), $this->version, false );

	}

}
