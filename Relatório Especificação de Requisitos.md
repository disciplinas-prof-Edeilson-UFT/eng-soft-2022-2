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

## RF02.

## Definindo o requisito:

O requisitos funcional, descritos nesta nessão para o sistema, é: **Efetuar cadastro de usuário**.

### Descrevendo o caso de uso expandido dos requisito:

#### **RQ02 - Tela de Cadastro**

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
  -- | -- | --

- **Tratamento de Exceções:**

  1.1. O ator ja tem uma conta.

  1.2. Sistema exibe um botão "Fazer login" na tela de Cadastro, e assim o ator é redirecionado para a tela de Login.

  2.1. Funcionário informa que não há disponibilidade naquela Data.

  2.2. Sistema exibe horários disponiveis para o dia utíl seguinte.

### **User Story - Tela de Cadastro**

“Como **um usuário novo do sistema** eu quero **poder criar uma nova conta com os meus dados** para que **eu possa ter uma nova conta e efetuar compras**.”

- **Protótipo:**

<img src="https://uploaddeimagens.com.br/images/004/032/319/full/Captura_de_tela_de_2022-09-22_16-00-51.png?1663873305" alt="drawing" width="600"/>
