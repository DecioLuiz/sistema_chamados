<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Chamados</title>
    <!-- <link rel="stylesheet" type="text/css" href="style.css">-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>
    <?php include('navbar.php'); ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <!-- Background image -->
    <div class="bg-image" style="background-image: url('./img/001-2000x1264.jpg'); height: 100vh; justify-content:center; display:flex">
        <div class="card .shadow-4" style="top:10rem;width: 35rem; display:flex-box; align-items:center; justify-content:center; z-index: 2; position:absolute;">
        <div class="bg-image hover-overlay" data-mdb-ripple-init data-mdb-ripple-color="light">
          <img src="./img/helpdesk.jpeg" class="img-fluid"/>
          <a href="#!">
            <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
          </a>
        </div>
        <div class="card-body">
          <p class="card-text">Entre para realizar um novo chamado de suporte</p>
          <div class="d-grid" style="display:flex; align-items:center">
            <a href="./chamados.php">
              <button class="btn btn-dark gap-2 col-12 mx-auto" type="button" data-mdb-ripple-init>Entrar</button>
            </a>
          </div>
        </div>
      </div>
    </div>
    <!-- Background image -->

    <script type="text/javascript">
      // Initialization for ES Users
      import { Ripple, initMDB } from "mdb-ui-kit";

      initMDB({ Ripple });
    </script>

  </body>
</html>