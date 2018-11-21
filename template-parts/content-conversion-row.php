<section>
	<?php if( get_field('modulo') == 'lira' ): ?>
	<div class="bg-lira conversion-row">
	<?php elseif ( get_field('modulo') == 'auditoria' ): ?>
	<div class="bg-aud conversion-row">
	<?php elseif ( get_field('modulo') == 'gaia' ): ?>
	<div class="bg-gaia conversion-row">
	<?php endif ?>
		<div class="container">
			<div class="row d-flex text-center">
				<div class="col-md-6">
					<img src="<?php echo get_template_directory_uri(); ?>/assets/imagens/download-arrow.png" alt="baixar apresentação"><br>
					<span>BAIXE A APRESENTAÇÃO</span>
				</div>
				<div class="col-md-6 border-yllw">
					<a class="btn-def btn-yellow v-center">CONTRATE O LIRA</a>
				</div>
			</div>
		</div>
	</div>
</section>