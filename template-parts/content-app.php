<?php if( is_page('Home') ): ?>
<section>	
	<div class="bg-app">
		<div class="container p-t-50 p-b-50">
			<div class="row">
				<div class="col-12 col-md-8">
					<h2>Agora o Software de Gestão da Verde Ghaia - SOGI, conta com um app.</h2>
					<p>Agora o Software de Gestão da Verde Ghaia SOGI - conta com um app que vai revolucionar a maneira como você atende as leis! Com o VG Digital já é possível fazer anotações, enviar fotos, criar evidências e muito mais. Este é o diferencial que você precisa!</p>
					<p class="p-t-15 p-b-15">Disponível na sua loja app:</p>
					<div class="d-inline-flex">
						<div>
							<a href="https://itunes.apple.com/br/app/vg-digital/id1407776416?mt=8"><img src="<?php echo get_template_directory_uri(); ?>/assets/imagens/app-store.png" alt="app store"></a>
						</div>
						<div>
							<a href="https://play.google.com/store/apps/details?id=com.vg_digital&hl=pt"><img src="<?php echo get_template_directory_uri(); ?>/assets/imagens/google-play.png" alt="google play"></a>
						</div>
					</div>
				</div>
				<div class="col-12 col-md-4">
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
				<div class="col-12 col-md-8">
					<h2>Monitorar suas leis <br> ficou muito mais fácil</h2>
					<p>As principais funcionalidades do LIRA estão disponíveis no app VG Digital. Pelo celular é possível fazer anotações, enviar fotos, criar evidências e muito mais. Este é o diferencial que você precisa!</p>
					<p class="p-t-15 p-b-15">Disponível na sua loja app:</p>
					<div class="d-inline-flex">
						<div>
							<a href="https://itunes.apple.com/br/app/vg-digital/id1407776416?mt=8"><img src="<?php echo get_template_directory_uri(); ?>/assets/imagens/app-store.png" alt="app store"></a>
						</div>
						<div>
							<a href="https://play.google.com/store/apps/details?id=com.vg_digital&hl=pt"><img src="<?php echo get_template_directory_uri(); ?>/assets/imagens/google-play.png" alt="google play"></a>
						</div>
					</div>
				</div>
				<div class="col-12 col-md-4">
					<img class="p-t-50" src="<?php echo get_template_directory_uri(); ?>/assets/imagens/app-vg.png" alt="app leis">
				</div>
			</div>
		</div>
	</div>
</section>
<?php endif; ?>