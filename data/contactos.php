<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Contactos</title>

    <link href="css/bootstrap.min.css" rel="stylesheet">
	<link rel="stylesheet" href="css/font-awesome.min.css">
	<link rel="stylesheet" href="css/animate.css">
	<link href="css/prettyPhoto.css" rel="stylesheet">
	<link href="css/style.css" rel="stylesheet" />	
   <style type="text/css">
   .panel-body{
	   color:#000;}
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
								<li role="presentation"><a href="laptops.php">LAPTOPS</a></li>								
								<li role="presentation"><a href="celulares.php">CELULARES</a></li>
								<li role="presentation"><a href="contactos.php" class="active">CONTACTOS</a></li>	
                                <li role="presentation"><a href="admin/login.php">Login</a></li>					
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
				<li>CONTACTOS</li>			
			</div>		
		</div>	
	</div>
	<div class="map">
	</div>
	<section>
          <div class="container">
          	<div class="center">
            	<div class="col-xs-12 col-sm-6 col-lg-6">
               				<div class="panel panel-success">
                                    <div class="panel-heading">
                                        <label>Formulario compras de producto</label>
                                    </div>
                                    <div class="panel-body">
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
                <div class="col-xs-12 col-sm-6 col-lg-6">
                  <h2>Computadoras y Celulares al mejor precio</h2>
                            <H3>Usted encontrara el producto de su interes al mejor precio del mercado</H3>
                            <P>Computadoras y celular en PROMOCIÓN!!!<br>
                                Hola Bienvenido te invitó que aproveches la promocion de nuestros modelos de computadoras y celulares</P>
                            <img src="images/2+LAPTOPS+X+11000.jpg" width="100%" height="100%">
                </div>
            </div>
          </div>
    </section>
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
    <script src="js/bootstrap.min.js"></script>
	<script src="js/jquery.prettyPhoto.js"></script>
    <script src="js/jquery.isotope.min.js"></script>  
	<script src="js/wow.min.js"></script>
	<script src="js/functions.js"></script>
	
  </body>
</html>