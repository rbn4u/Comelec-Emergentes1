<?php
include('admin/conexion.php');
$q="SELECT * FROM artefactos WHERE tipo='celular'";
$re=mysql_query($q,$con);
?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
   <title>Company-HTML Bootstrap theme</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
	<link rel="stylesheet" href="css/font-awesome.min.css">
	<link rel="stylesheet" href="css/animate.css">
	<link href="css/prettyPhoto.css" rel="stylesheet">
	<link href="css/style.css" rel="stylesheet" />		
<style type="text/css">
	#tama {
	font-weight: bold;
	color: #009;
}
    #cos {
	font-weight: bold;
	color: #000;
}
.modal-body{
    color:#000;
}
    </style>
  </head>
  <body>
	<header>		
		<nav class="navbar navbar-default navbar-fixed-top" role="navigation">
			<div class="navigation">
				<div class="container">					
					<div class="navbar-header">
						<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse.collapse">
							<span class="sr-only"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
						<div class="navbar-brand">
							<a href="index.php"><h1><span>Com</span>Elec</h1></a>
						</div>
					</div>
					
					<div class="navbar-collapse collapse">							
						<div class="menu">
							<ul class="nav nav-tabs" role="tablist">
								<li role="presentation"><a href="index.php">INICIO</a></li>
								<li role="presentation"><a href="computadoras.php">COMPUTADORAS</a></li>
								<li role="presentation"><a href="laptops.php">LAPTOS</a></li>								
								<li role="presentation"><a href="celulares.php" class="active">CELULARES</a></li>
								
								<li role="presentation"><a href="contactos.php">CONTACTOS</a></li>						
							</ul>
						</div>
					</div>						
				</div>
			</div>	
		</nav>		
	</header>
	
	<div id="breadcrumb">
		<div class="container">	
			<div class="breadcrumb">							
				<li><a href="index.php">INICIO</a></li>
				<li>CELULARES</li>			
			</div>		
		</div>	
	</div>
	
	<section id="blog" class="container">
        <div class="blog">
            <div class="row">
                 <div class="col-md-8">
                    <div class="blog-item">
                        <div class="row">
                            <div class="col-sm-12 blog-content" align="center">
                                <a href=""><img class="img-responsive img-blog" src="images/galaxy-note-4.jpg" width="80%" alt="" /></a>
                                <h4>Los mejores celulares son la ultima tecnologia</h4>
                                <p>Tenemos los celulares que usted esta buscando, de las mejores marcas como: Sony, Samsung, LG, Huawei, Motorola, 
                                iPhone etc. Todos nuestros productos vienen con garantia de 1 a&ntilde;o.</p>
                            </div>
                        </div>    
                    </div>
                </div>
                <aside class="col-md-4">
                    <div class="widget categories">
                        <h3>Categorias</h3>
                        <div class="row">
                            <div class="col-sm-6">
                                <ul class="blog_category">
                                    <li><a href="#">Computadoras <span class="badge">04</span></a></li>
                                    <li><a href="#">Smartphones <span class="badge">10</span></a></li>
                                    <li><a href="#">Laptops <span class="badge">06</span></a></li>
                                </ul>
                            </div>
                        </div>                     
                    </div>
   				  <div class="widget blog_gallery">
                        <h3> Galeria</h3>
                      <ul class="sidebar-gallery">
                          <li><a href="#"><img src="images/descarga.jpg" width="94" height="87"></a></li>
                        <li><a href="#"><img src="images/GALAXY S6 EDGE NUEVO-300x300.jpg" width="106" height="94"></a></li>
                          <li><a href="#"><img src="images/galaxy_tab_3 pagina web OAS COMPUTER-300x300.jpg" width="111" height="111"></a></li>
                          <li><a href="#"><img src="images/images (1).jpg" width="103" height="82"></a></li>
                          <li><a href="#"><img src="images/images (2).jpg" width="102" height="75"></a></li>
                          <li><a href="#"><img src="images/images (3).jpg" width="110" height="73"></a></li>
                      </ul>
                    </div>
    			</aside>  
            </div>
        </div>
    </section>
	
