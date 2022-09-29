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

# Caso de uso RF10 - 1.4 - Larissa Mitie C. Hirai - LarissaHirai
Review - Fernanda Menezes Plessim de Melo - Peraefe

Item           | Descrição
---------------|----------
Caso de uso    | Remover item do carrinho
Resumo	       | Excluir um item que o autor não tem mais interesse do carrinho de compras.
Ator principal | Usuário que possui um cadastro
Pré-condição   | O ator precisa ter acesso a internet, ter efetuado o login na conta pessoal e o carrinho não pode estar vazio
Pós-condição   | Remoção do produto do carrinho

#### Fluxo principal

Passos  | Descrição
--------|----------
Passo 1 | O ator precisa efetuar login na própria conta para automaticamente ser enviado para tela inicial do sistema
Passo 2 | No canto superior direito o ator vai encontrar um ícone de carrinho que ao selecioná-lo o ator é enviado para a tela do carrinho
Passo 3 | O autor deve então localizar o item que deseja excluir
Passo 4 | O ator deve então selecionar o ícone de lixeira que vai estar localizado em um espaço abaixo da quantidade
Passo 5 | Após o ator efetuar todos os procedimentos, ele deve confirmar a exclusão do produto do carrinho clicando no botão “Sim”
Passo 6 | Logo o sistema irá retornar para a página do carrinho porém agora atualizado e mostrando os itens existentes no carrinho antes de efetuar a exclusão, porém sem o item excluído


#### Opções de usuário

Opção                                | Descrição   
-------------------------------------|-------------
Excluir|Exclui o item do carrinho
Confirmar exclusão|Confirmação antes de excluir o item


#### Fluxo alternativo


Passos      | Descrição
------------|----------
FA01        | Carrinho vazio
Passo 1.1   | O sistema exibirá uma mensagem avisando que o carrinho está vazio
FA02        | O ator não está logado   
Passo 2.1   | O sistema exibirá a tela do carrinho, porém sem itens
Passo 2.2   | No canto superior esquerdo o sistema exibirá um botão de “Login” onde ao selecioná-lo o ator será redirecionado para página de login do sistema

# User story


Epic	       	       |User Story| Critério de aceitação
-----------------------|----------|----------------------
Eu como ator, gostaria de excluir um item que eu não desejo mais do meu carrinho, para assim poder obter apenas os item que eu desejo e gostaria de comprar.| Enquanto ator na página do meu carrinho preciso ser capaz de excluir itens que não desejo mais do meu carrinho para manter apenas os itens que tenho desejo em adiquirir.| Certificar que o ator efetue o login na pópria conta e que o carrinho não esteja vazio.


[Link protótipo](prototipo/Capturar.PNG)

