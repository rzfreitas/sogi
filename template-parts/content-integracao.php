
<div class="container p-t-50 p-b-50 info-modulo">
	<h2 class="text-center">ESCOLHA O MELHOR PLANO PARA SUA EMPRESA</h2>
	<div class="blue-block m-t-50">
		<h3>LICENÇA DE USO</h3>
		<p>(federal + 01 estado + 01 município)</p>
	</div>
	<div class="blue-square p-adesao">
		<div class="d-flex">
			<div class="col-md-4 text-center">
				<div class="v-center"><strong>1º - ADESÃO:</strong></div>
			</div>
			<div class="col-md-8 d-flex">
				<div class="card-preco">
					<div class="check-adessao"><input type="radio" name="adesao" value="presencial"> Adesão Presencial</div>
					<div class="preco"><div class="valor">R$ 2.800,00</div> Parcela única</div>
				</div>
				<div class="card-preco">
					<div class="check-adessao"><input type="radio" name="adesao" value="distancia"> Adesão à Distância</div>
					<div class="preco"><div class="valor">R$ 1.900,00*</div> Parcela única <br> (*Exceto normas de qualidade)</div>
				</div>
			</div>
		</div>
	</div>
	<div class="blue-square">
		<div class="d-flex">
			<div class="col-md-4 text-center">
				<div class="v-center"><strong>2º - MENSALIDADE:</strong></div>
			</div>
			<div class="col-md-8 d-flex">
				<div class="card-preco no-m">
					<div class="v-center"><strong>Número de Normas</strong></div>
				</div>
				<div class="preco">
					R$
				</div>
			</div>
		</div>
	</div>
	<div class="blue-block">
		<div class="row">
			<div class="col-md-6">
				<h3>Total:</h3>
			</div>
			<div class="col-md-6">
			</div>
		</div>
	</div>
	<div class="m-t-15">
		<div class="d-flex">
			<div class="btn-imprimir">
				<a class=""><i class="fa fa-print"></i>  Imprimir proposta</a>
			</div>
			<div class="btn-red">
				<a class="">Contratar</a>
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
</script>