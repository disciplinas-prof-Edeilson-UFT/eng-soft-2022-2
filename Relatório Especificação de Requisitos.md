# Engenharia de software-2022.2 | Universidade Federal do Tocantins - Palmas, 2022

## Introdução

O projeto desenvolvido na disciplina Engenharia de Software do semestre 2022.2 é dividido em etapas. Primeiramente, os integrantes descrevem os casos expandidos de uso e user stories dos requisitos funcionais do sistema. Foi combinado a utilização da plataforma GitHub para gerenciar e controlar as versões do projeto, além do método Kanban para gestão ágil, por meio da ferramenta Trello. Todo o trabalho será desenvolvido no formato MarkDown. A turma foi dividida em 3 grupos, onde cada grupo possui um líder que deve representar e reportar toda a produtividade de seu respectivo grupo.

### Descrevendo casos de usos expandido e User stories

## 1 - Grupo 1.

- [x] RF01 - Efetuar Login. 1.1

- [ ] RF04 - Visuzalizar Produto. 1.2

- [ ] RF07 - Avaliar Produto. 1.3

- [ ] RF10 - Remover um item do Carrinho. 1.4

- [ ] RF13 - Remover um item da lista de Desejos. 1.5

## 2 - Grupo 2.

- [x] RF02 - Efetuar Cadastro de Usuário. 2.1

- [x] RF05 - Buscar um Produto. 2.2

- [x] RF08 - Solicitar Chamado/Suporte. 2.3

- [x] RF11 - Visualizar Carrinho. 2.4

## 3 - Grupo 3.

