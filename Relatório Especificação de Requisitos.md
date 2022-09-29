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

---

## RF13 - Remover item da lista de desejo. 1.5. Lucas Evangelista Freire - Lucka10
Review: Larissa Mitie C. Hirai - LarissaHirai

## Caso de Uso Expandido

Item           | Descrição
---------------|----------
Caso de uso    | Remover item da lista de desejo.
Resumo         | Opção de remover um produto contido na lista de desejos.
Ator principal | Usuário utilizador da plataforma.
Pré-condição   | Acesso a internet, ator logado em sua conta e o produto a ser removido já pertence a lista.
Pós-condição   | Remoção do produto selecionado da lista de desejo.



**Fluxo principal**:<br>

Passo          | Descrição
---------------|-------------------------------------
Passo 1        | Ator realiza o login em sua conta.
Passo 2.1      | Ator clica na pagina do item.
Passo 2.2      | Se o produto ja estiver na sua lista de desejo, aparecerá botão Remover da lista de desejo. O ator poderá clicar nele e o item será removido.
Passo 2.3      | Retorna a pagina do item, com o botão agora em estado de Adicinar a lista de desejos.
Passo 3.1      | Ator clica pagina da lista de desejos.
Passo 3.2      | Se a lista de desejos não estiver vazia, os itens contidos nela terão a opção de remove-los da lista. O ator clica no botão e o item é removido da lista.
Passo 3.3      | retorna para pagina da lista agora sem o item removido.


**Fluxo Alternativo**:<br>

FA01 - Produto removido do catalogo

Passo          | Descrição
---------------|-------------------------------------
1              | item foi removido do catalogo.
2              | O item será removido da lista de desejos.

FA02 - Lista de desejos vazia

Passo          | Descrição
---------------|-------------------------------------
1              | Lista de desejos está vazia.
2              | Não há items para se removido.
	
**Opções do Usuário:**

Opção            | Descrição                            
-----------------| ----------------------                         
Remover produto  | Remove o produto da lista de desejos  

## User Stories

Epic	       	       |User Story| Critério de aceitação
-----------------------|----------|----------------------
Eu como ator, gostaria de remover um item da minha lista de desejo, para assim ter acesso rápido apenas aos itens que considero comprar no futuro.| Enquanto ator na página do produto ou da lista de desejos, preciso ser capaz de remover itens que não tenho mais interesse, para manter apenas os itens que considero comprar posteriormente.| Certificar que o ator efetue o login na própria conta e que a lista de desejos não esteja vazia.

### Protótipo

![proto](https://github.com/Lucka10/hello-world/blob/master/excluirdesej.png)

https://www.figma.com/file/hZS3FT2XP2Q4Pib4LaDEHL/Atividade-5%3A-Requisitos---Edson?node-id=0%3A1
 
  ---
    
