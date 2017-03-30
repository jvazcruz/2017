<?php
	require_once("../includes/config.php");
	$permitido = 0;
?>
<!doctype html>
<html class="no-js" lang="">
    <head>
        <?php include('metas.html');?>
        <link rel="stylesheet" href="css/material_pdv.css">
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
						<div class="row" id="bg_mpdv">
							<div class="ttsec_1">Materiales PdV</div>
						</div>			
					</div>	
				</section>
			</div>
		</div>
		<section id="sbmn_mpdv">
			<div class="container">
				<div class="row">
					<div class="col-lg-2 col-md-2 col-sm-0 col-xs0"></div>

					<div class="col-lg-8 col-md-8 col-sm-0 col-xs0 brd">
						<div class="col-lg-5 col-md-5 col-sm-6 col-xs12 mpdv_" id="btn_mautorizado">
							<div class="mpdv_tt text-center">Material POP Autorizado</div>
							<div class="mpdv_cont">
								<img src="images/materialpdv/autorizado.png" class="img-responsive icn on1"/>
								<img src="images/materialpdv/autorizado_hover.png" class="img-responsive icn hidden hover2"/>
							</div>
						</div>
						<div class="col-lg-2 col-md-2 col-sm-0 col-xs0"></div>
						<div class="col-lg-5 col-md-5 col-sm-6 col-xs12 mpdv_" id="btn_retirar">
							<div class="mpdv_tt text-center">Retirar Material</div>
							<div class="mpdv_cont">
								<img src="images/materialpdv/retirar.png" class="img-responsive icn on1"/>
								<img src="images/materialpdv/retirar_hover.png" class="img-responsive icn hidden hover2"/>
							</div>
						</div>
					</div>
					<div class="col-lg-2 col-md-2 col-sm-0 col-xs0"></div>	
				</div>
				<div class="row sbmat">
						<div class="col-lg-1 col-md-1 col-sm-0 col-xs0"></div>
						<div class="col-lg-2 col-md-2 col-sm-6 col-xs6 btn_sbm" id="plantillas">
							<img src="images/materialpdv/icon_plantillas.png" class="img-responsive center-block"/>
							<p>Plantillas<br/>Predicadores<br/>Canal Propio</p>
						</div>
						<div class="col-lg-2 col-md-2 col-sm-6 col-xs6 btn_sbm" id="manual">
							<img src="images/materialpdv/icon_manual.png" class="img-responsive center-block"/>
							<p>Manual Punto<br/>de Venta</p>
						</div>
						<div class="col-lg-2 col-md-2 col-sm-6 col-xs6 btn_sbm" id="preciador">
							<img src="images/materialpdv/icon_preciador.png" class="img-responsive center-block"/>
							<p>Plantilla<br/>Preciador Genérico</p>
						</div>
						<div class="col-lg-2 col-md-2 col-sm-6 col-xs6 btn_sbm" id="pasos">
							<img src="images/materialpdv/icon_pasos.png" class="img-responsive center-block"/>
							<p>5 pasos para<br/>mejorar tus<br/>Ventas</p>
						</div>
						<div class="col-lg-2 col-md-2 col-sm-6 col-xs6 btn_sbm" id="video">
							<img src="images/materialpdv/icon_video.png" class="img-responsive center-block"/>
							<p>Video Manual<br/>Punto de Venta</p>
						</div>
						<div class="col-lg-1 col-md-1 col-sm-0 col-xs0"></div>
				</div>
			</div>
		</section>
		<footer id="ltd_map_sec" class="fmat">
			<?php include('footer.php');?>
		</footer>
		<?php include('js.php');?>
		<script src="http://malsup.github.io/jquery.cycle2.js"></script>
    	<script src="http://malsup.github.io/jquery.cycle2.scrollVert.js"></script>
		<script type="text/javascript">
			$(document).ready(function(){
				$('#material_pdv').addClass('active');
				$('.btn_sbm')
					.mouseover(function() {
						$( this ).find( "img" ).css( "opacity",'0.5');
						$( this ).find( "p" ).css( "color",'#51b7ec');
						$( this ).css('cursor', 'pointer');
					})
					.mouseout(function() {
						$( this ).find( "img" ).css( "opacity",'1');
						$( this ).find( "p" ).css( "color",'#3570a9');
						$( this ).css('cursor', 'auto');
				});
				$('.mpdv_')
					.mouseover(function() {
						$( this).find( "img.hover2" ).removeClass('hidden');
						$( this).find( "img.on1" ).addClass('hidden');
						$( this ).css('cursor', 'pointer');
						$(this).find("div.mpdv_tt").css( "background",'#005c84');
						$(this).animate({ 'zoom': 1.2 }, 400);
					})
					.mouseout(function() {
						$( this).find( "img.hover2" ).addClass('hidden');
						$( this).find( "img.on1" ).removeClass('hidden');
						$( this ).css('cursor', 'auto');
						$(this).find("div.mpdv_tt").css( "background",'#81b945');
				});
				$('#btn_mautorizado').click(function(){
			    	//$('#tallModal').modal({show:true})
			    	$(location).attr('href', 'material_autorizado.php');
				});
				$('#btn_retirar').click(function(){
			    	$(location).attr('href', 'retirar_material.php');
				});
				$('#plantillas').click(function(){
			    	$(location).attr('href', '../archivos/cacs/cacs_preciadores_281116.rar');
				});
				$('#preciador').click(function(){
			    	$(location).attr('href', '../archivos/Preciador_generico.pdf');
				});
			});
		</script>
   </body>
</html>