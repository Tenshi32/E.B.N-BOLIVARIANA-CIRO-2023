<?php

session_start();

include '../barralateral.php';

$message = '';

if (!isset($_POST['buscar'])){$_POST['buscar'] = '';}
?>

<!DOCTYPE html>
<html lang="es">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <link rel="icon" href="../../img/Retro.png">
  <title>HORARIO</title>

  <!-- Custom fonts for this template -->
  <link href="../../vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

  <link
    href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
    rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="../../css/sb-admin-2.min.css" rel="stylesheet">

  <!-- Custom styles for this page -->
  <link href="../../vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">

</head>

<body id="page-top">

  <!-- Begin Page Content -->
  <div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800"><img src="../../img/horario.png" width="80" height="80">Horarios</h1>
    <br>
    <p class="mb-4">Proceso de Horario: Aqui podra crear el horario a los docentes ya registrados, para registrar a un docente puede ir a 
      <a target="_blank" href="../../registro/aula/profesor.php">Registro de Docente de Aula</a> y 
      <a target="_blank" href="../../registro/especialista/especialista.php">Registro de Docente de Especialista</a>.</p>

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
      <form method="POST" action="registro.php" class="m-3">

        <div class="row">
          <div class="col-sm-12">
            <div class="form-group row">

              <div class="col">
                <label class="form-label">
                  <span>Introduzca un dato :</span>
                  <input type="text" class="form-control" id="buscar" name="buscar"
                    value="<?php echo $_POST['buscar']; ?>">
                </label>
                <button type="text" class="btn btn-primary">Buscar <span class="fa fa-search"></span></button>

              </div>
            </div>
          </div>

      </form>

      <div class="card-body">
        <div class="table-responsive">
          <table class="table table-bordered" width="100%" cellspacing="0">

            <?php

              require '../../src/horario.class.php';
              $data = new Horario;
              $data->search();

            ?>
          </table>
        </div>
      </div>
    </div>

  </div>
  </div>


  <!-- Footer -->
  <footer class="sticky-footer bg-white">
    <div class="container my-auto">
      <?php
            include "../../Vista/parte_inferior.php";
            ?>
    </div>
  </footer>

  <!-- Bootstrap core JavaScript-->
  <script src="../../vendor/jquery/jquery.min.js"></script>
  <script src="../../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="../../vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="../../js/sb-admin-2.min.js"></script>

  <!-- Page level plugins -->
  <script src="../../vendor/datatables/jquery.dataTables.min.js"></script>
  <script src="../../vendor/datatables/dataTables.bootstrap4.min.js"></script>

  <!-- Page level custom scripts -->
  <script src="../../js/demo/datatables-demo.js"></script>

</body>

</html>