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
$id=$_POST['car']." ".$_POST['dpto'];
	$mo=$_POST['mod'];
	$ti=$_POST['tip'];
$q1="INSERT INTO venta (id_v, modelo, tipo, id_c) VALUES (NULL, '$mo','$ti','$id')";
$rs1=mysql_query($q1,$con)or die('error.......... ');
;
	echo"<script>
	 alert('exitosamente reguistrado!!');
	 location.href='../contactos.php';
	 </script>";
	}

?>