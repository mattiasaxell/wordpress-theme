<?php
/**
 * Template for rendering secondary navigation items accross the theme
 *
 * @package OKFNWP
 */

$okf_theme_options = get_option( 'theme_options_option_name' );

if ( ! empty( $okf_theme_options['okfnwp_fb_id'] ) ) {
	?>
<li class="nav-item">
  <a class="facebook nav-link" href="https://www.facebook.com/<?php echo isset( $okf_theme_options['okfnwp_fb_id'] ) ? esc_attr( $okf_theme_options['okfnwp_fb_id'] ) : 'OKFNetwork'; ?>">Facebook</a>
</li>
	<?php
}
if ( ! empty( $okf_theme_options['okfnwp_twitter_id'] ) ) {
	?>
<li class="nav-item">
  <a class="twitter nav-link" href="https://twitter.com/<?php echo isset( $okf_theme_options['okfnwp_twitter_id'] ) ? esc_attr( $okf_theme_options['okfnwp_twitter_id'] ) : 'okfn'; ?>">Twitter</a>
</li>
	<?php
}
if ( ! empty( $okf_theme_options['okfnwp_discuss_id'] ) ) {
	?>
<li class="nav-item">
  <a class="discuss nav-link" href="https://discuss.okfn.org/<?php echo isset( $okf_theme_options['okfnwp_discuss_id'] ) ? esc_attr( $okf_theme_options['okfnwp_discuss_id'], 'okfnwp' ) : ''; ?>"><?php esc_html_e( 'Forum', 'okfnwp' ); ?></a>
</li>
	<?php
}
if ( ! empty( $okf_theme_options['okfnwp_donate_url'] ) ) {
	?>
<li class="nav-item">
  <a class="nav-link" href="<?php esc_url_raw( $okf_theme_options['okfnwp_donate_url'], 'okfnwp' ); ?>">
	<?php esc_html_e( 'Donate', 'okfnwp' ); ?>
  </a>
</li>
	<?php
}
if ( ! empty( $okf_theme_options['okfnwp_newsletter_url'] ) ) {
	?>
<li class="nav-item">
  <a class="nav-link" href="<?php esc_url_raw( $okf_theme_options['okfnwp_newsletter_url'], 'okfnwp' ); ?>">
	<?php esc_html_e( 'Subscribe', 'okfnwp' ); ?>
  </a>
</li>
	<?php
}
?>
