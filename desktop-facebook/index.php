<?php require_once('inc/prepare.php'); ?><!DOCTYPE html>
<html xmlns:fb="http://ogp.me/ns/fb#" lang="es">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" >
		<meta charset="utf-8">
		<title>Maggi - 18 de Septiembre</title>
        <link rel="stylesheet" href="css/normalize.css" media="screen" >     
		<style type="text/css" media="all"> <?php include ('./css/style.css') ?></style>
        <script src="js/modernizr.2.6.2.min.js"></script>
        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
        <script>
        	window.jQuery || document.write('<script src="js/jquery-1.10.2.min.js"><\/script>');
       	</script>
       	<script>
		  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
		  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
		  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
		  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');
		
		  ga('create', 'UA-43748400-2', 'yrd.cl');
		  ga('send', 'pageview');
		
		</script>
	</head>
	<body class="<?=$liked||$config['forceFan']?"fan":"nofan"?>">
	
	<!-- custom content -->
	
		<section class="nofan"></section>
		<section id="step1" class="fan">
			<div class="menu">
				<a href="javascript:App.steps.go('#albahaca')" class="albahaca"></a>
				<a href="javascript:App.steps.go('#aceitunas')" class="aceitunas"></a>
				<a href="javascript:App.steps.go('#mostaza')" class="mostaza"></a>
				<a href="javascript:App.steps.go('#pimenton')" class="pimenton"></a>
			</div>
		</section>
		<section id="albahaca" class="producto">
			<div class="content">
				<img class="titulo" src="img/img_titulo.png" alt="" >
				<img class="foto" src="img/img_albahaca.jpg" alt="" >
				<div class="desc">
					<h1>SALSA DE YOGHURT CON ALBAHACA Y AJO</h1>
					<p class="clearfix"><span class="porciones">15 Porciones</span><span class="tiempo">5 Minutos</span></p>
					<h2>Ingredientes</h2>
					<p class="tab">
					- 1 YOGHURT NATURAL NESTLÉ <br>
					- Taza de hojas de albahaca (12 hojas aprox.) <br>
					- 1 Diente de ajo pequeño <br>
					- Taza de aceite de oliva (100 ml) <br>
					- Sal y pimienta a gusto <br>
					</p>
					<h2>Preparación</h2>
					<p class="tab">
					Junta el YOGHURT NATURAL NESTLÉ con todos los otros ingredientes en el jarro de una mini pimer o juguera, procesa a velocidad media durante 8 a 10 segundos hasta homogenizar. Una vez lista refrigera por 20 minutos. Sirve de inmediato.
					</p>
				</div>
			</div>
			<div class="menu">
				<a href="javascript:App.steps.go('#albahaca')" class="albahaca"></a>
				<a href="javascript:App.steps.go('#aceitunas')" class="aceitunas"></a>
				<a href="javascript:App.steps.go('#mostaza')" class="mostaza"></a>
				<a href="javascript:App.steps.go('#pimenton')" class="pimenton"></a>
			</div>
		</section>
		
		<section id="aceitunas" class="producto">
			<div class="content">
				<img class="titulo" src="img/img_titulo.png" alt="" >
				<img class="foto" src="img/img_aceitunas.jpg" alt="" >
				<div class="desc">
					<h1>SALSA DE ACEITUNAS CON YOGHURT</h1>
					<p class="clearfix"><span class="porciones">15 Porciones</span><span class="tiempo">5 Minutos</span></p>
					<h2>Ingredientes</h2>
					<p class="tab">
					- 1 YOGHURT NATURAL NESTLÉ <br>
					- ¾ Taza de aceitunas verdes sin carozo  <br>
					- ½ Taza de aceite de oliva  <br>
					- 1 Cucharada de orégano  <br>
					- Pimienta a gusto
					</p>
					<h2>Preparación</h2>
					<p class="tab">
					Junta el YOGHURT NATURAL NESTLÉ con todos los otros ingredientes en el jarro de una mini pimer o juguera, procesa a velocidad media durante 8 a 10 segundos hasta homogenizar. Una vez lista refrigera por 20 minutos. Sirve de inmediato.
					</p>
				</div>
			</div>
			<div class="menu">
				<a href="javascript:App.steps.go('#albahaca')" class="albahaca"></a>
				<a href="javascript:App.steps.go('#aceitunas')" class="aceitunas"></a>
				<a href="javascript:App.steps.go('#mostaza')" class="mostaza"></a>
				<a href="javascript:App.steps.go('#pimenton')" class="pimenton"></a>
			</div>
		</section>
		
		<section id="mostaza" class="producto">
			<div class="content">
				<img class="titulo" src="img/img_titulo.png" alt="" >
				<img class="foto" src="img/img_mostaza.jpg" alt="" >
				<div class="desc">
					<h1>SALSA DE YOGHURT CON MOSTAZA Y MIEL</h1>
					<p class="clearfix"><span class="porciones">1 Porción</span><span class="tiempo">5 Minutos</span></p>
					<h2>Ingredientes</h2>
					<p class="tab">
					- 1 YOGHURT NATURAL NESTLÉ <br>
					- 1 Cucharada de mostaza <br>
					- 1 Cucharada de Miel <br>
					- 1 Cucharada de mayonesa<br>
					- 3 Cucharadas de aceite de oliva <br>
					- Un toque de sal a gusto<br>
					- Pimienta a gusto
					</p>
					<h2>Preparación</h2>
					<p class="tab">
					Junta el YOGHURT NATURAL NESTLÉ con todos los otros ingredientes en el jarro de una mini pimer o juguera, procesa a velocidad media durante 8 a 10 segundos hasta homogenizar. Una vez lista refrigera por 20 minutos. Sirve de inmediato.
					</p>
				</div>
			</div>
			<div class="menu">
				<a href="javascript:App.steps.go('#albahaca')" class="albahaca"></a>
				<a href="javascript:App.steps.go('#aceitunas')" class="aceitunas"></a>
				<a href="javascript:App.steps.go('#mostaza')" class="mostaza"></a>
				<a href="javascript:App.steps.go('#pimenton')" class="pimenton"></a>
			</div>
		</section>
		
		<section id="pimenton" class="producto">
			<div class="content">
				<img class="titulo" src="img/img_titulo.png" alt="" >
				<img class="foto" src="img/img_pimenton.jpg" alt="" >
				<div class="desc">
					<h1>SALSA DE YOGHURT CON PIMENTÓN AL MERKÉN</h1>
					<p class="clearfix"><span class="porciones">1 Porción</span><span class="tiempo">5 Minutos</span></p>
					<h2>Ingredientes</h2>
					<p class="tab">
					- 1 YOGHURT NATURAL NESTLÉ <br>
					- 1 Tarro pequeño de pimentón en conserva y escurrido<br>
					- ½ Taza de aceite de oliva <br>
					- 1 Cucharadita de merkén <br>
					- Sal y pimienta a gusto
					</p>
					<h2>Preparación</h2>
					<p class="tab">
					Junta el YOGHURT NATURAL NESTLÉ con todos los otros ingredientes en el jarro de una mini pimer o juguera, procesa a velocidad media durante 8 a 10 segundos hasta homogenizar. Una vez lista refrigera por 20 minutos. Sirve de inmediato.
					</p>
				</div>
			</div>
			<div class="menu">
				<a href="javascript:App.steps.go('#albahaca')" class="albahaca"></a>
				<a href="javascript:App.steps.go('#aceitunas')" class="aceitunas"></a>
				<a href="javascript:App.steps.go('#mostaza')" class="mostaza"></a>
				<a href="javascript:App.steps.go('#pimenton')" class="pimenton"></a>
			</div>
		</section>
		
	<!-- /custom content -->
	
		<?=loadJs()?>	
			
	</body>
</html>