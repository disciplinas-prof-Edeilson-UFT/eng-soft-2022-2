<?php
// É dado um nome para o documento CarrinhoController.php . Esse nome é o que nós iremos nos referir no use src\ .
namespace src\controllers;

use src\models\CarrinhoModel;
use src\services\Api;

require_once 'vendor/autoload.php';


class CarrinhoController
{
    // Usaremos a classe do CarrinhoModel e a classe do CarrinhoData.

    public function updateValue($idUsuario,$idProduto)
    {
        // Aqui é onde conseguiremos o id do produto que deve ser incrementado. Já que o id dele está na url, verificamos 
        // primeiramente se ele realmente está lá, e se estiver criamos o objeto model e mandamos ele executar a função 
        // execute que está na classe CarrinhoModel, passando o id do produto que está na url usando o get.

        // $model = new CarrinhoModel();

        // $model = $model->execute($_GET['id_produto']);
        $api = new Api();
        $data = array(
            "id_produto" => $idProduto,
            "id_usuario" => $idUsuario
        );
        $response = $api->carrinho()->post($data);
        return $response;

       // if (isset($_GET['id_produto'])) {

         //   $model = new CarrinhoModel();
           // $model = $model->execute($_GET['id_produto']);
        //}
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
        // $model = new CarrinhoModel();
        // $response = $model->selecionaCarrinho();
        // return $response;
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
?>
