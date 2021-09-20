 <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Seguimiento</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">

      <div class="box">
        <div class="box-header with-border">
          
        </div>
      </div>
      <br>
     <table class="table table-bordered table-hover">
      <thead>
        <tr>
          <th scope="col">Archivo</th>
          <th scope="col">Línea</th>
          <th scope="col">Clase</th>
          <th scope="col">Método</th>
          <th scope="col">Variable</th>
          <th scope="col">Datos</th>
		      <th scope="col">Fecha</th>
          <th scope="col">Hora</th>
          </tr>
      </thead>
      <tbody>
        <?php
          $item=null;
          $valor = null;
          $errorLog = ControladorErrorLog::ctrMostrarErrorLog($item, $valor);
          foreach ($errorLog as $key => $value) {
              echo'<tr>
              <td>'.$value['archivo'].'</td>
              <td>'.$value['linea'].'</td>
              <td>'.$value['clase'].'</td>
              <td>'.$value['metodo'].'</td>
              <td>'.$value['variable'].'</td>
              <td>'.$value['datos'].'</td>
              <td>'.$value['fecha'].'</td>
              <td>'.$value['hora'].'</td>
              </tr>';
          }
        ?>
       
      </tbody>
</table>

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->