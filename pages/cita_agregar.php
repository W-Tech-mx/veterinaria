
<?php include 'header.php';

//$branch_id = $_GET['id'];
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
       </style>
  <?php
     if(isset($_REQUEST['id_cliente']))
            {
              $id_cliente=$_REQUEST['id_cliente'];
            }
            else
            {
            $id_cliente=$_POST['id_cliente'];
          }


?>
       <?php
            $fecha_registro = date('Y-m-d');
            ?>


<?php
$session_id=$_SESSION['id'];
$cont=0;
$codigo="";
            $query3=mysqli_query($con,"select * from historial ")or die(mysqli_error());

                      while($row3=mysqli_fetch_array($query3)){
   $cont=$row3['id_historial'];
}
  $cont=$cont+1;
  $codigo=$cont.$session_id;

?>


        <!-- page content -->
        <div class="right_col" role="main">
      <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12">
            <div class = "x-panel">

            </div>

        </div><!--end of modal-dialog-->
 </div>




  <button type="button" class="btn btn-danger btn-lg btn-print" data-toggle="modal" data-target="#miModal">
  AGREGAR NUEVO
</button>


<div class="modal fade" id="miModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">

  <div class="modal-dialog" style="width: 900px; height: 900px;" role="document">
    <div class="modal-content">
      <div class="modal-header">
                                <div class="box-body">



        <form class="form-horizontal" method="post" action="cita_add_temp.php" enctype='multipart/form-data'>



     
<div class="row">
                    <div class="col-md-3 btn-print">
                      <div class="form-group">
                                                  <label >NUMERO DE HISTORIAL</label>
                 
                      </div><!-- /.form group -->
                    </div>
                       <div class="col-md-4 btn-print">
                      <div class="form-group">
  <input type="text" class="form-control pull-right"  value="<?php echo $codigo;?>" id="date"   disabled required>
          <input type="hidden" class="form-control pull-right" name="id_cliente" value="<?php echo $id_cliente;?>" id="id_cliente"    required>
                          <input type="hidden" class="form-control pull-right" name="codigo" value="<?php echo $codigo;?>" id="codigo"    required>


           
                        <input type="hidden" class="form-control pull-right" name="fecha_registro" value="<?php echo $fecha_registro;?>" id="fecha_registro"    required> 
                      </div>
                    </div>
                           <div class="col-md-4 btn-print">
                
                    </div>
                    </div>

                   <div class="row">
                    <div class="col-md-3 btn-print">
                      <div class="form-group">
                        <label for="date" >Descripcion</label>
                 
                      </div><!-- /.form group -->
                    </div>
                       <div class="col-md-4 btn-print">
                      <div class="form-group">

                          <input type="text" class="form-control pull-right" id="descripcion" name="descripcion" required >
                      </div>
                    </div>
                           <div class="col-md-4 btn-print">
                
                    </div>
                    </div>

                          <div class="row">
                    <div class="col-md-3 btn-print">
                      <div class="form-group">
                        <label for="date" >Fecha reserva</label>
                 
                      </div><!-- /.form group -->
                    </div>
                       <div class="col-md-4 btn-print">
                      <div class="form-group">

                       <input type="date" class="form-control" id="fecha_reserva" name="fecha_reserva" >
                      </div>
                    </div>
                           <div class="col-md-4 btn-print">
                
                    </div>
                    </div>
       
                   

              


        <div class="modal-footer">
<button type="submit" class="btn btn-primary">Registrar</button>
                <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
              </div>
        </form>




          </div>
                      
      </div>
   
    </div>
  </div>
</div>

 <!--end of modal-->
 <!--end of modal-->
        <form class="form-horizontal" method="post" action="historial_cita_add.php" enctype='multipart/form-data'>



     
<div class="row">
                    <div class="col-md-3 btn-print">
                      <div class="form-group">
                                                  <label >NUMERO DE HISTORIAL</label>
                 
                      </div><!-- /.form group -->
                    </div>
                       <div class="col-md-4 btn-print">
                      <div class="form-group">
  <input type="text" class="form-control pull-right"  value="<?php echo $codigo;?>" id="date"   disabled required>
                          <input type="hidden" class="form-control pull-right" name="codigo" value="<?php echo $codigo;?>" id="codigo"    required>
                <input type="hidden" class="form-control pull-right" name="id_cliente" value="<?php echo $id_cliente;?>" id="id_cliente"    required>

             <input type="hidden" class="form-control pull-right" name="tipo_historial" value="cita" id="tipo_historial"    required>   
                        <input type="hidden" class="form-control pull-right" name="fecha_registro" value="<?php echo $fecha_registro;?>" id="fecha_registro"    required> 
                      </div>
                    </div>
                           <div class="col-md-4 btn-print">
                
                    </div>
                    </div>

                   <div class="row">
                    <div class="col-md-3 btn-print">
                      <div class="form-group">
                        <label for="date" >Descripcion</label>
                 
                      </div><!-- /.form group -->
                    </div>
                       <div class="col-md-4 btn-print">
                      <div class="form-group">

                          <input type="text" class="form-control pull-right" id="descripcion" name="descripcion" required >
                      </div>
                    </div>
                           <div class="col-md-4 btn-print">
                
                    </div>
                    </div>
       
                   
    <button type="submit" class="btn btn-primary">Registrar</button>
              


              <div class="modal-footer">


              </div>
        </form>
         







