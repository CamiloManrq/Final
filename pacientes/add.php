<?php 
include_once('../config/config.php');
include('paciente.php');
 if (isset($_POST) && !empty($_POST)){
    $p=new pacientes();
    if ($_FILES['imagen']['name']!==''){
        $_POST['imagen']= saveimage($_FILES);
    }
    $save = $p->save($_POST);
    if ($save){
        $mensaje = '<div class="alert alert-success"> Sesion registrada </div>';
         }else{
            $mensaje = '<div class="alert alert-danger"> Error al registrar </div>';
         }
 }


?>




<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous"> <!--Link Bootstrap- estructura-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200&family=Roboto:wght@300&display=swap" rel="stylesheet">
    <title>Registrar Sesion </title>
    <link rel="stylesheet" href="../Carpeta CSS/Contactanos.css">
</head>
<body>
   
    <div class=>
        <?php
        if(isset($mensaje)){
            echo $mensaje;
        }
        ?>

<nav class="navbar navbar-expand-lg bg-body-tertiary"> <!--Barra de Navegación-->
        <div class="container-fluid">
          <a class="navbar-brand" href="">
            <img src="../Carpeta Imagenes/Logotipo transp.png" alt="" height="150" >
          </a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link active fs-2" aria-current="page" href="../Index.html">Inicio</a>
              </li>
              <li class="nav-item">
                <a class="nav-link fs-2 " href="../Nosotros.html">Nosotros</a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle fs-2" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Servicios
                </a>
                <ul class="dropdown-menu fs-2">
                  <li><a class="dropdown-item fs-5 nav-link disabled" href="#">Estudios de Mercados</a></li>
                  <li><a class="dropdown-item fs-5 nav-link disabled" href="#">Informes</a></li>
                  <li><a class="dropdown-item fs-5 nav-link disabled" href="#">Apoyo a Gestiones Comerciales</a></li>
                  <li><a class="dropdown-item fs-5 nav-link disabled" href="#">Asesoramiento Legal</a></li>
                  <li><a class="dropdown-item fs-5 nav-link disabled" href="#">Implementacion de RSE</a></li>
                  <li><hr class="dropdown-divider"></li>
                </ul>
              </li>
              <li class="nav-item">
                <a class="nav-link disabled" aria-disabled="true"></a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
<h2>Dejamos tu informacion y uno de nuestros asesores se pondra en contacto.</h2>

        <form method="POST" enctype="multipart/form-data">
            <div class="row mb-2">
                <div class="cold">
                    <input type="text" name="nombres" id="nombres" placeholder="Nombre" class="form-control"/>
                </div>
                <div class= "col">
                    <input type="text" name="apellidos" id="apellidos" placeholder="Apellido" class="form-control"/>
                </div>
            </div>

            <div class="row mb-2">
                <div class="cold">
                    <input type="text" name="email" id="email" placeholder="Email" class="form-control"/>
                </div>
                <div class= "col">
                    <input type="number" name="celular" id="celulars" placeholder="Celular" class="form-control"/>
                </div>
            </div>

            <div class="row mb-2">
                <div class="cold">
                    <textarea name="comentarios" id="comentarios" placeholder="Comentarios"  class="form-control" ></textarea>
                </div>
                <div class= "col">
                    <input type="text" name="nombredelaempresa" id="nombredelaempresa" placeholder="Nombre de la empresa" class="form-control"/>
                </div>
            </div>


            <div class="row mb-2">
                <div class="cold">
                <input type="datetime-local" name="fecha" id="fecha"  class="form-control"/>
                </div>
                <div class= "col">
                    <input type="file" name="imagen" id="imagen"  class="form-control"/>
                </div>
                <button class="btn btn-primary">Enviar</button>
            </div>


        </form>
    </div>

    <footer class="container-fluid">
        <div>
            <a class="coloredes" href="#">Facebook</a> - <!--En el # se pone el link-->
            <a class="coloredes" href="#">Twitter</a> -
            <a class="coloredes" href="#">Instagram</a> -
            <a class="coloredes" href="#">Correo</a>
            <address class="coloredes">Derechos reservados, Camilo Manrique.</address>
        </div>
</footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"  
integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
</script> <!--Link Bootstrap animaciones-->
</body>
</html>