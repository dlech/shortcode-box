<?php
function shortcode_box_register_options_page() {
	add_management_page(__('Shortcode Box Help Page', SHORTCODE_BOX_TEXT_DOMAIN), __('Shortcode Box', SHORTCODE_BOX_TEXT_DOMAIN), 'manage_options', SHORTCODE_BOX_TEXT_DOMAIN.'-help', 'shortcode_box_help_page');
}
add_action('admin_menu', 'shortcode_box_register_options_page');

$arefly_plugins_info = get_arefly_plugins_info();
$locale_code = get_arefly_plugins_info_locale();

function shortcode_box_help_page() {
	global $arefly_plugins_info, $locale_code;
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
		<p><?php echo $arefly_plugins_info["notice"][$locale_code]; ?></p>
		<p><?php _e("You may add following short code to your post.", SHORTCODE_BOX_TEXT_DOMAIN); ?></p>
		<div>
			<div class="down box-content">
				[sc mode="down"]<?php _e("Download Box", SHORTCODE_BOX_TEXT_DOMAIN); ?>[/sc]
			</div>
			<div class="padding-bottom"></div>
			<div class="warn box-content">
				[sc mode="warning"]<?php _e("Hint Box", SHORTCODE_BOX_TEXT_DOMAIN); ?>[/sc]
			</div>
			<div class="padding-bottom"></div>
			<div class="instruct box-content">
				[sc mode="ins"]<?php _e("Introduction Box", SHORTCODE_BOX_TEXT_DOMAIN); ?>[/sc]
			</div>
			<div class="padding-bottom"></div>
			<div class="text-box box-content">
				[sc mode="text"]<?php _e("Text Box", SHORTCODE_BOX_TEXT_DOMAIN); ?>[/sc]
			</div>
			<div class="padding-bottom"></div>
			<div class="question box-content">
				[sc mode="question"]<?php _e("Question Box", SHORTCODE_BOX_TEXT_DOMAIN); ?>[/sc]
			</div>
			<div class="padding-bottom"></div>
			<div class="course box-content">
				[sc mode="course"]<?php _e("Course Box", SHORTCODE_BOX_TEXT_DOMAIN); ?>[/sc]
			</div>
			<div class="padding-bottom"></div>
			<div class="stop box-content">
				[sc mode="stop"]<?php _e("Disallow Box", SHORTCODE_BOX_TEXT_DOMAIN); ?>[/sc]
			</div>
			<div class="padding-bottom"></div>
			<div class="task box-content">
				[sc mode="task"]<?php _e("Task Box", SHORTCODE_BOX_TEXT_DOMAIN); ?>[/sc]
			</div>
			<div class="padding-bottom"></div>
			<div class="link box-content">
				[sc mode="link"]<?php _e("Link Box", SHORTCODE_BOX_TEXT_DOMAIN); ?>[/sc]
			</div>
		</div>
	</div>
	<blockquote>
		<p><?php echo $arefly_plugins_info["plugin_by_arefly"][$locale_code]; ?></p>
		<ol>
			<?php foreach ($arefly_plugins_info["plugins"] as $plugin_info){ ?>
				<li><a href="<?php echo $plugin_info["link"]; ?>" target="_blank"><?php echo $plugin_info["name"]; ?></a></li>
			<?php } ?>
		</ol>
	</blockquote>
</div>
<?php
}
?>