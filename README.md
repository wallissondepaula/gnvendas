# GNvendas

## Ambiente para execução do site

### Download e Instalação do software Xampp 5.6.33
[Download do Xampp](https://downloadsapachefriends.global.ssl.fastly.net/5.6.33/xampp-win32-5.6.33-0-VC11-installer.exe?from_af=true)

Após baixar o arquivo, execute-o.

Clique em Avançar -> Avançar -> Avançar -> Avançar -> Avançar.

**IMPORTANTE: Para fins de praticidade recomendo utilizar o endereço de instalação padrão:** "C:\xampp".

Após estes passos, aguarde até que a instalação seja concluída.

### Inicialização do Apache e do MySQL

Finalizada a instalação, abra o aplicativo 'XAMPP Control Panel'

Abaixo de 'Actions', clique em Start para iniciar o Apache e o MySQL.


## Criação da base de dados

Será necessário criar uma base de dados. 

### 1 - Criação do banco de dados

Acesse o phpMyAdmin clicando [aqui](http://localhost/phpmyadmin/index.php).

Na aba SQL digite a seguinte linha de comando (sem as aspas):

"CREATE DATABASE database;"

Clique em Executar.

### 2 - Tabela dados

Também na aba SQL digite a seguinte linha de comando (sem as aspas):

"CREATE TABLE `database`.`dados` ( `id` INT NOT NULL AUTO_INCREMENT , `nome` VARCHAR(100) NOT NULL , `preco` REAL NOT NULL , PRIMARY KEY (`id`)) ENGINE = InnoDB;"

Clique em Executar.

### 3 -Tabela vendas

Ainda na aba SQL digite a seguinte linha de comando (sem as aspas):

"CREATE TABLE `database`.`vendas` ( `id` INT NOT NULL AUTO_INCREMENT , `produto` VARCHAR(100) NOT NULL , `valor` REAL NOT NULL , `comprador` TEXT NOT NULL , `cpf` INT(11) NOT NULL , `telefone` INT(11) NOT NULL , PRIMARY KEY (`id`)) ENGINE = InnoDB;"

Clique em Executar.

PRONTO! A base de dodos necessária está pronta

## Diretório do site

1 - Através do Windows Explorer acesse a pasta de htdocs pelo caminho "C:\xampp\htdocs".
2 - crie uma nova pasta de nome 'gnvendas', sem aspas.
3 - Descarregue na pasta 'gn vendas' todos os arquivos disponibilizados aqui no github.

## Acessando o site

No seu navegador copie e cole o link http://localhost/gnvendas/index.php ou clique [aqui](http://localhost/gnvendas/index.php) para acessar o site do GN Vendas. 


## Acessando o site
