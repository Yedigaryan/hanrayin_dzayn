<?php
/**
 * Welcome page setup.
 *
 * @package Oceanly_News
 */

if ( ! function_exists( 'oceanly_page' ) ) {
	/**
	 * Builds the content of the theme page.
	 */
	function oceanly_page() {
		?>
		<div class="wrap">
			<div class="metabox-holder">
				<div class="oceanly-panel">
					<div class="oceanly-container oceanly-title-wrap">
						<div class="oceanly-title">
							<?php
							printf(
								wp_kses(
									/* translators: %s: theme version number */
									_x( 'Oceanly News <span>Version %s</span>', 'menu page heading', 'oceanly-news' ),
									array( 'span' => array() )
								),
								esc_html( OCEANLY_NEWS_VERSION )
							);
							?>
						</div>
					</div>
				</div>

				<div class="oceanly-container">
					<div class="oceanly-panel">
						<div class="oceanly-panel-content">
							<span class="oceanly-panel-title"><?php esc_html_e( 'Customize Theme', 'oceanly-news' ); ?></span>
							<p class="description">
								<?php esc_html_e( 'You can customize the theme using the theme options available in the customizer.', 'oceanly-news' ); ?>
							</p>
						</div>
						<div class="oceanly-panel-actions">
							<a target="_blank" href="<?php echo esc_url( admin_url( 'customize.php' ) ); ?>" class="button"><?php esc_html_e( 'Theme Options', 'oceanly-news' ); ?></a>
						</div>
					</div>
					<div class="oceanly-panel">
						<div class="oceanly-panel-content">
							<span class="oceanly-panel-title"><?php esc_html_e( 'Header Image', 'oceanly-news' ); ?></span>
							<p class="description">
								<?php esc_html_e( 'You can change the header image in the Customizer > Header Image. Also, you can change the header background color from Customizer > Colors. For header image options, refer to Customizer > Hero Header.', 'oceanly-news' ); ?>
							</p>
						</div>
						<div class="oceanly-panel-actions">
							<a target="_blank" href="<?php echo esc_url( admin_url( 'customize.php' ) ); ?>?autofocus[section]=sec_hero_header" class="button"><?php esc_html_e( 'Hero Header', 'oceanly-news' ); ?></a>
							<a target="_blank" href="<?php echo esc_url( admin_url( 'customize.php' ) ); ?>?autofocus[section]=header_image" class="button"><?php esc_html_e( 'Header Image', 'oceanly-news' ); ?></a>
						</div>
					</div>
					<div class="oceanly-panel">
						<div class="oceanly-panel-content">
							<span class="oceanly-panel-title"><?php esc_html_e( 'Menus', 'oceanly-news' ); ?></span>
							<p class="description">
								<?php esc_html_e( 'You can create a menu and assign it to a menu location. Oceanly News comes with three menu locations which include primary menu, footer menu, and social links menu.', 'oceanly-news' ); ?>
							</p>
						</div>
						<div class="oceanly-panel-actions">
							<a target="_blank" href="<?php echo esc_url( admin_url( 'nav-menus.php' ) ); ?>" class="button"><?php esc_html_e( 'Menus', 'oceanly-news' ); ?></a>
						</div>
					</div>
					<div class="oceanly-panel oceanly-panel--highlight">
						<div class="oceanly-panel-content">
							<span class="oceanly-panel-title"><?php esc_html_e( 'Premium Version', 'oceanly-news' ); ?></span>
							<p class="description">
								<?php esc_html_e( 'Oceanly Premium comes with additional features:', 'oceanly-news' ); ?>
							</p>
							<div class="oceanly-check-list-wrap">
								<ul class="oceanly-check-list">
									<li><?php esc_html_e( 'Top Header Bar', 'oceanly-news' ); ?></li>
									<li><?php esc_html_e( 'Header Social Links', 'oceanly-news' ); ?></li>
									<li><?php esc_html_e( 'Header Top Menu', 'oceanly-news' ); ?></li>
									<li><?php esc_html_e( '3 Header Block Areas', 'oceanly-news' ); ?></li>
									<li><?php esc_html_e( '2 Footer Block Areas', 'oceanly-news' ); ?></li>
									<li><?php esc_html_e( '6 Footer Widgets Locations', 'oceanly-news' ); ?></li>
								</ul>
								<ul class="oceanly-check-list">
									<li><?php esc_html_e( 'Custom Accent Colors', 'oceanly-news' ); ?></li>
									<li><?php esc_html_e( 'Custom Link Color', 'oceanly-news' ); ?></li>
									<li><?php esc_html_e( 'Custom Menu Color', 'oceanly-news' ); ?></li>
									<li><?php esc_html_e( 'Custom Breadcrumbs Color', 'oceanly-news' ); ?></li>
									<li><?php esc_html_e( 'Multiple Google Fonts', 'oceanly-news' ); ?></li>
									<li><?php esc_html_e( 'Option to Host Fonts Locally', 'oceanly-news' ); ?></li>
								</ul>
								<ul class="oceanly-check-list">
									<li><?php esc_html_e( 'Removable Footer Credit', 'oceanly-news' ); ?></li>
									<li><?php esc_html_e( 'Custom Header Height', 'oceanly-news' ); ?></li>
									<li><?php esc_html_e( 'RGBA Color Options', 'oceanly-news' ); ?></li>
									<li><?php esc_html_e( 'Dedicated Support', 'oceanly-news' ); ?></li>
									<li><?php esc_html_e( 'Advanced Theme Options', 'oceanly-news' ); ?></li>
									<li><?php esc_html_e( 'Unlimited Color Options', 'oceanly-news' ); ?></li>
								</ul>
							</div>
							<a target="_blank" href="<?php echo esc_url( Oceanly\Helpers::get_upsell_buy_url() ); ?>" class="button button-primary"><strong><?php esc_html_e( 'Get Premium', 'oceanly-news' ); ?></strong></a>
						</div>
					</div>
					<div class="oceanly-panel">
						<div class="oceanly-panel-content">
							<span class="oceanly-panel-title"><?php esc_html_e( 'Colors & Background', 'oceanly-news' ); ?></span>
							<p class="description">
								<?php esc_html_e( 'You can customize the body background image in the Customizer > Background Image. Also, you can change the background color from Customizer > Colors.', 'oceanly-news' ); ?>
							</p>
						</div>
						<div class="oceanly-panel-actions">
							<a target="_blank" href="<?php echo esc_url( admin_url( 'customize.php' ) ); ?>?autofocus[section]=colors" class="button"><?php esc_html_e( 'Theme Colors', 'oceanly-news' ); ?></a>
							<a target="_blank" href="<?php echo esc_url( admin_url( 'customize.php' ) ); ?>?autofocus[section]=background_image" class="button"><?php esc_html_e( 'Background Image', 'oceanly-news' ); ?></a>
						</div>
					</div>
					<div class="oceanly-panel">
						<div class="oceanly-panel-content">
							<span class="oceanly-panel-title"><?php esc_html_e( 'Theme Widgets', 'oceanly-news' ); ?></span>
							<p class="description">
								<?php esc_html_e( 'You can drag and drop widgets to the widget area. Oceanly News comes with 4 widgets area locations which include a main sidebar and three locations for footer widgets.', 'oceanly-news' ); ?>
							</p>
						</div>
						<div class="oceanly-panel-actions">
							<a target="_blank" href="<?php echo esc_url( admin_url( 'widgets.php' ) ); ?>" class="button"><?php esc_html_e( 'Widgets', 'oceanly-news' ); ?></a>
						</div>
					</div>
					<div class="oceanly-panel">
						<div class="oceanly-panel-content">
							<span class="oceanly-panel-title"><?php esc_html_e( 'Header Block Area', 'oceanly-news' ); ?></span>
							<p class="description">
								<?php esc_html_e( 'You can enable the header block area by creating a block in the reusable block manager. Then select this block in the Customizer > Header Block Area. Oceanly News comes with 1 header block area.', 'oceanly-news' ); ?>
							</p>
						</div>
						<div class="oceanly-panel-actions">
							<a target="_blank" href="<?php echo esc_url( admin_url( 'customize.php' ) ); ?>?autofocus[section]=sec_header_block_area" class="button"><?php esc_html_e( 'Header Blocks', 'oceanly-news' ); ?></a>
							<a target="_blank" href="<?php echo esc_url( admin_url( 'edit.php?post_type=wp_block' ) ); ?>" class="button"><?php esc_html_e( 'Reusable Blocks', 'oceanly-news' ); ?></a>
						</div>
					</div>
				</div>
			</div>
		</div>
		<?php
	}
}

