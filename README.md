# eng-soft-2022-2

RF07 - Avaliar Produto

- Atores:
Usuário - Avalia produto;
- Descrição sucinta:
Avaliar um produto comprado no site.
- Pré condição:
O ator precisa estar logado na conta pessoal do mesmo e ter comprado o produto.
- Fluxo principal:
	1- O ator precisa fazer login na própria conta para automaticamente ser enviado para tela inicial do sistema;
	2- O ator deve pesquisar o produto a ser avaliado;
	3- O autor deve visualizar o produto a ser avaliado;
	4- O ator deve então selecionar “Avaliar Produto” na seção Avaliações de Usuários;
	5- Após o ator escrever seu comentário e selecionar a sua classificação com estrelas, deve confirmar a ação clicando no botão “Enviar”;
	6- Logo o sistema irá retornar para a página do produto porém agora atualizado e mostrando a nova avaliação incluída;
- Campos do formulário:


| Campo  | Obrigatório? | Editável? | Formato |
| ------------- | ------------- | ------------- | ------------- |
| Título do comentário  | Não  | Sim  | Texto  |
| Comentário  | Não  | Sim  | Texto  |
| Classificação por estrelas  | Sim  | Sim  |   |



- Opções do ator:

| Opção  | Descrição |
| Avaliar Produto | Permite o ator escrever um breve comentário e classificar o produto com estrelas |
| Enviar | Confirmação antes de enviar a avaliação |



- Fluxos alternativos:
FA01 - Se o ator não tiver comprado o produto
	1- O sistema exibirá uma mensagem avisando que não é possível avaliar um produto não comprado;
FA02 - O ator não está logado
	1- O sistema exibirá a tela do produto, porém sem opção de avaliar produto. No canto superior esquerdo o sistema exibirá um botão de “Login” onde ao selecioná-lo o autor será redirecionado para página de login do sistema;

- User story

Eu como ator, gostaria de avaliar o produto que comprei, para assim poder deixar minha opinião sobre o produto para outros usuários;

- Protótipo




