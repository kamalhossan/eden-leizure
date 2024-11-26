<?php
/**
 * The template for displaying the footer.
 *
 * @package Salient WordPress Theme
 * @version 12.2
 */

// Exit if accessed directly
if ( !defined( 'ABSPATH' ) ) {
    exit;
}

$nectar_options = get_nectar_theme_options();
$header_format = ( !empty( $nectar_options['header_format'] ) ) ? $nectar_options['header_format'] : 'default';

nectar_hook_before_footer_open();

?>

<div id="footer-outer" <?php nectar_footer_attributes();?>>

	<?php

nectar_hook_after_footer_open();

get_template_part( 'includes/partials/footer/call-to-action' );

get_template_part( 'includes/partials/footer/main-widgets' );

get_template_part( 'includes/partials/footer/copyright-bar' );

?>

</div><!--/footer-outer-->
<div class="footer-graphics">
	<div class="video-graphics">
		<video autoplay muted loop id="footer-graphics">
			<source src="/wp-content/uploads/2024/05/original-5d9a19f121d5c7348e4f85bab7f7facd.mp4" type="video/mp4">
		</video>
	</div>
</div>

<?php

nectar_hook_before_outer_wrap_close();

get_template_part( 'includes/partials/footer/off-canvas-navigation' );

?>

</div> <!--/ajax-content-wrap-->

<?php

// Boxed theme option closing div.
if ( !empty( $nectar_options['boxed_layout'] ) &&
    '1' === $nectar_options['boxed_layout'] &&
    'left-header' !== $header_format ) {

    echo '</div><!--/boxed closing div-->';
}

get_template_part( 'includes/partials/footer/back-to-top' );

nectar_hook_after_wp_footer();
nectar_hook_before_body_close();

wp_footer();
?>
</body>
</html>