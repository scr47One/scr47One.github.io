<!DOCTYPE html>
<html lang="es">
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
    <link rel="stylesheet" href="styles/style.css" />
    <link rel="stylesheet" href="styles/cont.css" />
    <link rel="shortcut icon" href="imagenes_principal/2x/Imagotipo_2x.ico">

    <!-- Custom styles for this template -->

    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="Explorarport" content="width=device-width, initial-scale=1.0" />
    <title>Aprende Ciberseguridad</title>
  </head>
  <body>
    <header class="site-header sticky-top">
      <nav class="navbar navbar-expand-lg navbar-light">
        <div class="container-fluid">
          <span class="navbar-brand">
            <img src="imagenes_principal/2x/Logo@2x.png" alt="logo" class="img-lg"/>
            <img src="imagenes_principal/2x/Imagotipo@2x.png" alt="logo" class="img-sm"/>
          </span>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
              <li class="nav-item"><a class="nav-link active" aria-current="page" href="index.php">Inicio</a></li>
              <li class="nav-item"><a class="nav-link active" href="sobre_mi.html">Acerca de</a></li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="aprendizaje.html" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">Aprendizaje</a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown"><li><a class="dropdown-item" href="simulaciones/ingenieria_social.html">Ataques por ingenieria social</a></li>
                  <li><a class="dropdown-item" href="simulaciones/malware.html">Ataques por malware</a></li>
                  <li><a class="dropdown-item" href="simulaciones/contrasena.html">Ataques a contrase??as</a></li>
                  <li><a class="dropdown-item" href="simulaciones/conexion.php">Ataques a conexiones</a></li>
                </ul>
              </li>
              <li class="nav-item"><a class="nav-link" href="contacto.html" tabindex="-1">Contacto</a></li>
              <li class="nav-item"><a class="nav-link" href="centros.html" tabindex="-1">Centros de ayuda</a></li>
            </ul>
          </div>
        </div>
      </nav>
    </header>
    <main>
      <div id="principal_index" class="principal">
        <div class="principal_parrafo">
          <div>
            <h1 class="text-center text-wrap">Aprende, de una forma</h1>
          </div>
          <div>
            <span style="font-size: 6vw; font-weight: 900">m??s sencilla</span>
          </div>
        </div>
        <img src="imagenes_principal/banner.jpg" class="img-fluid" />
      </div>
      <div id="pasos_index" class="pasos">
        <div class="pasos_imagen row row-cols-sm-1 row-cols-md-3 g-3">
          <div class="paso col" data-aos="slide-left">
            <div class="row row-cols-1 g-1 text-center center-block cont">
              <div class="img rounded-circle center-block">
                <img
                  src="imagenes_principal/SELECCIONA.gif"
                  alt="selecciona"
                  class="col imagen"
                />
              </div>
              <p class="col pasos_p">Selecciona</p>
            </div>
          </div>
          <div class="paso col" data-aos="slide-left">
            <div class="row row-cols-1 g-1 text-center center-block cont">
              <div class="img rounded-circle center-block">
                <img
                  src="imagenes_principal/simula.gif"
                  alt="simula"
                  class="col imagen"
                />
              </div>
              <p class="col pasos_p">Simula</p>
            </div>
          </div>
          <div class="paso col" data-aos="slide-left">
            <div class="row row-cols-1 g-1 text-center center-block cont">
              <div class="img rounded-circle">
                <img
                  src="imagenes_principal/aprende.gif"
                  alt="aprende"
                  class="mx-auto d-tab col"
                />
              </div>
              <p class="col pasos_p">Aprende</p>
            </div>
          </div>
        </div>
      </div>
      <div class="contenido py-5">
        <div class="text-center">
          <h2 class="text-wrap">
            Lo que debes <span style="color: #ff3b3d">saber</span> sobre
            ciberseguridad
          </h2>
        </div>
        <div class="container">
          <div class="row row-cols-1 row-cols-sm-1 row-cols-md-1 row-cols-xl-2 g-2 mx-3">
            <div class="col row row-cols-md-2 my-5" style="height: 50%">
              <div
                class="card"
                data-aos="slide-up"
                style="background-color: #efefef"
              >
                <div class="card-body">
                  <h3 class="card-title">Ataques a conexiones</h3>
                  <p class="card-text">
                    Los atacantes utilizan diversas formas y herramientas para atacar las conexiones inal??mbricas
                     saltandose la seguridad y buscando infectar, controlar o extraer informaci??n de los dispositivos 
                     conectados a la red.
                  </p>
                  <div
                    class="d-flex justify-content-between align-items-center"
                  >
                    <div class="btn-group">
                      <a
                      href="simulaciones/conexion.php"
                       class="btn btn-sm btn-outline-secondary"
                     >
                       Explorar
                   </a>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col" data-aos="slide-right">
                <img
                  src="imagenes_principal/CONEXIONES copia.gif"
                  alt="Conexiones"
                  style="width: 60%; margin-top: 15%"
                  class="mx-auto d-table"
                />
              </div>
            </div>
            <div class="col row row-cols-md-2 my-5" style="height: 50%">
              <div
                class="card"
                data-aos="slide-up"
                style="background-color: #efefef"
              >
                <div class="card-body">
                  <h3 class="card-title">Ataques a contrase??as</h3>
                  <p class="card-text">
                    Los atacantes utilizan varias formas y herramientas para saber nuestros datos de acceso.
                  </p>
                  <div
                    class="d-flex justify-content-between align-items-center"
                  >
                    <div class="btn-group">
                      <a
                       href="simulaciones/contrasena.html"
                        class="btn btn-sm btn-outline-secondary"
                      >
                        Explorar
                    </a>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col" data-aos="slide-right">
                <img
                  src="imagenes_principal/CONTRASENAS copia.gif"
                  alt="Contrasena"
                  style="width: 60%; margin-top: 15%"
                  class="mx-auto d-table"
                />
              </div>
            </div>
            <div class="col row row-cols-md-2 my-5" style="height: 50%">
              <div class="card" data-aos="slide-up" style="background-color: #efefef" >
                <div class="card-body">
                  <h3 class="card-title">Ataques por malware</h3>
                  <p class="card-text">
                    Los ataques por malware se sirven de programas 
                    maliciosos cuya funcionalidad consiste en llevar a cabo 
                    acciones da??inas en un sistema inform??tico y contra 
                    nuestra privacidad.
                  </p>
                  <div
                    class="d-flex justify-content-between align-items-center"
                  >
                    <div class="btn-group">
                      <a
                       href="simulaciones/malware.html"
                        class="btn btn-sm btn-outline-secondary"
                      >
                        Explorar
                    </a>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col center-block" data-aos="slide-right">
                <img
                  src="imagenes_principal/MALWARE.gif"
                  alt="Contrasena"
                  style="width: 60%; margin-top: 15%"
                  class="mx-auto d-table"
                />
              </div>
            </div>
            <div class="col row row-cols-md-2 my-5">
              <div class="card" data-aos="slide-up" style="background-color: #efefef">
                <div class="card-body">
                  <h3 class="card-title">Ataque por ingenieria social</h3>
                  <p class="card-text">
                    Los atacantes buscan la forma de utilizar informaci??n extra??da mediante la manipulaci??n y el enga??o del usuario.
                  </p>
                  <div class="d-flex justify-content-between align-items-center">
                    <div class="btn-group">
                      <a
                       href="simulaciones/ingenieria_social.html"
                        class="btn btn-sm btn-outline-secondary"
                      >
                        Explorar
                    </a>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col center-block" data-aos="slide-right">
                <img
                  src="imagenes_principal/INGENIERIA_SOCIAL.gif"
                  alt="Ingenier??a social"
                  style="width: 60%; margin-top: 15%"
                  class="mx-auto d-table"
                />
              </div>
            </div>
          </div>
        </div>
      </div>
    </main>
    <footer id="footer_index" class="footer" style="background-color: #a9a9a9">
      <div class="container my-5">
        <ul class="list-inline">
          <li class="list-inline-item">
            <a href="centros.html">Centros de ayuda oficiales</a>
          </li>
          <li class="list-inline-item"><a href="contacto.html">Contacto</a></li>
          <li class="list-inline-item"><a href="sobre_mi.html">Sobre mi</a></li>
          <li class="list-inline-item"><a href="index.php">Inicio</a></li>
        </ul>
      </div>
      <div class="text-center p-3" style="background-color: #4f4f4f">
        ?? 2022 Copyright:
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
  </body>
</html>
