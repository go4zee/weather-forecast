$(function() {

	$("#findMyWeather").click(function(e) {

		e.preventDefault();
		$(".alert").hide();

		if($("#city").val()!=""){

			$.get("scraper.php?city="+$("#city").val(),function(data){


				if(data==""){
					$(".alert").hide();
					$("#fail").fadeIn();
				}
				else{
					$(".alert").hide();
					$("#success").html(data).fadeIn();
				}

			});
		}
		else
		{
			$("#noCity").fadeIn();
		}
	});


});