var App = {
	init: function(){
		// Toma todos los links del menú y los compila en un input select para acceder al menú con los dispositivos móviles. 
		$("#globalNav").parent().prepend('<select id="mobileNav"></select>');
		$("<option />", {"value" : "", "text" : "Ir a..."}).appendTo("#mobileNav");
		$("#globalNav a").each(function() { var el = $(this); $("<option />", { "value" : el.attr("href"), "text" : el.text() }).appendTo("#mobileNav")});
		$("#mobileNav").change(function() { window.location = $(this).find("option:selected").val()});
		// insertar código chromeframe si es lt IE 7
		App.chromeFrame();
		// cargar polyfill de mediaqueries si no estuviese activado
		yepnope({
			test : Modernizr.mq('only all'),
			yep  : '',
			nope : 'js/respond.min.js'
		});
	},
	chromeFrame: function(){
		$('html.lt-ie7 body').prepend('<p class="chromeframe">Estás utilizando un navegador desactualizado. <a href="http://browsehappy.com/">Actualiza tu navegador ahora</a> o <a href="http://www.google.com/chromeframe/?redirect=true">instala Google Chrome Frame</a> para conseguir una mejor experiencia de navegación.</p>');
	}
}

$(function(){
	App.init();
})