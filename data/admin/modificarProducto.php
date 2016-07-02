<?php
include('conexion.php');
					$id=$_POST['idd'];
					$mod=$_POST['mod'];		
					$tam=$_POST['tam'];
					$cos=$_POST['cos'];		
					$tip=$_POST['tip'];		
					$act=$_POST['act'];
		
		$q11="update artefactos set modelo='$mod',tamano='$tam',costo='$cos',tipo='$tip',activoo='$act' 
		where id_a='$id' ";
		$re11=mysql_query($q11,$con)or die('nnnnnnnnnnnnnnnnnn');
if($re11){
	@copy($im1,"administrador/imagenes/".$im);
	echo"<script>
	 alert('producto modificado correctamente!!');
	 location.href='nuevoProducto.php';
	 </script>";
	}
	

?>