<?php
require_once 'vendor/autoload.php';

use src\controllers\ProdutoController; // Falar com o edson sobre.
?>

<head>
  <link rel="stylesheet" href="/src/views/css/ListaProdutos.css">
</head>

<html>

<body class="global">
  <div class="container">
    <div class="box-search">
      <input type="search" placeholder="Busque aqui" id="pesquisar">
      <button class="button" id="but" onclick="searchData()">Buscar</button>
    </div>
    <div class="prodGrid">
      <table>
        <?php
        $model = new ProdutoController();
        $rows = $model->index();
        foreach ((array)$rows as $item) : ?>
          <div class="gridItem">
            <img class="image" src="/src/views/assets/<?= $item->id_produto ?>.png">
            <div class="content">
              <div class="info">
                <p><?= $item->nome_produto ?> </p>
                <p><?= $item->descricao_produto ?></p>
                <p> R$<?= $item->preco_produto ?></p>
              </div>
              <div class="button">
                <a href="/produto/unique?id_produto=<?= $item->id_produto ?>">Comprar</a>
              </div>
            </div>
          </div>
        <?php endforeach; ?>

      </table>
    </div>
  </div>
</body>
<script>
  var search = document.getElementById('pesquisar');

  function searchData() {
    window.location = 'produto?search=' + search.value;
  }
</script>

</html>