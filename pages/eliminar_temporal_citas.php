<?php session_start();
if(empty($_SESSION['id'])):
header('Location:../index.php');
endif;

include('../dist/includes/dbcon.php');


          if(isset($_REQUEST['id_citas']))
            {
              $id_citas=$_REQUEST['id_citas'];
            }
            else
            {
            $id_citas=$_POST['id_citas'];
          }

      if(isset($_REQUEST['id_cliente']))
            {
              $id_cliente=$_REQUEST['id_cliente'];
            }
            else
            {
            $id_cliente=$_POST['id_cliente'];
          }



  mysqli_query($con,"delete from temporal_citas where id_citas= '$id_citas'")or die(mysqli_error());

//  echo "<script type='text/javascript'>alert('Eliminado correctamente!');</script>";
  echo "<script>document.location='cita_agregar.php?id_cliente=$id_cliente'</script>"; 
  
?>