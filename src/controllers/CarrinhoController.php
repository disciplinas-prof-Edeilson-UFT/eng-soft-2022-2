<?php
// É dado um nome para o documento CarrinhoController.php . Esse nome é o que nós iremos nos referir no use src\ .
namespace src\controllers;

use src\models\CarrinhoModel;
use src\services\Api;

require_once 'vendor/autoload.php';


class CarrinhoController
{

    public function updateValue($idUsuario, $idProduto)
    {

        $api = new Api();
        $data = array(
            "id_produto" => $idProduto,
            "id_usuario" => $idUsuario
        );
        $response = $api->carrinho()->post($data);
        return $response;
    }

    private function productExists($userId, $productId)
    {
        $model = new CarrinhoModel();
        $response = $model->findOne($userId, $productId);
        if (!$response) {
            return null;
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
        $api = new Api();
        $data = array(
            "quantidade" => $quantity,
            "id_usuario" => $userId
        );
        $response = $api->carrinho()->put($data, $productId);
        return $response;
    }

    public function selecionaCarrinho($userId)
    {
        $api = new Api();
        $data = array(
            "id_usuario" => $userId
        );
        $response = $api->carrinho()->get($data);
        return $response;
        echo $response;
    }

    public function showPrice($userid)
    {

        // Vamos criar o objeto value e fazer ele chamar a função de mostrar o preco total do carrinho, e vamos retornar eese valor
        // para que ele possa ser mostrado na view.

        $value = new CarrinhoModel();

        $value = $value->showPrice($userid);

        return $value;
    }
}
