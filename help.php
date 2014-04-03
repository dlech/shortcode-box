<?php
function shortcode_box_register_options_page() {
	add_management_page(__('Shortcode Box Help Page', SHORTCODE_BOX_TEXT_DOMAIN), __('Shortcode Box', SHORTCODE_BOX_TEXT_DOMAIN), 'manage_options', SHORTCODE_BOX_TEXT_DOMAIN.'-help', 'shortcode_box_help_page');
}
add_action('admin_menu', 'shortcode_box_register_options_page');

function shortcode_box_help_page() {
?>
<style>
.padding-bottom{
	padding-bottom: 20px;
}
</style>
<div class="wrap">
	<h2><?php _e("Shortcode Box Help Page", SHORTCODE_BOX_TEXT_DOMAIN); ?></h2>
	<div class="help-page">
		<?php settings_fields('shortcode_box_options'); ?>
		<h3><?php _e("Shortcode Usage", SHORTCODE_BOX_TEXT_DOMAIN); ?></h3>
		<p><?php _e("You may add following short code to your post.", SHORTCODE_BOX_TEXT_DOMAIN); ?></p>
		<div>
			<div class="box-border">
				[box]<?php _e("Plain Box", SHORTCODE_BOX_TEXT_DOMAIN); ?>[/box]
			</div>
			<div class="padding-bottom"></div>
			<div class="download box-border">
				[box mode="download"]<?php _e("Download Box", SHORTCODE_BOX_TEXT_DOMAIN); ?>[/box]
			</div>
			<div class="padding-bottom"></div>
			<div class="info box-border">
				[box mode="info"]<?php _e("Hint Box", SHORTCODE_BOX_TEXT_DOMAIN); ?>[/box]
			</div>
			<div class="padding-bottom"></div>
			<div class="instruct box-border">
				[box mode="instuct"]<?php _e("Introduction Box", SHORTCODE_BOX_TEXT_DOMAIN); ?>[/box]
			</div>
			<div class="padding-bottom"></div>
			<div class="text box-border">
				[box mode="text"]<?php _e("Text Box", SHORTCODE_BOX_TEXT_DOMAIN); ?>[/box]
			</div>
			<div class="padding-bottom"></div>
			<div class="question box-border">
				[box mode="question"]<?php _e("Question Box", SHORTCODE_BOX_TEXT_DOMAIN); ?>[/box]
			</div>
			<div class="padding-bottom"></div>
			<div class="course box-border">
				[box mode="course"]<?php _e("Course Box", SHORTCODE_BOX_TEXT_DOMAIN); ?>[/box]
			</div>
			<div class="padding-bottom"></div>
			<div class="stop box-border">
				[box mode="stop"]<?php _e("Disallow Box", SHORTCODE_BOX_TEXT_DOMAIN); ?>[/box]
			</div>
			<div class="padding-bottom"></div>
			<div class="task box-border">
				[box mode="task"]<?php _e("Task Box", SHORTCODE_BOX_TEXT_DOMAIN); ?>[/box]
			</div>
			<div class="padding-bottom"></div>
			<div class="link box-border">
				[box mode="link"]<?php _e("Link Box", SHORTCODE_BOX_TEXT_DOMAIN); ?>[/box]
			</div>
			<div class="padding-bottom"></div>
			<div class="code box-border">
				[box mode="code"]<?php _e("Code Box", SHORTCODE_BOX_TEXT_DOMAIN); ?>[/box]
			</div>
		</div>
	</div>
</div>
<?php
}
?>