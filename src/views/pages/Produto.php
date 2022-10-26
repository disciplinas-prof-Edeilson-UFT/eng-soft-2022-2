<?php
include './views/templates/cabecalho.php';

?>

  <style rel="stylesheet">
	table, tr, td, th{
		border:#000 solid 1px;
		width:100%;
		padding:7px;
		font-size:20px;
		border-collapse:collapse;
    text-align: center;
	}
	td{
		width:150px;
		height:30px;
	}
	th{
		background-color:#060;
		color:#FFF;
	}
  </style>

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