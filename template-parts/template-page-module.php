<?php /* Template Name: Página dos módulos */ 

get_header(); ?>

<section>
	<?php if( get_field('modulo') == 'lira' ): ?>
	<div class="bg-banner-lira">
	<?php elseif ( get_field('modulo') == 'auditoria' ): ?>
	<div class="bg-banner-aud">
	<?php elseif ( get_field('modulo') == 'gaia' ): ?>
	<div class="bg-banner-gaia">
	<?php elseif ( get_field('modulo') == 'prsst' ): ?>
	<div class="bg-banner-prsst">
	<?php elseif ( get_field('modulo') == 'tnc' ): ?>
	<div class="bg-banner-tnc">
	<?php elseif ( get_field('modulo') == 'rl' ): ?>
	<div class="bg-banner-rl">
	<?php elseif ( get_field('modulo') == 'rn' ): ?>
	<div class="bg-banner-rn">
	<?php elseif ( get_field('modulo') == 'licencas' ): ?>
	<div class="bg-banner-licencas">
	<?php elseif ( get_field('modulo') == 'doc' ): ?>
	<div class="bg-banner-doc">
	<?php elseif ( get_field('modulo') == 'liracorp' ): ?>
	<div class="bg-banner-liracorp">
	<?php endif ?>
		<div class="container v-center">
			<div class="row">
				<?php					
				$cbanner = get_field('content_banner');
				if( $cbanner ): ?>
				<div class="col-md-8 align-vid">
					<?php echo $cbanner['video_youtube']; ?>
				</div>
				<div class="col-md-4">
					<div class="d-flex">
						<div class="w-img">
							<img src="<?php echo $cbanner['img_modulo']['url']; ?>" alt="<?php echo $cbanner['img_modulo']['alt']; ?>" />
						</div>
						<div class="w-text">
							
								<h1><?php echo $cbanner['titulo_banner']; ?></h1>
								<p><?php echo $cbanner['descricao_banner']; ?></p>
							<?php endif; ?>
						</div>
					</div>					
				</div>
			</div>
		</div>		
	</div>
</section>

<section>
	<div class="p-relative">
		<div class="container p-t-50">
			<p>
				<?php echo get_field('infos_modulo'); ?>
			</p>
			<div class="text-center p-t-50">
				<?php 

				$image = get_field('img_tela');

				if( !empty($image) ): ?>

					<img class="full-width" src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />

				<?php endif; ?>
			</div>
		</div>
		<?php get_template_part('template-parts/content' , 'conversion-row'); ?>
	</div>
</section>

<?php if( get_field('modulo') == 'lira' ){ ?>
<section>
	<div class="container p-t-50 vantagens-lira">
		<h2 class="text-center">As Vantagens:</h2>
		<div class="row d-flex p-t-50 text-center">
			<div class="col-md-4">
				<img src="<?php echo get_template_directory_uri(); ?>/assets/imagens/lira/update.png" alt="Informação atualizada">
				<p>Informação clara, atualizada constantemente e adaptada ao ramo de negócio da organização.</p>
			</div>
			<div class="col-md-4">
				<img src="<?php echo get_template_directory_uri(); ?>/assets/imagens/lira/check.png" alt="Informação atualizada">
				<p>Possibilidade de criação e personalização do perfil do usuário, como controle de acesso, visualização e impressão de relatórios, permissões de grupos e distribuição de tarefas para os usuários.</p>
			</div>
			<div class="col-md-4">
				<img src="<?php echo get_template_directory_uri(); ?>/assets/imagens/lira/alertas.png" alt="Informação atualizada">
				<p>Alertas para validação de novos requisitos legais, planos de ações vencidos, cartas mensais de atualização, acompanhamento de pendências, entre outros.</p>
			</div>
		</div>
		<div class="row d-flex p-t-50 text-center">
			<div class="col-md-4">
				<img src="<?php echo get_template_directory_uri(); ?>/assets/imagens/lira/relatorios.png" alt="Informação atualizada">
				<p>Relatórios com posicionamento sobre auditorias, tratamento de não conformidades e de pendências.</p>
			</div>
			<div class="col-md-4">
				<img src="<?php echo get_template_directory_uri(); ?>/assets/imagens/lira/indicadores.png" alt="Informação atualizada">
				<p> Indicadores de tratamento de não conformidade, auditoria de conformidade legal, estatística de atendimento à conformidade legal.</p>
			</div>
			<div class="col-md-4">
				<img src="<?php echo get_template_directory_uri(); ?>/assets/imagens/lira/versoes.png" alt="Informação atualizada">
				<p>Versão corporativa para visualização da informação de forma integrada de cada uma das unidades de negócio (saiba mais).</p>
			</div>
		</div>
	</div>
</section>
<?php } ?>

<?php get_template_part('template-parts/content' , 'modulos'); ?>

<?php if( get_field('modulo') == 'lira' ): ?>
	<div class="lira-count">
	<?php elseif ( get_field('modulo') == 'auditoria' ): ?>
	<div class="aud-gaia-count">
	<?php elseif ( get_field('modulo') == 'gaia' ): ?>
	<div class="aud-gaia-count">
	<?php elseif ( get_field('modulo') == 'prsst' ): ?>
	<div class="prsst-count">
	<?php elseif ( get_field('modulo') == 'tnc' ): ?>
	<div class="tnc-count">
	<?php elseif ( get_field('modulo') == 'rl' ): ?>
	<div class="rl-count">
	<?php elseif ( get_field('modulo') == 'rn' ): ?>
	<div class="rn-count">
	<?php elseif ( get_field('modulo') == 'licencas' ): ?>
	<div class="licencas-count">
	<?php elseif ( get_field('modulo') == 'doc' ): ?>
	<div class="doc-count">
	<?php elseif ( get_field('modulo') == 'liracorp' ): ?>
	<div class="liracorp-count">
<?php endif ?>
	<div class="container p-t-50 p-b-50 p-a-p">
		<h2 class="text-center">Passo a passo para Implantação da <?php echo the_field('p_modulo') ?> na sua empresa</h2>
		<div class="p-t-50">
			<?php if( have_rows('etapas') ): ?>
			<ol>
			    <?php while ( have_rows('etapas') ) : the_row(); ?>
			        <li><p><?php the_sub_field('desc_etapa') ?></p></li>
			    <?php endwhile; ?>
			</ol>
			<?php endif; ?>
		</div>
	</div>
</div>

<?php get_footer(); ?>