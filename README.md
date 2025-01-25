
# Projeto de Exemplo - CRUD de Usuários e Postagens com Eloquent ORM

Este projeto foi desenvolvido para praticar o uso do PHP com o Eloquent ORM e a criação de migrations, funções para manipulação de usuários e postagens, com validações e relacionamentos entre as tabelas.

## Instalação

Siga as instruções abaixo para rodar o projeto localmente:

### 1. Instalar dependências

Se você ainda não tem o Composer instalado, [faça o download aqui](https://getcomposer.org/download/).

Dentro do diretório do seu projeto, execute o seguinte comando no terminal para instalar as dependências do Composer:

```bash
composer install
```

Após isso faça a instação da dependência do Eloquent:

```bash
composer require illuminate/database
```

## Como Utilizar as Funções

O projeto inclui várias funções para manipulação de usuários e postagens. Abaixo estão as descrições das funções implementadas no sistema.

### Funções Implementadas

#### 1. `addUser($name, $email)`

Esta função cria um novo usuário, verificando primeiro se o e-mail já está registrado no banco de dados. Caso contrário, cria um novo usuário e retorna uma mensagem de sucesso.

#### 2. `addPost($userId, $title, $content)`

Essa função adiciona uma nova postagem associada a um usuário existente. Se o usuário não existir, ela retornará uma mensagem de erro.

#### 3. `deleteUser($userId)`

Essa função exclui um usuário e todas as postagens associadas a ele no banco de dados.

#### 4. `getUsersWithPosts()`

Esta função retorna todos os usuários e as postagens associadas a cada um deles. Caso o usuário não tenha postagens, a função retorna "Nenhuma postagem".

### 4. Banco de Dados

O projeto usa o banco de dados relacional e faz uso do Eloquent ORM para lidar com as tabelas `users` e `posts`. As migrations de criação das tabelas e dos relacionamentos entre elas estão descritas nas pastas de migrations, onde:

- Tabela `users`: Guarda informações dos usuários (nome, e-mail).
- Tabela `posts`: Guarda informações das postagens (título, conteúdo) associadas aos usuários.

---

## Considerações Finais

Este projeto foi desenvolvido com o objetivo de conhecer o Eloquent ORM no PHP, manipular dados em bancos de dados relacionais e criar um CRUD básico para usuários e postagens.
