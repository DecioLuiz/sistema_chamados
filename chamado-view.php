<?php
require 'conexao.php';
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Chamado - Visualizar</title>
    <!-- <link rel="stylesheet" type="text/css" href="style.css">-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>
    <?php include('navbar.php'); ?>
    <div class="container mt-5">
        <div class="row" style="position:relative;">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Visualizar Chamado 
                            <a href="chamados.php" class="btn btn-danger float-end">Voltar</a>
                        </h4>
                    </div>
                    <div class="card-body"> 
                        <?php
                            if(isset($_GET['id'])) {
                                $chamado_id = mysqli_real_escape_string($conexao, $_GET['id']);
                                $sql = "SELECT * FROM chamados WHERE id='$chamado_id'";
                                $query = mysqli_query($conexao, $sql);

                                if (mysqli_num_rows($query) > 0) {
                                    $chamado =  mysqli_fetch_array($query);
                        ?>
                        <div class="mb-3">
                            <label>Nome</label>
                            <p class="form-control"><?=$chamado['nome'];?></p>
                        </div>
                        <div class="mb-3">
                            <label>E-mail</label>
                            <p class="form-control"><?=$chamado['email'];?></p>
                        </div>
                        <div class="mb-3">
                            <label>Setor</label>
                            <p class="form-control"><?=$chamado['setor'];?></p>
                        </div>
                        <div class="mb-3">
                            <label>Data do incidente</label>
                            <p class="form-control"><?=date('d/m/Y', strtotime($chamado['data_incidente']));?></p>
                        </div>
                        <div class="mb-3">
                            <label>Descrição</label>
                            <p class="form-control"><?=$chamado['descricao'];?></p>
                        </div>
                        <?php
                                } else {
                                    echo "<h5>Chamado não encontrado</h5>";
                                }
                            }
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script type="text/javascript">
      // Initialization for ES Users
      import { Ripple, initMDB } from "mdb-ui-kit";

      initMDB({ Ripple });
    </script>

  </body>
</html>