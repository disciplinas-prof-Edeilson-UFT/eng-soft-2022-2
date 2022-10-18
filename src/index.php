<?php

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
}
