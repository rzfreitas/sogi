<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package risco-legal
 */

?>

	</div><!-- #content -->

	<section>
		<?php if ( !is_singular( 'post' ) && !is_page('Blog') ) { ?>
			<?php get_template_part( 'template-parts/content', 'noticias' ); ?>
		<?php } ?>   
	</section>

	<footer class="n-footer">
		<div class="container text-center p-b-25">
			<a href="<?php echo home_url(); ?>"><img src="<?php bloginfo('template_directory'); ?>/assets/imagens/logos/logo-vg-footer.svg" alt="logo Verde Ghaia"></a>
		</div>

		<div class="container block-links">
			<div class="row">
				<div class="col links">
					<ul>
						<h3 class="p-b-15"><strong>Links úteis</strong></h3>
						<li><a href="<?php echo get_home_url(); ?>/biblioteca" target="_blank"> Biblioteca VG </a></li>
						<li><a href="http://www.abnt.org.br/ " target="_blank"> ABNT </a></li>
						<li><a href="http://www.iso.org/iso/home.html" target="_blank"> ISO </a></li>
						<li><a href="https://sogi8.sogi.com.br/" target="_blank"> soGI8 </a></li>
						<li><a href="http://deivisonpedroza.com.br/" target="_blank"> Deivison Pedroza </a></li>
						<li><a href="http://palestrantesfamosos.org" target="_blank"> Palestrantes Famosos </a></li>
						<li><a href="http://futurelegis.sogi.com.br/" target="_blank"> FutureLegis </a></li>
					</ul>
				</div>

				<div class="col links">
					<ul>
						<h3 class="p-b-15"><strong>O Grupo</strong></h3>
						<li><a href="https://www.verdeghaia.com.br/" target="_blank"></i> Verde Ghaia Grupo </a></li>
						<li><a href="https://www.vgresiduos.com.br/" target="_blank"></i> VG Resíduos </a></li>
						<li><a href="https://www.consultoriaiso.org/" target="_blank"> Consultoria Online </a></li>
						<li><a href="http://oksigeno.org.br/" target="_blank"> Instituto Oksigeno </a></li>
						<li><a href="http://vgriscolegal.com.br/site/" target="_blank"> VG Risco Legal </a></li>
						<li><a href="http://www.vgbioenergia.com.br/" target="_blank"> VG Bio Energia </a></li>
					</ul>
				</div>

				<div class="col links p-t-c">
					<ul>
						<h3 class="p-b-15"><strong>Certificações</strong></h3>
						<li><a href="http://www.consultoriaiso.org/iso-9001/o-que-e-iso-9001/" target="_blank">ISO 9001</a></li>
						<li><a href="http://www.consultoriaiso.org/iso-14001/o-que-e-iso-14001/" target="_blank">ISO 14001</a></li>
						<li><a href="http://www.consultoriaiso.org/iso-22000/o-que-e-iso-22000/" target="_blank">ISO 22000</a></li>
						<li><a href="http://www.consultoriaiso.org/ohsas-18001/o-que-e-ohsas-18001/" target="_blank">OHSAS 18001</a></li>
						<li><a href="http://www.consultoriaiso.org/iso-9001/migracao-para-empresas-certificadas-iso-9001-2015/" target="_blank">Migração ISO 9001 versão 2015</a></li>
					</ul>
				</div>

				<div class="col links p-t-c">
					<ul>
						<h3 class="p-b-15"><strong>Regionais</strong></h3>
						<li>Norte Fluminense - RJ</li>
						<li>Porto Alegre - RS</li>
						<li>Guarulhos - SP</li>
						<li>Recife - RE</li>
						<li>Dourados - MS</li>
						<li>Campinas - SP</li>
					</ul>
				</div>

				<div class="col links">
					<ul>
						<h3 class="p-b-15"><strong>Regional SP</strong></h3>
						<li>Av Brigadeiro Luiz Antônio, n° 2909, Sala 64/65, Jardim Paulista/SP - CEP: 01401-000</li>
					</ul>
				</div>
			</div>
		</div> <!-- row links -->

		<div class="container">
			<div class="social-footer text-right m-center">							
				<ul class="icons-social">
					<li><a href="https://www.facebook.com/verdeghaia" target="_blank"><i class="fa fa-facebook"></i></a></li>
					<li><a href="https://www.linkedin.com/company-beta/1959430/" target="_blank"><i class="fa fa-linkedin"></i></a></li>
					<li><a href="https://twitter.com/verdeghaia" target="_blank"><i class="fa fa-twitter"></i></a></li>
					<li><a href="https://plus.google.com/103021621222845476497" target="_blank"><i class="fa fa-google-plus"></i></a></li>
					<li><a href="https://www.youtube.com/user/canalverdegaia?sub_confirmation=1" target="_blank"><i class="fa fa-youtube"></i></a></li>
					<!--a href="https://instagram.com/vgconsultoriaonline" target="_blank"><i class="fa fa-instagram"></i></a-->
					<li><a href="javascript:void(0);" id="scroll" title="Ir para o topo"><span></span></a></li>
				</ul>
			</div>
		</div> <!-- row social -->
		
		<div class="container p-t-25 m-center">
			<p>© Copyright 2018 - <a href="https://www.verdeghaia.com.br" target="_blank">Grupo Verde Ghaia</a> - Todos os direitos reservados.</p>
		</div>			

		<?php get_template_part('template-parts/content' , 'forms'); ?>

		<script type="text/javascript" async src="https://d335luupugsy2.cloudfront.net/js/loader-scripts/9e7b6fda-6e27-4a26-9955-5e1183632a88-loader.js" ></script>
		
	</footer> <!-- end .footer -->

	<a href="https://api.whatsapp.com/send?phone=5531984218970&text=">
		<div class="click-wpp">
			<img src="<?php echo get_template_directory_uri(); ?>/assets/imagens/whatsapp-logo-32x32.png" alt="click to chat">
			<span>Vendas por WhatsApp</span>
		</div>
	</a>
	
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>