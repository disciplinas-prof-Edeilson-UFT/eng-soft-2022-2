<?php

namespace src\api\src\controllers;

require_once 'vendor/autoload.php';

use src\models\CarrinhoModel;


class CarrinhoController
{
  public function updateValue($idUsuario,$idProduto)
  {
    try {
      $model = new CarrinhoModel();
      $model = $model->execute($idUsuario,$idProduto);
      return array(
        "message" => "success"
      );
    } catch (\Throwable $th) {
      return array(
        "message" => "error"
      );
    }
  }

  private function productExists($userId, $productId)
  {
    $model = new CarrinhoModel();
    $response = $model->findOne($userId, $productId);
    if (!$response) {
      return array(
        "message" => "product not exists"
      );
    }
    return $response;
  }

  public function removeProduct()
  {
    $model = new CarrinhoModel();
    $model->delete(1);
    return "Product deleted with success";
  }

  public function removeSomeProducts($userId, $productId, $quantity)
  {
    $model = new CarrinhoModel();
    $productExists = $this->productExists($userId, $productId);
    if (!$productExists) {
      return $productExists;
    }
    $quantityToSave = $productExists["quantidade_item_carrinho"] + $quantity;
    if ($quantityToSave < 1) {
      $model->deleteOne($userId, $productId);
      return array(
        "message" => "success"
      );
    }

    $model->update($userId, $productId, $quantityToSave);
    return array(
      "message" => "success"
    );
  }

  public function selecionaCarrinho($id_usuario)
  {
    $model = new CarrinhoModel();
    $response = $model->selecionaCarrinho($id_usuario);
    return $response;
  }
}
