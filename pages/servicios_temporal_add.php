<?php
session_start();
include('../dist/includes/dbcon.php');
	//$branch=$_SESSION['branch'];
	$id_pedido = $_POST['id_pedido'];
	$descripcion = $_POST['descripcion'];
	$monto = $_POST['monto'];




		
	

mysqli_query($con,"INSERT INTO detalles_ventas_servicios_temporal(id_pedido,descripcion,monto)
VALUES('$id_pedido','$descripcion','$monto')")or die(mysqli_error($con));


  echo "<script type='text/javascript'>alert(' FUE AGREGADO CORRECTAMENTE');</script>";

	
			echo "<script>document.location='ventas_servicios.php'</script>";
	



?>
