<div id="jj4t3-redirect-modal" style="display:none;">
	<div id="jj4t3-thickbox-content" class="wrap">
		<form id="jj4t3_custom_redirect_form" action="javascript:void(0)">
			<table class="form-table">
				<tr>
					<th><?php _e( 'Redirecting from', JJ4T3_DOMAIN ); ?> :</th>
					<td><strong><p id="jj4t3_redirect_404_text"></p></strong></td>
				</tr>
				<tr>
					<th><?php _e( 'Redirect', JJ4T3_DOMAIN ); ?> :</th>
					<td>
						<input type="radio" name="jj4t3_custom_redirect_redirect" value="-1" checked> <?php _e( 'Default', JJ4T3_DOMAIN ); ?>
						<input type="radio" name="jj4t3_custom_redirect_redirect" value="1"> <?php _e( 'Enable', JJ4T3_DOMAIN ); ?>
						<input type="radio" name="jj4t3_custom_redirect_redirect" value="0"> <?php _e( 'Disable', JJ4T3_DOMAIN ); ?>
					</td>
				</tr>
				<tr>
					<th><?php _e( 'Error logging', JJ4T3_DOMAIN ); ?> :</th>
					<td>
						<input type="radio" name="jj4t3_custom_redirect_log" value="-1" checked> <?php _e( 'Default', JJ4T3_DOMAIN ); ?>
						<input type="radio" name="jj4t3_custom_redirect_log" value="1"> <?php _e( 'Enable', JJ4T3_DOMAIN ); ?>
						<input type="radio" name="jj4t3_custom_redirect_log" value="0"> <?php _e( 'Disable', JJ4T3_DOMAIN ); ?>
					</td>
				</tr>
				<tr>
					<th><?php _e( 'Email alert', JJ4T3_DOMAIN ); ?> :</th>
					<td>
						<input type="radio" name="jj4t3_custom_redirect_alert" value="-1" checked> <?php _e( 'Default', JJ4T3_DOMAIN ); ?>
						<input type="radio" name="jj4t3_custom_redirect_alert" value="1"> <?php _e( 'Enable', JJ4T3_DOMAIN ); ?>
						<input type="radio" name="jj4t3_custom_redirect_alert" value="0"> <?php _e( 'Disable', JJ4T3_DOMAIN ); ?>
					</td>
				</tr>
				<tr>
					<th><?php _e( 'Redirect to', JJ4T3_DOMAIN ); ?> :</th>
					<td>
						<input type="text" size="40" name="jj4t3_custom_redirect" id="jj4t3_redirect_url" value="">
						<p class="description"><?php _e( 'Enter the url if you want to set custom redirect for above 404 path. Enter the full url including http://. Leave empty if you want to follow deafult settings.', JJ4T3_DOMAIN ); ?></p>
						<input type="hidden" value="" id="jj4t3_redirect_404" name="jj4t3_redirect_404">
						<input type="hidden" value="<?php echo wp_create_nonce( "jj4t3_redirect_nonce" ); ?>" id="jj4t3_redirect_nonce" name="jj4t3_redirect_nonce">
						<input type="hidden" value="jj4t3_redirect_form" name="action">
					</td>
				</tr>
				<?php $statuses = jj4t3_redirect_statuses(); ?>
				<?php if ( ! empty( $statuses ) ) : ?>
					<tr>
						<th><?php _e( 'Redirect type', JJ4T3_DOMAIN ); ?></th>
						<td>
							<select name="jj4t3_custom_redirect_type" id="jj4t3_custom_redirect_type">
								<?php foreach ( $statuses as $status => $label ) : ?>
									<option value='<?php echo $status; ?>' <?php selected( jj4t3_get_option( 'redirect_type' ), $status ); ?>><?php echo $label; ?></option>
								<?php endforeach; ?>
							</select>
							<p class="description jj4t3-p-desc"><?php _e( 'Select redirect type to override default one.', JJ4T3_DOMAIN ); ?></p>
						</td>
					</tr>
				<?php endif; ?>
				<tr>
					<td><span class="spinner jj4t3-spinner"></span></td>
					<td>
						<?php submit_button( __( 'Save Redirect', JJ4T3_DOMAIN ), 'primary', 'jj4t3_custom_redirect_submit', false, array( 'id' => 'jj4t3_custom_redirect_submit' ) ); ?>
					</td>
				</tr>
			</table>
		</form>
	</div>
</div>