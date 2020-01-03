<?php
session_start();
include('../dist/includes/dbcon.php');
	//$branch=$_SESSION['branch'];
	$num_pedido = $_POST['num_pedido'];
	$fecha = $_POST['fecha'];

  $id_sesion=$_SESSION['id'];





            $query6=mysqli_query($con,"select * from temporal  where id_temporal='1' ")or die(mysqli_error());

                      while($row6=mysqli_fetch_array($query6)){
         $id_cliente=$row6['cliente'];

    }






    if ($id_cliente!=0)
    {


mysqli_query($con,"INSERT INTO ventas_servicios(num_pedido,fecha,id_sesion,id_cliente)
VALUES('$num_pedido','$fecha','$id_sesion','$id_cliente')")or die(mysqli_error($con));		
		


$cont=0;
$id_pedidos = array();
$descripcion = array();


$monto = array();

            $query1=mysqli_query($con,"select * from detalles_ventas_servicios_temporal where id_pedido='$num_pedido'")or die(mysqli_error());

                      while($row1=mysqli_fetch_array($query1)){
           $cont++;
                   $id_pedidos[] = $row1['id_pedido'];
					$descripcion[] = $row1['descripcion'];
					$monto[] = $row1['monto'];

}

$i=0;

for ($i=0; $i <$cont ; $i++) { 

             mysqli_query($con,"INSERT INTO detalles_ventas_servicios(id_pedido,descripcion,monto)
VALUES('$id_pedidos[$i]','$descripcion[$i]','$monto[$i]')")or die(mysqli_error($con));
}


  mysqli_query($con,"delete from detalles_ventas_servicios_temporal where id_pedido='$num_pedido'")or die(mysqli_error());
  echo "<script type='text/javascript'>alert('venta hecha!');</script>";
//    mysqli_query($con,"delete from temporal_pedido where  id_pedido='$num_pedido'")or die(mysqli_error());

  mysqli_query($con,"update temporal set cliente='' where id_temporal='1'")or die(mysqli_error());





  $monto=0;
  $caja_anterior=0;
          $query3=mysqli_query($con,"select * from caja   where estado='abierto'  ")or die(mysqli_error());
      while($row3=mysqli_fetch_array($query3)){
      $caja_anterior=$row3['monto'];
      }
      $query=mysqli_query($con,"select * from detalles_ventas_servicios  where id_pedido ='$num_pedido'  ")or die(mysqli_error());
      while($row=mysqli_fetch_array($query)){
      $monto=($row['monto'])+$monto;
      }
$monto=$caja_anterior+$monto;
    mysqli_query($con,"update caja set monto='$monto'  where estado='abierto'")or die(mysqli_error());
  
	echo "<script>document.location='generar_pdf_servicios.php?num_pedido=$num_pedido'</script>";


}

	

    else
    {


  
  
      echo "<script type='text/javascript'>alert('Tienes que seleccionar cliente!');</script>";
      echo "<script>document.location='ventas_servicios.php'</script>";



   



}




?>