/**
 * Adds a theme menu page.
 */
function oceanly_news_create_menu() {
	$oceanly_page = add_theme_page(
		esc_html_x( 'Oceanly News', 'page title', 'oceanly-news' ),
		esc_html_x( 'Oceanly News', 'menu title', 'oceanly-news' ),
		'edit_theme_options',
		'oceanly-options',
		'oceanly_page'
	);
	add_action( 'admin_print_styles-' . $oceanly_page, 'oceanly_options_styles' );
}
add_action( 'admin_menu', 'oceanly_news_create_menu' );

/**
 * Add a notice after theme activation.
 */
function oceanly_news_welcome_notice() {
	global $pagenow;
	if ( is_admin() && isset( $_GET['activated'] ) && 'themes.php' === $pagenow ) { // phpcs:ignore
		?>
		<div class="updated notice notice-success is-dismissible">
			<p>
				<?php
				echo wp_kses(
					sprintf(
						/* translators: %s: Welcome page link. */
						__( 'Welcome! Thank you for choosing Oceanly News theme. To get started, visit our <a href="%s">welcome page</a>.', 'oceanly-news' ),
						esc_url( admin_url( 'themes.php?page=oceanly-options' ) )
					),
					array( 'a' => array( 'href' => array() ) )
				);
				?>
			</p>
			<p>
				<a class="button" href="<?php echo esc_url( admin_url( 'themes.php?page=oceanly-options' ) ); ?>">
					<?php esc_html_e( 'Get started with Oceanly News', 'oceanly-news' ); ?>
				</a>
			</p>
		</div>
		<?php
	}
}
add_action( 'admin_notices', 'oceanly_news_welcome_notice' );
