<div class="container p-t-100 p-b-100" id="conversionRow">
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
			<!-- <form class="p-t-25" action="">
				<div class="form-field">
					<label class="w-10">Nome:</label>
					<input class="w-90" type="text" name="nome">	
				</div>
				<div class="form-field">
					<label class="w-10">E-mail:</label>
					<input class="w-90" type="text" name="email">
				</div>
				<div class="form-field">
					<label class="w-10">Empresa:</label>
					<input class="w-90" type="text" name="empresa">
				</div>
				<div class="form-field">
					<label class="w-10">CNPJ:</label>
					<input class="w-90" type="text" name="" id="maskCnpj">
				</div>
			</form> -->
		</div>
	</div>

	<div class="block-integration m-t-15 d-none" id="block-2">		
		<div class="block-integration-header">
			<p>2 - Comprar</p>
			<div class="float-right">
				<i class="fa fa-caret-down"></i>
			</div>
		</div>
		<div class="block-integration-body">			
			<div class="dp-flex">
				<div class="block-licencas">					
					<div class="v-center dp-flex">
						<div class="w-10">
							<input type="number" id="anuidades" name="anuidades" min="1" max="100" value="1">
						</div>
						<div class="w-90 dp-flex">
							<div><p>Quantidade de Licenças de uso</p></div>
							<div class="NomeModulo"></div>
						</div>
					</div>
					
				</div>				
				<div class="block-precos-licencas">
					<div class="PrecoModulo"></div>
					<p>dividido em <span class="NumeroParcelas"></span> de <span class="ParcelasModulo"></span></p>
				</div>
			</div>			
			<div class="text-center p-t-50">
				<a class="btn-def btn-azul" data-toggle="modal" data-target="#SogiContato">Falar com o comercial</a>
				<a class="btn-def btn-azul">Imprimir proposta</a>
				
				<?php if ( get_field('modulo') == 'auditoria' ): ?>
					<a class="btn-def btn-yellow" onclick="javascript:redirect_loja(115);">Comprar</a>
				<?php elseif ( get_field('modulo') == 'gaia' ): ?>
					<a class="btn-def btn-yellow" onclick="javascript:redirect_loja(50);">Comprar</a>
				<?php elseif ( get_field('modulo') == 'prsst' ): ?>
					<a class="btn-def btn-yellow" onclick="javascript:redirect_loja();">Comprar</a>
				<?php elseif ( get_field('modulo') == 'tnc' ): ?>
					<a class="btn-def btn-yellow" onclick="javascript:redirect_loja(116);">Comprar</a>
				<?php elseif ( get_field('modulo') == 'rl' ): ?>
					<a class="btn-def btn-yellow" onclick="javascript:redirect_loja();">Comprar</a>
				<?php elseif ( get_field('modulo') == 'rn' ): ?>
					<a class="btn-def btn-yellow" onclick="javascript:redirect_loja();">Comprar</a>
				<?php elseif ( get_field('modulo') == 'licencas' ): ?>
					<a class="btn-def btn-yellow" onclick="javascript:redirect_loja();">Comprar</a>
				<?php elseif ( get_field('modulo') == 'doc' ): ?>
					<a class="btn-def btn-yellow" onclick="javascript:redirect_loja(52);">Comprar</a>
				<?php elseif ( get_field('modulo') == 'liracorp' ): ?>
				<?php endif ?>				
			</div>
			
		</div>
	</div>
</div>
	
	<?php if ( get_field('modulo') == 'auditoria' ): ?>
		<script>
		$('#anuidades').bind('keyup mouseup', function(){
			var valorAnuidade = $(this).val();			
			getProductDetails(115, valorAnuidade);
		});
		document.addEventListener('DOMContentLoaded', function() {
		    getProductDetails(115, 1);
		}, false);
		</script>
	<?php elseif ( get_field('modulo') == 'gaia' ): ?>
		<script>
		$('#anuidades').bind('keyup mouseup', function(){
			var valorAnuidade = $(this).val();			
			getProductDetails(50, valorAnuidade);
		});
		document.addEventListener('DOMContentLoaded', function() {
		    getProductDetails(50, 1);
		}, false);
		</script>
	<?php elseif ( get_field('modulo') == 'prsst' ): ?>
	
	<?php elseif ( get_field('modulo') == 'tnc' ): ?>
		<script>
		$('#anuidades').bind('keyup mouseup', function(){
			var valorAnuidade = $(this).val();			
			getProductDetails(116, valorAnuidade);
		});
		document.addEventListener('DOMContentLoaded', function() {
		    getProductDetails(116, 1);
		}, false);
		</script>
	<?php elseif ( get_field('modulo') == 'rl' ): ?>
	
	<?php elseif ( get_field('modulo') == 'rn' ): ?>
	
	<?php elseif ( get_field('modulo') == 'licencas' ): ?>
	
	<?php elseif ( get_field('modulo') == 'doc' ): ?>
		<script>
		$('#anuidades').bind('keyup mouseup', function(){
			var valorAnuidade = $(this).val();			
			getProductDetails(52, valorAnuidade);
		});
		document.addEventListener('DOMContentLoaded', function() {
		    getProductDetails(52, 1);
		}, false);
		</script>
	<?php elseif ( get_field('modulo') == 'liracorp' ): ?>
	
<?php endif ?>

<script>
function getProductDetails(p_ProductID, idAnuidades) {
	var idProduto = p_ProductID;
	jQuery.ajax({
		url: 'https://loja-prod.sgionline.com.br/LojaVGServer/api/v0/product/getProductDetailsFull',
		type: 'GET',
		headers: {
			'X-Requested-With': 'XMLHttpRequest',
			'productID': idProduto,
		},
		contentType: 'application/json; charset=utf-8',

		success: function (result) {
			$('.NomeModulo').html(result.content.description);
			var totalModulo =  (result.content.priceOptionList.list.price * idAnuidades).toFixed(2);
			$('.PrecoModulo').html("R$ " + totalModulo);
			var parcelas = (totalModulo / 12).toFixed(2);
			$('.ParcelasModulo').html("R$ " + parcelas);
			$('.NumeroParcelas').html(12 * idAnuidades + "x");
		}
	});
}

function redirect_loja(p_ProductID){
	var idProduct = p_ProductID;
	alert("Obrigado! Você está sendo direcionado para a loja da Verde Ghaia.");
	var url  = 'http://loja.sgionline.com.br/produto/'+ idProduct;
	window.location.replace(url);
}

document.addEventListener( 'wpcf7submit', function( event ) {
    $('#block-2').removeClass('d-none');
}, false );

</script>