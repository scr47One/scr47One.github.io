<!DOCTYPE html>
<html lang="en">
  <head>
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Raleway:wght@400;600;700;800;900&display=swap"
      rel="stylesheet"
    />
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC"
      crossorigin="anonymous"
    />
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <link rel="stylesheet" href="../styles/style.css" />
    <link rel="stylesheet" href="../styles/cont.css" />
    <link
      rel="shortcut icon"
      href="../imagenes_principal/2x/Imagotipo_2x.ico"
    />



    <!-- Custom styles for this template -->

    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Página falsa de inicio sesión</title>
  </head>
  <body>
    <header class="site-header sticky-top">
      <nav class="navbar navbar-expand-lg navbar-light">
        <div class="container-fluid">
          <span class="navbar-brand">
            <img
              src="../imagenes_principal/2x/Logo@2x.png"
              alt="logo"
              class="img-lg"
            />
            <img
              src="../imagenes_principal/2x/Imagotipo@2x.png"
              alt="logo"
              class="img-sm"
            />
          </span>
          <button
            class="navbar-toggler"
            type="button"
            data-bs-toggle="collapse"
            data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent"
            aria-expanded="false"
            aria-label="Toggle navigation"
          >
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul
              class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0"
            >
              <li class="nav-item">
                <a
                  class="nav-link active"
                  aria-current="page"
                  href="../index.php"
                  >Inicio</a
                >
              </li>
              <li class="nav-item">
                <a class="nav-link active" href="../sobre_mi.html">Acerca de</a>
              </li>
              <li class="nav-item dropdown">
                <a
                  class="nav-link dropdown-toggle"
                  id="navbarDropdown"
                  role="button"
                  data-bs-toggle="dropdown"
                  aria-expanded="false"
                  >Aprendizaje</a
                >
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <li>
                    <a class="dropdown-item" href="ingenieria_social.html"
                      >Ataques por ingenieria social</a
                    >
                  </li>
                  <li>
                    <a class="dropdown-item" href="malware.html"
                      >Ataques por malware</a
                    >
                  </li>
                  <li>
                    <a class="dropdown-item" href="contrasena.html"
                      >Ataques a contraseñas</a
                    >
                  </li>
                  <li>
                    <a class="dropdown-item" href="conexion.html"
                      >Ataques a conexiones</a
                    >
                  </li>
                </ul>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="../contacto.html" tabindex="-1"
                  >Contacto</a
                >
              </li>
              <li class="nav-item">
                <a class="nav-link" href="../centros.html" tabindex="-1"
                  >Centros de ayuda</a
                >
              </li>
            </ul>
          </div>
        </div>
      </nav>
    </header>
    <main>
    <div class="my-5 py-5 px-5" style="background-image:url(../imagenes_principal/ingenieria_social_fondo.jpg)">
      <div class="row py-5 px-5" style="background-color:#CCEAF4">
      <form name="form" method="post">
        <?php
        
          $correo = $_POST['correo'];
          $contrasena = $_POST['contrasena'];
        
        echo "<h4 style='color:#a9a9a9'>Correo obtenido</h4><br><h3>".$correo."</h3><br>";
        echo "<h4 style='color:#a9a9a9'>Contrasena obtenida</h4><br><h3>".$contrasena."</h3><br>";
        ?>

      </form>
      </div>

    </div>
    </main>
    <footer id="footer_index" class="footer" style="background-color: #a9a9a9">
      <div class="container my-5">
        <ul class="list-inline">
          <li class="list-inline-item">
            <a href="../centros.html">Centros de ayuda oficiales</a>
          </li>
          <li class="list-inline-item">
            <a href="../contacto.html">Contacto</a>
          </li>
          <li class="list-inline-item">
            <a href="../sobre_mi.html">Acerca de</a>
          </li>
          <li class="list-inline-item"><a href="../index.php">Inicio</a></li>
        </ul>
      </div>
      <div class="text-center p-3" style="background-color: #4f4f4f">
        © 2022 Copyright:
        <a href="https://github.com/scr47One">scr47One</a>
      </div>
    </footer>
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
      crossorigin="anonymous"
    ></script>
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
      AOS.init({
        easing: "ease-out-back",
        duration: 700,
      });
    </script>
    <script language="Javascript">
      document.oncontextmenu = function () {
        return false;
      };
    </script>
  </body>
</html>
