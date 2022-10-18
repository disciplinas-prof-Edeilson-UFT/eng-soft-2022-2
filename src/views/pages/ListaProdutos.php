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
    <?php foreach ((array)$model->rows as $item) : ?>
      <tr>
        <td><?= $item->nome_produto ?></td>
        <td><?= $item->preco_produto ?></td>
        <td><?= $item->descricao_produto ?></td>
      </tr>
    <?php endforeach; ?>
  </table>
</body>

</html>