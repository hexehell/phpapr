
	
	$(document).ready(function(){

		$(".imgGaleria").click(function(event) {
			/* Act on the event */

			var sSrc = $(this).find(".imagen").attr('src');
			$("#modal_GaleriaClases").find('#modalImagen').attr('src', sSrc);

			var sTitulo = $(this).find(".titulo").text();
			$("#modal_GaleriaClases").find('#modalTitulo').text(sTitulo);

			var sFecha = $(this).find(".fecha").text();
			$("#modal_GaleriaClases").find('#modalFecha').text(sFecha);
			
			
			
			

		});
	});
