// Pour la validation des entrées du formulaire
$(document).ready(function() {

	//  Nombre de pixels à faire défiler avant de faire apparaître l'ancre
	var offset = 300,
	// Nombre de pixels à faire défiler avant de faire apparaître l'opacité
	    offset_opacity = 300,
	// Durée de l'animation de l'ancre
	    scroll_top_duration = 700,
	// Prendre le lien "Back-to-top"
	    $back_to_top = $('.cd-top');

	// Cacher ou montre le lien "Back-to-top"
	$(window).scroll(function() {
		($(this).scrollTop() > offset ) ? $back_to_top.addClass('cd-is-visible') : $back_to_top.removeClass('cd-is-visible cd-fade-out');
		if ($(this).scrollTop() > offset_opacity) {
			$back_to_top.addClass('cd-fade-out');
		}
	});

	// Effet "doux" pour le retour en haut
	$back_to_top.on('click', function(event) {
		event.preventDefault();
		$('body,html').animate({
			scrollTop : 0 ,
		}, scroll_top_duration);
	});

	// Règle additionnelels pour le nom / Seulement avoir des lettres
	jQuery.validator.addMethod("lettersonly", function(value, element) {
		return this.optional(element) || /^[a-zàáâãäåçèéêëìíîïðòóôõöùúûüýÿ\s]+$/i.test(value);
	});

	// Règle pour le courriel
	jQuery.validator.addMethod("email", function(value, element) {
		return this.optional(element) || /^(("[\w-\s]+")|([\w-]+(?:\.[\w-]+)*)|("[\w-\s]+")([\w-]+(?:\.[\w-]+)*))(@((?:[\w-]+\.)*\w[\w-]{0,66})\.([a-z]{2,6}(?:\.[a-z]{2})?)$)|(@\[?((25[0-5]\.|2[0-4][0-9]\.|1[0-9]{2}\.|[0-9]{1,2}\.))((25[0-5]|2[0-4][0-9]|1[0-9]{2}|[0-9]{1,2})\.){2}(25[0-5]|2[0-4][0-9]|1[0-9]{2}|[0-9]{1,2})\]?$)+$/i.test(value);
	});

	$('#formulaire').validate({
		rules : {
			name : {
				required : true,
				lettersonly : true,
				minlength : 2
			},
			email : {
				required : true,
				email : true
			},
			object : {
				required : true
			},
			message : {
				required : true
			}
			
		},
		// Messages d'errreurs personnnalisés en français et anglais
		messages : validateFormMessage
		
	});
});
