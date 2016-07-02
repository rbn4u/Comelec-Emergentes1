<?php
 		session_start();
		include_once('conexion.php'); 
		include_once('funciones.php');
		if($_SESSION['tipo_usu']=='a' or $_SESSION['tipo_usu']=='u'){
		}else{
			header('location:login.php');
		}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Blanco</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="../css/bootstrap.css" rel="stylesheet">
    <link href="../css/bootstrap-responsive.css" rel="stylesheet">
    <link href="../css/docs.css" rel="stylesheet">
    <link href="../js/google-code-prettify/prettify.css" rel="stylesheet">
    
    <script type="text/javascript" src="http://platform.twitter.com/widgets.js"></script>
	<script src="../js/jquery.js"></script>
    <script src="../js/bootstrap-transition.js"></script>
    <script src="../js/bootstrap-alert.js"></script>
    <script src="../js/bootstrap-modal.js"></script>
    <script src="../js/bootstrap-dropdown.js"></script>
    <script src="../js/bootstrap-scrollspy.js"></script>
    <script src="../js/bootstrap-tab.js"></script>
    <script src="../js/bootstrap-tooltip.js"></script>
    <script src="../js/bootstrap-popover.js"></script>
    <script src="../js/bootstrap-button.js"></script>
    <script src="../js/bootstrap-collapse.js"></script>
    <script src="../js/bootstrap-carousel.js"></script>
    <script src="../js/bootstrap-typeahead.js"></script>
    <script src="../js/bootstrap-affix.js"></script>
    <script src="../js/holder/holder.js"></script>
    <script src="../js/google-code-prettify/prettify.js"></script>
    <script src="../js/application.js"></script>

</head>
<body data-spy="scroll" data-target=".bs-docs-sidebar">
<div align="center">
	<table width="90%">
      <tr>
        <td>
        
        	<table class="table table-bordered">
              <tr class="success">
                <td>
                	<center>
                    	<h2>Nuevo Producto</h2>
                		<a href="#nuevo" role="button" class="btn" data-toggle="modal">
                        	<strong><i class="icon-plus"></i> Ingresar Nuevo Producto</strong>
                        </a>
                    </center>
              	</td>
              </tr>
            </table>
        	
            <table class="table table-bordered">
            	<tr class="success">
                    <td><strong>NUMERO</strong></td>
                    <td><strong>MODELO</strong></td>
                    <td><strong>TAMAÑO</strong></td>
                    <td><strong>COSTO</strong></td>
                    <td><strong>TIPO</strong></td>
                    <td><strong><center>ACTIVO</center></strong></td>
                    <td><strong></strong></td>
              	</tr>
                <?php 
				$q1="SELECT * FROM artefactos";
					$sql=mysql_query($q1,$con);
					while($row=mysql_fetch_array($sql)){
						if($row['tipo']=='a'){
							$tipo='Administrado';
						}else{
							$tipo='Usuario';	
						}
				?>
                <tr>
                    <td><?php echo $row['id_a']; ?></td>
                    <td><?php echo $row['modelo']; ?></td>
                    <td><?php echo $row['tamano']; ?></td>
                     <td><?php echo $row['costo']; ?></td>
                    <td><?php echo $row['tipo']; ?></td>
                    <td><center><?php echo estado($row['activoo']); ?></center></td>
                    <td>
                    	<center>
                        	<a href="#u<?php echo $row['id_a']; ?>" role="button" class="btn btn-mini" data-toggle="modal">
                            	<i class="icon-edit"></i>
                            </a>
                        </center>
                    </td>
              	</tr>
                
                <div id="u<?php echo $row['id_a']; ?>" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                   <form enctype="multipart/form-data" name="form1" id="form1" action="modificarProducto.php" method="post">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                        <h3 id="myModalLabel" align="center">MODIFICAR PRODUCTO</h3>
                    </div>
                    <div class="modal-body" align="center">
                    	<input type="hidden" name="proceso" value="actualizar">
                        <strong>MODELO</strong><br>
                        <input type="text" name="mod" autocomplete="off" required class="input-large" value="<?php echo $row['modelo']; ?>"><br>	<input type="hidden" id="idd" name="idd" value="<?php echo $row['id_a']; ?>">
                        <strong>TAMAÑO</strong><br>
                        <input type="text" name="tam" autocomplete="off" required class="input-large" value="<?php echo $row['tamano']; ?>"><br>
                        <strong>COSTO</strong><br>
                        <input type="text" name="cos" autocomplete="off" required class="input-large" value="<?php echo $row['costo']; ?>"><br>
                       
                        <strong>Estado</strong><br>
                        <select name="act" class="input-large">
                            <option value="s" <?php if($row['activoo']=='s'){ echo 'selected';} ?>>Activo</option>
                            <option value="n" <?php if($row['activoo']=='n'){ echo 'selected';} ?>>No Activo</option>
                        </select><br>
                        <strong>Tipo</strong><br>
                        <select name="tip" class="input-large">
         	 <option value="computadora" <?php if($row['tipo']=='computadora'){ echo 'selected';} ?>>Computadora</option>
             <option value="laptop" <?php if($row['tipo']=='laptop'){ echo 'selected';} ?>>Laptop</option>
             <option value="celular" <?php if($row['tipo']=='celular'){ echo 'selected';} ?>>Celular</option>
                            
                        </select><br>
                    </div>
                    <div class="modal-footer">
                        <button class="btn" data-dismiss="modal" aria-hidden="true"><strong>Cerrar</strong></button>
                        
                        <input type="submit" name="actualizar" class="btn btn-primary" value="modificar">
                    </div>
                    </form>
                </div>
                
                <?php } ?>
            </table>
        </td>
      </tr>
    </table>
    
    <div id="nuevo" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    	<form enctype="multipart/form-data" name="form1" id="form1" action="guardarProducto.php" method="post">
        <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
            <h3 id="myModalLabel">Crear Nuevo Producto</h3>
        </div>
        <div class="modal-body">
        
        	<input type="hidden" name="proceso" value="guardar">
            <strong>MODELO</strong><br>
            <input type="text" name="mod" autocomplete="off" required class="input-large" value=""><br>
            <strong>TAMAÑO</strong><br>
            <input type="text" name="tam" autocomplete="off" required class="input-large" value=""><br>
            <strong>COSTO</strong><br>
            <input type="text" name="cos" autocomplete="off" required class="input-large" value=""><br>
           <strong>IMAGEN</strong><br>
            <input type="file" name="archivo" id="archivo"><br>
            <strong>COMENTARIO</strong><br>
            <textarea name="com" id="com"></textarea><br>
              <strong>TIPO</strong><br>
            <select name="tip" class="input-large">
            	<option value="computadora">CONTUPADORA</option>
                <option value="laptop">LAPTOP</option>
                <option value="celular">CELULAR</option>
            </select><br>
            <strong>ACTIVO</strong><br>
            <select name="act" class="input-large">
            	<option value="s">Activo</option>
                <option value="n">No Activo</option>
            </select><br>
          
        </div>
        <div class="modal-footer">
            <button class="btn" data-dismiss="modal" aria-hidden="true"><strong>Cerrar</strong></button>
            <input type="submit" class="btn btn-primary" name="guardar" value="Crear Producto">
            
        </div>
        </form>
    </div>
</div>
</body>
</html>
