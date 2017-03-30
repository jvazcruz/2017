<?php
	require_once("../includes/config.php");
	$permitido = 0;
	$dia=date("Y-m-d ");
	$consumo=false;
	$canal="Todos";
	$todos="Todos";
	$campania="Todas";
	$query0="SELECT * FROM `materialpdv_imagenes`";
	$query1="SELECT * FROM `materialpdv_campanias`";
	if(!isset($_GET['canal']) && !isset($_GET['campania']))
	{
	  if($_SESSION['typeUser']=='Consumo')
	  {
	      $canal=$_SESSION['cadena'];
	      $consumo=true;
	      $query0.=" WHERE `canales` LIKE '%{$canal}%'";
	  }
	  $query1.=" WHERE `vigencia1` <= '{$dia}' AND  `vigencia2` >= '{$dia}' ORDER BY `posicion`";
	}
	else
	{
	  $canal=$_GET['canal'];
	  $todos=$_GET['canal'];
	  $campania=$_GET['campania'];
	  if($canal=="Todos" && $campania=="Todas")
	  {
	     $query1.=" WHERE `vigencia1` <= '{$dia}' AND `vigencia2` >= '{$dia}' ORDER BY `posicion`";
	  }
	  elseif($canal=="Todos" && $campania!="Todas")
	  {
	    $query0.=" WHERE `campania`='{$campania}' ";
	    $query1.=" WHERE `id` = '{$_GET['campania']}'";
	  }
	  elseif($canal!="Todos" && $campania=="Todas")
	  {
	    $query0.=" WHERE `canales` LIKE '%{$canal}%' ";
	    $query1.=" WHERE `vigencia1` <= '{$dia}' AND `vigencia2` >= '{$dia}' ORDER BY `posicion`";
	  }
	  elseif($canal!="Todos" && $campania!="Todas")
	  {
	    $query0.=" WHERE `campania`='{$campania}' AND `canales` LIKE '%{$canal}%' ";
	    $query1.=" WHERE `id` = '{$_GET['campania']}'";
	  }
	}
	$totality = customTotal($query0);
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
			<div class="container">
				<div class="row">
					<div class="col-lg-4 col-md-4 col-sm-12 col-xs12">
						<p class="tmat">Material Autorizado PDV</p>
					</div>
					<div class="col-lg-8 col-md-8 col-sm-12 col-xs12" id="fg">
						<div class="col-lg-1 col-md-1 col-sm-0 col-xs0"></div>
						<div class="col-lg-2 col-md-2 col-sm-2 col-xs2 text-right"><p>Canal:</p></div>
						<div class="col-lg-3 col-md-3 col-sm-3 col-xs3 text-right">
							 <select name="canal" id="canal" class="form-control">
							 	<option value="Todos">Todos</option>
				                <option value="Coppel" <?php if($canal=='Coppel') echo 'selected';?>>Coppel</option>
				                <option value="Elektra" <?php if($canal=='Elektra') echo 'selected';?>>Elektra</option>
				                <option value="Walmart" <?php if($canal=='Walmart') echo 'selected';?>>Walmart</option>
				                <option value="Bodega Aurrera" <?php if($canal=='Bodega Aurrera') echo 'selected';?>>Bodega Aurrera</option>
				                <option value="Suburbia" <?php if($canal=='Suburbia') echo 'selected';?>>Suburbia</option>
				                <option value="Chedraui" <?php if($canal=='Chedraui') echo 'selected';?>>Chedraui</option>
				                <option value="Famsa" <?php if($canal=='Famsa') echo 'selected';?>>Famsa</option>
				                <option value="Liverpool" <?php if($canal=='Liverpool') echo 'selected';?>>Liverpool</option>
				                <option value="F&aacute;bricas de Francia" <?php if($canal=='Fábricas de Francia') echo 'selected';?>>F&aacute;bricas de Francia</option>
				                <option value="Palacio de Hierro" <?php if($canal=='Palacio de Hierro') echo 'selected';?>>Palacio de Hierro</option>
				                <option value="Best Buy" <?php if($canal=='Best Buy') echo 'selected';?>>Best Buy</option>
				                <option value="Soriana" <?php if($canal=='Soriana') echo 'selected';?>>Soriana</option>
				                <option value="Cac" <?php if($canal=='Cac') echo 'selected';?>>Cac</option>
				                <option value="Mini Cac" <?php if($canal=='Mini Cac') echo 'selected';?>>Mini Cac</option>
				                <option value="Smart Store" <?php if($canal=='Smart Store') echo 'selected';?>>Smart Store</option>
				                <option value="Plaza Movistar" <?php if($canal=='Plaza Movistar') echo 'selected';?>>Plaza Movistar</option>
				                <option value="Especialista" <?php if($canal=='Especialista') echo 'selected';?>>Especialista</option>
				                <option value="Cambaceo" <?php if($canal=='Cambaceo') echo 'selected';?>>Cambaceo</option>
				            </select>
						</div>
						<div class="col-lg-2 col-md-2 col-sm-2 col-xs2"><p>Campaña:</p></div>
						<div class="col-lg-3 col-md-3 col-sm-3 col-xs3">
							  <select name="campania" id="campania" class="form-control">
				                <option value="Todas">Todas</option>
								<?php
								if($canal=="Todos")
								{
									$query3="SELECT * FROM `materialpdv_campanias` WHERE `vigencia1` <= '{$dia}' AND `vigencia2` >= '{$dia}' ORDER BY `posicion`";
									$result3 = $db->sql_query($query3);
									while( $camp_info= $db->sql_fetchrow($result3) ) 
									{
										echo '<option value="'.$camp_info['id'].'"';
										if($camp_info['id']==$campania)
										echo ' selected';
										echo '>'.$camp_info['nombre'].'</option>';
									}
								}
								else
								{
									$q1="SELECT `campania` FROM `materialpdv_imagenes` WHERE `canales` LIKE '%{$canal}%' GROUP BY `campania`";
									$totality = customTotal($q1);
									if($totality>0)
									{
										$r1 = $db->sql_query($q1);
										while($x1= $db->sql_fetchrow($r1) ) 
										{
											$query3="SELECT * FROM `materialpdv_campanias` WHERE `id`='{$x1['campania']}' AND `vigencia1` <= '{$dia}' AND `vigencia2` >= '{$dia}'";
											$result3 = $db->sql_query($query3);
											$camp_info= $db->sql_fetchrow($result3);
											if($camp_info['id']!="")
											{
												echo '<option value="'.$camp_info['id'].'"';
												if($camp_info['id']==$campania)
												echo ' selected';
												echo '>'.$camp_info['nombre'].'</option>';
											}
										}
									}
								}
								?>
				            </select>
						</div>
						<div class="col-lg-1 col-md-1 col-sm-1 col-xs1 text-right">
							<button class="descarga" type="button" onclick="window.open('<?php echo '../mautorizadopdv_pdf.php?campania='.$campania.'&canal='.$canal;?>');" <?php if($totality<=0) echo 'disabled'; ?>><i class="fa fa-arrow-circle-o-down" aria-hidden="true" id="downl"></i></button>
						</div>
					</div>
				</div>
				<div class="row vertical-align tp">
					<div class="col-md-1 col-sm-1 col-xs-1">
						<a id="prev" href="#"><i class="fa fa-chevron-left" aria-hidden="true"></i></a>
					</div>
					<div class="col-md-10 col-sm-10 col-xs-10 lienzo">
						<div class="cycle-slideshow"  data-cycle-prev="#prev" data-cycle-next="#next" data-cycle-fx="scrollHorz" data-cycle-timeout="0" data-cycle-pager="#nav" data-cycle-pager-template="" data-cycle-slides="div.lienzo_mat">
						<?php
							$result = $db->sql_query($query1);
							$thumbs=array();
							while( $main_info= $db->sql_fetchrow($result) ) 
							{
								$oferta=$main_info['oferta'];
								$titulo=$main_info['nombre'];
								$vigencia1=explode('-',$main_info['vigencia1']);
								$vigencia2=explode('-',$main_info['vigencia2']);
								$mes1=intval($vigencia1[1]);
								$mes2=intval($vigencia2[1]);
								$vigencia=$vigencia1[2].' de '.$meses[$mes1].' de '.$vigencia1[0].' - '.$vigencia2[2].' de '.$meses[$mes2].' de '.$vigencia2[0];
								$query2="SELECT * FROM `materialpdv_imagenes`  WHERE `campania`='{$main_info['id']}'";
								if($canal!="Todos")
								$query2.=" AND `canales` LIKE '%{$canal}%'";
								$result2 = $db->sql_query($query2); 
								while( $img_info= $db->sql_fetchrow($result2))
								{
									$canales=unserialize($img_info['canales']);
									$imagen=$img_info['imagen'];
									$thumbs[].=$imagen;
									$descripcion=$img_info['descripcion'];
									$nota=$img_info['nota'];
									if($nota!="") $nota='*'.$nota;
									echo '<!-- slide -->
									<div class="col-md-12 col-sm-12 col-xs-12 lienzo_mat">
										<div class="col-lg-7 col-md-7 col-sm-7 col-xs7 datos_mat">
											<p>Campaña: <span>'.$titulo.'</span></p>
											<p>Oferta: <span>'.$oferta.'</span></p>
											<p>Vigencia: <span class="rosa">'.$vigencia.'</span></p>';   
									if($todos=='Todos')
									{
										echo '<div class="col-md-12 col-sm-12 col-xs-12 cuadro_cacs">
										Colocar en:
										<ul>';
										foreach ($canales as $c)
										echo '<li>'.$c.'</li>';
										echo '</ul>
										</div>';
									}
									echo '</div>
									<div class="col-lg-5 col-md-5 col-sm-5 col-xs5">
										<div class="col-md-12 col-sm-12 col-xs-12" id="tipo_mat">'.$descripcion.'</div>
										<div class="col-md-12 col-sm-12 col-xs-12"><img src="../archivos/pop_autorizado/'.$imagen.'" class="img-responsive"/></div>
										<div class="col-md-12 col-sm-12 col-xs-12"><p class="nota_mat">'.$nota.'</p></div>
									</div>
								</div>';
								}                   
							}
						?>
						</div>
					</div>
					<div class="col-md-1 col-sm-1 col-xs-1">
						<a id="next" href="#"><i class="fa fa-chevron-right" aria-hidden="true"></i></a>
					</div>
				</div>
				<!--div class="row">
				  <div class="col-md-1 col-sm-1 col-xs-1"></div>
				  <div class="col-md-10 col-sm-10 col-xs-10">
					  <ul id="nav">
					  	<li><a href='#'><img src='http://expertomovistar.com.mx/archivos/pop_autorizado/1488989327CE.jpg'  width=50 height=50></a></li>
					  	<li><a href='#'><img src='http://expertomovistar.com.mx/archivos/pop_autorizado/1488989327CE.jpg'  width=50 height=50></a></li>
					  	<li><a href='#'><img src='http://expertomovistar.com.mx/archivos/pop_autorizado/1488989327CE.jpg'  width=50 height=50></a></li>
					  </ul>
				  </div>
				  <div class="col-md-1 col-sm-1 col-xs-1"></div>
				</div-->
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
				$("#canal").change(function(){
		          var campania=$("#campania").val();
		          $(location).attr('href','material_autorizado.php?campania='+campania+'&canal='+$(this).val());
		        });
		        $("#campania").change(function(){
		          var canal=$("#canal").val();
		          $(location).attr('href','material_autorizado.php?campania='+$(this).val()+'&canal='+canal);
		        });
			});
		</script>
   </body>
</html>