<div class="row">
                    <div class="col-md-12 btn-print">
                      <div class="form-group">
   


                        <div class="box-body">
                  <!-- Date range -->


              
          </div>

                  <div class="box-header">
                  <h3 class="box-title"> Lista citas</h3>
                </div><!-- /.box-header -->
                <div class="box-body">
                
                  <table id="example3" class="table table-bordered table-striped">
                    <thead>
                      <tr>




                  
                        <th> Descripcion </th>
                          


                           <th> Fecha cta</th> 
                  
                       <th class="btn-print"> Accion </th>

                      </tr>
                    </thead>
                    <tbody>
<?php

    $query=mysqli_query($con,"select * from temporal_citas   where codigo='$codigo' ")or die(mysqli_error());
    $i=1;
    while($row=mysqli_fetch_array($query)){

        $id_citas=$row['id_citas'];
?>
                      <tr >
              <td><?php echo $row['descripcion'];?></td>

                        <td><?php echo $row['fecha_reserva'];?></td>


          
      

                        <td>

              <a class="small-box-footer btn-print" href="<?php  echo "eliminar_temporal_citas.php?id_citas=$id_citas&id_cliente=$id_cliente";?>" onClick="return confirm('¿Está seguro de que desea eliminar cita??');""><i class="glyphicon glyphicon-remove"></i></a>                 


   <a href="#updateordinance<?php echo $row['id_citas'];?>" data-target="#updateordinance<?php echo $row['id_citas'];?>" data-toggle="modal" style="color:#fff;" class="small-box-footer btn-print"><i class="glyphicon glyphicon-edit text-blue"></i></a>
             <?php
            //          }
                      ?>

            </td>
                      </tr>

<div id="updateordinance<?php echo $row['id_citas'];?>" class="modal fade in" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
  <div class="modal-dialog" ">
    <div class="modal-content" style="height:auto">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">×</span></button>
                <h4 class="modal-title">MODIFICAR</h4>
              </div>
              <div class="modal-body" style="width: 50%; height: 100%;">
        <form class="form-horizontal" method="post" action="cita_temporal_actualizar.php" enctype='multipart/form-data'>

            <input type="hidden" class="form-control" id="id_citas" name="id_citas" value="<?php echo $row['id_citas'];?>" required>
      
                <input type="hidden" class="form-control pull-right" name="codigo" value="<?php echo $codigo;?>" id="codigo"    required>
                <input type="hidden" class="form-control pull-right" name="id_cliente" value="<?php echo $id_cliente;?>" id="id_cliente"    required>


      <div class="row">
                    <div class="col-md-4 btn-print">
                      <div class="form-group">
                        <label for="date" >Descripcion</label>
                 
                      </div><!-- /.form group -->
                    </div>
                       <div class="col-md-8 btn-print">
                      <div class="form-group">

                          <input type="text" class="form-control pull-right" id="descripcion" name="descripcion" value="<?php echo $row['descripcion'];?>"  required >
                      </div>
                    </div>
         
                    </div>


                <div class="row">
                    <div class="col-md-4 btn-print">
                      <div class="form-group">
                        <label for="date" >Fecha reserva</label>
                 
                      </div><!-- /.form group -->
                    </div>
                       <div class="col-md-8 btn-print">
                      <div class="form-group">

                       <input type="date" class="form-control" id="fecha_reserva" name="fecha_reserva" value="<?php echo $row['fecha_reserva'];?>" >
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
            sistema de flete <a href="#"></a>
          </div>
          <div class="clearfix"></div>
        </footer>
        <!-- /footer content -->
      </div>
      
    </div>

  <?php include 'datatable_script.php';?>



        <script>
        $(document).ready( function() {
                $('#example3').dataTable( {
                 "language": {
                   "paginate": {
                      "previous": "anterior",
                      "next": "posterior"
                    },
                    "search": "Buscar:",


                  },

                  "info": false,
                  "lengthChange": false,
                  "searching": false,


  "searching": true,
                }

              );
              } );
    </script>



    <!-- /gauge.js -->
  </body>
</html>
