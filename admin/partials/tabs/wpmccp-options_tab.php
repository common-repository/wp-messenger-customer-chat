<div id="post-body-content">

	

	<form method="post" action="options.php">

		<?php
			// Grab all options
			$options = get_option($this->plugin_name);
			// echo "<pre>";
			// var_dump($options);
			// echo "</pre>";
	    settings_fields($this->plugin_name);
	    do_settings_sections($this->plugin_name);
	  ?>

		<!-- Theme Color -->
		<div class="meta-box-sortables ui-sortable">
			<div class="postbox">

				<h2><span><?php esc_attr_e( 'Theme Color (Optional)', 'WpAdminStyle' ); ?></span></h2>

				<div class="inside">

					<h4>What's This For?</h4>
					<div class="notice notice-info inline">
						<p><?php printf( esc_attr__( 'The %s attribute specifies the color to use as a theme for the plugin, including the background color of the customer chat plugin icon and the background color of any messages sent by users. Supports any hexidecimal color code with a leading number sign (e.g. #0084FF), except white. We highly recommend you choose a color that has a high contrast to white.', 'WpAdminStyle' ), '<code>theme_color</code>' ); ?></p>
					</div>

					<h4>What The Plugin Does</h4>
					<div class="notice notice-info inline">
						<p>The plugin automatically leaves this out for this is an optional attribute. The plugin will then use the value specified when saved.</p>
					</div>

					<img src="https://dorelljames.com/wp-content/uploads/2018/06/theme-color.png" />
					<br />
					<br />

					<input type="text" placeholder="Enter color or the hex color value with the #" class="regular-text" id="<?php echo $this->plugin_name; ?>-theme_color" name="<?php echo $this->plugin_name; ?>[theme_color]" value="<?php if(!empty($options['theme_color'])) echo $options['theme_color']; ?>"/>
          <span class="description"><?php esc_attr_e( 'Default is blank.', 'WpAdminStyle' ); ?></span><br>

			    <?php submit_button('Save changes', 'primary','submit', TRUE); ?>
				</div>
				<!-- .inside -->

			</div>
			<!-- .postbox -->
		</div>
		<!-- End -->

		<!-- Logged In Greeting -->
		<div class="meta-box-sortables ui-sortable">

			<div class="postbox">

				<h2><span><?php esc_attr_e( 'Logged In Greeting (Optional)', 'WpAdminStyle' ); ?></span></h2>

				<div class="inside">

					<h4>What's This For?</h4>
					<div class="notice notice-info inline">
						<p><?php printf( esc_attr__( 'The %s attribute specifies the greeting text that will be displayed if the user is currently logged in to Facebook. Maximum 80 characters.', 'WpAdminStyle' ), '<code>logged_in_greeting</code>' ); ?></p>
					</div>

					<h4>What The Plugin Does</h4>
					<div class="notice notice-info inline">
						<p>The plugin automatically leaves this out for this is an optional attribute. The plugin will then use the value specified when saved.</p>
					</div>
					<h4>Sample:</h4>
					<img src="https://dorelljames.com/wp-content/uploads/2018/06/hello-greeting-e1529566623602.png" class="img-responsive" />
					<br />
					<br />

					<textarea rows="3" maxlength="80" placeholder="Enter your welcome greeting here for logged in users..." class="large-text" id="<?php echo $this->plugin_name; ?>-logged_in_greeting" name="<?php echo $this->plugin_name; ?>[logged_in_greeting]"><?php if(!empty($options['logged_in_greeting'])) echo $options['logged_in_greeting']; ?></textarea><br />
          <span class="description"><?php esc_attr_e( 'Default is blank.', 'WpAdminStyle' ); ?></span><br>

			    <?php submit_button('Save changes', 'primary','submit', TRUE); ?>
				</div>
				<!-- .inside -->

			</div>
			<!-- .postbox -->

		</div>
		<!-- End -->

		<!-- Logged Out Greeting -->
		<div class="meta-box-sortables ui-sortable">
			<div class="postbox">

				<h2><span><?php esc_attr_e( 'Logged Out Greeting (Optional)', 'WpAdminStyle' ); ?></span></h2>

				<div class="inside">

					<h4>What's This For?</h4>
					<div class="notice notice-info inline">
						<p><?php printf( esc_attr__( 'The %s attribute specifies the greeting text that will be displayed if the user is currently not logged in to Facebook. Maximum 80 characters.', 'WpAdminStyle' ), '<code>logged_out_greeting</code>' ); ?></p>
					</div>

					<h4>What The Plugin Does</h4>
					<div class="notice notice-info inline">
						<p>The plugin automatically leaves this out for this is an optional attribute. The plugin will then use the value specified when saved.</p>
					</div>
					<h4>Sample: </h4>
					<img src="https://dorelljames.com/wp-content/uploads/2018/06/bye-greeting-e1529566695583.png" class="img-responsive" />
					<br />
					<br />

					<textarea rows="3" maxlength="80" placeholder="Enter your welcome greeting here for logged in users..." class="large-text" id="<?php echo $this->plugin_name; ?>-logged_out_greeting" name="<?php echo $this->plugin_name; ?>[logged_out_greeting]"><?php if(!empty($options['logged_out_greeting'])) echo $options['logged_out_greeting']; ?></textarea><br />
          <span class="description"><?php esc_attr_e( 'Default is blank.', 'WpAdminStyle' ); ?></span><br>

			    <?php submit_button('Save changes', 'primary','submit', TRUE); ?>
				</div>
				<!-- .inside -->

			</div>
			<!-- .postbox -->
		</div>
		<!-- End -->

		<!-- Greeting Dialog Display -->
		<div class="meta-box-sortables ui-sortable">
			<div class="postbox">

				<h2><span><?php esc_attr_e( 'Greeting Dialog Display (Optional)', 'WpAdminStyle' ); ?></span></h2>

				<div class="inside">

					<h4>What's This For?</h4>
					<div class="notice notice-info inline">
						<p><?php printf( esc_attr__( 'The %s attribute sets how the greeting dialog will be displayed.', 'WpAdminStyle' ), '<code>greeting_dialog_display</code>'); ?></p>
						<p>The following values are supported:</p>
						<ul>
							<li><?php printf( esc_attr__( '%s: The greeting dialog will always be shown when the plugin loads.', 'WpAdminStyle' ), '<code>show</code>' ); ?></li>
							<li><?php printf( esc_attr__( '%s: The greeting dialog of the plugin will be shown, then fade away and stay hidden afterwards.'), '<code>fade</code>' ); ?></li>
							<li><?php printf( esc_attr__( '%s: The greeting dialog of the plugin will always be hidden until a user clicks on the plugin.'), '<code>hide</code>' ); ?></li>
						</ul>
						<p>
							Defaults to <code>show</code> on desktop and <code>hide</code> on mobile.
						</p>
					</div>

					<h4>What The Plugin Does</h4>
					<div class="notice notice-info inline">
						<p>The plugin automatically leaves this out for this is an optional attribute. The plugin will then use the value specified when saved.</p>
					</div>
					<br />

					<select id="<?php echo $this->plugin_name; ?>-greeting_dialog_display" name="<?php echo $this->plugin_name; ?>[greeting_dialog_display]">
						<option value="null">Default - "show" on desktop and "hide" on mobile</option>
						<option <?php echo isset($options["greeting_dialog_display"]) && $options["greeting_dialog_display"] === "show" ? 'selected="selected"' : '' ?> value="show">Show - Always show dialog when plugin loads</option>
						<option <?php echo isset($options["greeting_dialog_display"]) && $options["greeting_dialog_display"] === "fade" ? 'selected="selected"' : '' ?>  value="fade">Fade - Plugin will be shown, then fade and stay hidden aftrwards.</option>
						<option <?php echo isset($options["greeting_dialog_display"]) && $options["greeting_dialog_display"] === "hide" ? 'selected="selected"' : '' ?>  value="hide">Hide - Plugin will always be hidden until a user clicks on the plugin.</option>
					</select>

			    <?php submit_button('Save changes', 'primary','submit', TRUE); ?>
				</div>
				<!-- .inside -->

			</div>
			<!-- .postbox -->
		</div>
		<!-- End -->		

		<!-- Greeting Dialog Delay -->
		<div class="meta-box-sortables ui-sortable">
			<div class="postbox">

				<h2><span><?php esc_attr_e( 'Greeting Dialog Delay (Optional)', 'WpAdminStyle' ); ?></span></h2>

				<div class="inside">

					<h4>What's This For?</h4>
					<div class="notice notice-info inline">
						<p><?php printf( esc_attr__( 'The %s attribute specifies the greeting text that will be displayed if the user is currently not logged in to Facebook. Maximum 80 characters.', 'WpAdminStyle' ), '<code>greeting_dialog_delay</code>' ); ?></p>
					</div>

					<h4>What The Plugin Does</h4>
					<div class="notice notice-info inline">
						<p>The plugin automatically leaves this out for this is an optional attribute. The plugin will then use the value specified when saved.</p>
					</div>
					<br />

					<input type="number" placeholder="Enter delay in seconds" class="regular-text" id="<?php echo $this->plugin_name; ?>-greeting_dialog_delay" name="<?php echo $this->plugin_name; ?>[greeting_dialog_delay]" value="<?php if(!empty($options['greeting_dialog_delay'])) echo $options['greeting_dialog_delay']; ?>"/>
          <span class="description"><?php esc_attr_e( 'Default is blank.', 'WpAdminStyle' ); ?></span><br>

			    <?php submit_button('Save changes', 'primary','submit', TRUE); ?>
				</div>
				<!-- .inside -->

			</div>
			<!-- .postbox -->
		</div>
		<!-- End -->

		<!-- Ref Attribute -->
		<div class="meta-box-sortables ui-sortable">

			

			<div class="postbox">

				<h2><span><?php esc_attr_e( 'Ref Attribute', 'WpAdminStyle' ); ?></span></h2>

				<div class="inside">

					<?php if ( ! empty($options['ref_override']) ) : ?>
					
						<div class="notice notice-warning inline">
					    	<h3>The current fine grained ref attributes below are disabled due to setting the <strong>Ref Global Override</strong>.</h3>
					    	<p>Check on <strong>Misc</strong> tab > <strong>Ref Global Override</strong> section.</p>
						</div>

					<?php else: ?>

						<h4>What's This For?</h4>
						<div class="notice notice-info inline">
							<p><?php printf( esc_attr__( 'If the %s attribute is set in the include for the customer chat plugin, messenger will be will include the string in the postback event such as clicking the Get Started button or upon continued conversation on the plugin. %s', 'WpAdminStyle' ), '<code>ref</code>', '<a href="https://developers.facebook.com/docs/messenger-platform/discovery/customer-chat-plugin#step3" target="_blank">Click here to learn more</a>.' ); ?></p>
						</div>
						<div class="notice notice-info inline">
							<p><?php printf( esc_attr__( 'The %s can be any string and can be used for a variety of purposes. For example, you could use it to keep track of which customers have engaged with your business via the plugin.', 'WpAdminStyle' ), '<code>ref</code>' ); ?></p>
						</div>

						<h4>What The Plugin Does</h4>
						<div class="notice notice-info inline">
							<p>The plugin automatically sets the <code>ref</code> parameter to the <code>current slug</code> of the <strong>page</strong>, <strong>post</strong> or any supported <strong>custom post type</strong> in your Wordpress site. However, you can customize them below.</p>
						</div>
						<br />

					    <h4>Go and set them below.</h4>
					    <hr />

						<h3>Pages</h3>
						<?php 
							$pages = get_pages(['posts_per_page' => -1]); 

							foreach ( $pages as $page ) {

								$option = '<p><a href="'. get_page_link( $page->ID ) . '" target="_blank">';
								$option .= $page->post_title;
								$option .= '</a>';
								$option .= ' (ID: ' . $page->ID . ') ';
								$var = isset($options["ref"]) ? $options["ref"][$page->ID] : "";
								$option .= isset($options['ref_prefix']) && ! empty($options['ref_prefix']) ? '<em>' . $options['ref_prefix'] . '</em>' : "";
								$option .= '<input type="text" placeholder="' . $page->post_name  . '" class="all-options" id="' . $this->plugin_name . '-ref-' . $page->ID . '" name="' . $this->plugin_name . '[ref][' . $page->ID . ']" value="' .  $var . '"/>';
		
								$option .= '</p>';
								echo $option;
							}
						?>

						<br>
						<hr>

						<h3>Posts</h3>
						<?php 
							$posts = get_posts(['posts_per_page' => -1]); 

							foreach ( $posts as $post ) {

								$option = '<p><a href="'. get_page_link( $post->ID ) . '" target="_blank">';
								$option .= $post->post_title;
								$option .= '</a>';
								$option .= ' (ID: ' . $post->ID . ') ';
								$var = isset($options["ref"]) ? $options["ref"][$post->ID] : "";
								$option .= isset($options['ref_prefix']) && ! empty($options['ref_prefix']) ? '<em>' . $options['ref_prefix'] . '</em>' : "";
								$option .= ' <input type="text" placeholder="' . $post->post_name . '" class="all-options" id="' . $this->plugin_name . '-ref-' . $post->ID . '" name="' . $this->plugin_name . '[ref][' . $post->ID . ']" value="' .  $var . '"/>';
		
								$option .= '</p>';
								echo $option;
							}
						?>

						<br>
						
						<hr>

						<h3>Other Custom Post Types</h3>
						<?php $post_types = get_post_types(); ?>

						<?php
							$found_custom_post_type = false;
							foreach ( get_post_types( '', 'names' ) as $post_type ) {

								if ( ! in_array($post_type, ['page', 'post', 'attachment', 'revision', 'nav_menu_item', 'custom_css', 'customize_changeset', 'oembed_cache']) ) {

									$found_custom_post_type = true;
									$custom_post_types = get_posts(['posts_per_page' => -1, 'post_type' => $post_type]); 

									echo '<h4 style="text-transform: capitalize;">' . $post_type . '</h4>';
									foreach ( $custom_post_types as $custom_post_type ) {

										$option = '<p><a href="'. get_page_link( $custom_post_type->ID ) . '" target="_blank">';
										$option .= $custom_post_type->post_title;
										$option .= '</a>';
										$option .= ' (ID: ' . $custom_post_type->ID . ') ';
										$var = isset($options["ref"]) ? $options["ref"][$custom_post_type->ID] : "";
										$option .= isset($options['ref_prefix']) && ! empty($options['ref_prefix']) ? '<em>' . $options['ref_prefix'] . '</em>' : "";
										$option .= ' <input type="text" placeholder="' . $custom_post_type->post_name . '" class="all-options" id="' . $this->plugin_name . '-ref-' . $custom_post_type->ID . '" name="' . $this->plugin_name . '[ref][' . $custom_post_type->ID . ']" value="' .  $var . '"/>';
				
										$option .= '</p>';
										echo $option;
									}

									echo '<br><hr />';

								}
							}

							// No custom post type, so nothing to do
							if ( ! $found_custom_post_type ) {
								echo '<p>No custom post type found.</p>';
							}
						?>

						<?php submit_button('Save changes', 'primary','submit', TRUE); ?>

					<?php endif; ?>
				</div>
				<!-- .inside -->

			</div>
			<!-- .postbox -->

		</div>
		<!-- End -->

	</form>
</div>
