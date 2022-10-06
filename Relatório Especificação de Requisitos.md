# Engenharia de software-2022.2 | Universidade Federal do Tocantins - Palmas, 2022

## Introdução

O projeto desenvolvido na disciplina Engenharia de Software do semestre 2022.2 é dividido em etapas. Primeiramente, os integrantes descrevem os casos expandidos de uso e user stories dos requisitos funcionais do sistema. Foi combinado a utilização da plataforma GitHub para gerenciar e controlar as versões do projeto, além do método Kanban para gestão ágil, por meio da ferramenta Trello. Todo o trabalho será desenvolvido no formato MarkDown. A turma foi dividida em 3 grupos, onde cada grupo possui um líder que deve representar e reportar toda a produtividade de seu respectivo grupo.

### Definindo os requisitos e seus respectivos grupos.

## 1 - Grupo 1.


- [x] RF01 - Efetuar Login. 1.1 [João Pedro Melo Povoa](https://github.com/JPeeMP) Revisador por @Lucka10

- [x] RF04 - Visuzalizar Produto. 1.2 [João Gabriel Alves de Souza](https://github.com/JoaoGabrielh) Revisado por @JPeeMP

- [x] RF07 - Avaliar Produto. 1.3 [Fernanda Menezes Plessim de Melo](https://github.com/Peraefe) Revisado por @JoaoGabrielh

- [x] RF10 - Remover um item do Carrinho. 1.4 - [Larissa Mitie Curi Hirai](https://github.com/LarissaHirai) Revisado por @Peraefe

- [x] RF13 - Remover um item da lista de Desejos. 1.5 - [Lucka10](https://github.com/Lucka10) Revisado por @LarissaHirai


## 2 - Grupo 2.


- [x] RF02 - Efetuar Cadastro de Usuário. 2.1 - [pixies0 ](https://github.com/pixies0) Revisado por @fernandokozak

- [x] RF05 - Buscar um Produto. 2.2 - [JulioNolasco](https://github.com/JulioNolasco) Revisado por @Izann-Brum

- [x] RF08 - Solicitar Chamado/Suporte. 2.3 - [Izann-Brum](https://github.com/Izann-Brum) Revisado por @JulioNolasco

- [x] RF11 - Visualizar Carrinho. 2.4 - [fernandokozak](https://github.com/fernandokozak) Revisado por @pixies0


## 3 - Grupo 3.


- [x] RF03 - Visualizar Catalógo. 3.1 - [ianasampaio](https://github.com/ianasampaio) Revisado por @weltonSantana

- [x] RF06 - Efetuar Compra. 3.2 - [weltonSantana](https://github.com/weltonSantana) Revisado por @ianasampaio

- [x] RF09 - Adicionar Produto ao Carrinho. 3.3 - [AfonsoDglan](https://github.com/AfonsoDglan) Revisado por @edjunior0

- [x] RF12 - Adicionar produto à lista de Desejos. 3.4 - [edjunior0](https://github.com/edjunior0) Revisado por @AfonsoDglan


# Casos de uso e User stories

## **RF01 - Efetuar Login**

#### Autor: @JPeeMP - João Pedro Melo Povoa.

---

### Revisor: @JoaoGabrielh - João Gabriel Alves de Souza

| Item            | Descrição                                                                                                                                                                                               |
| --------------- | ------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- |
| Caso de uso     | Login.                                                                                                                                                                                                  |
| Resumo          | É esperado que quando o cliente tiver o contato com a tela de login ele possa fazer seu cadastro caso não seja cliente da loja, e o que os usuários já possam fazer login ao se depararem com a página. |
| Ator principal  | Usuário utilizador da plataforma e novos usuários.                                                                                                                                                      |
| Ator secundário | Não possui.                                                                                                                                                                                             |
| Pré-condição    | É necessário que o usuário esteja utilizando a plataforma, conectado-á internet.                                                                                                                        |
| Pós-condição    | É necessário que para fazer o login o usuário tenha sua própria conta.                                                                                                                                  |

#### Fluxo principal

| Passos  | Descrição                                                          |
| ------- | ------------------------------------------------------------------ |
| Passo 1 | Entrar na página principal ver o catalogo de produtos              |
| Passo 2 | Filtrar os produtos que tem interesse                              |
| Passo 3 | Entar na página de detalhe do produto que escolheu                 |
| Passo 4 | clicar no botão adicionar item ao carinho                          |
| Passo 5 | Ser redirecionado para página com o carinho com todo seus produtos |

#### Campos

| Campo   | Obrigatório                                              | Editável | Formato |
| ------- | -------------------------------------------------------- | -------- | ------- |
| Passo 1 | Clicar em entrar na conta para fazer login ou cadastrar. |
| Passo 2 | Esperar a página do produto carregar.                    |

#### Campos da aba de login

| Campo                  | Obrigatório | Editável | Formato |
| ---------------------- | ----------- | -------- | ------- |
| Fazer login/ cadastrar | Não         | sim      | Texto   |

#### Opções de usuário

| Opção           | Descrição                                                                                             | Atalho |
| --------------- | ----------------------------------------------------------------------------------------------------- | ------ |
| Acessar o conta | Ao clicar nessa aba o usuário vai poder acessar sua conta na tela de login na qual será redirecionado |

#### Relatório de usuário

| Campo | Descrição | Formato |
| ----- | --------- | ------- |
| --    | --        | --      |

#### Fluxo alternativo

| Passos      | Descrição                                                                                           |
| ----------- | --------------------------------------------------------------------------------------------------- |
| Passo 1.1   | Caso o usuário não clique em fazer login, deve-se ter como continuar navegando na loja mesmo assim. |
| Passo 2.1.1 | O usuário será deslogado caso fique muito tempo sem utilizar a conta.                               |
| Passo 2.1.2 | O usuário tem a opção de deslogar caso seja da sua escolha.                                         |
| Passo 2.1.3 | O usuário tem a opção de trocar senha.                                                              |
| Passo 2.1.4 | Notificar usuário, caso a senha esteja incorreta.                                                   |

# User story

Agora iremos escrever uma história de usuário para uma persona.

**Persona um, usuário comum.**

| Epic                                                                                                                                                                                                               | User Story                                                                                                                                 | Critério de aceitação                                                    |
| ------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------ |
| Eu enquanto "usuário comum" quero "poder logar na minha conta para ter um melhor controle e utilização da plataforma de compras" para "ter mais segurança e uma experiências mais completa com uma conta da loja". | Enquanto "usuário comum" preciso ter minhas informções salvas na plataforma através de uma conta de usuário a fim de ter maior praticidade | Certifique-se que o usuário é capaz de **fazer login na própria conta.** |

![image](https://user-images.githubusercontent.com/45723261/193125183-94278a21-41e1-49d2-a3de-834aef0fb533.png)

## **RF02 - Efetuar Cadastro do Usuário**.

#### Autor: @pixies0 - João Pedro Silva Cunha.

---

### Revisor: @fernandokozak - Luiz Fernando Kozak.

| Item            | Descrição                                                              |
| --------------- | ---------------------------------------------------------------------- |
| Caso de uso     | RF02 - Efetuar Cadastro de Usuário.                                    |
| Resumo          | Cria uma nova conta no sistema para que possa executar o ato de compra |
| Ator principal  | Usuário - Cria uma conta no sistema                                    |
| Ator secundário | -                                                                      |
| Pré-condição    | O(s) ator(es) não deve(m) ter conta criada no sistema.                 |
| Pós-condição    | -                                                                      |

#### Fluxo principal

| Passos  | Descrição                                                                                                       |
| ------- | --------------------------------------------------------------------------------------------------------------- |
| Passo 1 | O ator ao desejar finalizar uma compra o sistema o mesmo apresenta ao ator a tela de Login;                     |
| Passo 2 | Nesse momento é exibido um botão com título “Não tenho uma conta” que redireciona o usuário à tela de Cadastro; |
| Passo 3 | A aplicação dispõe ao autor um formulário para ser preenchido com seus respectivos dados;                       |
| Passo 4 | Ao preencher os campos o autor confirma os dados no botão de “criar conta”;                                     |
| Passo 5 | Em seguida o ator passa para um processo de verificação a fim de confirmar sua conta recém criada.              |

#### Campos do formulário.

| Campo    | Obrigatório? | Editável? | Formato      |
| -------- | ------------ | --------- | ------------ |
| Nome     | Sim          | Sim       | Texto        |
| Email    | Sim          | Sim       | Texto        |
| Senha    | Sim          | Sim       | Texto        |
| CPF      | Sim          | Sim       | Alfanumérico |
| Endereço | Não          | Sim       | Texto        |
| Contato  | Sim          | Sim       | Numérico     |
| Gênero   | Sim          | Sim       | Checkbox     |

#### Opções de usuário

| Opção       | Descrição                 | Atalho |
| ----------- | ------------------------- | ------ |
| Criar conta | Confirmar Dados inseridos |

#### Relatório de usuário

| Campo                    | Descrição                                                             | Formato |
| ------------------------ | --------------------------------------------------------------------- | ------- |
| Conta Criada com sucesso | Isso confirma e garante todo êxito na operação de cadastro do usuário | Texto   |

#### Fluxo alternativo

| Passos    | Descrição                                                                                                      |
| --------- | -------------------------------------------------------------------------------------------------------------- |
| Passo 1.1 | O ator ja tem uma conta.                                                                                       |
| Passo 1.2 | Sistema exibe um botão "Fazer login" na tela de Cadastro, e assim o ator é redirecionado para a tela de Login. |
| Passo 2.1 | Funcionário informa que não há disponibilidade naquela Data.                                                   |
| Passo 2.2 | Sistema exibe horários disponiveis para o dia utíl seguinte.                                                   |

# User story

**Persona um, usuário comum.**

| Epic                                                                                                                                                        | User Story                                                                                                                                      | Critério de aceitação                                           |
| ----------------------------------------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------- |
| “Como **um usuário novo do sistema** eu quero **poder criar uma nova conta com os meus dados** para que **eu possa ter uma nova conta e efetuar compras**.” | “Como **um usuário novo do sistema** eu desejo **ter meus dados guardados** para que **eu possa ter uma identidade e usufruir da plataforma**.” | Certificar que o usuário preencha todos os campos do formulário |

## Protótipo

<img src="https://uploaddeimagens.com.br/images/004/042/820/full/Desktop_-_1.png?1664482903" alt="drawing" width="600"/>

## **RF03 - Visualizar Catálogo**

#### Autor: @ianasampaio - Antonia Iana Sampaio da Silva.

---

### Revisor: weltonSantana - Welton Santana de Andrade Júnior

| Item            | Descrição                                                                           |
| --------------- | ----------------------------------------------------------------------------------- |
| Caso de uso     | RF03 - Visualizar o catálogo                                                        |
| Resumo          | Visualiza o catálogo para que possa encontrar algum produto que desperte interesse; |
| Ator principal  | Usuário - vizualiza o catálogo                                                      |
| Ator secundário | -                                                                                   |
| Pré-condição    | O(s) ator(es) deve ter acessado o sistema de vendas (site)                          |
| Pós-condição    | -                                                                                   |

#### Fluxo principal

| Passos  | Descrição                                           |
| ------- | --------------------------------------------------- |
| Passo 1 | O ator acessa o sistema de vendas (site)            |
| Passo 2 | O sistema inicia a tela de apresentação de produtos |

#### Campos da aba de visualizar produtos

| Campo | Obrigatório | Editável | Formato |
| ----- | ----------- | -------- | ------- |
| --    | --          | --       | --      |

#### Opções de usuário

| Opção | Descrição | Atalho |
| ----- | --------- | ------ |
| --    | --        | --     |

#### Relatório de usuário

| Campo | Descrição | Formato |
| ----- | --------- | ------- |
| --    | --        | --      |

#### Fluxo alternativo

| Passos | Descrição |
| ------ | --------- |
| --     | --        |

# User story

**Persona um, usuário comum.**

| Epic                                                                                                                                    | User Story                                                                                                                                                              | Critério de aceitação                                         |
| --------------------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------- |
| “Como **um cliente online** eu quero **visualizar o catálogo de produtos** para que **eu possa ser encorajado a comprar algum deles.**” | Enquanto **um cliente online** eu preciso ser capaz de **visualizar o catálogo de produtos** para que **posteriormente eu possa ser encorajado a comprar algum deles.** | Certifique-se de que o usuário é capaz de **acessar o site**. |

![imagem](https://uploaddeimagens.com.br/images/004/042/554/full/prop.png?1664476837)

## **RF04 - Visualizar produto**

#### Autor: @JoaoGabrielh - João Gabriel Alves de Souza.

---

#### Revisor : @JPeeMP - João Pedro de Melo Pessoa.

| Item            | Descrição                                                                                                                                                                                                                                                                                                                              |
| --------------- | -------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- |
| Caso de uso     | Visualizar produto.                                                                                                                                                                                                                                                                                                                    |
| Resumo          | É esperado que ao ver um produto no catálogo caso o usuário clique seja aberta a página do produto em específico, mostrando preço, descrição do produto, botão de compra, de adicionar ao carrinho, de adicionar à lista de desejos, foto do produto, título do produto, avaliação dele, se ainda tem estoque e comentários sobre ele. |
| Ator principal  | Usuário utilizador da plataforma.                                                                                                                                                                                                                                                                                                      |
| Ator secundário | Não possui.                                                                                                                                                                                                                                                                                                                            |
| Pré-condição    | É necessário que o usuário esteja utilizando a plataforma, conectado-á internet.                                                                                                                                                                                                                                                       |
| Pós-condição    | É necessário que para adicionar o produto ao carrinho, à lista de desejos, avaliar ou comprar o produto o usuário esteja na sua própria conta.                                                                                                                                                                                         |

#### Fluxo principal

| Passos  | Descrição                             |
| ------- | ------------------------------------- |
| Passo 1 | Clicar em cima da imagem do produto.  |
| Passo 2 | Esperar a página do produto carregar. |

#### Campos da aba de visualizar produtos

| Campo           | Obrigatório | Editável | Formato |
| --------------- | ----------- | -------- | ------- |
| Avaliar produto | Não         | Sim      | Texto   |

#### Opções de usuário

| Opção                        | Descrição                                                                                                   | Atalho |
| ---------------------------- | ----------------------------------------------------------------------------------------------------------- | ------ |
| Acessar o produto            | Ao clicar no produto mostrado no catálogo ele deve ser redirecionado para a página do produto em específico |
| Comprar o produto            | Ao clicar no botão de compra ele deve ser redirecionado para a aba de efetuar a compra do produto           |
| Adicionar ao carrinho        | Ao clicar no botão de adicionar ao carrinho o item deve ser adicionado à ele                                |
| Adicionar à lista de desejos | Ao clicar no botão de adicionar à lista de desejos o item deve ser adicionado a essa lista                  |

#### Relatório de usuário

| Campo | Descrição | Formato |
| ----- | --------- | ------- |

#### Fluxo alternativo

| Passos      | Descrição                                                                                                                                                           |
| ----------- | ------------------------------------------------------------------------------------------------------------------------------------------------------------------- |
| Passo 1.1   | Caso o usuário não clique, deve-se ter a opção de selecionar os produtos utilizando as setas do teclado e poder visualizar ele com a tecla de enter para confirmar. |
| Passo 2.1.1 | Caso ocorra erro ao carregar a página, ela deve se auto recarregar a cada 25 segundos para tentar visualizar o produto.                                             |
| Passo 2.1.2 | Caso o produto não exista mais porque o vendedor o removeu, o usuário deve ser redirecionado para o catálogo de itens anterior.                                     |

# User story

Agora iremos escrever uma história de usuário para uma persona.

**Persona um, usuário comum.**

| Epic                                                                                                    | User Story                                                                                                                 | Critério de aceitação                                                                                                                        |
| ------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------------------------------------------- |
| Eu enquanto "usuário comum" quero "visualizar produtos específicos" para "saber mais coisas sobre ele". | Enquanto "usuário comum" eu preciso ser capaz de visualizar um produto em específico para saber mais informações sobre ele | Certifique-se que o usuário é capaz de **fazer login na própria conta, buscar uma série de produtos e visualizar um produto em específico.** |

![rf04](https://github.com/JoaoGabrielh/requisitos/blob/main/prototipos%20visualizar%20produto.png)

## **RF05 - Buscar um produto**

#### Autor: @JulioNolasco - Julio Cezar Nolasco.

---

### Revisor: @Izann-Brum - Izann Rogério de Brum.

| Item            | Descrição                          |
| --------------- | ---------------------------------- |
| Caso de uso     | RF05 - Buscar Produto              |
| Resumo          | Buscar por produtos                |
| Ator principal  | Cliente                            |
| Ator secundário | Sistema                            |
| Pré-condição    | Ser um produto que a loja oferece. |
| Pós-condição    |

#### Fluxo principal

| Passos  | Descrição                                                                        |
| ------- | -------------------------------------------------------------------------------- |
| Passo 1 | O ator identifica a barra de busca e efetua a ação de busca do produto.          |
| Passo 2 | O sistema apresenta uma tela com os respectivos produtos semelhantes ao buscado. |

#### Campos da aba de buscar produtos

| Campo          | Obrigatório | Editável | Formato |
| -------------- | ----------- | -------- | ------- |
| Barra de busca | Não         | Sim      | Texto   |

#### Opções de usuário

| Opção             | Descrição                                                                                            | Atalho |
| ----------------- | ---------------------------------------------------------------------------------------------------- | ------ |
| Buscar um produto | Ao clicar no botão de busca, o sistema apresenta uma tela com algumas opções sobre o produto buscado | ------ |

#### Relatório de usuário

| Campo | Descrição | Formato |
| ----- | --------- | ------- |

#### Fluxo alternativo

| Passos    | Descrição                                                                                |
| --------- | ---------------------------------------------------------------------------------------- |
| Passo 1.1 | O ator realiza a busca do produto .                                                      |
| Passo 1.2 | O sistema apresenta uma tela com o aviso de que não encontrou nenhum produto semelhante. |

# User story

**Persona um, usuário comum.**

| Epic                                                                                                        | User Story                                                                                      | Critério de aceitação                                 |
| ----------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------- | ----------------------------------------------------- |
| Eu enquanto "usuário comum" quero "efetuar uma busca por um produto específico" para "uma possível compra". | Enquanto "usuário comum" eu preciso ser capaz de "buscar por um produto estando logado ou não". | Certifique-se que o usuário é capaz de acessar o site |

## Protótipo de tela:

<img src="https://imageup.me/images/c558b1bd-2c36-4841-a8aa-8ad6a6f2c2d0.jpeg" alt="drawing" width="600"/>

## **RF06 - Efetuar Compra**

#### Autor: @weltonSantana - Welton Santana de Andrade Júnior.

---

### Revisor: @ianasampaio - Antonia Iana Sampaio da Silva

| Item            | Descrição                                                                                     |
| --------------- | --------------------------------------------------------------------------------------------- |
| Caso de uso     | Efetuar Compra.                                                                               |
| Resumo          | Permitir que o Usuário faça um pedido de um produto desejado do catálogo e finalize a compra. |
| Ator principal  | Usuário utilizador da plataforma.                                                             |
| Ator secundário | Não possui.                                                                                   |
| Pré-condição    | É necessário que o usuário efetue o login na plataforma.                                      |
| Pós-condição    | Não se aplica.                                                                                |

#### Fluxo principal

| Passos  | Descrição                                                                                 |
| ------- | ----------------------------------------------------------------------------------------- |
| Passo 1 | O sistema disponibiliza as opções de pagamento.                                           |
| Passo 2 | O cliente escolhe uma das opções.                                                         |
| Passo 3 | O sistema disponibiliza um formulário de inserção dos dados do cartão de crédito.         |
| Passo 4 | O cliente preenche o formulário e clica no botão de pagar compra.                         |
| Passo 5 | O sistema direciona o cliente para uma tela com os dados do cliente e detalhes do pedido. |
| Passo 6 | O cliente confirma a compra clicando em "finalizar compra".                               |
| Passo 7 | O sistema computa as informações do pagamento e realiza sua validação.                    |
| Passo 8 | O sistema retorna informando sucesso do pagamento.                                        |

#### Campos da aba de Efetuar compra

| Campo            | Obrigatorio | Editável | Formato |
| ---------------- | ----------- | -------- | ------- |
| Finalizar Compra | Não         | Não      | Texto   |

#### Opções de usuário

| Campo               | Descrição                                                                                     | Atalho |
| ------------------- | --------------------------------------------------------------------------------------------- | ------ |
| Formas de pagamento | Ao clicar no botão de formas de pagamento, o usuário escolhe a forma como será pago o produto | --     |

#### Relatório de usuário

| Campo | Descrição | Formato |
| ----- | --------- | ------- |
| --    | --        | --      |

#### Fluxo alternativo

| Passos  | Descrição                                                                                 |
| ------- | ----------------------------------------------------------------------------------------- |
| Passo 1 | O sistema disponibiliza as opções de pagamento.                                           |
| Passo 2 | O cliente escolhe a opção de pix ou boleto.                                               |
| Passo 3 | O cliente clica no botão "pagar conta".                                                   |
| Passo 4 | O sistema direciona o cliente para uma tela com os dados do cliente e detalhes do pedido. |
| Passo 5 | O cliente confirma a compra clicando em "finalizar compra".                               |
| Passo 6 | O sistema retorna com o codigo do pix ou boleto bancário.                                 |

# User story

**Persona um, usuário comum.**

| Epic                                                                         | User Story                                                                                                                                                                   | Critério de aceitação                                                                                                        |
| ---------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------------------------- |
| Como "usuário comum" eu quero "efetuar uma compra" para "receber o produto". | Como "usuário comum" eu quero conseguir finalizar a compra do meu pedido atráves da forma de pagamento que eu deseje para que eu possa receber o produto e usufruir do mesmo | Certifique-se que o usuário consegue **fazer login na própria conta, escolher uma forma de pagamento e finalizar a compra.** |

![imagem](https://uploaddeimagens.com.br/images/004/042/567/full/prop2.png?1664477011)

## **RF07 - Avaliar Produto.**

#### Autor: @Peraefe - Fernanda Menezes Plessim de Melo.

---

### Revisor: @JoaoGabrielh - João Gabriel Alves de Souza.

| Item           | Descrição                                                                                             |
| -------------- | ----------------------------------------------------------------------------------------------------- |
| Caso de uso    | RF07                                                                                                  |
| Resumo         | Avaliar um produto comprado no site.                                                                  |
| Ator principal | Usuário                                                                                               |
| Pré-condição   | O ator precisa estar conectado à internet,logado na conta pessoal do mesmo e ter comprado um produto. |

#### Fluxo principal

| Passos  | Descrição                                                                                                          |
| ------- | ------------------------------------------------------------------------------------------------------------------ |
| Passo 1 | O ator precisa fazer login na própria conta para automaticamente ser enviado para tela inicial do sistema;         |
| Passo 2 | O ator deve pesquisar o produto comprado a ser avaliado;                                                           |
| Passo 3 | O ator deve ir para a página de visualização do produto;                                                           |
| Passo 4 | O ator deve então selecionar “Avaliar Produto” na seção Avaliações de Usuários;                                    |
| Passo 5 | O ator deve selecionar a nota desejada para o produto nas estrelas posicionadas abaixo da imagem do produto;       |
| Passo 6 | O ator deve confirmar a ação clicando no botão “Enviar”;                                                           |
| Passo 7 | Logo o sistema irá retornar para a página do produto porém agora atualizado e mostrando a nova avaliação incluída; |

#### Campos da aba de visualizar produtos

| Campo                | Obrigatório | Editável | Formato |
| -------------------- | ----------- | -------- | ------- |
| Título do comentário | Não         | Sim      | Texto   |
| Comentário           | Não         | Sim      | Texto   |

#### Opções de usuário

| Opção           | Descrição                                                                        |
| --------------- | -------------------------------------------------------------------------------- |
| Avaliar Produto | Permite o ator escrever um breve comentário e classificar o produto com estrelas |
| Enviar          | Confirmação antes de enviar a avaliação                                          |

#### Relatório de usuário

| Campo | Descrição | Formato |
| ----- | --------- | ------- |

#### Fluxo alternativo

| Fluxo                                         | Passos    | Descrição                                                                                                                                                                                                                  |
| --------------------------------------------- | --------- | -------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- |
| FA01 - Se o ator não tiver comprado o produto | Passo 1.1 | O sistema exibirá uma mensagem avisando que não é possível avaliar um produto não comprado;                                                                                                                                |
| FA02 - O ator não está logado                 | Passo 2.1 | O sistema exibirá a tela do produto, porém sem opção de avaliar produto. No canto superior esquerdo o sistema exibirá um botão de “Login” onde ao selecioná-lo o autor será redirecionado para página de login do sistema; |

# User story

** Eu como ator, gostaria de avaliar o produto que comprei, para assim poder deixar minha opinião sobre o produto para outros usuários; **

| Epic | User Story | Critério de aceitação |
| ---- | ---------- | --------------------- |

![image](https://user-images.githubusercontent.com/91492418/193123137-4ea22f2b-4b63-4737-9e36-00f630191ae9.png)

## **RF08 - Solicitar Chamado/Suporte**

#### Autor: @Izann-Brum - Izann Rogério Gerlades de Brum.

---

### Revisor: @JulioNolasco - Julio Cezar Nolasco.

| Item            | Descrição                                                                                     |
| --------------- | --------------------------------------------------------------------------------------------- |
| Caso de uso     | Solicitar Chamado/Suporte.                                                                    |
| Resumo          | Este caso de uso tem a finalidade de auxiliar usuários que necessitam de ajuda com o sistema. |
| Ator principal  | Usuário utilizador da plataforma e novos usuários.                                            |
| Ator secundário | Atendente.                                                                                    |
| Pré-condição    | É necessário que o usuário esteja utilizando a plataforma, conectado-á internet.              |
| Pós-condição    | É necessário que, para retornar ao chat do SAC, o usuário tenha sua própria conta.            |

#### Fluxo principal

| Passos  | Descrição                                                                             |
| ------- | ------------------------------------------------------------------------------------- |
| Passo 1 | Cliente entra em contato com o SAC.                                                   |
| Passo 2 | Cliente informa o assunto, seu nome, se pessoa física ou jurídica, e-mail e telefone. |
| Passo 3 | O sistema registra os dados informados pelo cliente.                                  |
| Passo 4 | O cliente começa um chat com um atendente.                                            |

#### Fluxo alternativo

| Passos    | Descrição                                                                                                     |
| --------- | ------------------------------------------------------------------------------------------------------------- |
| Passo 1   | Cliente não preenche os campos corretamente.                                                                  |
| Passo 1.1 | Sistema avisa sobre os campos obrigatórios.                                                                   |
| Passo 2   | Cliente não verifica o checkbox (reCAPTCHA).                                                                  |
| Passo 2.1 | Sistema solicita a verificação do checkbox (reCAPTCHA).                                                       |
| Passo 3   | Cliente entra em contato em horário fora do limite.                                                           |
| Passo 3.1 | Sistema mostra uma mensagem de aviso sobre os horários de atendimento, e possíveis alternativas para contato. |

**Campos do Formulário:**
Campo | Obrigatório? | Editável? | Formato
--------- | ------------ | --------- | -------
Assunto | Sim | Sim | Texto
Nome | Sim | Sim | Texto
E-mail | sim | Sim | Texto
Telefone | Sim | Sim | Numérico
reCAPTCHA | Sim | Não | Checkbox

#### Opções de usuário

| Opção              | Descrição                                                                | Atalho |
| ------------------ | ------------------------------------------------------------------------ | ------ |
| Acessar o suporte. | Ao clicar nessa aba o usuário poderá entrar em contato com um atendente. |

# User story

Agora iremos escrever uma história de usuário para uma persona.

**Persona um, usuário comum.**

| Epic                                                                                          | User Story                                                                                                                                 | Critério de aceitação                                                    |
| --------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------ |
| Como um usuário comum, eu preciso solicitar um suporte para resolver um problema e/ou dúvida. | Enquanto "usuário comum" preciso ter minhas informções salvas na plataforma através de uma conta de usuário a fim de ter maior praticidade | Certifique-se que o usuário é capaz de **fazer login na própria conta.** |

![image](https://i.imgur.com/kGgbnae.png)
![image](https://i.imgur.com/0gSpvxD.png)
![image](https://i.imgur.com/HeEFkW2.png)

## **RF09 - Adicionar Produto ao Carrinho**

#### Autor: @AfonsoDglan - Afonso Dglan.

---

### Revisor: @edjunior0 - Edson Almeida Silva Júnior

| Item            | Descrição                                                                      |
| --------------- | ------------------------------------------------------------------------------ |
| Caso de uso     | RF09 - Adicionar Produto ao Carrinho                                           |
| Resumo          | adicionar um item que o autor tem interesse em comprar ao carrinho de compras. |
| Ator principal  | Usuário - adicionar item ao carinho de compras;                                |
| Ator secundário |
| Pré-condição    | O(s) ator(es) deve estar na tela de visualização do produto                    |
| Pós-condição    |

#### Fluxo principal

| Passos  | Descrição                                                          |
| ------- | ------------------------------------------------------------------ |
| Passo 1 | Entrar na página principal ver o catalogo de produtos              |
| Passo 2 | Filtrar os produtos que tem interesse                              |
| Passo 3 | Entar na página de detalhe do produto que escolheu                 |
| Passo 4 | clicar no botão adicionar item ao carinho                          |
| Passo 5 | ser redirecionado para página com o carinho com todo seus produtos |

#### Campos

| Campo | Obrigatório | Editável | Formato |
| ----- | ----------- | -------- | ------- |

#### Opções de usuário

| Opção | Descrição | Atalho |
| ----- | --------- | ------ |

#### Relatório de usuário

| Campo                 | Descrição                          | Formato |
| --------------------- | ---------------------------------- | ------- |
| adicionar ao carrinho | adicionar item/produto ao carrinho |

#### Fluxo alternativo

| Passos | Descrição |
| ------ | --------- |
| --     | --        |

# User story

**Persona um, usuário já na tela de visualização de um produto.**

| Epic                                                                                                                                                                                                                | User Story                                                                                                                                                                                                                    | Critério de aceitação                                                                                                                                             |
| ------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------------------------------------------- |
| Como **um usuário já na tela de visualização de um produto** eu quero **poder adicionar um produto que eu tenho interesse ao carinho de compras** para que **eu possa finalizar a compra com os items do carinho.** | Enquanto **usuário já na tela de visualização de um produto** eu preciso ser capaz de **adicionar um produto que eu tenho interesse ao carinho de compras** para **que eu possa finalizar a compra com os items do carinho**. | Certifique-se de que o usuário **fazer login na própria conta, buscar uma série de produtos e adicionar o produto que preferir ao carinho e finalizar a compra**. |

## **Caso de uso RF10 - Excluir item do carrinho**

#### Autor: @LarissaHirai - Larissa Mitie C. Hirai.

---

### Revisor: @Peraefe - Fernanda Menezes Plessim de Melo.

| Item           | Descrição                                                                                                     |
| -------------- | ------------------------------------------------------------------------------------------------------------- |
| Caso de uso    | Remover item do carrinho                                                                                      |
| Resumo         | Excluir um item que o autor não tem mais interesse do carrinho de compras.                                    |
| Ator principal | Usuário que possui um cadastro                                                                                |
| Pré-condição   | O ator precisa ter acesso a internet, ter efetuado o login na conta pessoal e o carrinho não pode estar vazio |
| Pós-condição   | Remoção do produto do carrinho                                                                                |

#### Fluxo principal

| Passos  | Descrição                                                                                                                                                                       |
| ------- | ------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- |
| Passo 1 | O ator precisa efetuar login na própria conta para automaticamente ser enviado para tela inicial do sistema                                                                     |
| Passo 2 | No canto superior direito o ator vai encontrar um ícone de carrinho que ao selecioná-lo o ator é enviado para a tela do carrinho                                                |
| Passo 3 | O autor deve então localizar o item que deseja excluir                                                                                                                          |
| Passo 4 | O ator deve então selecionar o ícone de lixeira que vai estar localizado em um espaço abaixo da quantidade                                                                      |
| Passo 5 | Após o ator efetuar todos os procedimentos, ele deve confirmar a exclusão do produto do carrinho clicando no botão “Sim”                                                        |
| Passo 6 | Logo o sistema irá retornar para a página do carrinho porém agora atualizado e mostrando os itens existentes no carrinho antes de efetuar a exclusão, porém sem o item excluído |

#### Opções de usuário

| Opção              | Descrição                           |
| ------------------ | ----------------------------------- |
| Excluir            | Exclui o item do carrinho           |
| Confirmar exclusão | Confirmação antes de excluir o item |

#### Fluxo alternativo

##### FA01 - Carrinho vazio

| Passos    | Descrição                                                         |
| --------- | ----------------------------------------------------------------- |
| Passo 1.1 | O sistema exibirá uma mensagem avisando que o carrinho está vazio |

##### FA02 - O ator não está logado

| Passos    | Descrição                                                                                                                                       |
| --------- | ----------------------------------------------------------------------------------------------------------------------------------------------- |
| Passo 2.1 | O sistema exibirá a tela do carrinho, porém sem itens                                                                                           |
| Passo 2.2 | No canto superior esquerdo o sistema exibirá um botão de “Login” onde ao selecioná-lo o ator será redirecionado para página de login do sistema |

# User story

| Epic                                                                                                                                                         | User Story                                                                                                                                                                | Critério de aceitação                                                                   |
| ------------------------------------------------------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------- |
| Eu como ator, gostaria de excluir um item que eu não desejo mais do meu carrinho, para assim poder obter apenas os item que eu desejo e gostaria de comprar. | Enquanto ator na página do meu carrinho preciso ser capaz de excluir itens que não desejo mais do meu carrinho para manter apenas os itens que tenho desejo em adiquirir. | Certificar que o ator efetue o login na pópria conta e que o carrinho não esteja vazio. |

# Protótipo

![image](https://user-images.githubusercontent.com/45723261/193121755-8ca3f59e-d461-4ede-9817-6fc52060503d.png)

## **RF11 - Visualizar Carrinho**

#### Autor: @fernandokozak - Luiz Fernando Kozak.

---

### Revisor: @pixies0 - João Pedro Silva Cunha

Os requisitos funcionais.

| Item            | Descrição                    |
| --------------- | ---------------------------- |
| Caso de uso     | RF11 - Visualizar Carrinho   |
| Resumo          | Verificar produtos           |
| Ator principal  | Cliente                      |
| Ator secundário | Sistema                      |
| Pré-condição    | Tem que ter algo no carrinho |
| Pós-condição    |

#### Fluxo principal

| Passos  | Descrição                                              |
| ------- | ------------------------------------------------------ |
| Passo 1 | Cliente entra na página deferida a carrinho            |
| Passo 2 | Cliente informa endereço para a realização de entrega. |
| Passo 3 | Opção de desejo a garantia estendida                   |
| Passo 4 | Opções de frete                                        |
| Passo 5 | Opção de deseconto                                     |

#### Campos da aba de visualizar produtos

| Campo            | Obrigatório                | Editável                       | Formato      |
| ---------------- | -------------------------- | ------------------------------ | ------------ |
| Tela de carrinho | Adicionar algo ao carrinho | cep,endereço e remover produto | Tela e Texto |

#### Opções de usuário

| Opção              | Descrição                                                                      | Atalho |
| ------------------ | ------------------------------------------------------------------------------ | ------ |
| Acessar o carrinho | Ao clicar no carrinho ele dever se relacionado a página de carrinho            |
| Compra o produto   | Ao clicar no botão de realizar compra vai para a página de efetuar o pagamento |

#### Relatório de usuário

| Campo | Descrição | Formato |
| ----- | --------- | ------- |

#### Fluxo alternativo

| Passos    | Descrição                                                                                                |
| --------- | -------------------------------------------------------------------------------------------------------- |
| Passo 1.1 | Caso o usuário não seleciona nenhum produto na loja, ele acaba visualizando a tela de carrinho em branco |
| Passo 1.2 | Caso o passo 1.1 seja realizado o usuário e deve retorna a página de home para selecionar algum produto  |

# User story

**Persona um, usuário comum.**

| Epic                                                                                       | User Story                                                                                                              | Critério de aceitação                                                                                                   |
| ------------------------------------------------------------------------------------------ | ----------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------- |
| Eu enquanto "usuário comum" quero "visualizar carrinho" para "ver como está minha compra". | Enquanto "usuário comum" eu preciso ser capaz de "visualizar o carrinho para ter a certeza do que vou estar comprando". | Vai certificar o usuário ce está com o login na própria conta, ira visualizar um produto em específico que selecionado. |

## Protótipo de tela:

<img src="https://uploaddeimagens.com.br/images/004/035/650/full/Visualizar_Carrinho.png?1664065784" alt="drawing" width="600"/>

## **RF12 - Adicionar à lista de Desejos**

#### Autor: @edjunior - Edson Almeida Silva Júnior.

---

### Revisor: @AfonsoDglan - Afonso Dglan

| Item            | Descrição                                                                                    |
| --------------- | -------------------------------------------------------------------------------------------- |
| Caso de uso     | RF12 - Adicionar item/produto à lista de desejos                                             |
| Resumo          | Adiciona um produto/item de seu interesse à sua lista de desejos                             |
| Ator principal  | Algum usuário - Adiciona um produto/item de interesse na lista de desejos                    |
| Ator secundário | -                                                                                            |
| Pré-condição    | O(s) ator(es) já deve ter uma conta, estar logado e estar na tela de visualização do produto |
| Pós-condição    | O item deve ser salvo na lista de desejos do usuário                                         |

#### Fluxo principal

| Passos  | Descrição                                                                                                                  |
| ------- | -------------------------------------------------------------------------------------------------------------------------- |
| Passo 1 | O ator, já na tela de vizualização do produto, clica no botão para adicionar o produto à lista de desejos                  |
| Passo 2 | Ao pressionar o botão, o produto é adicionado à lista de desejos do usuário e o botão indica que o produto está adicionado |

#### Campos da aba de visualizar produtos

| Campo | Obrigatório | Editável | Formato |
| ----- | ----------- | -------- | ------- |
| --    | --          | --       | --      |

#### Opções de usuário

| Opção                                     | Descrição                                   | Atalho |
| ----------------------------------------- | ------------------------------------------- | ------ |
| Adicionar item/produto à lista de desejos | Adiciona o item/produto na lista de desejos | --     |

#### Relatório de usuário

| Campo | Descrição | Formato |
| ----- | --------- | ------- |
| --    | --        | --      |

#### Fluxo alternativo

| Passos | Descrição |
| ------ | --------- |
| --     | --        |

# User story

**Persona um, usuário já na tela de visualização de um produto.**

| Epic                                                                                                                                                                                                                                               | User Story                                                                                                                                                                                                                                               | Critério de aceitação                                                                                                                                               |
| -------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------------------------------------------- |
| Como **um usuário já na tela de visualização de um produto** eu quero **poder adicionar um produto que eu tenho interesse à minha lista de desejos** para que **posteriormente eu possa ver somente os itens de meu insteresse em um único local** | Enquanto **usuário já na tela de visualização de um produto** eu preciso ser capaz de **adicionar um produto que eu tenho interesse à minha lista de desejos** para **posteriormente eu possa ver somente os itens de meu interesse em um único local**. | Certifique-se de que o usuário é capaz de **fazer login na própria conta, buscar uma série de produtos e adicionar o produto que preferir à sua lista de desejos**. |

![imagem](https://uploaddeimagens.com.br/images/004/042/575/full/prop3.png?1664477142)

## **RF13 - Remover item da lista de desejo.**

#### Autor: @Lucka10 - Lucas Evangelista Freire.

---

### Revisor: @LarissaHirai - Larissa Mitie C. Hirai.

## Caso de Uso Expandido

| Item           | Descrição                                                                                   |
| -------------- | ------------------------------------------------------------------------------------------- |
| Caso de uso    | Remover item da lista de desejo.                                                            |
| Resumo         | Opção de remover um produto contido na lista de desejos.                                    |
| Ator principal | Usuário utilizador da plataforma.                                                           |
| Pré-condição   | Acesso a internet, ator logado em sua conta e o produto a ser removido já pertence a lista. |
| Pós-condição   | Remoção do produto selecionado da lista de desejo.                                          |

**Fluxo principal**:<br>

| Passo     | Descrição                                                                                                                                                 |
| --------- | --------------------------------------------------------------------------------------------------------------------------------------------------------- |
| Passo 1   | Ator realiza o login em sua conta.                                                                                                                        |
| Passo 2.1 | Ator clica na pagina do item.                                                                                                                             |
| Passo 2.2 | Se o produto ja estiver na sua lista de desejo, aparecerá botão Remover da lista de desejo. O ator poderá clicar nele e o item será removido.             |
| Passo 2.3 | Retorna a pagina do item, com o botão agora em estado de Adicinar a lista de desejos.                                                                     |
| Passo 3.1 | Ator clica pagina da lista de desejos.                                                                                                                    |
| Passo 3.2 | Se a lista de desejos não estiver vazia, os itens contidos nela terão a opção de remove-los da lista. O ator clica no botão e o item é removido da lista. |
| Passo 3.3 | retorna para pagina da lista agora sem o item removido.                                                                                                   |

**Fluxo Alternativo**:<br>

FA01 - Produto removido do catalogo

| Passo | Descrição                                 |
| ----- | ----------------------------------------- |
| 1     | item foi removido do catalogo.            |
| 2     | O item será removido da lista de desejos. |

FA02 - Lista de desejos vazia

| Passo | Descrição                      |
| ----- | ------------------------------ |
| 1     | Lista de desejos está vazia.   |
| 2     | Não há items para se removido. |

**Opções do Usuário:**

| Opção           | Descrição                            |
| --------------- | ------------------------------------ |
| Remover produto | Remove o produto da lista de desejos |

## User Stories

| Epic                                                                                                                                               | User Story                                                                                                                                                                                    | Critério de aceitação                                                                            |
| -------------------------------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------ |
| Eu como ator, gostaria de remover um item da minha lista de desejo, para assim ter acesso rápido apenas aos itens que considero comprar no futuro. | Enquanto ator na página do produto ou da lista de desejos, preciso ser capaz de remover itens que não tenho mais interesse, para manter apenas os itens que considero comprar posteriormente. | Certificar que o ator efetue o login na própria conta e que a lista de desejos não esteja vazia. |

### Protótipo

![proto](https://raw.githubusercontent.com/Lucka10/hello-world/master/excluirdesej.png)

https://www.figma.com/file/hZS3FT2XP2Q4Pib4LaDEHL/Atividade-5%3A-Requisitos---Edson?node-id=0%3A1

=======
[Link para o protótipo](https://www.figma.com/file/hZS3FT2XP2Q4Pib4LaDEHL/Atividade-5%3A-Requisitos---Edson?node-id=0%3A1)
=======

## **RF23 - Receber Newsletter.**

#### Autor: @Lucka10 - Lucas Evangelista Freire.

---

### Revisor:@LarissaHirai - Larissa Mitie C. Hirai

## Caso de Uso Expandido

| Item           | Descrição                                                                                   |
| -------------- | ------------------------------------------------------------------------------------------- |
| Caso de uso    | Receber Newsletter |
| Resumo         | Opção de se inscrever em uma newsletter, podendo receber no email cadastrado, noticias sobre os produtos e eventos que estão accontecendo na loja. |
| Ator principal | Usuário utilizador da plataforma.  |
| Pré-condição   | Acesso a internet, uma conta de email, ator logado em sua conta e inscrito na newsletter.   |
| Pós-condição   | O recebimento periodico de um email com informações pertinentes a operações da loja.   |

**Fluxo principal**:<br>

| Passo     | Descrição                                                                                                                                                 |
| --------- | --------------------------------------------------------------------------------------------------------------------------------------------------------- |
| Passo 1 | Ator clica em cadastrar uma conta nova. |
| Passo 2 | Na pagina de cadastramento, o Ator poderá marca a checkbox de "Desejo receber Newsletter"  |
| Passo 3 | Ao confirmar o cadastramento, com a checkbox marcada, o autor estará apto a receber noticias no email fornecido no cadastro. |
| Passo 4.| O processo de cadastro é completo e o ator é direcionado a pagina Home.

**Opções do Usuário:**

| Opção           | Descrição                            |
| --------------- | ------------------------------------ |
| Deseja receber newsletter | Adiciona o email do ator na lista da newsletter |
| Deseja cancelar inscrição da newsletter | Remove o email do ator na lista da newsletter |

**Fluxo Alternativo**:<br>

FA01 - O ator deseja se inscrever na newsletter, mas não optou durante o cadastro.

| Passo   | Descrição                                 |
| -----   | ----------------------------------------- |
| Passo 1 | O ator não optou durante o cadastro.      |
| Passo 2 | Ator deverá ir na pagina de inscrição da newsletter |
| Passo 3 | Ator ira clicar na checkbox de "desejo receber Newsletter" |
| Passo 4 | Com a checkbox marcada, clicar em confirmar |
| Passo 5 | O email do ator será adicionado a lista de emails. |
| Passo 6 | A pagina será atualizada, e será retornado uma mensagem "Bem vindo a newsletter da kabum". |


FA02  -  Ator deseja cancelar sua inscrição da newsletter.
| Passo   | Descrição                                 |
| -----   | ----------------------------------------- |
| Passo 1 | O ator deseja cancelar sua inscrição da newsletter  |
| Passo 2 | Ator deverá ir na pagina de inscrição da newsletter |
| Passo 3 | Ator irá clicar na opção de "desejo cancelar minha inscrição da newsletter" |
| Passo 4 | Com a checkbox marcada, clicar em confirmar |
| Passo 5 | O email do ator será removido a lista de emails. |
| Passo 6 | A pagina será atualizada, e será retornado uma mensagem "Sua inscrição foi cancelada". |

## User Stories

| Epic                                                                                                                                               | User Story                                                                                                                                                                                    | Critério de aceitação                                                                            |
| -------------------------------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------ |
| Eu como ator, gostario de poder me inscrever na newsletter, para receber noticias e destaques de produtos na loja. | Enquanto ator interessado na loja e seus produtos, preciso ser capaz de me fazer apto a receber email com informações, para me manter informado acerca daquilo que ocorre na loja. | Certificar que o ator esteja inscrito na newsletter e que possa ser desligado quando quiser. |

### Protótipo

![imagem](https://uploaddeimagens.com.br/images/004/051/062/original/cadcomnews.png?1665012699)
![imagem](https://uploaddeimagens.com.br/images/004/051/058/original/teladanews.png?1665012376)



