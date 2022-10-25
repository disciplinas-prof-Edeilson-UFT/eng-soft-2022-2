<?php
include './views/templates/cabecalho.php';

?>

<body>
  <table>
    <tr>
      <th>Nome</th>
      <th>Preço</th>
      <th>Descrição</th>
    </tr>

    <?php foreach ($model->rows as $item) : ?>
      <tr>
        <td> <?= $item->nome_produto ?></td>
        <td> <?= $item->preco_produto ?></td>
        <td><?= $item->descricao_produto ?></td>
        <td><a><button>Comprar</button></a></td>
      </tr>
    <?php endforeach; ?>
  </table>

</body>

</html>