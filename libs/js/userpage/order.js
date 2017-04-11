
$().ready(function(){
	$('#quantity').change(function(){
		var quantity = $('#quantity').val();
		var price =  $('#price').val();
		var tmp = quantity * price;
		$('#tmp_price').html(tmp);
	});
	$('#ship_city').change(function(){
		var ship_city = $('#ship_city').val();
		var drug_price_text = $('#tmp_price').text();
		var drug_price = Number(drug_price_text);
		$.ajax({
			url: "index.php?page=order&action=shipping",
			type: 'GET',
			data: 'ship_city='+ ship_city,
			success: function(result){
				$('#tmp_shipping_price').html(result);
				var total = drug_price + Number(result);
				$('#tmp_total_price').html(total);
			}
		})	
	})

})