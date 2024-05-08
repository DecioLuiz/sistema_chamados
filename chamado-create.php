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
    <div class="container mt-5">
        <div class="row" style="position:relative;">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Adicionar Chamado 
                            <a href="chamados.php" class="btn btn-danger float-end">Voltar</a>
                        </h4>
                    </div>
                    <div class="card-body">
                        <form action="actions.php" method="POST">
                            <div class="mb-3">
                                <label class="form-label">Nome</label>
                                <input type="text" name="nome" class="form-control" required>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">E-mail</label>
                                <input type="text" name="email" class="form-control" required>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Setor</label>
                                <select class="form-select form-select-sm" aria-label=".form-select-sm example" name="setor">
                                    <option selected>Clique e selecione o setor</option>
                                    <option value="Vendas">Vendas</option>
                                    <option value="Marketing">Marketing</option>
                                    <option value="Gerência">Gerência</option>
                                    <option value="Produção">Produção</option>
                                    <option value="Financeiro">Financeiro</option>
                                </select>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Data do incidente/problema</label>
                                <input type="date" name="data_incidente" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Descrição</label>
                                <textarea type="text" name="descricao" class="form-control" placeholder="Descreva aqui o seu problema/incidente"></textarea>
                            </div>
                            <div class="mb-3">
                                <button type="submit" name="criar_chamado" class="btn btn-primary">Salvar</button>
                            </div>
                        </form>
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