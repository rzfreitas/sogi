//integracao com a loja
/*function getProductDetails(p_ProductID) {
	window.produto = p_ProductID;
	jQuery('#NomeModulo').html("");
	jQuery('#PlanoPorteEmpresa').html("");
	jQuery('#PlanosPrecos').html("");
	jQuery('#PlanosHoras').html("");
	jQuery.ajax({
		url: 'https://loja-prod.sgionline.com.br/LojaVGServer/api/v0/product/getProductDetailsFull',
		type: 'GET',
		headers: {'X-Requested-With': 'XMLHttpRequest', 'productID': p_ProductID},
		contentType: 'application/json; charset=utf-8',    
    	success: function (result) {
			jQuery.each(result.content.priceOptionList.list, function(i, item){
				var radioBtn = jQuery('<input type="radio" name="rbtnPlanoPorteEmpresa" value="' + item.id +'"><div class="inline-fields"><h3>' + item.languageList[0].name + '</h3><br><p>' + item.languageList[0].description + '</p></div>');
				radioBtn.appendTo('#PlanoPorteEmpresa');
				jQuery('input:radio[name="rbtnPlanoPorteEmpresa"]').change(
				function(){
					if (jQuery(this).is(':checked') && jQuery(this).val() == item.id) {
						window.orgSize = item.languageList[0].name;
						var resultParcelas = (item.price * item.quantityMax / 12).toFixed(2);								
						jQuery('#PlanosPrecos').html("R$ " + resultParcelas);
						jQuery('#PlanosHoras').html(item.quantityMax);
					}
				});				
			});
		}
	});
}*/

function redirect_loja(){
	var idProduct = window.produto;
	var nameSize = window.orgSize;
	alert("Obrigado! VocÃª estÃ¡ sendo direcionado para a loja da Verde Ghaia.");
	var url  = 'http://loja.sgionline.com.br/produto/'+ idProduct +'?op='+ nameSize +'';
	window.location.replace(url);
}