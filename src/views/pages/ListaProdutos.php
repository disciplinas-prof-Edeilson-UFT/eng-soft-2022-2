<?php
require_once 'vendor/autoload.php';
use src\controllers\ProdutoController;


?>

<head>
  <link rel="stylesheet" href="/src/views/css/ListaProdutos.css">
</head>

<html>

<body class="global">
  <div class="container">

    <div class="prodGrid">
      <table>
        <?php
        $model = new ProdutoController();
        $produtos = $model->todosProdutos();
        foreach ((array)$produtos as $item) : ?>
          <div class="gridItem">
            <img class="image" src="/src/views/assets/<?= $item->id_produto ?>.png">
            <div class="content">
              <div class="info">
                <p><?= $item->nome_produto ?> </p>
                <p><?= $item->descricao_produto ?></p>
                <p> R$<?= $item->preco_produto ?></p>
              </div>
              <div class="button">
                <a href="/produtos/<?= $item->id_produto ?>">Comprar</a>
              </div>
            </div>
          </div>
        <?php
        endforeach; ?>
      </table>
    </div>
    <p class="results"><?= count($produtos) ?> Resultados obtidos</p>
  </div>
</body>
</html>
