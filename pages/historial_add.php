<?php
session_start();
include('../dist/includes/dbcon.php');
	//$branch=$_SESSION['branch'];

	$id_cliente = $_POST['id_cliente'];
	$codigo = $_POST['codigo'];
	$tipo_historial = $_POST['tipo_historial'];
	$descripcion = $_POST['descripcion'];
$fecha_registro = $_POST['fecha_registro'];



		
	





			mysqli_query($con,"INSERT INTO historial(descripcion,codigo,fecha_registro,tipo_historial,id_cliente)
				VALUES('$descripcion','$codigo','$fecha_registro','$tipo_historial','$id_cliente')")or die(mysqli_error($con));

			
			echo "<script>document.location='historial.php?id_cliente=$id_cliente'</script>";


	





?>
