<div class="p-t-50 p-b-50">
	<div class="container box-gray">
		<h2 class="text-center">ESCOLHA O MELHOR PLANO PARA SUA EMPRESA</h2>
		<div class="p-t-50">
			<div class="d-flex">
				<div class="block-licencas">
					<div class="NomeModulo"></div>
					<input type="number" id="anuidades" name="anuidades" min="1" max="100" value="1">
				</div>
				<?php if( get_field('modulo') == 'lira' ): ?>
				<div class="block-precos-licencas bg-lira">
				<?php elseif ( get_field('modulo') == 'auditoria' ): ?>
				<div class="block-precos-licencas bg-aud">
				<?php elseif ( get_field('modulo') == 'gaia' ): ?>
				<div class="block-precos-licencas bg-gaia">
				<?php elseif ( get_field('modulo') == 'prsst' ): ?>
				<div class="block-precos-licencas bg-prsst">
				<?php elseif ( get_field('modulo') == 'tnc' ): ?>
				<div class="block-precos-licencas bg-tnc">
				<?php elseif ( get_field('modulo') == 'rl' ): ?>
				<div class="block-precos-licencas bg-rl">
				<?php elseif ( get_field('modulo') == 'rn' ): ?>
				<div class="block-precos-licencas bg-rn">
				<?php elseif ( get_field('modulo') == 'licencas' ): ?>
				<div class="block-precos-licencas bg-licencas">
				<?php elseif ( get_field('modulo') == 'doc' ): ?>
				<div class="block-precos-licencas bg-doc">
				<?php elseif ( get_field('modulo') == 'liracorp' ): ?>
				<div class="block-precos-licencas bg-liracorp">
				<?php endif ?>
				
					<div class="PrecoModulo"></div>
					<p>dividido em <span class="NumeroParcelas"></span> de <span class="ParcelasModulo"></span>
				</div>
			</div>
		</div>
		<div class="m-t-15">
			<div class="d-flex">
				<div class="btn-imprimir">
					<a class=""><i class="fa fa-print"></i>  Imprimir proposta</a>
				</div>
				<div class="btn-red">	
					<?php if ( get_field('modulo') == 'auditoria' ): ?>
						<a onclick="javascript:redirect_loja(115);">Contratar</a>
					<?php elseif ( get_field('modulo') == 'gaia' ): ?>
						<a onclick="javascript:redirect_loja(50);">Contratar</a>
					<?php elseif ( get_field('modulo') == 'prsst' ): ?>
						<a onclick="javascript:redirect_loja();">Contratar</a>
					<?php elseif ( get_field('modulo') == 'tnc' ): ?>
						<a onclick="javascript:redirect_loja(116);">Contratar</a>
					<?php elseif ( get_field('modulo') == 'rl' ): ?>
						<a onclick="javascript:redirect_loja();">Contratar</a>
					<?php elseif ( get_field('modulo') == 'rn' ): ?>
						<a onclick="javascript:redirect_loja();">Contratar</a>
					<?php elseif ( get_field('modulo') == 'licencas' ): ?>
						<a onclick="javascript:redirect_loja();">Contratar</a>
					<?php elseif ( get_field('modulo') == 'doc' ): ?>
						<a onclick="javascript:redirect_loja();">Contratar</a>
					<?php elseif ( get_field('modulo') == 'liracorp' ): ?>
					<?php endif ?>
				</div>
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
</script>