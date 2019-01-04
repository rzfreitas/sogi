<div class="container p-t-50 p-b-50" id="conversionRow">
	<div class="text-center p-b-50 t-integration">
		<h2>ESCOLHA O MELHOR PLANO PARA SUA EMPRESA:</h2>
	</div>
	<div class="block-integration">
		<div class="block-integration-header">
			<p>1 - Cadastro</p>
			<div class="float-right">
				<i class="fa fa-caret-down"></i>
			</div>
		</div>
		<div class="block-integration-body">
			<h3>Digite seus dados para continuar</h3>
			<?php echo do_shortcode('[contact-form-7 id="473" title="Formulario cadastro"]'); ?>
		</div>
	</div>
	<div class="block-integration">
		<div class="block-integration-header">
			<p>2 - Pacotes</p>
			<div class="float-right">
				<i class="fa fa-caret-down"></i>
			</div>
		</div>
		<div class="block-integration-body " id="block-2">
			<form action ="" class="dp-flex p-t-50">
				<div class="col-pacote">
					<h3>EXPRESS</h3>
					<p>Monitoramento legal + LIRA (até 05 usuários, sem jurídico e com 10 suporte técnico)</p>
					<div class="pacote-preco">R$ 280,00</div>
					<div class="pacote-radio">
						<input type="radio" name="pacoteCheck" id="pacoteChecked" value="151">
					</div>
				</div>
				<div class="col-pacote">
					<h3>LIGHT</h3>
					<p>Monitoramento legal + LIRA + Limite 05 consultas jurídicas mês</p>
					<div class="pacote-preco">R$ 490,00</div>
					<div class="cortesia">
						<span>Cortesia: GAIA e PRSSO</span>
					</div>
					<div class="pacote-radio">
						<input type="radio" name="pacoteCheck" id="pacoteChecked" value="155">
					</div>
				</div>
				<div class="col-pacote mais-popular">
					<h3>PROFESSIONAL</h3>
					<p>Monitoramento legal + LIRA + Limite 10 consultas jurídicas mês</p>
					<div class="pacote-preco">R$ 650,00</div>
					<div class="cortesia">
						<span>Cortesia: GAIA e PRSSO, Auditoria</span>
					</div>
					<div class="pacote-radio">
						<input type="radio" name="pacoteCheck" id="pacoteChecked" value="158">
					</div>
				</div>
				<div class="col-pacote">
					<h3>UNLIMITED</h3>
					<p>Monitoramento legal + LIRA + Dúvidas jurídicas ilimitadas mês + Validação Evidências² (limite de validação evidência)</p>
					<div class="pacote-preco">R$ 850,00</div>
					<div class="cortesia">
						<span>Cortesia: GAIA e PRSST, Auditoria e TNC</span>
					</div>
					<div class="pacote-radio">
						<input type="radio" name="pacoteCheck" id="pacoteChecked" value="163">
					</div>					
				</div>
			</form>
			<div class="p-t-100 p-b-100">
				<p>Esse valor refere-se às mensalidades para monitoramento de três normas (Meio Ambiente, Saúde e Segurança e Responsabilidade Social). No ato da contratação será acrescentada taxa única de Adesão ao Sistema de R$ 2.800,00.</p>
			</div>
			<div class="text-center">
				<a class="btn-def btn-azul" data-toggle="modal" data-target="#SogiContato">Falar com o comercial</a>
				<a class="btn-def btn-azul">Imprimir proposta</a>
				<a class="btn-def btn-yellow" onclick="redirect_loja();">Comprar</a>
			</div>
		</div>
	</div>
	
	<div class="NomeModulo"></div>
	<div class="PrecoModulo"></div>	
</div>

<?php $idModulo = "116"; ?>

<script>
jQuery.ajax({
	url: 'https://loja-prod.sgionline.com.br/LojaVGServer/api/v0/product/getProductDetailsFull',
	type: 'GET',
	data: ({productID: 'idModulo'}),
	headers: {
		'X-Requested-With': 'XMLHttpRequest',
		"productID": "116",
	},
	contentType: 'application/json; charset=utf-8',

	success: function (result) {
		$('.NomeModulo').html(result.content.description);   
		$('.PrecoModulo').html(result.content.priceOptionList.list.price);       
	}
});

document.addEventListener( 'wpcf7mailsent', function( event ) {
    $('#block-2').removeClass('d-none');
}, false );


function redirect_loja(){
	var planProd = $('input[name=pacoteCheck]:checked').val();

	alert("Obrigado! Você está sendo direcionado para a loja da Verde Ghaia.");
	var url  = 'http://loja.sgionline.com.br/produto/'+ planProd;
	window.location.replace(url);
}
</script>