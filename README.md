# GNvendas

## Instruções para execução do site

## Download e Instalação do software Xampp 5.6.33
[Download do Xampp](https://downloadsapachefriends.global.ssl.fastly.net/5.6.33/xampp-win32-5.6.33-0-VC11-installer.exe?from_af=true)


### Inicialização do Apache e do MySQL

## Criação da base de dados

Será necessário criar uma base de dados. 

### 1 Criação do banco de dados

Acesse o phpMyAdmin clicando [aqui](http://localhost/phpmyadmin/index.php).

Na aba SQL digite a seguinte linha de comando (sem as aspas):

"CREATE DATABASE database;"

Clique em Executar.

### Tabela dados

Também na aba SQL digite a seguinte linha de comando (sem as aspas):

"CREATE TABLE `database`.`dados` ( `id` INT NOT NULL AUTO_INCREMENT , `nome` VARCHAR(100) NOT NULL , `preco` REAL NOT NULL , PRIMARY KEY (`id`)) ENGINE = InnoDB;"

Clique em Executar.

### Tabela vendas

Ainda na aba SQL digite a seguinte linha de comando (sem as aspas):

"CREATE TABLE `database`.`vendas` ( `id` INT NOT NULL AUTO_INCREMENT , `produto` VARCHAR(100) NOT NULL , `valor` REAL NOT NULL , `comprador` TEXT NOT NULL , `cpf` INT(11) NOT NULL , `telefone` INT(11) NOT NULL , PRIMARY KEY (`id`)) ENGINE = InnoDB;"

Clique em Executar.

PRONTO! A base de dodos necessária está pronta

## Diretório do site

## Acessando o site
