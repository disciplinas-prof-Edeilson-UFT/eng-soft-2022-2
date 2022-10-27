<?php


namespace src\models;
include("src/database/CarrinhoData.php");
use src\database\CarrinhoData;

echo "CHEGOU AQQUIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIII";

die();

use src\config\Connection;


class CarrinhoModel
{
  public function delete($userId, $productId)
  {
    $cartData = new CarrinhoData();
    $cartData->removeFromCart($userId, $productId);
  }

  public function update($quantity, $userId, $productId)
  {
    $cartData = new CarrinhoData();
    $cartData->updateCartProduct($quantity, $userId, $productId);
  }

  public function findOne($userId, $productId)
  {
    $cartData = new CarrinhoData();
    $response = $cartData->getProduct($userId, $productId);
    return $response;
  }

  public function execute($id_produto)
  {

    $execution = new CarrinhoData();
    $execution->addCarrinho($id_produto);
  }

  public function selecionaCarrinho()
  {
    include 'database/CarrinhoData.php';
    $exec  = new CarrinhoData();

    $rows = $exec->selectCarrinho();
  }
}
