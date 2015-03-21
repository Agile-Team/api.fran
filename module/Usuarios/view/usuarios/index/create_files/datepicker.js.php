

// For eldy and jQuery date picker
var tradMonths = ["enero","febrero","marzo","abril","mayo","junio","julio","agosto","septiembre","octubre","noviembre","diciembre"];
var tradMonthsShort = ["Ene","Feb","Mar","Abr","May","Jun","Jul","Ago","Sep","Oct","Nov","Dec"];
var tradDays = ["Domingo","Lunes","Martes","Mi&eacute;rcoles","Jueves","Viernes","S&aacute;bado"];
var tradDaysShort = ["D","L","M","Mi","J","V","S"];
var tradDaysMin = ["Do","Lu","Ma","Mi","Ju","Vi","Sa"];


// For JQuery date picker
$(document).ready(function() {
	$.datepicker.setDefaults({
		autoSize: true,
		changeMonth: true,
		changeYear: true,
		altField: '#timestamp',
		altFormat: '@'			// Gives a timestamp dateformat
	});
});

jQuery(function($){
	$.datepicker.regional['es_ES'] = {
		closeText: 'Cerrar',
		prevText: 'Anterior',
		nextText: 'Siguiente',
		currentText: 'Ahora',
		monthNames: tradMonths,
		monthNamesShort: tradMonthsShort,
		dayNames: tradDays,
		dayNamesShort: tradDaysShort,
		dayNamesMin: tradDaysMin,
		weekHeader: 'Semana',
		dateFormat: 'dd/mm/yy',
		firstDay: 1,
		isRTL: false,
		showMonthAfterYear: false,  // TODO add specific to country
		yearSuffix: ''				// TODO add specific to country
	};
	$.datepicker.setDefaults($.datepicker.regional['es_ES']);
});


