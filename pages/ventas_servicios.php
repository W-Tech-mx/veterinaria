
<?php include 'header.php';


?>

    <!-- Font Awesome -->
    <link rel="stylesheet" href="../plugins/datatables/dataTables.bootstrap.css">
    <link rel="stylesheet" href="../dist/css/AdminLTE.min.css">
    <link rel="stylesheet" href="../plugins/select2/select2.min.css">
    <!-- AdminLTE Skins. Choose a skin from the css/skins
         folder instead of downloading all of them to reduce the load. -->
    <link rel="stylesheet" href="../dist/css/skins/_all-skins.min.css">
  <body class="nav-md">
    <div class="container body">
      <div class="main_container">
        <?php include 'main_sidebar.php';?>

        <!-- top navigation -->
       <?php include 'top_nav.php';?>      <!-- /top navigation -->
       <style>
label{

color: black;
}
li {
  color: white;
}
ul {
  color: white;
}
#buscar{
  text-align: right;
}
       <?php
            $fechaactual = date('Y-m-d');
            ?>


<?php
$session_id=$_SESSION['id'];
$cont=0;
$id_pedido="";
            $query3=mysqli_query($con,"select * from ventas_servicios ")or die(mysqli_error());

                      while($row3=mysqli_fetch_array($query3)){
   $cont=$row3['id_pedido'];
}
  $cont=$cont+1;
  $id_pedido='servicios'.$cont.$session_id;

?>
       </style>

        <!-- page content -->
        <div class="right_col" role="main">
      <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12">
            <div class = "x-panel">

            </div>

        </div><!--end of modal-dialog-->
 </div>
 

                 <div class="panel-heading">
                 <div class="panel-heading">




                  <div class="box-header">
                  <h3 class="box-title"> </h3>

                </div><!-- /.box-header -->
               
                


                








                <div class="box-body">
                
         

 
                        
            

          
      






      
 <!--end of modal-->





   <?php
$cliente=0;
            $query6=mysqli_query($con,"select * from temporal  where id_temporal='1' ")or die(mysqli_error());

                      while($row6=mysqli_fetch_array($query6)){

     $cliente=$row6['cliente'];

    }
   

$precio='';
$nombre='';
$dni='';


             $query3=mysqli_query($con,"select * from clientes where id_cliente='$cliente' ")or die(mysqli_error());

                      while($row3=mysqli_fetch_array($query3)){
         $nombre=$row3['nombre'];
     $dni=$row3['dni'];
    }

      ?>
            <table class="table table-bordered table-striped">
                    <thead>
                      <tr>


                 <th>Nombre cliente</th>
                        <th>Dni</th>
  
                        
                      
                      </tr>
                    </thead>
                    <tbody>
             <tr >
              <td><?php echo $nombre;?></td>

                        <td><?php echo $dni;?></td>

              </tr>
                   </tbody>

                  </table>          

   <?php



?>

              





                  
                  <form method="post" action="ventas_servicios_add.php" enctype="multipart/form-data" class="form-horizontal">

    <button type="submit" class="btn btn-primary">REGISTRAR </button>


                     <div class="row">
                    <div class="col-md-3 btn-print">
                      <div class="form-group"></div><!-- /.form group -->
                    </div>
                       <div class="col-md-4 btn-print">
                      <div class="form-group">
 
                      </div>
                    </div>
                           <div class="col-md-4 btn-print">
                
                    </div>
                    </div>

<div class="row">
                    <div class="col-md-3 btn-print">
                      <div class="form-group">
                                                  <label >NÚMERO DE PEDIDO</label>
                 
                      </div><!-- /.form group -->
                    </div>
                       <div class="col-md-4 btn-print">
                      <div class="form-group">
  <input type="text" class="form-control pull-right"  value="<?php echo $id_pedido;?>" id="date"   disabled required>
                          <input type="hidden" class="form-control pull-right" name="num_pedido" value="<?php echo $id_pedido;?>" id="date"    required>
                      </div>
                    </div>
                           <div class="col-md-4 btn-print">
                
                    </div>
                    </div>