- [x] RF03 - Visualizar Catalógo. 3.1 - [ianasampaio](https://github.com/ianasampaio)

- [x] RF06 - Efetuar Compra. 3.2 - [weltonSantana](https://github.com/weltonSantana)

- [ ] RF09 - Adicionar Produto ao Carrinho. 3.3

- [x] RF12 - Adicionar produto à lista de Desejos. 3.4 - [edjunior0](https://github.com/edjunior0)

# Caso de uso
**RF01**

Item           | Descrição
---------------|----------
Caso de uso    | Login.
Resumo         | É esperado que quando o cliente tiver o contato com a tela de login ele possa fazer seu cadastro caso não seja cliente da loja, e o que os usuários já possam fazer login ao se depararem com a página.
Ator principal | Usuário utilizador da plataforma e novos usuários.
Ator secundário| Não possui.
Pré-condição   | É necessário que o usuário esteja utilizando a plataforma, conectado-á internet.
Pós-condição   | É necessário que para fazer o login o usuário tenha sua própria conta.

#### Fluxo principal

Passos  | Descrição
--------|----------
Passo 1 | Clcar em entrar na conta para fazer login ou cadastrar.
Passo 2 | Esperar a página do produto carregar.

#### Campos da aba de login

Campo                                | Obrigatório | Editável | Formato
-------------------------------------|-------------|----------|--------
Fazer login/ cadastrar               | Não         | sim      | Texto

#### Opções de usuário

Opção                                | Descrição   | Atalho
-------------------------------------|-------------|-------
Acessar o conta                      | Ao clicar nessa aba o usuário vai poder acessar sua conta na tela de login na qual será redirecionado | 

#### Relatório de usuário

Campo | Descrição | Formato
------|-----------|--------
--    | --        | --

#### Fluxo alternativo

Passos      | Descrição
------------|----------
Passo 1.1   | Caso o usuário não clique em fazer login, deve-se ter como continuar navegando na loja mesmo assim.
Passo 2.1.1 | O usuário será deslogado caso fique muito tempo sem utilizar a conta.
Passo 2.1.2 | O usuário tem a opção de deslogar caso seja da sua escolha.
Passo 2.1.3 | O usuário tem a opção de trocar senha.

# User story

Agora iremos escrever uma história de usuário para uma persona.

**Persona um, usuário comum.**

Epic                                |User Story| Critério de aceitação
-----------------------|----------|----------------------
Eu enquanto "usuário comum" quero "poder logar na minha conta para ter um melhor controle e utilização da plataforma de compras" para "ter mais segurança e uma experiências mais completa com uma conta da loja". | Enquanto "usuário comum" preciso ter minhas informções salvas na plataforma através de uma conta de usuário a fim de ter maior praticidade | Certifique-se que o usuário é capaz de **fazer login na própria conta.**

![image](https://user-images.githubusercontent.com/45723261/191869905-763d9ee5-a01d-4c02-8db0-d52f3efa67eb.png)

## RF02.

## Definindo o requisito:

O requisitos funcional, descritos nesta nessão para o sistema, é: **Efetuar cadastro de usuário**.

### Descrevendo o caso de uso expandido dos requisito:

#### **RF02 - Tela de Cadastro**

- **Atores:**

  - Usuário - Cria uma conta no sistema;

- **Descrição sucinta:**

  - Cria uma nova conta no sistema para que possa executar o ato de compra;

- **Pré-condição:**

  - O(s) ator(es) não deve(m) ter conta criada no sistema.

- **Fluxo principal:**

  1.  O ator ao desejar finalizar uma compra o sistema o mesmo apresenta ao ator a tela de Login;
  2.  Nessa tela é disposta um botão com título “Não tenho uma conta” que redireciona o usuário à tela de Cadastro;
  3.  A aplicação dispõe ao autor um formulário para ser preenchido com seus respectivos dados;
  4.  Ao preencher os campos o autor confirma os dados no botão de “criar conta”;
  5.  Em seguida o ator passa para um processo de verificação a fim de confirmar sua conta recém criada.

- **Campos do Formulário:**
  Campo | Obrigatório? | Editável? | Formato
  --------- | ------------ | --------- | -------
  Nome | Sim | Sim | Texto
  Email | Sim | Sim | Texto
  Senha | Sim | Sim | Texto
  CPF | Sim | Sim | Alfanumérico
  Endereço | Não | Sim | Texto
  Contato | Sim | Sim | Numérico
  Gênero | Sim | Sim | Checkbox

- **Opções do Usuário:**
  Opção | Descrição | Atalho  
   --------- | ------------ | -------
  Criar conta | Confirmar Dados inseridos |

- **Relatório do Usuário:**
  Campo | Descrição | Formato  
   --------- | ------------ | -------
  Conta Criada com sucesso | Isso confirma e garante todo êxito na operação de cadastro do usuário | Texto

- **Tratamento de Exceções:**

  1.1. O ator ja tem uma conta.

  1.2. Sistema exibe um botão "Fazer login" na tela de Cadastro, e assim o ator é redirecionado para a tela de Login.

  2.1. Funcionário informa que não há disponibilidade naquela Data.

  2.2. Sistema exibe horários disponiveis para o dia utíl seguinte.

### **User Story - Tela de Cadastro**

“Como **um usuário novo do sistema** eu quero **poder criar uma nova conta com os meus dados** para que **eu possa ter uma nova conta e efetuar compras**.”

- **Protótipo:**

<img src="https://uploaddeimagens.com.br/images/004/032/319/full/Captura_de_tela_de_2022-09-22_16-00-51.png?1663873305" alt="drawing" width="600"/>

# Caso de uso **RF03**

Item           | Descrição
---------------|----------
Caso de uso    |RF03 - Visualizar o catálogo
Resumo           | Visualiza o catálogo para que possa encontrar algum produto que desperte interesse;
Ator principal |Usuário - vizualiza o catálogo
Ator secundário|-
Pré-condição   |O(s) ator(es) deve ter acessado o sistema de vendas (site)
Pós-condição   |-

#### Fluxo principal

Passos  | Descrição
--------|----------
Passo 1 | O ator acessa o sistema de vendas (site)
Passo 2 | O sistema inicia a tela de apresentação de produtos

#### Campos da aba de visualizar produtos

Campo | Obrigatório | Editável | Formato
------|-------------|----------|--------
--    | --          | --       | --      

#### Opções de usuário

Opção                                | Descrição                              | Atalho
-------------------------------------|-------------                           |-------
--         | -- | --

#### Relatório de usuário

Campo | Descrição | Formato
------|-----------|--------
--    | --        | --

#### Fluxo alternativo

Passos      | Descrição
------------|----------
--          | --

# User story

**Persona um, usuário comum.**

Epic	       					 |User Story| Critério de aceitação
-----------------------|----------|----------------------
“Como **um cliente online** eu quero **visualizar o catálogo de produtos** para que **eu possa ser encorajado a comprar algum deles.**” | Enquanto **um cliente online** eu preciso ser capaz de **visualizar o catálogo de produtos** para que **posteriormente eu possa ser encorajado a comprar algum deles.** | Certifique-se de que o usuário é capaz de **acessar o site**.

[Link para o protótipo](https://www.figma.com/proto/zKriDa10csBIccQ3X5ZfMO/RF03-Visualizar-Cat%C3%A1logo?node-id=0%3A1&scaling=min-zoom&page-id=0%3A1)

## RF05: Buscar um produto
 
# 2 - Descrição dos casos de uso
 ## RF05 :
 * Ator :
  1. Cliente - Responsável por fazer a busca do produto desejado
 * Descrição sucinta :
  1. Buscar por produto e / ou por categorias de produtos oferecidos pela loja
 * Fluxo principal :
  1. O ator identifica a barra de busca e efetua a ação de busca do produto.
  2. O sistema apresenta uma tela com os respectivos produtos semelhantes ao buscado.
 * Fluxo alternativo :
  1. O ator realiza a busca do produto .
  2. O sistema apresenta uma tela com o aviso de que não encontrou nenhum produto semelhante.
# 3 - Descrição do User Storie para o requisito :
 ## RF05 :
 * Como cliente , eu quero efetuar uma busca por um produto específico , tendo cadastro na loja ou não.
# 4 - Protótipo das telas de cada um dos requisitos :

 ## RF05
<img src="https://uploaddeimagens.com.br/images/004/032/329/full/Buscar....png?1663873519" alt="drawing" width = "200"/>

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


## RF08

Descrição:

1) Requisito RF08 - Solicitar Chamado/Suporte.
2) Descrever o Caso de Uso Expandido para o requisito RF08.
3) Descrever User Storie o requisito RF08.
4) Fazer o protótipo da tela.

Utilizaremos, como referência, o sistema de SAC da loja virtual Kabum.

1) Descrição do caso de uso expandido dos requisitos:

