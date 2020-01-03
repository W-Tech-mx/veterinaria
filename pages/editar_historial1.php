
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
                                         <?php 
//    if ($usuario=="si") {
      # code...
    
?>
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

        <!-- page content -->
        <div class="right_col" role="main">
      <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12">
            <div class = "x-panel">

            </div>

        </div><!--end of modal-dialog-->

 </div>
  <?php
     if(isset($_REQUEST['id_historial']))
            {
              $id_historial=$_REQUEST['id_historial'];
            }
            else
            {
            $id_historial=$_POST['id_historial'];
          }


?>
 </div>
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

 <!--end of modal-->











                  <div class="box-header">
                  <h3 class="box-title"> MODIFICAR HISTORIAL</h3>
                </div><!-- /.box-header -->
              
  <a class="btn btn-danger btn-print" href="<?php  echo "historial.php?id_cliente=$id_cliente";?>"  role="button">Retroceder</a>

                <div class="box-body">
                

<?php
   // $branch=$_SESSION['branch'];
    $query=mysqli_query($con,"select * from historial where id_historial= '$id_historial' ")or die(mysqli_error());
    $i=1;
    while($row=mysqli_fetch_array($query)){
    $id_cliente=$row['id_cliente'];

?>
      
        <form class="form-horizontal" method="post" action="historial_actualizar.php" enctype='multipart/form-data'>
            <input type="hidden" class="form-control" id="id_historial" name="id_historial" value="<?php echo $row['id_historial'];?>" required>
          <input type="hidden" class="form-control" id="id_cliente" name="id_cliente" value="<?php echo $row['id_cliente'];?>" required>





                    </div>

     <div class="row">
                    <div class="col-md-3 btn-print">
                      <div class="form-group">
                        <label for="date" >Descripcion</label>
                 
                      </div><!-- /.form group -->
                    </div>
                       <div class="col-md-4 btn-print">
                      <div class="form-group">

            <input type="text" class="form-control" id="descripcion" name="descripcion" value="<?php echo $row['descripcion'];?>" required>
                      </div>
                    </div>
                           <div class="col-md-4 btn-print">
                
                    </div>
                    </div>

     
                
          
    <button type="submit" class="btn btn-primary">GUARDAR</button>          
  
                   
            <br><br><br><hr>
              <div class="modal-footer">


              </div>
        </form>
            
 <!--end of modal-->

<?php }?>

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

                  "info": false,
                  "lengthChange": false,
                  "searching": false,


  "searching": true,
                }

              );
              } );
    </script>
                                         <?php 
 // }    
?>



    <!-- /gauge.js -->
  </body>
</html>