<div class="row">
                    <div class="col-md-3 btn-print">
                      <div class="form-group">
                                                  <label >FECHA</label>
                 
                      </div><!-- /.form group -->
                    </div>
                       <div class="col-md-4 btn-print">
                      <div class="form-group">
                    <input type="date" class="form-control" id="ffcontrato" name="fecha" value="<?php echo $fechaactual;?>"  readonly="readonly">
                      </div>
                    </div>
                           <div class="col-md-4 btn-print">
                
                    </div>
                    </div>


     
   


          </form>
                     <div class="row">
                    <div class="col-md-3 btn-print">
                      <div class="form-group"></div><!-- /.form group -->

                    </div>
                       <div class="col-md-4 btn-print">
                      <div class="form-group">

                      </div>
                    </div>
                           <div class="col-md-4 btn-print">



<h2>Agregar venta servicio</h2>
        <form class="form-horizontal" method="post" action="servicios_temporal_add.php" enctype='multipart/form-data'>

      <input type="hidden" name="id_pedido" value="<?php echo $id_pedido; ?>">

           <div class="row">
                    <div class="col-md-3 btn-print">
                      <div class="form-group">
                        <label for="date" >Descripcion</label>
                 
                      </div><!-- /.form group -->
                    </div>
                       <div class="col-md-7 btn-print">
                      <div class="form-group">

                          <input type="text" class="form-control pull-right" id="descripcion" name="descripcion" required >
                      </div>
                    </div>
                           <div class="col-md-2 btn-print">
                
                    </div>
                    </div>

           <div class="row">
                    <div class="col-md-3 btn-print">
                      <div class="form-group">
                        <label for="date" >Monto</label>
                 
                      </div><!-- /.form group -->
                    </div>
                       <div class="col-md-7 btn-print">
                      <div class="form-group">

                          <input type="text" class="form-control pull-right" id="monto" name="monto" required >
                      </div>
                    </div>
                           <div class="col-md-2 btn-print">
                
                    </div>
                    </div>


          
       
              

        









             
                 
    <button type="submit" class="btn btn-primary">Agregar</button>
              










              <div class="modal-footer">


              </div>
        </form>






                    </div>


                       <div class="row">
                    <div class="col-md-6 btn-print">


                  <div class="box-header">
                  <h3 class="box-title">SELECCIONE CLIENTE</h3>
                </div><!-- /.box-header -->

                 <table id="example2" class="table table-bordered table-striped">
                    <thead>
                      <tr>

                    <th>#</th>
                        
                        <th>Nombre</th>
                        <th>Ruc</th>
            
                        <th>Dni</th>        

                 
 <th class="btn-print"> Accion </th>
                      </tr>
                    </thead>
                    <tbody>
<?php
   // $branch=$_SESSION['branch'];
    $query=mysqli_query($con,"select * from clientes ")or die(mysqli_error());
    $i=0;
    while($row=mysqli_fetch_array($query)){
    $id_cliente=$row['id_cliente'];
    $i++;
?>
                      <tr >

<td><?php echo $i;?></td>

              <td><?php echo $row['nombre'];?></td>
<td><?php echo $row['ruc'];?></td>

  <td><?php echo $row['dni'];?></td>                      

     
                          <td>
                                 <?php
                   
                    
                      ?>
 
<a class="btn btn-danger btn-print" href="<?php  echo "temporal_add_cliente_servicios.php?id_cliente=$id_cliente";?>"  role="button">SELECCIONAR</a>
             <?php
            //          }
                      ?>

            </td>
                      </tr>

 <!--end of modal-->

<?php }?>
                    </tbody>

                  </table>


                    </div>

                       <div class="col-md-5 btn-print">


                  <div class="box-header">
                  <h3 class="box-title">Producto agregados en tu carrito de compras</h3>
                </div><!-- /.box-header -->
    



                                       <table id="example_plan" class="table table-bordered table-striped">
                    <thead>
                      <tr>

           
                        

             
 
                        <th> DESCRIPCION</th>
  
                           <th> PRECIO UNIT</th>
                       
                              <th> PRECIO TOTAL</th>
          
                   
                       <th class="btn-print"> ACCIÓN </th>
                      </tr>
                    </thead>
                    <tbody>
