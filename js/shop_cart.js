/***************************************************************************/
/* MARCO FIORE // MFDESIGN.IT **********************************************/
/***************************************************************************/

$(document).ready(function(){
	$('a.del').click(function(e){
		e.preventDefault();
		var linkURL = $(this).attr('href');
		warnBeforeRedirect(linkURL);
	});
	/**/
	function warnBeforeRedirect(linkURL){
		swal({
			type: 'warning',
			title: 'Sei sicuro di voler rimuovere questo articolo?',
			showCancelButton: true,
			cancelButtonText: 'annulla',
			showConfirmButton: true,
			confirmButtonColor: '#DD6B55',
			confirmButtonText: 'Sì, rimuovilo',
			allowOutsideClick: true,
			closeOnConfirm: false
		}, function(){
			window.location.href = linkURL;
		});
	}
	/**/
	function prezzoFormattato(nStr) {
		nStr += '';
		var x = nStr.split('.')
			x1 = x[0],
			x2 = x.length > 1 ? ',' + x[1] : '',
			rgx = /(\d+)(\d{3})/;
			
		while (rgx.test(x1)){
			x1 = x1.replace(rgx, '$1' + '.' + '$2');
		}
		
		return x1 + x2;
	}
	/**/
	$('input[type=number]').change(function(){
		var quantita       = $(this).val(),
			prezzoUnitario = $(this).attr('amount'),
			span           = $(this).attr('destination'),
			prezzoIniziale = $('span#' + span).text(),
			totaleIniziale = $('span.total').text(),
			destinazione   = $(this).attr('destination'),
			//
			prezzoIniziale = prezzoIniziale.replace('.', '');
			prezzoIniziale = prezzoIniziale.replace('€ ', '');
			prezzoIniziale = prezzoIniziale.replace(',', '.');
			//
			totaleIniziale = totaleIniziale.replace('.', '');
			totaleIniziale = totaleIniziale.replace('€ ', '');
			totaleIniziale = totaleIniziale.replace(',', '.');

		if (($.isNumeric(quantita)) && (quantita > 0)){
			var prezzoTotale = (quantita * prezzoUnitario);
			
		} else {
			$(this).val(1);
			
			var prezzoTotale = (1 * prezzoUnitario),
				quantita     = 1;
		}
		
		var differenza       = (prezzoTotale - prezzoIniziale),
			totaleAggiornato = (+totaleIniziale + +differenza).toFixed(2);
		
		prezzoTotale = prezzoTotale.toFixed(2);
		
		$('span#' + span).text('€ ' + prezzoFormattato(prezzoTotale));
		//
		$('span.total').text('€ ' + prezzoFormattato(totaleAggiornato));
		
		$.ajax({
			url : 'https://www.timeattackseries.com/shop/aggiungi-al-carrello.html?d=' + destinazione + '&q=' + quantita
		});
		
		setTimeout(function(){
			$('ul.shopCartList li.transport').load('https://www.timeattackseries.com/shop/carrello-spedizione.html');		// ricarica script
			
		}, 100);
				
		setTimeout(function(){
			$('ul.shopMenu li.cart').load('https://www.timeattackseries.com/shop/menu-carrello.html');		//ricarica script
			
			var trasporto    = $('input#shippingCost').val(),
				totaleOrdine = (+totaleAggiornato + +trasporto).toFixed(2);
				
			$('input#Spedizione').val(trasporto);
			//
			$('span.totalOrder').text('€ ' + prezzoFormattato(totaleOrdine));
			
		}, 500)
	});
});