if (!(window.console && console.log)) {
    (function() {
        var noop = function() {};
        var methods = ['assert', 'clear', 'count', 'debug', 'dir', 'dirxml', 'error', 'exception', 'group', 'groupCollapsed', 'groupEnd', 'info', 'log', 'markTimeline', 'profile', 'profileEnd', 'markTimeline', 'table', 'time', 'timeEnd', 'timeStamp', 'trace', 'warn'];
        var length = methods.length;
        var console = window.console = {};
        while (length--) {
            console[methods[length]] = noop;
        }
    }());
}

Modernizr.load([
	// form validation
	{ 
		test: $('form').length>0,
		yep: 'js/jquery.validate.min.js',
		complete: function(){
		var lang=$('html').attr('lang');
			if (lang && lang!='en' && $('form').length>0)
			Modernizr.load('js/localization/messages_'+lang+'.js');
		}
	},
	// mediaqueries
	{
		test : Modernizr.mq('only all'),
		nope : 'js/respond.min.js'
	},
	// placeholder input attr
	{
	  test: Modernizr.input.placeholder,
	  nope: 'js/polyfill.placeholder.js'
	},
	// opacity
	{
	  test: Modernizr.opacity,
	  nope: 'js/ie-opacity-polyfill.js'
	},
	// PIE
	{
	 	test: Modernizr.borderradius && Modernizr.boxshadow,
	 	nope: $('html').hasClass('lt-ie9')?'js/PIE_IE678.js':'js/PIE_IE9.js',
	 	complete: function(){
		 	if(window.PIE){
			 	$('*').each(function(){
				 	var $this = $(this);
				 	if($this.css('box-shadow') || $this.css('border-radius')){
                   		PIE.attach(this);
				   	}
				});
			}
		}
	},
	{
		load:'js/cssfx.min.js'
	},
	{
	load: 'js/main.min.js'
	}
]);