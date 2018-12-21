<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package sogi
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
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'sogi' ); ?></a>

	<header id="masthead" class="site-header idHeader">
		<div class="container">
			<div class="row d-flex">
				<div class="col-md-3 col">
					<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><img src="<?php echo get_template_directory_uri(); ?>/assets/imagens/logos/logo-sogi.png" alt="logo sogi"></a>
				</div>		
				<div class="col-md-5 d-none d-sm-block">
					<nav id="site-navigation" class="s-menu text-center v-center">
						<?php
						wp_nav_menu( array(
							'theme_location' => 'menu-1',
							'menu_id'        => 'primary-menu',
						) );
						?>
					</nav><!-- #site-navigation -->
				</div>
				<div class="col-md-4 text-center border-l-w d-none d-sm-block">
					<div class="d-inline-flex v-center">
						<div class="langs">
							<select onchange="javascript:handleSelect(this)">
							  <option value="https://www.verdeghaia.com.br/">PT</option>
							  <option value="https://www.verdeghaia.com/es/">ES</option>
							</select>
						</div>
						<div class="icon-tools p-relative">
							<i id="solucoes-vg" class="fa fa-th"></i>
							<div class="solucoes-vg invisible">
								<h3>Soluções Verde Ghaia</h3>									
								<ul>
									<li>
										<a href="https://contas.verdeghaia.com.br/ServiceLogin?continue=https:%2F%2Fsogi8.sogi.com.br%2F">
										<div><img src="<?php echo get_template_directory_uri(); ?>/assets/imagens/logos/sogi.png" alt="sogi verde ghaia">
											<p>SOGI</p>
										</div></a>
									</li>
									<li>
										<a href="https://vgresiduos.com.br/">
											<div><img src="<?php echo get_template_directory_uri(); ?>/assets/imagens/logos/vg-residuos.png" alt="vg resíduos">
												<p>VG Resíduos</p>
											</div></a>
									</li>
									<li>
										<a href="https://futurelegis.sogi.com.br/">
											<div><img src="<?php echo get_template_directory_uri(); ?>/assets/imagens/logos/future-legis.png" alt="future legis verde ghaia">
												<p>Future Legis</p>
											</div></a>
									</li>
									<li>
										<a href="https://www.consultoriaiso.org/">
											<div><img src="<?php echo get_template_directory_uri(); ?>/assets/imagens/logos/consultoria-online.png" alt="consultoria online verde ghaia">
												<p>Consultoria Online</p>
											</div></a>
									</li>
									<li>
										<a href="https://loja.sgionline.com.br/">
											<div><img src="<?php echo get_template_directory_uri(); ?>/assets/imagens/logos/loja-vg.png" alt="loja verde ghaia">
												<p>Loja</p>
											</div></a>										
									</li>
								</ul>									
							</div>
						</div>
						<div>
							<a class="btn-def btn-azul-h">Sou cliente</a>
						</div>
						<div>
							<a class="btn-def btn-yellow-h">Contato</a>
						</div>
					</div>
				</div>
				<div class="d-block d-sm-none col text-right">
					<span class="menu-mob" id="openNav"><i class="fa fa-bars"></i></span>
				</div>
			</div>
		</div>
	</header><!-- #masthead -->

	<div id="mySidenav" class="sidenav">
		<a href="javascript:void(0)" class="closebtn" id="closeNav">&times;</a>
		<nav>
			<?php
			wp_nav_menu( array(
				'theme_location' => 'menu-1',
				'menu_id'        => 'primary-menu',
			) );
			?>
		</nav>
	</div>

	<div id="content" class="site-content">
