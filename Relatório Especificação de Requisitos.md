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
Fazer login/ cadastrar               | Não         | Não      | Texto

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

