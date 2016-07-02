<?php
include('conexion.php');
		$id=$_POST['car']." ".$_POST['dpto'];
		$no=$_POST['nom'];
		$ap=$_POST['ape'];
		$te=$_POST['tel'];
		$di=$_POST['dir'];
		$q="insert into cliente(id_c,nombre,apellido,telefono,direccion) values('$id','$no','$ap','$te','$di')";
$rs=mysql_query($q,$con)or die('error ');
if($rs){

	echo"<script>
	 alert('exitosamente reguistrado!!');
	 location.href='../contactos.php';
	 </script>";
	}

?>