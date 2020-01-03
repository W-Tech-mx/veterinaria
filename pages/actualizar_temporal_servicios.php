<?php session_start();
if(empty($_SESSION['id'])):
header('Location:../index.php');
endif;

include('../dist/includes/dbcon.php');

  $id_temporal = $_POST['id_temporal'];
  $monto = $_POST['monto'];

  $descripcion = $_POST['descripcion'];


  mysqli_query($con,"update detalles_ventas_servicios_temporal set monto='$monto',descripcion='$descripcion' where id_temporal='$id_temporal'")or die(mysqli_error());

  
//  echo "<script type='text/javascript'>alert('Eliminado correctamente!');</script>";
  echo "<script>document.location='ventas_servicios.php'</script>";  
  
?>