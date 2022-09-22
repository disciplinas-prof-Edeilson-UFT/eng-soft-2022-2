# Engenharia de software-2022.2 | Universidade Federal do Tocantins - Palmas, 2022

## Introdução

O projeto desenvolvido na disciplina Engenharia de Software do semestre 2022.2 é dividido em etapas. Primeiramente, os integrantes descrevem os casos expandidos de uso e user stories dos requisitos funcionais do sistema. Foi combinado a utilização da plataforma GitHub para gerenciar e controlar as versões do projeto, além do método Kanban para gestão ágil, por meio da ferramenta Trello. Todo o trabalho será desenvolvido no formato MarkDown. A turma foi dividida em 3 grupos, onde cada grupo possui um líder que deve representar e reportar toda a produtividade de seu respectivo grupo.

### Descrevendo casos de usos expandido e User stories

## 1 - Grupo 1.

- [ ] RF01 - Efetuar Login. 1.1

- [ ] RF04 - Visuzalizar Produto. 1.2

- [ ] RF07 - Avaliar Produto. 1.3

    - Atores:
    Usuário - Avalia produto;
    - Descrição sucinta:
    Avaliar um produto comprado no site.
    - Pré condição:
    O ator precisa estar logado na conta pessoal do mesmo e ter comprado o produto.
    - Fluxo principal:
        1. O ator precisa fazer login na própria conta para automaticamente ser enviado para tela inicial do sistema;
        2. O ator deve pesquisar o produto a ser avaliado;
        3. O autor deve visualizar o produto a ser avaliado;
        4. O ator deve então selecionar “Avaliar Produto” na seção Avaliações de Usuários;
        5. Após o ator escrever seu comentário e selecionar a sua classificação com estrelas, deve confirmar a ação clicando no botão “Enviar”;
        6. Logo o sistema irá retornar para a página do produto porém agora atualizado e mostrando a nova avaliação incluída;
        
    - Campos do formulário:


    | Campo  | Obrigatório? | Editável? | Formato |
    | ------------- | ------------- | ------------- | ------------- |
    | Título do comentário  | Não  | Sim  | Texto  |
    | Comentário  | Não  | Sim  | Texto  |
    | Classificação por estrelas  | Sim  | Sim  |   |



    - Opções do ator:

    | Opção  | Descrição |
    | ------------- | ------------- |
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


    ![RF07](prototipo/prototipo_RF07.PNG)


- [ ] RF10 - Remover um item do Carrinho. 1.4

- [ ] RF13 - Remover um item da lista de Desejos. 1.5

## 2 - Grupo 2.

- [ ] RF02 - Efetuar Cadastro de Usuário. 2.1

- [ ] RF05 - Buscar um Produto. 2.2

- [ ] RF08 - Solicitar Chamado/Suporte. 2.3

- [ ] RF11 - Visualizar Carrinho. 2.4

## 3 - Grupo 3.

- [ ] RF03 - Visualizar Catalógo. 3.1

- [ ] RF06 - Efetuar Compra. 3.2

- [ ] RF09 - Adicionar Produto ao Carrinho. 3.3

- [ ] RF12 - Adicionar produto à lista de Desejos. 3.4
