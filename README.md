# CRUD API LARAVEL

Esta é uma aplicação back-end desenvolvida em php com laravel 9 que permite ao usuario cadastrar um contado, editar, ver e excluir se necessario.

## Tecnologias utilizadas

- Php
- Laravel 9
- xamp
- Mysql

## Funcionalidades

- Adicionar, remove, editar e ver contatos cadastrados

## Pré-requisitos

Certifique-se de ter o compose, xamp e o php instalado em seu sistema antes de executar a aplicação.

## Configuração

1. Faça o clone deste repositório para o seu ambiente local.
2. Execute no xamp, o *Apache*  e o *MySql*
3. Navegue até o diretório raiz do projeto.
4. Execute o seguinte comando para instalar as dependências:


1. Clone o repositório:

```
git clone https://github.com/theus26/Crud-Api-Laravel
```
2. Executando o xamp

```
Start a aplicação
```

3. Acesse o diretório do projeto:

```
cd seu-repositorio
```

4. Execute os seguintes comandos para restaurar as dependências e iniciar a API:

_Para rodar as migrations para que o banco seja criado com a tabela execute:_

```
php artisan migrate
```
_Esse comando executará todas as migrations criadas e irá gerar toda parte do Banco de Dados._


### Após isso execute a aplicação

Para rodar a aplicação execute:

```
php artisan serve
```

*Após realizar isso podera cosumir a api diretamente do front-end*