var App = {
	init: function(){
		App.steps.order();		
	},
	steps: {
		order: function(){
			$("section").each(function(index){
				$(this).css('z-index',$("section").length-index);
			})
		},
		go: function(id){
			var actual=$("section.actual").length>0?$("section.actual"):($("section.fan").length>0?$("section.fan"):$(".section:first-child"));
			actual.fadeOut().removeClass("actual");
			$(id).fadeIn().addClass("actual");
		}

	},
	user: {
	},
	request: function(data, callback){
        $.ajax({
            url: 'ajax/data.php',
            type: 'post',
            dataType: 'json',
            data: data,
            success: function(res){
                if(callback && typeof(callback)==='function'){
                    callback(res);
                }
            }
        });
    },
	fb:{
		compartir: function(){
			var msg = 'Acabo de compartir mi Nueva Forma de Cocinar junto a MAGGI y ya estoy participando por uno de los 30 kits MAGGI. Comparte tu variedad favorita y participa.';
			var desc = 'Descripción del compartir';
			var url = 'https://www.facebook.com/Maggi.cl/app_485744578168143';
			FB.ui(
			{
				method: 'feed',
				name: "MAGGI - Jugoso al Horno",
				link: url,
				picture: 'http://clientes.yrd.cl/maggi/jugosoalhorno/img/75.jpg',
				caption: msg,
				message: msg,
				href: url
			},function(response){					
				var data={
					accion:  	"usuario_ins",
                    nombre:   	App.user.nombre, 
                	base:     	App.user.base, 
                	comentario: App.user.comentario,
                	fb_id:		App.user.id,
                	email:     	App.user.email
                };
                
				App.request(data,function (res){
                    if (res.success) {
                        App.paso(".paso3",".paso4");
                    } 
                });
			});
		}
	},
	seleccionar: function(base){
		FB.getLoginStatus(function(response) {
  			if (response.authResponse) {
  				FB.api('/me', function(response) {
	     			user = response;
	     			App.user.base=base;
	     			App.user.id=user.id;
	     			App.user.nombre=user.name;
	     			App.user.email=user.email;
	     			$(".paso2").css("background-image","url(img/"+base+".jpg)");
	     			App.paso(".paso1",".paso2");
	     		});
  			}else{
  				FB.login(function(response) {
			   		if (response.authResponse) {
			     		FB.api('/me', function(response) {
			     			user = response;
			     			App.user.base=base;
			     			App.user.id=user.id;
			     			App.user.nombre=user.name;
			     			App.user.email=user.email;
			     			$(".paso2").css("background-image","url(img/"+base+".jpg)");
			     			App.paso(".paso1",".paso2");
			     		});
			   		} 
			 	},{scope:'email'});
  			}
  		});

	},
	comentar: function(){
		if ($(".paso2 textarea").val().length>10){
			App.user.comentario=$(".paso2 textarea").val();
			App.paso (".paso2",".paso3");
		}
	}
}