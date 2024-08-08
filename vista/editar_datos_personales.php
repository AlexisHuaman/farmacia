<?php
session_start();
if($_SESSION['tipo_usuario']==1)
{
    include_once 'layouts/header.php'
?>

  <title>AdminLTE 3 | Editar Datos</title>

  <?php include_once 'layouts/nav.php' ?>
<!---------------------------------------------->
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Datos Personales</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="../vista/editar_datos_personales.php">Home</a></li>
              <li class="breadcrumb-item active">Datos Personales</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <section>
        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-3">
                        <div class="card card-success card-outline">
                            <div class="card-body box-profile">
                                <div class="text-center">
                                    <img src="../imagenes/avatar.png" class="profile-user-img img-fluid img-circle">
                                </div>
                                <h3 class="profile-username text-center text-success">Nombre</h3>
                                <p class="text-muted text-center">Apellido</p>
                                <ul class="list-group list-group-unbor"></ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

  </div>
  <!-- /.content-wrapper -->
<!------------------------------------------------------------>

<?php
include_once 'layouts/footer.php';
}
else{
    header('location: /index.php');
}
?>