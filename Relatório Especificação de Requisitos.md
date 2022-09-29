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

- [x] RF02 - Efetuar Cadastro de Usuário. 2.1 (João Pedro Silva Cunha @pixies0) Verificado e aceito por @fernandokozak

- [ ] RF05 - Buscar um Produto. 2.2 

- [ ] RF08 - Solicitar Chamado/Suporte. 2.3

- [x] RF11 - Visualizar Carrinho. 2.4 (Luiz Fernando Kozak @fernandokozak) Verificado e aceito por @pixies0

## 3 - Grupo 3.

- [ ] RF03 - Visualizar Catalógo. 3.1

- [ ] RF06 - Efetuar Compra. 3.2

- [ ] RF09 - Adicionar Produto ao Carrinho. 3.3

- [ ] RF12 - Adicionar produto à lista de Desejos. 3.4

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


# Caso de uso

**RF08 – Solicitar Chamado/Suporte**

Item           | Descrição
---------------|----------
Caso de uso    | Solicitar Chamado/Suporte.
Resumo         | Este caso de uso tem a finalidade de auxiliar usuários que necessitam de ajuda com o sistema.
Ator principal | Usuário utilizador da plataforma e novos usuários.
Ator secundário| Atendente.
Pré-condição   | É necessário que o usuário esteja utilizando a plataforma, conectado-á internet.
Pós-condição   | É necessário que, para retornar ao chat do SAC, o usuário tenha sua própria conta.

#### Fluxo principal

Passos  | Descrição
--------|----------
Passo 1 | Cliente entra em contato com o SAC.
Passo 2 | Cliente informa o assunto, seu nome, se pessoa física ou jurídica, e-mail e telefone.
Passo 3 | O sistema registra os dados informados pelo cliente.
Passo 4 | O cliente começa um chat com um atendente.

#### Fluxo alternativo

Passos      | Descrição
------------|----------
Passo 1    | Cliente não preenche os campos corretamente.
Passo 1.1  | Sistema avisa sobre os campos obrigatórios.
Passo 2    | Cliente não verifica o checkbox (reCAPTCHA).
Passo 2.1  | Sistema solicita a verificação do checkbox (reCAPTCHA).
Passo 3    | Cliente entra em contato em horário fora do limite.
Passo 3.1  | Sistema mostra uma mensagem de aviso sobre os horários de atendimento, e possíveis alternativas para contato.

 **Campos do Formulário:**
  Campo | Obrigatório? | Editável? | Formato
  --------- | ------------ | --------- | -------
  Assunto | Sim | Sim | Texto
  Nome | Sim | Sim | Texto
  E-mail | sim | Sim | Texto
  Telefone | Sim | Sim | Numérico
  reCAPTCHA | Sim | Não | Checkbox

#### Opções de usuário

Opção                                | Descrição   | Atalho
-------------------------------------|-------------|-------
Acessar o suporte.                      | Ao clicar nessa aba o usuário poderá entrar em contato com um atendente. |

# User story

Agora iremos escrever uma história de usuário para uma persona.

**Persona um, usuário comum.**

Epic                                |User Story| Critério de aceitação
-----------------------|----------|----------------------
Como um usuário comum, eu preciso solicitar um suporte para resolver um problema e/ou dúvida. | Enquanto "usuário comum" preciso ter minhas informções salvas na plataforma através de uma conta de usuário a fim de ter maior praticidade | Certifique-se que o usuário é capaz de **fazer login na própria conta.**

![image](https://i.imgur.com/dy28taW.png)
![image](https://i.imgur.com/fgFWSzj.png)
![image](https://i.imgur.com/pfJ6PfG.png)


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

