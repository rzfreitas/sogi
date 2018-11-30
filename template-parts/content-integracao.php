
<div class="container p-t-50 p-b-50 info-modulo">
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