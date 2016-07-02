<?php
include('conexion.php');
					$mod=$_POST['mod'];		
					$tam=$_POST['tam'];
					$cos=$_POST['cos'];		
					$im=$_FILES['archivo']['name'];
					$im1=$_FILES['archivo']['tmp_name'];
					$com=$_POST['com'];
					$tip=$_POST['tip'];		
					$act=$_POST['act'];
				$qq1="INSERT INTO artefactos (id_a,modelo,tamano,costo,imagen,comentario,tipo,activoo) 
				VALUES (NULL,'$mod','$tam','$cos','$im','$com','$tip','$act')";
		$rs1=mysql_query($qq1,$con)or die('error ');
if($rs1){
	@copy($im1,"administrador/imagenes/".$im);
	echo"<script>
	 alert('producto registrada!!');
	 location.href='nuevoProducto.php';
	 </script>";
	}
	

?>