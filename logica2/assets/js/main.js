$("#calcular").click(function(event) {

	$("#result").html(null);
	
	var mass = $("#massa").val();


	$.ajax({
		url: 'calcula_massa.php',
		type: 'POST',
		data: {mass: mass},
		success: function(data){
			console.log(data);

			var result = '<div class="alert alert-warning alert-dismissible show" role="alert">'+
						  data+
						  '<button type="button" class="close" data-dismiss="alert" aria-label="Close">'+
						    '<span aria-hidden="true">&times;</span>'+
						  '</button>'+
						'</div>';

			$("#result").append(result);


		}
	});
	
});