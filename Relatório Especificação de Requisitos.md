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

- [ ] RF06 - Efetuar Compra. 3.2 - [weltonSantana](https://github.com/weltonSantana)

- [ ] RF09 - Adicionar Produto ao Carrinho. 3.3

- [ ] RF12 - Adicionar produto à lista de Desejos. 3.4


# Caso de uso
**RF06**

Item           | Descrição
---------------|----------
Caso de uso    | Efetuar Compra.
Resumo         | Permitir que o Usuário faça um pedido de um produto desejado do catálogo e finalize a compra.
Ator principal | Usuário utilizador da plataforma.
Ator secundário| Não possui.
Pré-condição   | É necessário que o usuário efetue o login na plataforma.
Pós-condição   | Não se aplica.


#### Fluxo principal

Passos  | Descrição
--------|----------
Passo 1 | O sistema disponibiliza as opções de pagamento.
Passo 2 | O cliente escolhe uma das opções.
Passo 3 | O sistema disponibiliza um formulário de inserção dos dados do cartão de crédito.
Passo 4 | O cliente preenche o formulário e clica no botão de pagar compra.
Passo 5 | O sistema direciona o cliente para uma tela com os dados do cliente e detalhes do pedido.
Passo 6 | O cliente confirma a compra clicando em "finalizar compra".
Passo 7 | O sistema computa as informações do pagamento e realiza sua validação.
Passo 8 | O sistema retorna informando sucesso do pagamento.
  

  
#### Campos da aba de Efetuar compra

 Campo     | Obrigatorio    | Editável | Formato  
 --------- | ------------ | ------- | -------
 Finalizar Compra        | Não           | Não   | Texto  


    
#### Opções de usuário


 Campo     | Descrição    | Atalho  
 --------- | ------------ | -------
 Formas de pagamento        | Ao clicar no botão de formas de pagamento, o usuário escolhe a forma como será pago o produto           | --   

 
     
 #### Relatório de usuário
    
 Campo     | Descrição    | Formato   
 --------- | ------------ | -------
 --        | --           | --   
    

#### Fluxo alternativo

Passos  | Descrição
--------|----------
Passo 1 | O sistema disponibiliza as opções de pagamento.
Passo 2 | O cliente escolhe a opção de pix ou boleto.
Passo 3 | O cliente clica no botão "pagar conta".
Passo 4 | O sistema direciona o cliente para uma tela com os dados do cliente e detalhes do pedido.
Passo 5 | O cliente confirma a compra clicando em "finalizar compra".
Passo 6 | O sistema retorna com o codigo do pix ou boleto bancário.


 


# User story

**Persona um, usuário comum.**

Epic                                |User Story| Critério de aceitação
-----------------------|----------|----------------------
Como "usuário comum" eu quero "efetuar uma compra" para "receber o produto". | Como "usuário comum" eu  quero conseguir finalizar a compra do meu pedido atráves da forma de pagamento que eu deseje para que eu possa receber o produto e usufruir do mesmo | Certifique-se que o usuário consegue **fazer login na própria conta, escolher uma forma de pagamento e finalizar a compra.**

[Link para o protótipo](https://www.figma.com/file/q5oklvxsCOQ1GluAsArLjB/RF06---Efetuar-Compra?node-id=1%3A2)
