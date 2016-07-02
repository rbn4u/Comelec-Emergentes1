<?php
 		session_start();
		include_once('conexion.php'); 
		
		if($_SESSION['tipo_usu']=='a' or $_SESSION['tipo_usu']=='u'){
		}else{
			header('location:error.php');
		}

$q="SELECT v.modelo,v.costo,v.tipo,v.id_v,c.nombre,c.apellido,c.telefono,c.direccion FROM venta v join cliente c on v.id_c=c.id_c";
$re=mysql_query($q,$con);

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
    <style type="text/css">
    .container .row .col-xs-12 .table-responsive .table.table-bordered thead .menn {
	color: #FFF;
	background-color: #03F;
}
    </style>
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
    <div class="row-fluid">
        <div class="span6" align="center">
   	     </div>
        		<div class="container">
		<div class="row">
			<div class="col-xs-12">
			<h2>administracion de ventas</h2>
				<div class="table-responsive">
					<table class="table table-bordered">
						<thead>
                        
							<tr class="menn">
								<th>Nº</th>
								<th>Nombres</th>
								<th>Apellidos</th>
								<th>Telefono</th>
								<th>direccion</th>
								<th>modelo</th>
								<th>tipo</th>
                                <th>costo</th>
							</tr>
						</thead>
                        
						<tbody>
                        <?php while($rs=mysql_fetch_array($re)){ ?>
							<tr>
								<td><?php echo $rs['id_v']; ?></td>
								<td><?php echo $rs['nombre']; ?></td>
								<td><?php echo $rs['apellido']; ?></td>
								<td><?php echo $rs['telefono']; ?></td>
								<td><?php echo $rs['direccion']; ?></td>
								<td><?php echo $rs['modelo']; ?></td>
								<td><?php echo $rs['tipo']; ?></td>
                                <td><?php echo $rs['costo']; ?></td>
							</tr>
					<?php } ?>
						</tbody>
					</table>
			</div>
		</div>
	</div>
        </div>
    </div>
</body>
</html>