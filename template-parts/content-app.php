<?php if( is_page('Home') ): ?>
<section>	
	<div class="bg-app">
		<div class="container p-t-50 p-b-50">
			<div class="row">
				<div class="col-8">
					<h2>Controle de leis na <br> palma da sua mão</h2>
					<p>Agora o Software de Gestão da Verde Ghaia SOGI - conta com um app que vai revolucionar a maneira como você atende as leis! Com o VG Digital já é possível fazer anotações, enviar fotos, criar evidências e muito mais. Este é o diferencial que você precisa!</p>
					<p class="p-t-15 p-b-15">Disponível na sua loja app:</p>
					<div class="d-inline-flex">
						<div>
							<img src="<?php echo get_template_directory_uri(); ?>/assets/imagens/app-store.png" alt="app store">
						</div>
						<div>
							<img src="<?php echo get_template_directory_uri(); ?>/assets/imagens/google-play.png" alt="google play">
						</div>
					</div>
				</div>
				<div class="col-4">
					<img class="p-t-50" src="<?php echo get_template_directory_uri(); ?>/assets/imagens/app-vg.png" alt="app leis">
				</div>
			</div>
		</div>
	</div>
</section>
<?php elseif ( is_page('Lira') ): ?>
<section>	
	<div class="bg-app-lira">
		<div class="container p-t-50 p-b-50">
			<div class="row">
				<div class="col-8">
					<h2>Monitorar suas leis <br> ficou muito mais fácil</h2>
					<p>As principais funcionalidades do LIRA estão disponíveis no app VG Digital. Pelo celular é possível fazer anotações, enviar fotos, criar evidências e muito mais. Este é o diferencial que você precisa!</p>
					<p class="p-t-15 p-b-15">Disponível na sua loja app:</p>
					<div class="d-inline-flex">
						<div>
							<img src="<?php echo get_template_directory_uri(); ?>/assets/imagens/app-store.png" alt="app store">
						</div>
						<div>
							<img src="<?php echo get_template_directory_uri(); ?>/assets/imagens/google-play.png" alt="google play">
						</div>
					</div>
				</div>
				<div class="col-4">
					<img class="p-t-50" src="<?php echo get_template_directory_uri(); ?>/assets/imagens/app-vg.png" alt="app leis">
				</div>
			</div>
		</div>
	</div>
</section>
<?php endif; ?>