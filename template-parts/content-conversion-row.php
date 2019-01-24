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
					<?php if( get_field('modulo') == 'lira' ): ?>
					<a data-toggle="modal" data-target="#ApresentacaoLIRA">
					<?php elseif ( get_field('modulo') == 'auditoria' ): ?>
					<a data-toggle="modal" data-target="#ApresentacaoAud">
					<?php elseif ( get_field('modulo') == 'gaia' ): ?>
					<a data-toggle="modal" data-target="#ApresentacaoGaia">
					<?php elseif ( get_field('modulo') == 'prsst' ): ?>
					<a data-toggle="modal" data-target="#ApresentacaoPRSSO">
					<?php elseif ( get_field('modulo') == 'tnc' ): ?>
					<a data-toggle="modal" data-target="#ApresentacaoTNC">
					<?php elseif ( get_field('modulo') == 'rl' ): ?>
					<a data-toggle="modal" data-target="#ApresentacaoLIRA">
					<?php elseif ( get_field('modulo') == 'rn' ): ?>
					<a data-toggle="modal" data-target="#ApresentacaoGRC">
					<?php elseif ( get_field('modulo') == 'licencas' ): ?>
					<a data-toggle="modal" data-target="#ApresentacaoLic">
					<?php elseif ( get_field('modulo') == 'doc' ): ?>
					<a data-toggle="modal" data-target="#ApresentacaoDoc">
					<?php elseif ( get_field('modulo') == 'liracorp' ): ?>
					<a data-toggle="modal" data-target="#ApresentacaoCorp">
					<?php endif ?>
					<div class="pointer">
						<img class="p-b-15" src="<?php echo get_template_directory_uri(); ?>/assets/imagens/download-arrow.png" alt="baixar apresentação"><br>
						<span>BAIXE A APRESENTAÇÃO</span>
					</div>
					</a>
				</div>
				<div class="col-md-6 p-t-c">
					<?php if( get_field('modulo') == 'lira' ): ?>
						<a class="btn-def btn-yellow v-center" data-toggle="modal" data-target="#ApresentacaoLIRA">CONTRATE O LIRA</a>
					<?php elseif ( get_field('modulo') == 'auditoria' ): ?>
						<a class="btn-def btn-yellow v-center"  data-toggle="modal" data-target="#ApresentacaoAud">CONTRATE O AUDITORIA</a>
					<?php elseif ( get_field('modulo') == 'gaia' ): ?>
						<a class="btn-def btn-yellow v-center" data-toggle="modal" data-target="#ApresentacaoGaia">CONTRATE O GAIA</a>
					<?php elseif ( get_field('modulo') == 'prsst' ): ?>
						<a class="btn-def btn-yellow v-center" data-toggle="modal" data-target="#ApresentacaoPRSSO">CONTRATE O PRSSO</a>
					<?php elseif ( get_field('modulo') == 'tnc' ): ?>
						<a class="btn-def btn-yellow v-center" data-toggle="modal" data-target="#ApresentacaoTNC">CONTRATE O TNC</a>
					<?php elseif ( get_field('modulo') == 'rl' ): ?>
						<a class="btn-def btn-yellow v-center" onclick="scrollToElement('#conversionRow', -100)">CONTRATE O RISCO LEGAL</a>
					<?php elseif ( get_field('modulo') == 'rn' ): ?>
						<a class="btn-def btn-yellow v-center" onclick="scrollToElement('#conversionRow', -100)">CONTRATE O RISCO DO NEGÓCIO</a>
					<?php elseif ( get_field('modulo') == 'licencas' ): ?>
						<a class="btn-def btn-yellow v-center" data-toggle="modal" data-target="#ApresentacaoLic">CONTRATE O LICENÇAS</a>
					<?php elseif ( get_field('modulo') == 'doc' ): ?>
						<a class="btn-def btn-yellow v-center" data-toggle="modal" data-target="#ApresentacaoDoc">CONTRATE O DOCUMENTOS</a>
					<?php elseif ( get_field('modulo') == 'liracorp' ): ?>
						<a class="btn-def btn-yellow v-center" data-toggle="modal" data-target="#ApresentacaoCorp">CONTRATE AGORA</a>
					<?php endif ?>
				</div>
			</div>
		</div>
	</div>
</section>