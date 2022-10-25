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

    <tr>
      <td> <?= $model[0]->nome_produto ?></td>
      <td> <?= $model[0]->preco_produto ?></td>
      <td><?= $model[0]->descricao_produto ?></td>
      <td><a href="#"><button>Comprar</button></a></td>
    </tr>
  </table>

</body>

</html>