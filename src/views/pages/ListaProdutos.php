<?php
// use src\models\ProdutoModel;
// $model = new ProdutoModel();
include './views/templates/cabecalho.php';
// if(!empty($_GET['search'])){
//   $data = $_GET['search'];
//   $model = $model->getById($data);
// }else{
//   $model->rows = $model->rows;
// }

?>

<body>
  <div class="box-search">
    <input type="search" placeholder="Busque aqui" id="pesquisar">
    <button onclick="searchData()">Buscar</button>
  </div>
  <table>
    <tr>
      <th>Nome</th>
      <th>Preço</th>
      <th>Descrição</th>
      <th>ID</th>
    </tr>

    <?php foreach ((array)$model->rows as $item) : ?>
      <tr>
        <td> <?= $item->nome_produto ?> </td>
        <td> R$<?= $item->preco_produto ?></td>
        <td><?= $item->descricao_produto ?></td>
        <td><?= $item->id_produto ?> </td>
        <td><a href="/produto/unique?id_produto=<?= $item->id_produto ?>"><button>Comprar</button></a></td>
      </tr>
    <?php endforeach; ?>

  </table>

</body>
<script>
  var search = document.getElementById('pesquisar');
  function searchData(){
    window.location = 'produto?search='+search.value;
  }
</script>

</html>