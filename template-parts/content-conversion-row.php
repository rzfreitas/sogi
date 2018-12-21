<section>
	<?php if( get_field('modulo') == 'lira' ): ?>
	<div class="bg-lira conversion-row" id="diagonal-border">
	<?php elseif ( get_field('modulo') == 'auditoria' ): ?>
	<div class="bg-aud conversion-row" id="diagonal-border">
	<?php elseif ( get_field('modulo') == 'gaia' ): ?>
	<div class="bg-gaia conversion-row" id="diagonal-border">
	<?php elseif ( get_field('modulo') == 'prsst' ): ?>
	<div class="bg-prsst conversion-row" id="diagonal-border">
	<?php elseif ( get_field('modulo') == 'tnc' ): ?>
	<div class="bg-tnc conversion-row" id="diagonal-border">
	<?php elseif ( get_field('modulo') == 'rl' ): ?>
	<div class="bg-rl conversion-row" id="diagonal-border">
	<?php elseif ( get_field('modulo') == 'rn' ): ?>
	<div class="bg-rn conversion-row" id="diagonal-border">
	<?php elseif ( get_field('modulo') == 'licencas' ): ?>
	<div class="bg-licencas conversion-row" id="diagonal-border">
	<?php elseif ( get_field('modulo') == 'doc' ): ?>
	<div class="bg-doc conversion-row" id="diagonal-border">
	<?php elseif ( get_field('modulo') == 'liracorp' ): ?>
	<div class="bg-liracorp conversion-row" id="diagonal-border">
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