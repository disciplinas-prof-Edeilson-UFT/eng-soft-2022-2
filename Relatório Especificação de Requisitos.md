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




# Caso de uso **RF07** - Avaliar Produto. 1.3 - Peraefe -Fernanda Menezes Plessim de Melo
Revisor: João Gabriel Alves de Souza (JoaoGabrielh)# 


|Item           | Descrição|

|---------------|----------|

|Caso de uso    | RF07|

|Resumo           | Avaliar um produto comprado no site.|

|Ator principal | Usuário|

|Pré-condição   | O ator precisa estar conectado à internet,logado na conta pessoal do mesmo e ter comprado um produto.|


#### Fluxo principal


|Passos  | Descrição|

|--------|----------|

|Passo 1 | O ator precisa fazer login na própria conta para automaticamente ser enviado para tela inicial do sistema;|

|Passo 2 |  O ator deve pesquisar o produto comprado a ser avaliado;|

|Passo 3 | O ator deve ir para a página de visualização do produto;|

|Passo 4 | O ator deve então selecionar “Avaliar Produto” na seção Avaliações de Usuários; |

|Passo 5 | O ator deve selecionar a nota desejada para o produto nas estrelas posicionadas abaixo da imagem do produto;|

|Passo 6 | O ator deve confirmar a ação clicando no botão “Enviar”;|

|Passo 7 | Logo o sistema irá retornar para a página do produto porém agora atualizado e mostrando a nova avaliação incluída;|


#### Campos da aba de visualizar produtos


|Campo                                | Obrigatório | Editável | Formato|

|-------------------------------------|-------------|----------|--------|
| Título do comentário  | Não  | Sim  | Texto  |
| Comentário  | Não  | Sim  | Texto  |

#### Opções de usuário


|Opção                                | Descrição   |

|-------------------------------------|-------------|
| Avaliar Produto | Permite o ator escrever um breve comentário e classificar o produto com estrelas |
| Enviar | Confirmação antes de enviar a avaliação |

#### Relatório de usuário


|Campo | Descrição | Formato|

|------|-----------|--------|


#### Fluxo alternativo


|Fluxo     | Passos | Descrição|

|------------|------------|----------|

|FA01 - Se o ator não tiver comprado o produto | Passo 1.1 |O sistema exibirá uma mensagem avisando que não é possível avaliar um produto não comprado;|
|FA02 - O ator não está logado | Passo 2.1 | O sistema exibirá a tela do produto, porém sem opção de avaliar produto. No canto superior esquerdo o sistema exibirá um botão de “Login” onde ao selecioná-lo o autor será redirecionado para página de login do sistema;|


# User story



** Eu como ator, gostaria de avaliar o produto que comprei, para assim poder deixar minha opinião sobre o produto para outros usuários;**


|Epic                                |User Story| Critério de aceitação|

|-----------------------|----------|----------------------|


![imagem](https://github.com/Peraefe/prototipo_img/blob/main/prototipo_RF07.PNG)
