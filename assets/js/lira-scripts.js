$(document).ready(function(){	
	$("#maskCnpj").mask("99.999.999/9999-99");
});

$.ajax({
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