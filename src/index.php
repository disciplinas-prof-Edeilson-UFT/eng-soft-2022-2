<?php

/* Criador de rotas para URL, fundamental para facilitar o acesso entre as páginas
porem so funciona se vc usar o php -S localhost:XXXX no terminal. No caso de usar
servidor apache/xamp essas rotas não funcionam.*/

use src\controllers\ProdutoController;

include 'controllers/ProdutoController.php';

$url = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

switch ($url) {
  case '/':
    echo "Home Page";
    break;

  case '/produto':
    ProdutoController::index();
    break;
  case '/unique':
    ProdutoController::unique();
    break;
}
