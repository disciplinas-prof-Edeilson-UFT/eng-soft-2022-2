<?php

use src\controllers\CarrinhoController;

require_once 'vendor/autoload.php';

if ($_POST) {
    if (isset($_POST['removecart'])) {

        $removeCart = new CarrinhoController();
        $removeCart->removeProduct();
    }
}

?>

<html>

<head>

    <link rel="stylesheet" href="/src/views/css/VisualizarCarrinho.css">
    <script>
        if (window.history.replaceState) {

            window.history.replaceState(null, null, window.location.href);
        }
    </script>

</head>

<body class="global">

    <div class="container">
        <div style="width:100%">
            <div class="address">
                <h3>SELECIONE O ENDEREÇO</h3>
                <input type="text" required>
                <button class="button" type="submit">Ok</button>
            </div>
            <div class="prod">
                <h3>PRODUTO E FRETE</h3>
                <table class="table">
                    <thead>
                        <tr>
                            <th class="teste" >Nome</th>
                            <th>Quantidade</th>
                            <th>Preço</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $carrinhoController = new CarrinhoController();
                        $rows = $carrinhoController->selecionaCarrinho();
                        foreach ((array)$rows as $item) : ?>
                            <tr>
                                <td class="teste"> <?= $item->nome_produto ?></td>
                                <td class="tableitem" > 
                                    <form class="address" method="POST">
                                        <div>
                                            <button class="buttoncart" name="removecart" type="submit"> - </button>
                                            <?= $item->quantidade_item_carrinho ?>
                                            <button class="buttoncart" name="removecart" type="submit"> + </button>
                                        </div>
                                    </form> 
                                </td>
                                <td class="tableitem" > R$<?= $item->preco_produto ?></td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
                <form class="address" method="POST">
                    <button class="button" name="removecart" type="submit">REMOVER TODOS OS PRODUTOS</button>
                </form>
                <h4>FRETE:</h4>
            </div>
        </div>
        <div class="nutshell">
            <h3>RESUMO</h3>
            <p>Valor dos Produtos:

                <?php

                // Criamos o objeto value e chamamos a classe do carrinho controllee, que vai chamar a função de mostrar o preco.
                // O valor retornado está numa array, onde na posição 0 está o nosso objeto, e dentro dele temos a propriedade sum
                // que foi obtida na query com nosso banco de dados. Nessa propriedade está o valor total do carrinho.

                $value = new CarrinhoController();
                $value = $value->showPrice();

                function formatar($val)
                {
                    return number_format($val, 2, '.', '');
                }

                echo "R$" . formatar($value[0]->sum);

                ?>
            </p>
            <p>Frete:</p>
            <h4>Total:</h4>
            <button class="button" type="button">IR PARA O PAGAMENTO</button>
            <a href="/produto"><button class="button" type="button">CONTINUAR COMPRANDO</button></a>
        </div>
    </div>
</body>

</html>