<?php
include './views/templates/cabecalho.php';
?>

<head>
  <link rel="stylesheet" href="./views/css/ListaProdutos.css">
</head>

 

<body>

   <div class="box-search">
    <input type="search" placeholder="Busque aqui" id="pesquisar">
    <button onclick="searchData()">Buscar</button>
  </div>

  <div id="container">
    <header>
    <main>
      <header>Produtos x</header>
      
      <section id="produtos">
          <?php foreach ((array)$model->rows as $item) : ?>
      <tr>
        <section class="produtos">
        <section class="produto">
        <img src="./views/assets/img.jpg" width="195px">
        <p> <?= $item->nome_produto ?> </p>
        <p><?= $item->descricao_produto ?></p>
        <p> R$<?= $item->preco_produto ?></p>        
        <!-- <p><?= $item->id_produto ?> </p> -->
        <a href="/produto/unique?id_produto=<?= $item->id_produto ?>"><button>Comprar</button></a>
        </section>
        </section>
      </tr>
    <?php endforeach; ?>
      

      </section>
    </main>
  </div>

  <div id="container">
    <header>
    <main>
      <header>Produtos y</header>
      
      <section id="produtos">
          <?php foreach ((array)$model->rows as $item) : ?>
      <tr>
        <section class="produtos">
        <section class="produto">
        <img src="./views/assets/nt.jpg" width="195px">
        <p> <?= $item->nome_produto ?> </p>
        <p><?= $item->descricao_produto ?></p>
        <p> R$<?= $item->preco_produto ?></p>        
        <!-- <p><?= $item->id_produto ?> </p> -->
        <a href="/produto/unique?id_produto=<?= $item->id_produto ?>"><button>Comprar</button></a>
        </section>
        </section>
      </tr>
    <?php endforeach; ?>
      

      </section>
    </main>
  </div>
</body>


<script>
  var search = document.getElementById('pesquisar');
  function searchData(){
    window.location = 'produto?'+search.value;
  }
</script>

</html>


<!-- 
 -->


<!-- 
   -->