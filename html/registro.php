<!DOCTYPE html>
<html>
<head>
    <link rel="icon" type="image/x-icon" href="../img/logo.png">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro de Usuario</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Anton&family=Roboto:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../css/styles.css"> 
</head>
<body>
    <header>
         <nav class="navbar navbar-dark bg-dark fixed-top">
            <div class="container-fluid">
                <img src="../img/logo.png" alt="logo">
                <a class="navbar-brand" href="../index.html"><h1>El Cine Perron</h1></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasDarkNavbar" aria-controls="offcanvasDarkNavbar" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
            <div class="offcanvas offcanvas-end text-bg-dark" tabindex="-1" id="offcanvasDarkNavbar" aria-labelledby="offcanvasDarkNavbarLabel">


                <div class="offcanvas-header">
                  <h5 class="offcanvas-title" id="offcanvasDarkNavbarLabel">El Cine del Perron</h5>
                  <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                </div>

                <div class="offcanvas-body">
                  <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">

                    <li class="nav-item">
                      <a class="nav-link" href="../index.html"><span>Incio</span></a>
                    </li>

                    <li class="nav-item">
                      <a class="nav-link" href="../html/peliculas.html"><span>Películas</span></a>
                    </li>
                    
                    <li class="nav-item">
                      <a class="nav-link" href="../html/comida.html"><span>Comida</span></a>
                    </li>

                    <li class="nav-item">
                      <a class="nav-link" href="../html/perfil.html"><span>Perfil</span></a>
                    </li> 

                    <li class="nav-item">
                      <a class="nav-link" href="../html/membresia.html"><span>Membrecia</span></a>
                    </li>

                    <li class="nav-item">
                      <a class="nav-link" href="../html/login.php"><span>Iniciar</span></a>
                    </li>

                    <li class="nav-item">
                      <a class="nav-link" href="../html/registro.php"><span>Registro</span></a>
                    </li>

                    <li class="nav-item">
                      <a class="nav-link" href="../html/nosotros.html"><span>Empresa</span></a>
                    </li>
      
                  </ul>
                </div>
              </div>
            </div>
          </nav>


    </header>
    <main class="mai container">
        <section class="reg">
            <img src="../img/logo.png" class="logore" alt="...">

        </section>
        <section class="formular">
            <div class="container ">
                <h2 class="text-center mb-4">Registro de Usuario</h2>
                <form action="registro.php" method="post" class="">
                <div class="form-group">
                    <label for="nombres">Nombres:</label>
                    <input type="text" class="form-control" name="nombres" required />
                </div>
                <div class="form-group">
                    <label for="apellidos">Apellidos:</label>
                    <input type="text" class="form-control" name="apellidos" required />
                </div>
                <div class="form-group">
                    <label for="email">Correo Electrónico:</label>
                    <input type="email" class="form-control" name="email" required />
                </div>
                <div class="form-group">
                    <label for="telefono">Teléfono:</label>
                    <input type="text" class="form-control" name="telefono" />
                </div>
                <div class="form-group">
                    <label for="direccion">Dirección:</label>
                    <input type="text" class="form-control" name="direccion" />
                </div>
                <div class="form-group">
                    <label for="contraseña">Contraseña:</label>
                    <input type="password" class="form-control" name="contraseña" required />
                </div>
                <button id= "btn" type="submit" name="registro" value="registro" class="btn btn-success btn-block">Registrar</button>
            </form>
            <div class="text-center mt-3">
                <p>¿Ya tienes cuenta? <a href="../html/login.php" class="btn btn-link">Inicia sesión aquí</a></p>
            </div>
        </div>
        </section>

    </main>
    <footer>
        <div>
              <h2>El Ciene Perron</h2>
              <h2><a href="https://andresmgc28.github.io/wnt/index.html">Created by White Night Tech</a> </h2>
              <div>
                <a href="https://www.instagram.com/"><img src="../img/instagram.png" alt=""></a>
                <a href="https://api.whatsapp.com/send?phone=525542275376"><img src="../img/wh1.png" alt="" class="whatsapp"></a>

              </div>
        </div>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        function selectMovie(title, posterUrl) {
            localStorage.clear();
            const movieData = { title: title, posterUrl: posterUrl };
            localStorage.setItem('compra', JSON.stringify(movieData));
        }
    </script>

</body>

</html>
