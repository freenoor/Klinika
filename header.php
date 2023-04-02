<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package klinika
 */

?>
<!doctype html>
	<html <?php language_attributes(); ?>>
		<head>
			<meta charset="<?php bloginfo( 'charset' ); ?>">
			<meta name="viewport" content="width=device-width, initial-scale=1">
			<link rel="profile" href="https://gmpg.org/xfn/11">
			<?php wp_head(); ?>
		</head>

<body <?php body_class(); ?>>
	<?php wp_body_open(); ?>
		<div id="page" class="site">
			<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'malerc' ); ?></a>
				<header>
					<?php if (is_front_page() || is_404() ): ?>
						<div class="container-fluid">
								<div class="menu-here"> 
									<nav class="navbar navbar-expand-lg navbar-light navbar-center wfixed">
										<a class="logo_header" style="list-style: none;" href="<?php echo esc_url(home_url('/')); ?>">
											<?php dynamic_sidebar('logo');?>
										</a> 
										<div class="right_headers">
											<div class="number__contact">
												<?php dynamic_sidebar('headernr');?>
											</div>
											<div class="angebot__unv">
												<a href="<?php the_field('angebotlink'); ?>"><?php the_field('angebotlink_name'); ?> </a>
											</div>
										</div>
									</nav>
								</div>
							</div>
					<?php else: ?>
					<?php endif;?>
				</header>