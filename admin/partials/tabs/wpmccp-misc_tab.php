<!-- main content -->
<div id="post-body-content">
	<form method="post" action="options.php">

		<?php
	        //Grab all options
	        $options = get_option($this->plugin_name);
	    ?>

	    <?php
	        settings_fields($this->plugin_name);
	        do_settings_sections($this->plugin_name);
	    ?>

	    <div class="notice notice-info inline">
	    	<p>Miscellaneous settings.</p>
	    </div>

	    <div class="meta-box-sortables ui-sortable">

			<div class="postbox">

				<h2><span><?php esc_attr_e( 'Ref Global Override', 'WpAdminStyle' ); ?></span></h2>

				<div class="inside">

					<h4>What's This For?</h4>
					<div class="notice notice-info inline">
				    	<p>The plugin detects the current slug of the post, page, or of any custom post type and uses that as for the ref attribute. You can see how this is set in <strong>Options</strong> tab > <strong>Ref Attribute</strong> section. Should you wish to unify and say I want just to set it as <code>website</code> then this is where you do it.</p>
					</div>

				    <input type="text" placeholder="Any string to override default ref" class="regular-text" id="<?php echo $this->plugin_name; ?>-ref_override" name="<?php echo $this->plugin_name; ?>[ref_override]" value="<?php if(!empty($options['ref_override'])) echo $options['ref_override']; ?>"/>
                    <span class="description"><?php esc_attr_e( 'Enter any string to override all ref parameters.', 'WpAdminStyle' ); ?></span><br>
					
				</div>
				<!-- .inside -->

			</div>
			<!-- .postbox -->

		</div>

	    <div class="meta-box-sortables ui-sortable">

			<div class="postbox">

				<h2><span><?php esc_attr_e( 'Ref PREFIX', 'WpAdminStyle' ); ?></span></h2>

				<div class="inside">

					<?php if ( ! empty($options['ref_override']) ) : ?>

						<div class="notice notice-warning inline">
					    	<h3>The current ref attribute prefixing feature below are disabled due to setting the <strong>Ref Global Override</strong>.</h3>
					    </div>

					<?php else: ?>

						<h4>What's This For?</h4>
						<div class="notice notice-info inline">
					    	<p>Prefix all your custom <code>ref</code> attributes. As an example you could put your domain to create full pledged URL together with the <code>ref</code> set or generated automatically by this plugin.</p>
						</div>

					    <input type="text" placeholder="https://example.com or MY_CUSTOM_PREFIX_" class="regular-text" id="<?php echo $this->plugin_name; ?>-ref_prefix" name="<?php echo $this->plugin_name; ?>[ref_prefix]" value="<?php if(!empty($options['ref_prefix'])) echo $options['ref_prefix']; ?>"/>
	                    <span class="description"><?php esc_attr_e( 'Enter PREFIX to use on all ref parameters.', 'WpAdminStyle' ); ?></span><br>

	                <?php endif; ?>
					
				</div>
				<!-- .inside -->

			</div>
			<!-- .postbox -->

		</div>

		<div class="meta-box-sortables ui-sortable">

			<div class="postbox">

				<h2><span><?php esc_attr_e( 'Locale and Language ', 'WpAdminStyle' ); ?></span></h2>

				<div class="inside">

					<h4>What's This For?</h4>
					<div class="notice notice-info inline">
						<p>Show and customize the plugin on your current locale and language. By default, this is set using your site's locale.</p>
					</div>

					<?php
						$languages = array(
							'af_ZA' => 'Afrikaans',
							'ar_AR' => 'Arabic',
							'az_AZ' => 'Azerbaijani',
							'be_BY' => 'Belarusian',
							'bg_BG' => 'Bulgarian',
							'bn_IN' => 'Bengali',
							'bs_BA' => 'Bosnian',
							'ca_ES' => 'Catalan',
							'cs_CZ' => 'Czech',
							'cy_GB' => 'Welsh',
							'da_DK' => 'Danish',
							'de_DE' => 'German',
							'el_GR' => 'Greek',
							'en_GB' => 'English (UK)',
							'en_PI' => 'English (Pirate)',
							'en_UD' => 'English (Upside Down)',
							'en_US' => 'English (US)',
							'eo_EO' => 'Esperanto',
							'es_ES' => 'Spanish (Spain)',
							'es_LA' => 'Spanish',
							'et_EE' => 'Estonian',
							'eu_ES' => 'Basque',
							'fa_IR' => 'Persian',
							'fb_LT' => 'Leet Speak',
							'fi_FI' => 'Finnish',
							'fo_FO' => 'Faroese',
							'fr_CA' => 'French (Canada)',
							'fr_FR' => 'French (France)',
							'fy_NL' => 'Frisian',
							'ga_IE' => 'Irish',
							'gl_ES' => 'Galician',
							'he_IL' => 'Hebrew',
							'hi_IN' => 'Hindi',
							'hr_HR' => 'Croatian',
							'hu_HU' => 'Hungarian',
							'hy_AM' => 'Armenian',
							'id_ID' => 'Indonesian',
							'is_IS' => 'Icelandic',
							'it_IT' => 'Italian',
							'ja_JP' => 'Japanese',
							'ka_GE' => 'Georgian',
							'km_KH' => 'Khmer',
							'ko_KR' => 'Korean',
							'ku_TR' => 'Kurdish',
							'la_VA' => 'Latin',
							'lt_LT' => 'Lithuanian',
							'lv_LV' => 'Latvian',
							'mk_MK' => 'Macedonian',
							'ml_IN' => 'Malayalam',
							'ms_MY' => 'Malay',
							'nb_NO' => 'Norwegian (bokmal)',
							'ne_NP' => 'Nepali',
							'nl_NL' => 'Dutch',
							'nn_NO' => 'Norwegian (nynorsk)',
							'pa_IN' => 'Punjabi',
							'pl_PL' => 'Polish',
							'ps_AF' => 'Pashto',
							'pt_BR' => 'Portuguese (Brazil)',
							'pt_PT' => 'Portuguese (Portugal)',
							'ro_RO' => 'Romanian',
							'ru_RU' => 'Russian',
							'sk_SK' => 'Slovak',
							'sl_SI' => 'Slovenian',
							'sq_AL' => 'Albanian',
							'sr_RS' => 'Serbian',
							'sv_SE' => 'Swedish',
							'sw_KE' => 'Swahili',
							'ta_IN' => 'Tamil',
							'te_IN' => 'Telugu',
							'th_TH' => 'Thai',
							'tl_PH' => 'Filipino',
							'tr_TR' => 'Turkish',
							'uk_UA' => 'Ukrainian',
							'vi_VN' => 'Vietnamese',
							'zh_CN' => 'Simplified Chinese (China)',
							'zh_HK' => 'Traditional Chinese (Hong Kong)',
							'zh_TW' => 'Traditional Chinese (Taiwan)',
						);
						$current_language = isset($options['fb_sdk_locale_language']) ? $options['fb_sdk_locale_language'] : get_locale();
					?>

					<select id="<?php echo $this->plugin_name; ?>-fb_sdk_locale_language" name="<?php echo $this->plugin_name; ?>[fb_sdk_locale_language]">
						<?php foreach($languages as $language_key => $language): ?>

						<option <?php echo $current_language === $language_key ? 'selected="selected"' : '' ?> value="<?php echo $language_key; ?>">
							<?php echo $language; ?>
						</option>

						<?php endforeach; ?>
					</select>
                    <span class="description"><?php esc_attr_e( 'Default is your site\'s locale: ' . get_locale(), 'WpAdminStyle' ); ?></span><br>

				</div>
				<!-- .inside -->

			</div>
			<!-- .postbox -->

		</div>

		<div class="meta-box-sortables ui-sortable">

			<div class="postbox">

				<h2><span><?php esc_attr_e( 'Enable/Disable Facebook SDK', 'WpAdminStyle' ); ?></span></h2>

				<div class="inside">

					<h4>What's This For?</h4>
					<div class="notice notice-info inline">
						<p><?php printf( esc_attr__( 'To get you started immediately with less configuration, we included %s by default. This section allows you to disable it if in case you already have the SDK available in your site and use just that.', 'WpAdminStyle' ), '<strong>Facebook SDK</strong>' ); ?></p>
					</div>

					<h4>What The Plugin Does</h4>
					<div class="notice notice-info inline">
						<p>The plugin included <strong>Facebook SDK</strong> by default to get you started without having to worry about configuring this.</p>
					</div>

					<select id="<?php echo $this->plugin_name; ?>-is_fb_sdk_enabled" name="<?php echo $this->plugin_name; ?>[is_fb_sdk_enabled]">
						<option <?php echo isset($options["is_fb_sdk_enabled"]) && $options["is_fb_sdk_enabled"] ? 'selected="selected"' : '' ?>  value="1">ENABLED (DEFAULT) - Use plugin's Facebook SDK</option>
						<option <?php echo isset($options["is_fb_sdk_enabled"]) && ! $options["is_fb_sdk_enabled"] ? 'selected="selected"' : '' ?> value="0">DISABLED - Disable plugin's Facebook SDK and use my own</option>
					</select>
                    <span class="description"><?php esc_attr_e( 'Default is ENABLED.', 'WpAdminStyle' ); ?></span><br>
				</div>
				<!-- .inside -->

			</div>
			<!-- .postbox -->

		</div>

		<div class="meta-box-sortables ui-sortable">

			<div class="postbox">

				<h2><span><?php esc_attr_e( 'Change Placement of Facebook SDK', 'WpAdminStyle' ); ?></span></h2>

				<div class="inside">

					<h4>What's This For?</h4>
					<div class="notice notice-info inline">
						<p><?php printf( esc_attr__( 'Oddly, there are sites to which this plugin worked because the Facebook SDK has been put in the header. And there\'s some as well who works well on footer. Try to change this to see if it helps to make this plugin work consistently on your site.', 'WpAdminStyle' ), '<strong>Facebook SDK</strong>' ); ?></p>
					</div>

					<h4>What The Plugin Does</h4>
					<div class="notice notice-info inline">
						<p>The plugin included <strong>Facebook SDK</strong> by default is included in the header.</p>
					</div>
					<br />

					<select id="<?php echo $this->plugin_name; ?>-is_fb_sdk_at_header" name="<?php echo $this->plugin_name; ?>[is_fb_sdk_at_header]">
						<option <?php echo isset($options["is_fb_sdk_at_header"]) && $options["is_fb_sdk_at_header"] ? 'selected="selected"' : '' ?>  value="1">HEADER (DEFAULT) - Include Facebook SDK at header</option>
						<option <?php echo isset($options["is_fb_sdk_at_header"]) && ! $options["is_fb_sdk_at_header"] ? 'selected="selected"' : '' ?> value="0">FOOTER - Include Facebook SDK at footer</option>
					</select>
                    <span class="description"><?php esc_attr_e( 'Default is HEADER.', 'WpAdminStyle' ); ?></span><br>
				</div>
				<!-- .inside -->

			</div>
			<!-- .postbox -->

		</div>


		<div class="meta-box-sortables ui-sortable">

			<div class="postbox">

				<h2><span><?php esc_attr_e( 'Custom App ID For Facebook SDK', 'WpAdminStyle' ); ?></span></h2>

				<div class="inside">

					<h4>What's This For?</h4>
					<div class="notice notice-info inline">
				    	<p>You may want to use your own Facebook APP ID when initializing FB SDK.</p>
					</div>

					<h4>What This Plugin Does</h4>
					<div class="notice notice-info inline">
				    	<p>This plugin uses <code>1678638095724206</code> by default with all needed configuration to set this messenger customer chat plugin to work.</p>
					</div>

				    <input type="number" placeholder="1678638095724206" class="regular-text" id="<?php echo $this->plugin_name; ?>-custom_fb_sdk_app_id" name="<?php echo $this->plugin_name; ?>[custom_fb_sdk_app_id]" value="<?php if(!empty($options['custom_fb_sdk_app_id'])) echo $options['custom_fb_sdk_app_id']; ?>"/>
                    <span class="description"><?php esc_attr_e( 'Enter Facebook APP ID to use.', 'WpAdminStyle' ); ?></span><br>
					
				</div>
				<!-- .inside -->

			</div>
			<!-- .postbox -->

		</div>

		<?php submit_button('Save changes', 'primary','submit', TRUE); ?>

	</form>
</div>
