# processo_seletivo_estagio_PHP
Tive que realizar um desafio de back-end que envolvia HTML, CSS, PHP e SQL.

# Processo_seletivo_estagio_PHP
Tive que realizar um desafio de back-end que envolvia HTML, CSS, PHP e SQL.

Nesse desafio, foi solicitado para que eu realizasse 7 passos obrigatório e 3 opcionais.

## Passos obrigatórios:

### 1- Crie uma página HTML igual a imagem abaixo, Campos: CPF, Creci e Nome (HTML & CSS) 
 <a href="https://imgbb.com/"><img src="https://i.ibb.co/Rb58rGY/Imagem1.png" alt="Imagem1" border="0"></a>
 
 Nesta etapa, criei um formulário simples com HTML e CSS, assim como solicitava a questão.

 ### 2- Faça validação do formulário do jeito que achar melhor, seja usando HTML5 ou Javascript. Sendo obrigatório que o CPF tenha 11 caracteres, Creci e Nome tenha pelo menos 2 caracteres
 Para realizar essa etapa eu utilizei o maxlength do HTML e travei o CPF com 11 caracteres mínimos, nome e Creci com 2 mínimos.

### 3- Crie um banco de dados com seu nome , e uma tabela chamada corretor para cadastrar os dados abaixo 
### id  nome           cpf                  creci								
	1   "joao"   43713798850    123456

<a href="https://ibb.co/QkLmYfy"><img src="https://i.ibb.co/3v2hS7g/banco-de-dados-projeto.png" alt="banco-de-dados-projeto" border="0"></a>

Para realizar essa etapa eu criei um banco de dados pelo PhpMyAdmin, do Xampp, com o meu nome e a tabela corretor com os dados id (int, prymary key e auto preenchimento), nome como varchar 255, CPF e Creci como int, pois são apenas números.

### 4- Grave os dados ao enviar o formulário, após ser cadastrado redirecione para a tela do formulário novamente com ele limpo.

Para essa etapa, utilizei a sintaxe do PHP para unificar meu código ao banco de dados. Para quem quiser testar o formulário, basta acessar o Link: http://processoseletivo.ddns.net:888/

### 5- Faça os dados da tabela corretor aparecerem em uma tabela, abaixo do formulário.
Novamente, utilizando a sintaxe do PHP, com "echo", dentro de uma tabela em HTML, eu integrei as variáveis ID, NOME, CPF e CRECI para que fossem mostradas na tabela. É possível visualizar isso no link da etapa 4.

### 6- Dentro da tabela, apresente um botão de Editar e Excluir, para cada registro.
Dentro da marcação em HTML da tabela eu criei dois botões visuais, o Editar e Excluir, sem funcionaldade, apenas estético.

### 7 - Faça a função de Excluir um registro. 
Dentro do próprio código, eu utilizei os comandos SQL como delete from, para realizar essa exclusão.

## Passos opcionais (diferenciais):
### 1- Criar a função Editar, carregando as informações no formulário acima e trocar o botão de “Enviar” para “Salvar”.
Não consegui realizar essa funcionalidade.

### 2- Mostrar se a operação de Cadastro, Edição ou Exclusão foi realizada com sucesso em cima do formulário.
Adicionei um alert pelo PHP que exibe que o usuário (variável com o nome do usuário), foi adicionado ou excluído com sucesso.

### 3- Criar um repositório Git e fazer o upload do projeto(Com banco em .sql).
O portfólio é este que está sendo criado.
