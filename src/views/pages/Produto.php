<?php
include './views/templates/cabecalho.php';

?>

  <style rel="stylesheet">
	* {
    padding: 0;
    margin: 0;
    box-sizing: border-box;
}

html {
    font-size: 10px;
}

body {
    background: #d4e4ef;
}

#container {
    max-width: 1024px;
    margin: 0 auto;
}

#container>header {
    background: #d4e4ef;
    text-align: center;
    padding-top: 1rem;
}

main {
    background: #ecedea;
    font-size: 20px;
    padding: 1rem;
}



/* NAV */
nav {
    background: #0a6082;
    font-size: 20px;
    font-family: 'Franklin Gothic Medium', 'Arial Narrow', sans-serif;
}

nav ul {
    list-style-type: none;
}

nav ul li {
    color: #caaad4;
    border-right: 1px solid #d4e4ef;
    display: inline-block;
}

nav ul li a {
    text-decoration: none;
    display: block;
    color: #ecedea;
    padding: 15px;
}

/* MAIN */
main>header {
    color: #4c3997;
    font-family: 'Franklin Gothic Medium', 'Arial Narrow', sans-serif;
    font-weight: 800;
}

.produto {
    margin-bottom: 20px;
    cursor: pointer;
}

.produto p {
    background-color: #7dafba;
    color: whitesmoke;
    padding: 5px 10px;
    font-family: Verdana, Geneva, Tahoma, sans-serif;
}

/* .produto p:hover {
    transform: rotate(-2deg);
} */

#produtos {
    display: flex;
    flex-wrap: wrap;
    justify-content: space-around;
}
  </style>



<body>

   <div class="box-search">
    <input type="search" placeholder="Busque aqui" id="pesquisar">
    <button onclick="searchData()">Buscar</button>
  </div>

  <div id="container">
    <header>
    <main>
      <section id="produtos">
        <section class="produtos">
        <section class="produto">
        <img src="./views/assets/user.png" width="55px">
        <p><?= $model[0]->nome_produto ?></p>
        <p><?= $model[0]->descricao_produto ?></p>
        <p>R$<?= $model[0]->preco_produto ?></p>
        <a href="#"><button>Comprar</button></a>
        </section>
        </section>
       </section>
    </main>
  </div>