<div class="our-team">
		<div class="container">
			<h3>Adquierelo nuestros ultimos smartphones</h3>	
				<?php  while($rs=mysql_fetch_array($re)){ ?>
            <div class="row">
                
               <div class="col-md-3" data-wow-duration="1000ms" data-wow-delay="300ms" >

                <img src="admin/administrador/imagenes/<?php echo $rs['imagen']; ?>" alt="" width="90%" height="90%" >
                </div>
                <div class="col-md-6" style="color:#003;">
                <h3><?php echo $rs['modelo']; ?></h3>
					<?php echo $rs['comentario']; ?>
                </div>
                
                <div class="col-md-3">
                <h4><?php echo $rs['modelo'];  ?></h4>
                        <div id="tama"><?php echo $rs['tamano'];  ?></div>
                        <div id="cos"><?php echo $rs['costo'];  ?></div>
                        <div id="bot">
                            <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">COMPRAR</button>
                        </div>
                </div>
		<div id="myModal" class="modal fade" role="dialog">
		  	<div class="modal-dialog">
		    	<div class="modal-content">
		      		<div class="modal-header">
		        		<button type="button" class="close" data-dismiss="modal">&times;</button>
		        		<h4 class="modal-title">Comprar producto</h4>
		      		</div>
				       <form name="form1" method="post" action="admin/guardarcliente1.php">
				       <div class="modal-body">
							  <strong>Carnet</strong>
							  <br>
				            <input type="number" name="car" autocomplete="off" size="15" class="input-large">
				            <select name="dpto" id="dpto">
				              <option value="lp">la paz</option>
				              <option value="sc">sucre</option>
				              <option value="bn">beni</option>
				              <option value="pd">pando</option>
				              <option value="tj">tarija</option>
				              <option value="or">oruro</option>
				              <option value="pt">potosi</option>
  							</select>
				            <br>
				            <strong>Nombre Completo</strong><br>
				            <input type="text" name="nom" autocomplete="off" required class="input-large" value="" size="30"><br>
				            <strong>Apellido Completo</strong><br>
				            <input type="text" name="ape" autocomplete="off" required class="input-large" value="" size="30"><br>
				           	<strong>Telefono</strong><br>
  							<input type="number" name="tel" autocomplete="off" required class="input-large" value="" size="30"><br>
				            <strong>Direccion</strong><br>
				            <input type="text" name="dir" id="dir" autocomplete="off" required class="input-large" value="" size="30"><br>
				            <strong>Modelo</strong><br>
				            <input type="text" name="mod" id="mod" autocomplete="off" required class="input-large" value="" size="30"><br>
				            <strong>Costo:</strong><br>
  							<input type="number" name="pre" autocomplete="off" required class="input-large" value="" size="10"><br>
				            <strong>Tipo de Producto</strong>:<br>
				            <select name="tip" id="tip" autocomplete="off" required class="input-large">
                                <option value="computadora">Computadora</option>
                                <option value="laptop">Laptop</option>
                                <option value="celupar">Celular</option>
                            </select>
				        </div>
				        <div class="modal-footer">
				            <input type="submit" class="btn btn-secondary" data-dismiss="modal" aria-hidden="true" value="cancelar">
				            <input type="submit" name="boton" id="boton" value=" comprar" class="btn btn-primary">
				        </div>
						</form>
		    	</div>
		  </div>
  			 </div>
            </div>
           <?php }?> 
		</div>
</div>              
	<footer>
		<div class="footer">
			<div class="container">
				<div class="social-icon">
					<div class="col-md-4">
						<ul class="social-network">
							<li><a href="#" class="fb tool-tip" title="Facebook"><i class="fa fa-facebook"></i></a></li>
							<li><a href="#" class="twitter tool-tip" title="Twitter"><i class="fa fa-twitter"></i></a></li>
							<li><a href="#" class="gplus tool-tip" title="Google Plus"><i class="fa fa-google-plus"></i></a></li>
							<li><a href="#" class="linkedin tool-tip" title="Linkedin"><i class="fa fa-linkedin"></i></a></li>
							<li><a href="#" class="ytube tool-tip" title="You Tube"><i class="fa fa-youtube-play"></i></a></li>
						</ul>	
					</div>
				</div>
				<div class="col-md-4 col-md-offset-4">
					<div class="copyright">
						&copy; Julio 2016 - UNIVERSIDAD PUBLICA DE EL ALTO
					</div>
				</div>						
			</div>
			<div class="pull-right">
				<a href="#home" class="scrollup"><i class="fa fa-angle-up fa-3x"></i></a>
			</div>
		</div>
	</footer>
	<script src="js/jquery-2.1.1.min.js"></script>
	<script src="js/jquery.js"></script>	
    <script src="js/bootstrap.min.js"></script>
	<script src="js/jquery.prettyPhoto.js"></script>
    <script src="js/jquery.isotope.min.js"></script>  
	<script src="js/wow.min.js"></script>
	<script src="js/functions.js"></script>
  </body>
</html>