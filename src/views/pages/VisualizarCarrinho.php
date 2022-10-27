<?php
include '\views\templates\cabecalho.php';

?>

<body>
    <div>
        <h3>SELECIONE O ENDEREÇO</h3>
        <input type="text" required>
        <button type="submit">Ok</button>
    </div>
    <div>
        <h3>PRODUTO E FRETE</h3>
        <button type="button">REMOVER TODOS OS PRODUTOS</button>
        <table>
            <?php foreach ((array)$model->rows as $item) : ?>
            <tr>
            <th>Nome</th>
            <th>Quantidade</th>
            <th>Preço</th>
            </tr>

            <tr>
            <td> <?= $item->nome_produto ?></td>
            <td> <?= $item->quantidade_item_carrinho ?></td>
            <td> <?= $item->preco_produto ?></td>
            </tr>
            <?php endforeach; ?>
        </table>
        <h4>FRETE:</h4>
    </div>
    <div>
        <h3>RESUMO</h3>
        <p>Valor dos Produtos:</p>
        <p>Frete:</p>
        <h4>Total:</h4>
        <button type="button">IR PARA O PAGAMENTO</button>
        <button type="button">CONTINUAR COMPRANDO</button>
    </div>

</body>

</html>