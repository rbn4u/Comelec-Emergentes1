<?php
		session_start();
		include_once('conexion.php'); 
		
		if(!empty($_POST['usuario']) and !empty($_POST['contra'])){
			$usuario=$_POST['usuario'];
			$contra=$_POST['contra'];
			$can=mysql_query("SELECT * FROM usuarios WHERE usu='".$usuario."'  and con='".$contra."'");
			if($dato=mysql_fetch_array($can)){
				if($dato['estado']=='s'){
					$_SESSION['username']=$dato['usu'];
					$_SESSION['tipo_usu']=$dato['tipo'];
					if($_SESSION['tipo_usu']=='a' or $_SESSION['tipo_usu']=='u'){						
						header('location:Administrador.php');
					}
				}
			}
		}
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login</title>
    <link href="../css/bootstrap.min.css" rel="stylesheet">
	<link rel="stylesheet" href="../css/font-awesome.min.css">
	<link rel="stylesheet" href="../css/animate.css">
	<link href="../css/prettyPhoto.css" rel="stylesheet">
	<link href="../css/style.css" rel="stylesheet" />
	<style type="text/css">
	.navbar-brand {
	padding-bottom: 50px;
}
    #contact-page .container .row #login {
	border: thin solid #999;
	width: 50em;
}
 body {
	padding-top: 40px;
	padding-bottom: 40px;
	background-color: #f5f5f5;
	background-image: url(img/fondoP.png);
      }
#breadcrumb {
}

      .form-signin {
        max-width: 310px;
        padding: 19px 29px 29px;
        margin: 0 auto 20px;
        background-color: #fff;
        border: 1px solid #e5e5e5;
        -webkit-border-radius: 5px;
           -moz-border-radius: 5px;
                border-radius: 5px;
        -webkit-box-shadow: 0 1px 2px rgba(0,0,0,.05);
           -moz-box-shadow: 0 1px 2px rgba(0,0,0,.05);
                box-shadow: 0 1px 2px rgba(0,0,0,.05);
      }
      .form-signin .form-signin-heading,
      .form-signin .checkbox {
        margin-bottom: 10px;
      }
      .form-signin input[type="text"],
      .form-signin input[type="password"] {
        font-size: 16px;
        height: auto;
        margin-bottom: 15px;
        padding: 7px 9px;
	
      }
    #breadcrumb .container .breadcrumb {
	height: 20%;
}
    #contact-page .container .form-signin .input-block-level {
	font-size: 18px;
	color: #000;
}
    </style>	

  </head>
  <body>
	<header>		
		<nav class="navbar navbar-default navbar-fixed-top" role="navigation">
			<div class="navigation">
				<div class="container">					
					<div class="navbar-header">
						
						<div class="navbar-brand">
							<a href="../index.php"><h1><span>Com</span>Elec</b></h1></a>
						</div>
					</div>
										
				</div>
			</div>	
		</nav>		
	</header>
	
	<div id="breadcrumb">
		<div class="container">	
			<div class="breadcrumb">							
				<li><a href="../index.php">INICIO</a></li>
				<li>Login</li>			
			</div>		
		</div>	
	</div>
	

	
	<section id="contact-page">
         <div class="container">
      <form name="form1" method="post" action="" class="form-signin">
        <h2 class="form-signin-heading" align="center">Bienvenid@s</h2>
        <input name="usuario" type="text" class="input-block-level" placeholder="Usuario" autocomplete="off" >
        <input name="contra" type="password" class="input-block-level" placeholder="Contraseña" autocomplete="off">
       <p align="center"><button class="btn btn-large btn-primary" type="submit">Iniciar</button></p> 
        <p>&nbsp;</p>
<?php
		$act="1";
		if(!empty($_POST['usuario']) and !empty($_POST['contra'])){
			$usuario=$_POST['usuario'];
			$contra=$_POST['contra'];
			$cann=mysql_query("SELECT * FROM usuarios WHERE usu='".$usuario."'  and con='".$contra."' ",$con);
			if(!$dato=mysql_fetch_array($cann)){
				if($act=="1"){
					echo '<div class="alert alert-error" style="color:#f00;" align="center"><strong>Usuario y Contraseña Incorrecta</strong></div>';
				}else{
					$act="0";
				}
			}else{
				if($dato['estado']=='n'){
					echo '<div class="alert alert-error" style="color:#f00;" align="center"><strong>Consulte con el Administrador</strong></div>';
				}
			}
		}else{
			
		}
	?>
      </form>
      <h5 align="center">CARRERA: ING DE SISTEMAS</h5>
    </div>

    </section>
	<script src="../js/jquery-2.1.1.min.js"></script>	
    <script src="../js/bootstrap.min.js"></script>
	<script src="../js/jquery.prettyPhoto.js"></script>
    <script src="../js/jquery.isotope.min.js"></script>  
	<script src="../js/wow.min.js"></script>
	<script src="../js/functions.js"></script>
	
  </body>
</html>