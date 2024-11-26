<?php
/**
* Header menu items and logo
*
* @package Salient WordPress Theme
* @subpackage Partials
* @version 13.1
*/

// Exit if accessed directly
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

global $woocommerce;

$nectar_header_options = nectar_get_header_variables();
$nectar_options        = get_nectar_theme_options();

// Bottom menu config
$alt_button_location = false;

$nectar_header_format = $nectar_header_options['header_format'];

if( $nectar_header_format === 'centered-menu-bottom-bar' &&
    $nectar_header_options['centered_menu_bottom_bar_align'] !== 'left' ) {
	$alt_button_location = true;
}
?>

<header id="top">
	<div class="container">
		<div class="row">
			<div class="col span_3">
				<?php 
				
				do_action('nectar_hook_before_logo');

				if( has_action('nectar_hook_mobile_header_before_logo') ) { ?>
					<span class="nectar-mobile-only"><?php nectar_hook_mobile_header_before_logo(); ?></span>
				<?php } 
				$nectar_logo_url = apply_filters( 'nectar_logo_url', esc_url(home_url()) );
				?>
				<a id="logo" href="<?php echo esc_url( $nectar_logo_url ); ?>" data-supplied-ml-starting-dark="<?php echo esc_attr( $nectar_header_options['using_mobile_logo_starting_dark'] ); ?>" data-supplied-ml-starting="<?php echo esc_attr( $nectar_header_options['using_mobile_logo_starting'] ); ?>" data-supplied-ml="<?php echo esc_attr( $nectar_header_options['using_mobile_logo'] ); ?>" <?php echo wp_kses_post( $nectar_header_options['logo_class'] ); ?>>
					<?php nectar_logo_output( $nectar_header_options['activate_transparency'], $nectar_header_options['side_widget_class'], $nectar_header_options['using_mobile_logo'] ); ?>
				</a>
				<?php

				$menu_label = false;
				$menu_label_class = '';

				if( ! empty( $nectar_options['header-menu-label'] ) && $nectar_options['header-menu-label'] === '1' ) {
					$menu_label       = true;
					$menu_label_class = ' using-label';
				}

				if ( $nectar_header_format === 'centered-menu-bottom-bar' ) {

					$has_pull_left_menu = ( has_nav_menu( 'top_nav_pull_left' ) ) ? 'true' : 'false';
					?>
					<nav class="left-side" data-using-pull-menu="<?php echo esc_attr( $has_pull_left_menu ); ?>">
						<?php
						// Pull left menu.
            
						do_action('nectar_hook_before_pull_left_items');

						if ( has_nav_menu( 'top_nav_pull_left' ) ) {
							wp_nav_menu(
								array(
									'walker'          => new Nectar_Arrow_Walker_Nav_Menu(),
									'theme_location'  => 'top_nav_pull_left',
									'container'       => '',
									'container_class' => 'pull-left-wrap',
									'items_wrap'      => '<ul id="%1$s" class="sf-menu">%3$s</ul>',
								)
							);
						}
						nectar_hook_pull_left_menu_items();

						if( ! empty( $nectar_options['enable_social_in_header'] ) && $nectar_options['enable_social_in_header'] === '1' ) {
						?>
						<ul class="nectar-social"><li id="social-in-menu" class="button_social_group"><?php nectar_header_social_icons( 'main-nav' ); ?> </li></ul>
				 	 <?php } ?>
					</nav>
					<nav class="right-side">
						<?php
						// Pull right menu.
						if ( has_nav_menu( 'top_nav_pull_right' ) ) {
							wp_nav_menu(
								array(
									'walker'          => new Nectar_Arrow_Walker_Nav_Menu(),
									'theme_location'  => 'top_nav_pull_right',
									'container'       => '',
									'container_class' => 'pull-left-wrap',
									'items_wrap'      => '<ul id="%1$s" class="sf-menu">%3$s</ul>',
								)
							);
						}
						nectar_hook_pull_right_menu_items();
						if( true === $alt_button_location ) {
						?>
						<ul class="buttons" data-user-set-ocm="<?php echo esc_attr( $nectar_header_options['user_set_side_widget_area'] ); ?>"><?php nectar_header_button_items(); ?></ul>
						<?php } ?>
						<?php if ( $nectar_header_options['side_widget_area'] === '1' || $nectar_header_options['side_widget_class'] === 'simple' ) { ?>
							<div class="slide-out-widget-area-toggle mobile-icon <?php echo esc_attr( $nectar_header_options['side_widget_class'] ); ?>" data-custom-color="<?php echo esc_attr($nectar_header_options['ocm_menu_btn_color']); ?>" data-icon-animation="simple-transform">
								<div> <a href="#sidewidgetarea" aria-label="<?php echo esc_attr__('Navigation Menu', 'salient'); ?>" aria-expanded="false" class="<?php echo 'closed' . esc_attr($menu_label_class); ?>">
									<?php if( true === $menu_label ) {
										echo '<i class="label">' . esc_html__('Menu','salient') .'</i>';
									} else {
										echo '<span class="screen-reader-text">'.esc_html__('Menu','salient').'</span>';
									} ?><span aria-hidden="true"> <i class="lines-button x2"> <i class="lines"></i> </i> </span> </a> </div>
							</div>
						<?php } ?>
					</nav>
				<?php } ?>
			</div><!--/span_3-->

			<div class="col span_9 col_last">
				<?php
					if( has_action('nectar_hook_mobile_header_menu_items') ) { ?>
						<div class="nectar-mobile-only mobile-header"><div class="inner"><?php nectar_hook_mobile_header_menu_items(); ?></div></div><?php 
					} 

					// Mobile icons.
					if ( $nectar_header_options['header_search'] != 'false' ) {
						?>
						<a class="mobile-search" href="#searchbox"><span class="nectar-icon icon-salient-search" aria-hidden="true"></span><span class="screen-reader-text"><?php echo esc_html__('search','salient'); ?></span></a>
						<?php
					}

					if ( ! empty( $nectar_options['enable-cart'] ) && $nectar_options['enable-cart'] === '1' ) {

						if ( $woocommerce ) {
							$nav_cart_style = ( isset( $nectar_options['ajax-cart-style'] ) ) ? $nectar_options['ajax-cart-style'] : 'default';
							?>

							<a id="mobile-cart-link" data-cart-style="<?php echo esc_attr($nav_cart_style); ?>" href="<?php echo esc_url( wc_get_cart_url() ); ?>"><i class="icon-salient-cart"></i><div class="cart-wrap"><span><?php echo esc_html( $woocommerce->cart->cart_contents_count ); ?> </span></div></a>
							<?php
						}
					}
					?>

					<?php
					if ( $nectar_header_options['side_widget_area'] === '1' || $nectar_header_options['side_widget_class'] === 'simple' ) {
						?>
						<div class="slide-out-widget-area-toggle mobile-icon <?php echo esc_attr( $nectar_header_options['side_widget_class'] ); ?>" data-custom-color="<?php echo esc_attr($nectar_header_options['ocm_menu_btn_color']); ?>" data-icon-animation="simple-transform">
							<div> <a href="#sidewidgetarea" aria-label="<?php echo esc_attr__('Navigation Menu', 'salient'); ?>" aria-expanded="false" class="<?php echo 'closed' . esc_attr($menu_label_class); ?>">
								<?php if( true === $menu_label ) {
									echo '<i class="label">' . esc_html__('Menu','salient') .'</i>';
								}
								else {
									echo '<span class="screen-reader-text">'.esc_html__('Menu','salient').'</span>';
								} ?><span aria-hidden="true"> <i class="lines-button x2"> <i class="lines"></i> </i> </span>
							</a></div>
						</div> <?php 
					} 
					?>

					<?php
					if ( $nectar_header_format === 'left-header' ) {
						echo '<div class="nav-outer">';
					}
					?>

					<nav>
						<?php 
						// Centered Logo Between Menu Alt.
						if( in_array($nectar_header_format, array('centered-logo-between-menu-alt') ) ) { 

              			do_action('nectar_hook_before_pull_left_items');

							if( has_nav_menu( 'top_nav_pull_left' ) ) {
								wp_nav_menu(
									array(
										'walker'          => new Nectar_Arrow_Walker_Nav_Menu(),
										'theme_location'  => 'top_nav_pull_left',
										'container'      => '',
										'menu_class' => 'sf-menu',      
									)
								);
							}
						}
						else {
              				do_action('nectar_hook_before_menu_items');?>
							<ul class="sf-menu">
								<?php
								if ( $nectar_header_options['has_main_menu'] === 'true' ) {

									wp_nav_menu(
										array(
											'walker'         => new Nectar_Arrow_Walker_Nav_Menu(),
											'theme_location' => 'top_nav',
											'container'      => '',
											'items_wrap'     => '%3$s',
										)
									);
								} else {
									echo '<li class="no-menu-assigned"><a href="#"></a></li>';
								}

								if ( ! empty( $nectar_options['enable_social_in_header'] ) &&
								$nectar_options['enable_social_in_header'] === '1' &&
								$nectar_header_options['using_secondary'] !== 'header_with_secondary' &&
								$nectar_header_format !== 'menu-left-aligned' &&
								$nectar_header_format !== 'centered-menu' &&
								$nectar_header_format !== 'left-header' &&
								$nectar_header_format !== 'centered-menu-bottom-bar' ) {

									echo '<li id="social-in-menu" class="button_social_group">';
									nectar_header_social_icons( 'main-nav' );
									echo '</li>';
								}

								?>
							</ul><?php
						}

						?>
							<div class="custom-order-menu">
								<div class="custom-search-icons">
									<?php
										if ( $nectar_header_options['header_search'] != 'false' ) {
											?>
											<a class="mobile-search" href="#searchbox"><span class="nectar-icon icon-salient-search" aria-hidden="true"></span><span class="screen-reader-text"><?php echo esc_html__('search','salient'); ?></span></a>
											<?php
										}
									?>
									<div class="social_icons">
										<?php
											// Get the URLs from the ACF options page
											$instagram_url = get_field('instagram', 'option');
											$facebook_url = get_field('facebook', 'option');
											$linkedin_url = get_field('linkedin', 'option');
										?>

										<div class="social-icons">
											<?php if ($linkedin_url): ?>
												<a href="<?php echo esc_url($linkedin_url); ?>" target="_blank">
													<svg width="24" height="23" viewBox="0 0 24 23" fill="none" xmlns="http://www.w3.org/2000/svg">
														<path d="M21.9609 0H1.28279C0.578649 0 0 0.572586 0 1.26935V21.7307C0 22.4343 0.578649 23 1.28279 23H21.9609C22.665 23 23.2437 22.4343 23.2437 21.7307V1.26935C23.2437 0.572586 22.665 0 21.9609 0ZM6.51854 19.7025H2.96994V8.56119H6.51854V19.7025ZM4.65012 7.16767H4.62921C3.33945 7.16767 2.50981 6.31914 2.50981 5.23605C2.50981 4.15297 3.36733 3.30444 4.67801 3.30444C5.98869 3.30444 6.79741 4.13227 6.81833 5.23605C6.81833 6.31224 5.98869 7.16767 4.65012 7.16767ZM20.7338 19.7025H16.7042V13.9352C16.7042 12.4244 16.0767 11.3965 14.6894 11.3965C13.6297 11.3965 13.0441 12.0933 12.7652 12.7624C12.6676 13.0039 12.6815 13.335 12.6815 13.6731V19.7025H8.68674C8.68674 19.7025 8.74251 9.4925 8.68674 8.56119H12.6815V10.3065C12.9186 9.54769 14.1944 8.45081 16.2231 8.45081C18.7539 8.45081 20.7338 10.0582 20.7338 13.5075V19.7025Z" fill="#0B1623"/>
													</svg>
												</a>
											<?php endif; ?>

											<?php if ($facebook_url): ?>
												<a href="<?php echo esc_url($facebook_url); ?>" target="_blank">
													<svg width="24" height="23" viewBox="0 0 24 23" fill="none" xmlns="http://www.w3.org/2000/svg">
														<path d="M1.2828 22.9931H12.4166V14.087H9.39088V10.617H12.4166V8.05759C12.4166 5.08428 14.2502 3.47001 16.9273 3.47001C18.2101 3.47001 19.3116 3.56659 19.6323 3.60798V6.71236H17.7778C16.3208 6.71236 16.0419 7.39532 16.0419 8.40252V10.617H19.5138L19.0606 14.087H16.0419V22.9931H21.9609C22.672 22.9931 23.2437 22.4274 23.2437 21.7238V1.26935C23.2437 0.565687 22.672 0 21.9609 0H1.2828C0.571682 0 0 0.565687 0 1.26935V21.7307C0 22.4343 0.571682 23 1.2828 23V22.9931Z" fill="#0B1623"/>
													</svg>
												</a>
											<?php endif; ?>

											<?php if ($instagram_url): ?>
												<a href="<?php echo esc_url($instagram_url); ?>" target="_blank">
													<svg width="23" height="23" viewBox="0 0 23 23" fill="none" xmlns="http://www.w3.org/2000/svg">
														<path d="M22.9439 6.69166C22.8881 5.4844 22.6999 4.64967 22.414 3.93221C22.1212 3.18026 21.7238 2.54559 21.0824 1.91782C20.448 1.28314 19.8066 0.889922 19.0467 0.60018C18.3147 0.317337 17.4781 0.131074 16.258 0.0758848C15.024 0.0137972 14.6406 0 11.5103 0C8.37999 0 7.99654 0.0137972 6.76952 0.0689862C5.5425 0.124175 4.7059 0.310438 3.97387 0.593281C3.22093 0.883023 2.57953 1.27624 1.93813 1.91092C1.29674 2.53869 0.906321 3.17337 0.61351 3.92531C0.32767 4.64967 0.125491 5.4844 0.069717 6.69166C0.0139434 7.90582 0 8.29904 0 11.3896C0 14.4802 0.0139434 14.8734 0.069717 16.0876C0.125491 17.2948 0.320698 18.1296 0.606538 18.847C0.89935 19.5921 1.28977 20.2268 1.93116 20.8614C2.57256 21.4961 3.21396 21.8893 3.9669 22.1791C4.7059 22.455 5.53553 22.6482 6.76255 22.7034C7.98957 22.7585 8.37999 22.7723 11.5033 22.7723C14.6266 22.7723 15.024 22.7585 16.251 22.7034C17.4711 22.6482 18.3147 22.455 19.0397 22.1791C19.7996 21.8893 20.441 21.4961 21.0755 20.8614C21.7169 20.2268 22.1142 19.5921 22.4071 18.847C22.6929 18.1227 22.8811 17.2948 22.9369 16.0876C22.9996 14.8734 23.0066 14.4802 23.0066 11.3896C23.0066 8.29904 22.9996 7.90582 22.9369 6.69166H22.9439ZM11.5103 17.2328C8.24753 17.2328 5.60525 14.6182 5.60525 11.3896C5.60525 8.16107 8.24753 5.53959 11.5103 5.53959C14.773 5.53959 17.4223 8.16107 17.4223 11.3896C17.4223 14.6182 14.773 17.2328 11.5103 17.2328ZM17.6524 6.67097C16.8924 6.67097 16.272 6.05699 16.272 5.30504C16.272 4.55309 16.8924 3.93911 17.6524 3.93911C18.4123 3.93911 19.0397 4.55309 19.0397 5.30504C19.0397 6.05699 18.4192 6.67097 17.6524 6.67097ZM11.5103 7.58848C9.39088 7.58848 7.67585 9.29244 7.67585 11.3827C7.67585 13.473 9.39786 15.177 11.5103 15.177C13.6227 15.177 15.3447 13.473 15.3447 11.3827C15.3447 9.29244 13.6297 7.58848 11.5103 7.58848Z" fill="#0B1623"/>
													</svg>
												</a>
											<?php endif; ?>
										</div>
									</div>
								</div>
							</div>
						<?php
						
						if ( false === in_array($nectar_header_format, array('menu-left-aligned','centered-logo-between-menu-alt') ) &&
						     false === $alt_button_location ) { ?>
							<ul class="buttons sf-menu" data-user-set-ocm="<?php echo esc_attr( $nectar_header_options['user_set_side_widget_area'] ); ?>">

								<?php

								if ( ! empty( $nectar_options['enable_social_in_header'] ) &&
								$nectar_options['enable_social_in_header'] === '1' &&
								$nectar_header_options['using_secondary'] !== 'header_with_secondary' &&
								$nectar_header_format === 'centered-menu' ) {

									echo '<li id="social-in-menu" class="button_social_group">';
									nectar_header_social_icons( 'main-nav' );
									echo '</li>';
								}

								// Pull right.
								if ( $nectar_header_format === 'centered-menu' &&
								$nectar_header_options['using_pr_menu'] === 'true' ||
								$nectar_header_format === 'centered-logo-between-menu' &&
								$nectar_header_options['using_pr_menu'] === 'true' ) {
									wp_nav_menu(
										array(
											'walker'         => new Nectar_Arrow_Walker_Nav_Menu(),
											'theme_location' => 'top_nav_pull_right',
											'container'      => '',
											'items_wrap'     => '%3$s',
										)
									);
									nectar_hook_pull_right_menu_items();
								}

								nectar_hook_before_button_menu_items();

								// WE are modifying the menu here
								// nectar_header_button_items();
								?>

							</ul>
						<?php } ?>

					</nav>

					<?php
					if ( $nectar_header_format === 'left-header' ) {
						echo '</div>';
					}

					if ( $nectar_header_format === 'centered-menu' ||
					$nectar_header_format === 'centered-logo-between-menu' ) {
						nectar_logo_spacing();
					}
				?>
			</div><!--/span_9-->

				<?php if ( in_array($nectar_header_format, array('menu-left-aligned','centered-logo-between-menu-alt') ) ) { ?>
					<div class="right-aligned-menu-items">

						<nav>
							<ul class="buttons sf-menu" data-user-set-ocm="<?php echo esc_attr( $nectar_header_options['user_set_side_widget_area'] ); ?>">

								<?php
								// Pull right.
								if ( $nectar_header_options['using_pr_menu'] === 'true' ) {
									wp_nav_menu(
										array(
											'walker'         => new Nectar_Arrow_Walker_Nav_Menu(),
											'theme_location' => 'top_nav_pull_right',
											'container'      => '',
											'items_wrap'     => '%3$s',
										)
									);
									nectar_hook_pull_right_menu_items();
								}

								nectar_hook_before_button_menu_items();

								nectar_header_button_items();
								?>

							</ul>

							<?php
							if ( ! empty( $nectar_options['enable_social_in_header'] ) &&
							$nectar_options['enable_social_in_header'] === '1' &&
							$nectar_header_options['using_secondary'] !== 'header_with_secondary' ) {

								echo '<ul><li id="social-in-menu" class="button_social_group">';
								nectar_header_social_icons( 'main-nav' );
								echo '</li></ul>';
							}
							?>
						</nav>
					</div><!--/right-aligned-menu-items-->

					<?php
				} 
				elseif ( $nectar_header_format === 'left-header' ) {

					if ( ! empty( $nectar_options['enable_social_in_header'] ) &&
					$nectar_options['enable_social_in_header'] === '1' &&
					$nectar_header_options['using_secondary'] !== 'header_with_secondary' ) {
						echo '<div class="button_social_group"><ul><li id="social-in-menu">';
						nectar_header_social_icons( 'main-nav' );
						echo '</li></ul></div>';
					}
				}
				?>

			</div><!--/row-->
			<?php
			
			$legacy_double_menu = nectar_legacy_mobile_double_menu();
			
			if( $nectar_header_options['side_widget_class'] === 'simple' || true === $legacy_double_menu ) {
				get_template_part( 'includes/partials/header/classic-mobile-nav' );
			}
			?>
		</div><!--/container-->
	</header>