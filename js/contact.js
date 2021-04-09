/***************************************************************************/
/* MARCO FIORE // MFDESIGN.IT **********************************************/
/***************************************************************************/

function validateEmail(email) {
	var reg = /^([A-Za-z0-9_\-\.])+\@([A-Za-z0-9_\-\.])+\.([A-Za-z]{2,4})$/;
	if (!reg.test(email))
		return false;
	else
		return true;
}

function confirmMessage(confirm_id) {
	if (confirm_id > 0){
		$('input[type=submit').toggle();
		
		if (confirm_id == 1){
			$('div.confirm').addClass('error').text('Invio email non riuscito...');
		}
		else if (confirm_id == 2){
			$('div.confirm').addClass('ok').text('Email inviata con successo!');
		}
		setTimeout(function(){ 
			$('div.confirm').fadeOut('slow', function() {
				$('div.confirm').removeClass('error').hide();
				$('div.confirm').removeClass('ok').hide();
			});

			setTimeout(function(){
				$('input[type=submit').fadeToggle();
			}, 1000);
		}, 5000);
	}
}

$(document).ready(function () {
	$('input[type=submit]').click(function(){
		$('label#name').removeClass('error');
		$('label#email').removeClass('error');
		$('label#object').removeClass('error');
		$('label#message').removeClass('error');

		var name    = $('input[name=nome').val(),
			email   = $('input[name=email').val(),
			object  = $('input[name=oggetto').val(),
			message = $('textarea[name=messaggio').val();
		
		if (validateEmail(email)) {
			if ($.trim(name) != '') {				
				if ($.trim(object) != '') {
					if ($.trim(message) != '') {
						$('form.contactUs').submit();
					}
					else {
						$('label#message').addClass('error');
						return false;
					}
				}
				else {
					$('label#object').addClass('error');
					return false;
				}
			}
			else {
				$('label#name').addClass('error');
				return false;
			}
		}
		else {
			$('label#email').addClass('error');
			return false;		
		}		
	});
});