# Engenharia de software-2022.2 | Universidade Federal do Tocantins - Palmas, 2022

## Introdução

O projeto desenvolvido na disciplina Engenharia de Software do semestre 2022.2 é dividido em etapas. Primeiramente, os integrantes descrevem os casos expandidos de uso e user stories dos requisitos funcionais do sistema. Foi combinado a utilização da plataforma GitHub para gerenciar e controlar as versões do projeto, além do método Kanban para gestão ágil, por meio da ferramenta Trello. Todo o trabalho será desenvolvido no formato MarkDown. A turma foi dividida em 3 grupos, onde cada grupo possui um líder que deve representar e reportar toda a produtividade de seu respectivo grupo.

### Descrevendo casos de usos expandido e User stories

## 1 - Grupo 1.

- [ ] RF01 - Efetuar Login. 1.1

- [ ] RF04 - Visuzalizar Produto. 1.2

- [ ] RF07 - Avaliar Produto. 1.3

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


# User Story - Efetuar Compra 

“**Como** um cliente **eu quero** efetuar a compra do meu pedido **para que** eu possa receber meu pedido e poder usufrui do mesmo.”


# Caso de uso expandido - Efetuar Compra

RF06 - Efetuar Compra 

* **Atores**:

  - Cliente;

* **Descrição sucinta**: 
  
  - Permitir que o cliente realize um pedido de um produto do catálogo;
  
* **Pré-condição**:

  - RF01 - Efetuar Login;
  
* **Fluxo principal**: 
  1. O sistema disponibiliza as opções de pagamento.
  2. O cliente escolhe uma das opções.
  3. O sistema disponibiliza um formulário de inserção dos dados do cartão de crédito.
  4. O cliente preenche o formulário e clica no botão de pagar compra.
  5. O sistema direciona o cliente para uma tela com os dados do cliente e detalhes do pedido.
  6. O cliente confirma a compra clicando em "finalizar compra".
  7. O sistema computa as informações do pagamento e realiza sua validação.
  8. O sistema retorna informando sucesso do pagamento.
  
  
  
 * **Campos do Formulário:**
    Campo     | Obrigatório? | Editável? | Formato
    --------- | ------------ | --------- | -------
    Forma de pagamento    | Sim          | Sim       | Texto
    
    
* **Opções do Usuário:**
    Opção     | Descrição               | Atalho   
    --------- | ------------            | -------
     Confirmar Compra | Confirmar a Compra |  
     
    
* **Relatório do Usuário:**
    Campo     | Descrição    | Formato   
    --------- | ------------ | -------
    --        | --           | --   
    
    
* **Fluxos alternativos:**

 **FA01** - Pagamento por pix/boleto:
 
  1. O sistema disponibiliza as opções de pagamento.
  2. O cliente escolhe a opção de pix ou boleto.
  3. O cliente clica no botão "pagar conta".
  4. O sistema direciona o cliente para uma tela com os dados do cliente e detalhes do pedido.
  5. O cliente confirma a compra clicando em "finalizar compra".
  6. O sistema retorna com o codigo do pix ou boleto bancário.
 
 

# Protótipo:

https://www.figma.com/file/q5oklvxsCOQ1GluAsArLjB/RF06---Efetuar-Compra?node-id=1%3A2