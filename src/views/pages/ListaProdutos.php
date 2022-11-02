<?php

include './views/templates/cabecalho.php';

?>

<head>
  <link rel="stylesheet" href="./views/css/ListaProdutos.css">
</head>

<body class="global">
  <div class="container">
    <div class="box-search">
      <input type="search" placeholder="Busque aqui" id="pesquisar">
      <button id="but" onclick="searchData()">Buscar</button>
    </div>
    <div class="prodGrid">
      <table>
        <?php foreach ((array)$model->rows as $item) : ?>
          <div class="gridItem">
            <img src="https://uploaddeimagens.com.br/images/004/084/732/full/produtoimagem.png?1667238087">
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