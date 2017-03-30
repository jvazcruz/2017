<?php
	require_once("../includes/config.php");
	$permitido = 0;
?>
<!doctype html>
<html class="no-js" lang="">
    <head>
        <?php include('metas.html');?>
    </head>
	<body >
	    <div id="loader-wrapper">
	        <div class="logo"><img src="images/logo_Movistar.png" alt="" class="img-responsive"/></div>
	        <div id="loader"></div>
	    </div>		
		<div id="wrapper">	
			<?php include('menu.php');?>
	        <div id="page-content-wrapper">
				<section id="slider_sec">
					<div class="container">
						<div class="row">
							<div class="slider">
									<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
								  <ol class="carousel-indicators">
									<li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
									<li data-target="#carousel-example-generic" data-slide-to="1"></li>
									<li data-target="#carousel-example-generic" data-slide-to="2"></li>
									<li data-target="#carousel-example-generic" data-slide-to="3"></li>
									<li data-target="#carousel-example-generic" data-slide-to="4"></li>
								  </ol>
								  <div class="carousel-inner" role="listbox">
									<div class="item active">
										<div class="wrap_caption">
										  <div class="caption_carousel">
											<img src="images/banners/banner1.png">
										  </div>						
										</div>
									</div>					
									<div class="item">
										<div class="wrap_caption">
										  <div class="caption_carousel">
											<img src="images/banners/banner2.png">
										  </div>						
										</div>
									</div>					
									<div class="item ">
										<div class="wrap_caption">
										  <div class="caption_carousel">
											<img src="images/banners/banner3.png">
										  </div>						
										</div>
									</div>
									<div class="item ">
										<div class="wrap_caption">
										  <div class="caption_carousel">
											<img src="images/banners/banner4.png">
										  </div>						
										</div>
									</div>
									<div class="item ">
										<div class="wrap_caption">
										  <div class="caption_carousel">
											<img src="images/banners/banner5.png">
										  </div>						
										</div>
									</div>			
								  </div>
								</div>
							</div>	
						</div>			
					</div>	
				</section>
				<!-- End slider Section -->
			</div>
		</div>
		<section id="abt_sec">
			<div class="container">
				<div class="row sbmenu">
					<div class="col-lg-3 col-md-3 col-sm-6 col-xs6 bntn" id="btn_oferta">
						<img src="images/inicio/icon_oferta.png" class="img-responsive center-block"/>
						<p class="tt_btn">Oferta<br/><span>Conoce la oferta vigente e incrementa tus ventas. Mantén tu Punto de Venta actualizado.</span></p>
					</div>
					<div class="col-lg-3 col-md-3 col-sm-6 col-xs6 bntn"  id="btn_material">
						<img src="images/inicio/icon_materialpdv.png" class="img-responsive center-block"/>
						<p class="tt_btn">Materiales PdV<br/><span>Conoce y utiliza todo el material disponible para tu Punto de Venta..</span></p>
					</div>
					<div class="col-lg-3 col-md-3 col-sm-6 col-xs6 bntn"  id="">
						<img src="images/inicio/icon_nom184.png" class="img-responsive center-block"/>
						<p class="tt_btn">NOM 184<br/><span>Es importante que el punto de venta cumpla con ciertos lineamientos, ¡conócelos!</span></p>
					</div>
					<div class="col-lg-3 col-md-3 col-sm-6 col-xs6 bntn"  id="">
						<img src="images/inicio/icon_misincentivos.png" class="img-responsive center-block"/>
						<p class="tt_btn">Mis Incentivos<br/><span>Alcanza cada vez mejores resultados de venta: conoce los incentivos que obtendrás.</span></p>
					</div>		
				</div>
			</div>
		</section>
		<section id="counting_sec">
			<div class="container">
				<div class="row">	
					<div class="col-lg-2 col-md-2 col-sm-0 col-xs0 "></div>
					<div class="col-lg-5 col-md-5 col-sm-6 col-xs6 ">
						<p class="tt_secc">Prepago Redes Sociales</p>
						<p class="sb_secc">¡Con Prepago Redes Sociales nuestros clientes siempre estarán conectados!</p>
						<p class="vig_secc">Vigencia: A partir del 28 de octubre de 2016.</p>
						<a href="oferta.php#oferta1" class="btn_rosa">Ver detalles</a>
					</div>
					<div class="col-lg-3 col-md-3 col-sm-6 col-xs6 ">
						<img src="images/inicio/prepago_redes.png" class="img-responsive center-block"/>
					</div>
					<div class="col-lg-2 col-md-2 col-sm-0 col-xs0 "></div>
				</div>					
			</div>
		</section>
		<section id="skill_sec">
			<div class="container">
				<div class="row menuc">
					<div class="col-lg-4 col-md-4 col-sm-6 col-xs6 ">
						<img src="images/inicio/banner_foot1.png" class="img-responsive center-block"/>
						<p class="tt_btn2"><span>Conoce la oferta vigente e incrementa tus ventas. Mantén tu Punto de Venta actualizado.</span></p>
					</div>
					<div class="col-lg-4 col-md-4 col-sm-6 col-xs6 ">
						<img src="images/inicio/banner_foot2.png" class="img-responsive center-block"/>
						<p class="tt_btn2"><span>Es importante que el punto de venta cumpla con ciertos lineamientos, ¡conócelos!.</span></p>
					</div>
					<div class="col-lg-4 col-md-4 col-sm-6 col-xs6 ">
						<img src="images/inicio/banner_foot3.png" class="img-responsive center-block"/>
						<p class="tt_btn2"><span>Alcanza cada vez mejores resultados de venta: conoce los incentivos que obtendrás.</span></p>
					</div>
				</div>
			</div>
		</section>
		<footer id="ltd_map_sec">
			<?php include('footer.php');?>
		</footer>
		<div class="modal right fade" id="myModal2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel2">
			<div class="modal-dialog" role="document">
				<div class="modal-content">
					<div class="modal-body">
						<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
						<img src="images/inicio/banner_lateral.png"/>
					</div>
				</div><!-- modal-content -->
			</div><!-- modal-dialog -->
		</div><!-- modal -->
		<?php include('js.php');?>
		<script type="text/javascript">
			$(document).ready(function(){
				<?php
					if(!isset($_SESSION['mostrarpopup']))
	    			{
				?>
				setTimeout(function() {
			        $('#myModal2').modal('show');
			    }, 2500);
			    <?php
			    	$_SESSION['mostrarpopup']='no';
					}
			    ?>
			    $('#btn_oferta').click(function() {
		     		$(location).attr('href','oferta.php');
				});
				$('#btn_material').click(function() {
		     		$(location).attr('href','material_pdv.php');
				});
				$('.fa-home').addClass('activa');
			});
		</script>
   </body>
</html>
