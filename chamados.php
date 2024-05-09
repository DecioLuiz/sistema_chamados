<?php
session_start();
require './conexao.php';
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Chamados</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>
    <?php include('navbar.php'); ?>
    <div class="container mt-5">
        <?php include('mensagem.php'); ?>
        <div class="row" style="position:relative;">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Lista de Chamados <a href="chamado-create.php" class="btn btn-primary float-end">Adicionar Chamado</a></h4>
                    </div>
                    <div class="card-body">
                        <table class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Nome</th>
                                    <th>E-mail</th>
                                    <th>Setor</th>
                                    <th>Data</th>
                                    <th>Ações</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                    $sql = 'SELECT * FROM chamados;';
                                    $chamados = mysqli_query($conexao, $sql);
                                    if(mysqli_num_rows($chamados) > 0) {
                                        foreach($chamados as $chamado) {
                                ?>
                                <tr>
                                    <td><?=$chamado['id']?></td>
                                    <td><?=$chamado['nome']?></td>
                                    <td><?=$chamado['email']?></td>
                                    <td><?=$chamado['setor']?></td>
                                    <td><?=date('d/m/Y', strtotime($chamado['data_incidente']))?></td>
                                    <td>
                                        <a href="chamado-view.php?id=<?=$chamado['id']?>" class="btn btn-secondary btn-sm">Visualizar</a>
                                        <a href="" class="btn btn-success btn-sm">Editar</a>
                                        <form action="" method="POST" class="d-inline">
                                            <button type="submit" name="delete_chamado" value="1" class="btn btn-danger btn-sm">Excluir</button>
                                        </form>
                                    </td>
                                </tr>
                                <?php
                                        }
                                    } else {
                                        echo '<h5>Nenhum chamado cadastrado</h5><br>';
                                    }
                                ?>
                            </tbody>
                        </table>
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