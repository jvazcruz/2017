<?php
	require_once("../includes/config.php");
	$permitido = 0;
?>
<!doctype html>
<html class="no-js" lang="">
    <head>
        <?php include('metas.html');?>
        <link rel="stylesheet" href="css/oferta.css">
    </head>
	<body >
        <div id="loader-wrapper">
            <div class="logo"><img src="images/logo_Movistar.png" alt="" class="img-responsive"/></div>
            <div id="loader"></div>
        </div>
		<div id="wrapper">	
			<?php include('menu.php');?>
        	<div id="page-content-wrapper">
				<section id="bn_tt">
					<div class="container">
						<div class="row" id="bg_oferta">
							<div class="ttsec_1">Oferta Prepago</div>
						</div>			
					</div>	
				</section>
			</div>
		</div>
		<section id="oferta1" class="jumptarget">
			<div class="container" id="oferta_sec">
				<div class="row oferta_bg1">
					<div class="ligas_secL">
						<p class="tt1">Prepago Redes Sociales</p>
						<ul>
							<li><a href="#" id="image-1" class="btn_gallery"><i class="fa fa-file-image-o" aria-hidden="true"></i> Cápsula</a></li>
							<li><a href="#" id="image-2"><i class="fa fa-file-text-o" aria-hidden="true"></i> Guía</a></li>
							<li><a href="#" id="image-3"><i class="fa fa-files-o" aria-hidden="true"></i></i> Guía Detalle</a></li>
							<li><a href="#" id="image-4"><i class="fa fa-star-o" aria-hidden="true"></i> Tips</a></li>
						</ul>
					</div>
				</div>
			</div>
		</section>
		<section id="oferta2" class="esp_sec jumptarget">
			<div class="container">
				<div class="row oferta_bg2" id="oferta_sec">
					<div class="ligas_secR">
						<p class="tt1">Movistar ON</p>
						<ul>
							<li><a href="#" id="image-1"><i class="fa fa-file-image-o" aria-hidden="true"></i> Cápsula</a></li>
							<li><a href="#" id="image-2"><i class="fa fa-file-text-o" aria-hidden="true"></i> Guía</a></li>
							<li><a href="#" id="image-3"><i class="fa fa-files-o" aria-hidden="true"></i></i> Guía Detalle</a></li>
							<li><a href="#"><i class="fa fa-folder-o" aria-hidden="true"></i> Paquetes</a></li>
							<li><a href="#"><i class="fa fa-file-o" aria-hidden="true"></i> Argumentario de Venta</a></li>
							<li><a href="#"><i class="fa fa-film" aria-hidden="true"></i> Video Paquetes</a></li>
							<li><a href="#"><i class="fa fa-film" aria-hidden="true"></i> Video Números</a></li>
							<li><a href="#"><i class="fa fa-film" aria-hidden="true"></i> Video Saldo</a></li>
						</ul>
					</div>
				</div>
			</div>
		</section>
		<section id="oferta3" class="esp_sec jumptarget">
			<div class="container">
				<div class="row oferta_bg3" id="oferta_sec">
					<div class="ligas_secL">
						<p class="tt1">Prepago Simple $0.85</p>
						<ul>
							<li><a href="#" id="image-1"><i class="fa fa-file-image-o" aria-hidden="true"></i> Cápsula</a></li>
							<li><a href="#" id="image-2"><i class="fa fa-file-text-o" aria-hidden="true"></i> Guía</a></li>
							<li><a href="#" id="image-3"><i class="fa fa-files-o" aria-hidden="true"></i></i> Guía Detalle</a></li>
						</ul>
					</div>
					
				</div>
			</div>
		</section>
		<div class="modal" id="modal-gallery" role="dialog">
		  <div class="modal-dialog">
		    <div class="modal-content">
		      <div class="modal-header">
		      	<span>Prepago Redes Sociales - Cápsula</span>
		          <button class="close" type="button" data-dismiss="modal"><i class="fa fa-times-circle-o" aria-hidden="true"></i></button>
		          <button class="descarga" type="button" id="btn_descarga"><i class="fa fa-arrow-circle-o-down" aria-hidden="true"></i></button>
		          <p class="modal-title"></p>
		      </div>
		      <div class="modal-body">
		          <iframe src="visor/index.html" style="min-height:800px;" frameborder="0" width="99.6%" id="frame_gallery"></iframe>
		      </div>
		    </div>
		  </div>
		</div>
		<footer id="ltd_map_sec">
			<?php include('footer.php');?>
		</footer>
		<?php include('js.php');?>
		<script type="text/javascript">
			$(document).ready(function(){
				$('#oferta').addClass('active');
			    $('.btn_gallery').click(function(){
			    	//$('#modal-gallery').find('iframe').attr('src','visor/contenido.php?id=redsoc_capsula');
			    	$('#modal-gallery').modal({show:true})
				});
			});
		</script>
   </body>
</html>