Requisito RF08:
    • Nome: Solicitar Chamado/Suporte.
    • Número: 08.
    • Atores: Cliente, funcionário.
    • Finalidade: Solicitar ajuda/suporte ao SAC.
    • Visão geral: Este caso de uso tem a finalidade de auxiliar clientes que necessitam de ajuda com o sistema.
    • Tipo: Essencial

Ações dos atores:

1. Cliente entra em contato com o SAC.
2. Cliente informa o assunto, seu nome, se pessoa física ou jurídica, e-mail e telefone.
3. O sistema registra os dados informados pelo cliente.
4. O cliente começa um chat com um atendente.

Respostas do sistema:

1. Mostra tela do SAC.
2. Sistema coloca tabela em modo de inserção.
3. Sistema grava informações.
4. O sistema redireciona o cliente para um chat com um atendente.

Tratamento de Exceções:
1.1. Cliente não preenche os campos corretamente.

1.2. Sistema avisa sobre os campos obrigatórios.

2.1. Cliente não verifica o checkbox (reCAPTCHA).

2.2. Sistema solicita a verificação do checkbox (reCAPTCHA).

3) Descrição do User Storie para o requisito:

Como um cliente eu preciso solicitar um suporte para resolver um problema/dúvida.

4) Protótipo da tela:

![](https://i.imgur.com/dy28taW.png)
![](https://i.imgur.com/fgFWSzj.png)

## requisitos RF11

 Os requisitos funcionais.

 Requisitos RF11

 
     *Nome: Carrinho de compra.
     *Atores: Cliente e Sistemas. 
     *Finalidade: Verificar produtos.
     *Visão geral: O caso de uso tem o dever de fazer o cliente conferir o estado do seu carrinho de compra.
     *Tipo: Importante.

## Ações dos Atores: Carrinho:
     1)	Cliente entra na página deferida a carrinho.
     2)	Cliente informa endereço para a realização da entrega.
     3)	Opção de deseja garantia estendida.
     4)	Opções de frete.
     5)	Opção de desconto.

## Respostas do Sistema: Carrinho:
     1)	Tela inicial de compra mostra o produto que está no carrinho.
     2)	Exibi quantidade e valor dos determinados. produtos. apresenta um subtotal.
     3)	Opções de ir para o pagamento ou continuar na compra.

## User store:

    Como cliente eu desejo conferir o produto, frete e preço de entrega.


## Protótipo de tela: 

<img src="https://uploaddeimagens.com.br/images/004/035/650/full/Visualizar_Carrinho.png?1664065784" alt="drawing" width="600"/>


# Caso de uso **RF12**

Item           | Descrição
---------------|----------
Caso de uso    | RF12 - Adicionar item/produto à lista de desejos
Resumo	       | Adiciona um produto/item de seu interesse à sua lista de desejos
Ator principal | Algum usuário - Adiciona um produto/item de interesse na lista de desejos
Ator secundário| -
Pré-condição   | O(s) ator(es) já deve ter uma conta, estar logado e estar na tela de visualização do produto
Pós-condição   | O item deve ser salvo na lista de desejos do usuário

#### Fluxo principal

Passos  | Descrição
--------|----------
Passo 1 | O ator, já na tela de vizualização do produto, clica no botão para adicionar o produto à lista de desejos
Passo 2 | Ao pressionar o botão, o produto é adicionado à lista de desejos do usuário e o botão indica que o produto está adicionado

#### Campos da aba de visualizar produtos

Campo | Obrigatório | Editável | Formato
------|-------------|----------|--------
--    | --          | --       | --         

#### Opções de usuário

Opção                                     | Descrição                                   | Atalho
----------------------------------------- | -------------                               | -------
Adicionar item/produto à lista de desejos | Adiciona o item/produto na lista de desejos | --

#### Relatório de usuário

Campo | Descrição | Formato
------|-----------|--------
--    | --        | --


#### Fluxo alternativo

Passos      | Descrição
------------|----------
--          | --

# User story

**Persona um, usuário já na tela de visualização de um produto.**

Epic	       					 |User Story| Critério de aceitação
-----------------------|----------|----------------------
Como **um usuário já na tela de visualização de um produto** eu quero **poder adicionar um produto que eu tenho interesse à minha lista de desejos** para que **posteriormente eu possa ver somente os itens de meu insteresse em um único local** | Enquanto **usuário já na tela de visualização de um produto** eu preciso ser capaz de **adicionar um produto que eu tenho interesse à minha lista de desejos** para **posteriormente eu possa ver somente os itens de meu interesse em um único local**. | Certifique-se de que o usuário é capaz de **fazer login na própria conta, buscar uma série de produtos e adicionar o produto que preferir à sua lista de desejos**.

[Link para o protótipo](https://www.figma.com/file/hZS3FT2XP2Q4Pib4LaDEHL/Atividade-5%3A-Requisitos---Edson?node-id=0%3A1)