<?php
   // $branch=$_SESSION['branch'];
    $query=mysqli_query($con,"select * from detalles_ventas_servicios_temporal  where id_pedido='$id_pedido' ")or die(mysqli_error());
    $i=0;
    while($row=mysqli_fetch_array($query)){
    $id_temporal=$row['id_temporal'];

       
               $monto=$row['monto'];
        $descripcion=$row['descripcion'];
           $precio = (float) $monto;
?>
                      <tr >



                    

                        <td><?php echo $row['descripcion'];?></td>
                    <td><?php echo number_format($monto,2);?></td>
                        
<td><?php echo number_format($monto,2);?></td>
     
                          <td>
                                 <?php
                   
                    
                      ?>
 
<a class="small-box-footer btn-print" href="<?php  echo "eliminar_temporal_servicios.php?id_temporal=$id_temporal";?>" onClick="return confirm('¿Está seguro de que desea eliminar este producto??');"" > <i class="glyphicon glyphicon-remove"></i></a>


            <a href="#updateordinance<?php echo $row['id_temporal'];?>" data-target="#updateordinance<?php echo $row['id_temporal'];?>" data-toggle="modal" style="color:#fff;" class="small-box-footer btn-print"><i class="glyphicon glyphicon-edit text-blue"></i></a>
             <?php
            //          }
                      ?>

            </td>
                      </tr>

<div id="updateordinance<?php echo $row['id_temporal'];?>" class="modal fade in" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
  <div class="modal-dialog" ">
    <div class="modal-content" style="height:auto">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">×</span></button>
                <h4 class="modal-title">MODIFICAR</h4>
              </div>
              <div class="modal-body" style="width: 50%; height: 100%;">
        <form class="form-horizontal" method="post" action="actualizar_temporal_servicios.php" enctype='multipart/form-data'>

            <input type="hidden" class="form-control" id="id_temporal" name="id_temporal" value="<?php echo $row['id_temporal'];?>" required>
      








                                  <div class="col-md-12 btn-print">
               <div class="form-group">
          <label class="control-label col-lg-3" for="name">Descripcion </label>
          <div class="input-group col-md-8">
            <input type="text" class="form-control" id="descripcion" name="descripcion" value="<?php echo $row['descripcion'];?>" required>
          </div>
        </div>
 </div>
                                  <div class="col-md-12 btn-print">
               <div class="form-group">
          <label class="control-label col-lg-3" for="name">Monto </label>
          <div class="input-group col-md-8">
            <input type="text" class="form-control" id="monto" name="monto" value="<?php echo $row['monto'];?>" required>
          </div>
        </div>
 </div>


              </div><br><br><br><hr>
              <div class="modal-footer">
    <button type="submit" class="btn btn-primary">Guardar cambios</button>
                <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
              </div>
        </form>
            </div>

        </div><!--end of modal-dialog-->
 </div>
 <!--end of modal-->

 <!--end of modal-->

<?php 
}?>
                    </tbody>

                  </table>

                    </div>

                    </div>
                
 
                </div><!-- /.box-body -->





            </div><!-- /.col -->


          </div><!-- /.row -->




                </div><!-- /.box-body -->

            </div>
        </div>
      </div>
        </div>
        <!-- /page content -->

        <!-- footer content -->
        <footer>
          <div class="pull-right">
            APSYSTEM <a href="#"></a>
          </div>
          <div class="clearfix"></div>
        </footer>
        <!-- /footer content -->
      </div>
    </div>

  <?php include 'datatable_script.php';?>



        <script>
        $(document).ready( function() {
                $('#example2').dataTable( {
                 "language": {
                   "paginate": {
                      "previous": "anterior",
                      "next": "posterior"
                    },
                    "search": "Buscar:",


                  },
           "lengthMenu": [[10, 25, 50, -1], [10, 25, 50, "All"]],


  "searching": true,
                }

              );
              } );
    </script>




    <!-- /gauge.js -->
  </body>
</html>
