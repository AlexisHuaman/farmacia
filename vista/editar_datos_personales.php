
<?php
session_start();

// Genera un nonce único
$nonce = bin2hex(random_bytes(16));

// Configura el encabezado CSP con el nonce
header("Content-Security-Policy: script-src 'self' 'nonce-$nonce';");

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

                                <input id="id_usuario" type="hidden" value="<?php echo $_SESSION['usuario'] ?>">

                                <h3 id="nombre_us" class="profile-username text-center text-success">Nombre</h3>
                                <p id="apellido_us" class="text-muted text-center">Apellido</p>
                                <ul class="list-group list-group-unbordered mb-3">
                                  <li class="list-group-item">
                                    <b style="color:#0B7300">Edad</b><a id="edad_us" class="float-right">12</a>
                                  </li>
                                  <li class="list-group-item">
                                    <b style="color:#0B7300">DNI</b><a id="dni_us" class="float-right">12</a>
                                  </li>
                                  <li class="list-group-item">
                                    <b style="color:#0B7300">Tipo Usuario</b>
                                    <span id="tipo_us" class="float-right badge badge-primary">Administrador</span>
                                  </li>
                                </ul>
                            </div>
                        </div>

                        <div class="card card-success">
                          <div class="card-header">
                            <h1 class="card-litle">Sobre mi</h1>
                          </div>
                          <div class="card-body">
                            <strong style="color:#087300">
                              <i id="telefono_us" class="fas fa-phone mr-1"></i>Telefono
                            </strong>
                            <p class="text-muted">4234234</p>
                            <strong style="color:#087300">
                              <i id="residencia_us" class="fas fa-map-marker-alt mr-1"></i>Residencia
                            </strong>
                            <p class="text-muted">4234234</p>
                            <strong style="color:#087300">
                              <i id="correo_us" class="fas fa-ar mr-1"></i>Correo
                            </strong>
                            <p class="text-muted">4234234</p>
                            <strong style="color:#087300">
                              <i id="sexo_us" class="fas fa-smile-wink mr-1"></i>Sexo
                            </strong>
                            <p class="text-muted">4234234</p>
                            <strong style="color:#087300">
                              <i id="adicional_us" class="fas fa-pencil-alt mr-1"></i>Informacion adicional
                            </strong>
                            <p class="text-muted">4234234</p>
                            <button class="btn btn-block bg-gradient-danger">Editar</button>
                          </div>
                          <div class="card-footer">
                            <p class="text-muted">Click en el boton si desea editar</p>
                          </div>

                        </div>

                    </div>
                    <div class="col-md-9">
                      <div class="card card-success">
                        <div class="card-header">
                          <h3 class="card-little">Editar datos personales</h3>
                        </div>
                        <div class="card-body">
                          <form class="form-horizontal">
                            <div class="form-group row">
                              <label for="telefono" class="col-sm-2 col-form-label">Telefono</label>
                              <div class="col-sm-10">
                                <input type="number" id="telefono" class="form-control">
                              </div>
                            </div>
                            <div class="form-group row">
                              <label for="residencia" class="col-sm-2 col-form-label">Residencia</label>
                              <div class="col-sm-10">
                                <input type="text" id="residencia" class="form-control">
                              </div>
                            </div>
                            <div class="form-group row">
                              <label for="correo" class="col-sm-2 col-form-label">Correo</label>
                              <div class="col-sm-10">
                                <input type="text" id="correo" class="form-control">
                              </div>
                            </div>
                            <div class="form-group row">
                              <label for="sexo" class="col-sm-2 col-form-label">Sexo</label>
                              <div class="col-sm-10">
                                <input type="text" id="sexo" class="form-control">
                              </div>
                            </div>
                            <div class="form-group row">
                              <label for="adicional" class="col-sm-2 col-form-label">Informacion adicional</label>
                              <div class="col-sm-10">
                                <textarea id="adicional" class="form-control" cols="30" rows="10"></textarea>
                              </div>
                            </div>
                            <div class="form-group row">
                              <div class="offset-sm-2 col-sm-10 float-right">
                                <button class="btn btn-block btn-outline-success">Guardar</button>
                              </div>
                            </div>
                          </form>
                        </div>
                        <div class="card-footer">
                          <p class="text-muted">Cuidado con ingresar datos erroneos</p>
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
<script nonce="<?php echo $nonce; ?>" src="../js/usuario.js"></script>