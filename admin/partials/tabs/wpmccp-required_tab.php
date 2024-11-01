<!-- main content -->
<div id="post-body-content">
	<form method="post" action="options.php">
		<?php
	        //Grab all options
	        $options = get_option($this->plugin_name);

	        $facebook_page_id = $options['facebook_page_id'];
	    ?>

	    <?php
	        settings_fields($this->plugin_name);
	        do_settings_sections($this->plugin_name);
	    ?>

	    <div class="notice notice-error inline">
	    	<h3>Steps written below are required! Make sure to follow the instructions properly.</h3>
	    </div>

	    <div class="meta-box-sortables ui-sortable">

			<div class="postbox">

				<h2><span><?php esc_attr_e( 'Step 1) Facebok Page (Messenger Platform Whitelisted Domains)', 'WpAdminStyle' ); ?></span></h2>

				<div class="inside">

					<p>Add your website's domain to <strong>Whitelisted Domains</strong> on your Facebook Page. Go to your <strong>Facebook Page</strong> &gt; <strong>Settings</strong> &gt; <strong>Messenger Platform</strong> then scroll below and find <strong>Whitelisted Domains</strong>.</p>

					<div class="notice notice-info inline">
						<p>Example: <strong>https://dorelljames.com</strong></p>
					</div>

					<img src="https://dorelljames.com/wp-content/uploads/2017/11/messenger-whitelist-domain.png" alt="" style="max-width: 100%; display:block; height: auto;" />
					<br/>
				</div>
				<!-- .inside -->

			</div>
			<!-- .postbox -->

		</div>
		
		<div class="meta-box-sortables ui-sortable">

			<div class="postbox">

				<h2><span><?php esc_attr_e( 'Step 2) Facebok Page ID', 'WpAdminStyle' ); ?></span></h2>

				<div class="inside">

					<p>Look up your <strong>Facebook Page ID</strong>. For this, let's use a free service at <a href="https://findmyfbid.in/" target="_blank" rel="noopener">Find Your Facebook ID</a> and paste your Facebook Page URL.</p>

					<div class="notice notice-info inline">
						<p>Example: <strong>https://www.facebook.com/iamDJBot</strong></p>
					</div>

					<div class="notice notice-warning inline">
						<p><strong>IMPORTANT: Take note of the number for we will need to use that below.</strong></p>
					</div>

					<img src="https://dorelljames.com/wp-content/uploads/2017/11/findfbid.jpg" alt="" style="max-width: 100%; display:block; height: auto;" />

					<p>Alternatively, you can go to your <strong>Facebook Page</strong> &gt; <strong>About</strong> and scroll down bottom until you see <strong>Page ID</strong>.</p>

					<img src="https://dorelljames.com/wp-content/uploads/2017/11/Screen-Shot-2017-11-30-at-11.26.41-AM.png" alt="" width="1051" height="607" style="max-width: 100%; display:block; height: auto;" />

					<br/>

					<h2>Now, enter your <strong>Facebook Page ID</strong> below and click <strong>Save changes</strong>. <br><br>Congratulations! you have now enabled Messenger's Customer Chat Plugin on your website.</h2>

					<div class="notice notice-error inline">
						<p><strong>You can't leave the Facebook Page ID blank or else you can't make this work.</strong></p>
					</div>

                    <input type="number" class="regular-text" id="<?php echo $this->plugin_name; ?>-facebook_page_id" name="<?php echo $this->plugin_name; ?>[facebook_page_id]" value="<?php if(!empty($facebook_page_id)) echo $facebook_page_id; ?>"/>
                    <span class="description"><?php esc_attr_e( 'Enter Facebook Page ID.', 'WpAdminStyle' ); ?></span><br>

			        <?php submit_button('Save changes', 'primary','submit', TRUE); ?>
				</div>
				<!-- .inside -->

			</div>
			<!-- .postbox -->

	    <div class="notice notice-info inline">
	    	<h2>To customize, go to <a href="?page=wpmccp&tab=options">Customize Tab</a> to change <code>ref</code> and <code>minimized</code> and more attributes. Use <a href="?page=wpmccp&tab=misc">Misc Tab</a> for other settings.</h2>
	    </div>

		</div>
		<!-- .meta-box-sortables .ui-sortable -->					

	</form>
</div>
<!-- post-body-content -->
