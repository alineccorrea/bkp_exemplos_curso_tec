## para abrir arquivos php

O PHP é uma linguagem de scripts interpretada do lado do servidor.
Não é como HTML que é uma linguagem de marcação de hipertexto, que irá rodar simplesmente ao abrir o arquivo.

A partir do momento que o interpretador PHP começa a agir, todo o código inserido dentro do documento começa a ser processado. Esse processamento gera um arquivo HTML e nesse arquivo vai existir somente tags HTML ou qualquer outra tecnologia client-side, que será retornado para quem solicitou o arquivo.

Para você conseguir fazer rodar arquivos com extensão .php, é necessário que tenha um servidor web Apache para transformar o computador em um servidor que irá interpretar os scripts PHP, e não exibir os códigos na tela.

Apesar de ser possível baixar os "componentes" (Banco de Dados, Apache, PHP) individualmente, é necessário um conhecimento razoável para configurá-los, já que pode ser extremamente complicado configurá-los na primeira vez.

Entretanto, existem algumas alternativas (programas) prontos, preparados com uma configuração padrão, que já vem com o que você precisa, que na maioria das vezes é a linguagem PHP, o banco de dados MySQL, e o servidor Apache.

Esses programas são conhecidos como:

WAMP's (Windows, Apache, MySQL, PHP),
LAMP's (Linux, Apache, MySQL, PHP) e
MAMP's (Mac, Apache, MySQL, PHP)
Você pode ver mais informações desses programas aqui.

Seu problema
Após ter lido esta introdução e estar com os programas instalados da sua escolha, quando você inicia o Windows, é necessário "startar" o servidor (no meu caso o WAMP).

Você clica no ícone dele (na área de trabalho, ou no menu iniciar, ou no diretório de instalação) e quando ele ficar "verdinho", você pode abrir uma nova guia do seu navegador e digitar na barra de endereço (caso sua configuração seja a padrão) localhost ou 127.0.0.1.

Importante: É necessário que você mova os arquivos (do seu projeto) para a pasta dentro do seu programa servidor web (se você está utilizando um dos programas citados acima), como o XAMPP - na pasta htdocs - ou WAMP - na pasta www - ou crie um aliasen.

Lembre-se, PHP é uma linguagem de scripts interpretada do lado do servidor, então abrir os arquivos como HTML:

file:///C:/testes/meuarquivo.php

Irá resultar em seu código sendo mostrado na tela ao invés de ser interpretado, independente de qual seja seu navegador. Então você deve abrir ele com o protocolo do servidor, algo como:

http://localhost/testes/meuarquivo.php

Outra coisa importante que esqueci de mencionar: Caso esteja ocorrendo algum problema de, por exemplo, abrir alguma página inesperada, ou não abrir nada, é porque (provavelmente) você possui algum programa que está utilizando a porta 80 (padrão).

Programas instalados como Skype, ou IIS (que geralmente está instalado na maioria das máquinas de desenvolvimento) podem ocasionar isso. Então é necessário que você mude a porta do servidor.

Você pode ver mais informações relacionadas no site oficial (no meu caso Wampen), ou mais informações aqui.

Vou deixar aqui uma breve solução, caso você esteja utilizando WAMP:

Clique no ícone do servidor WAMP> Apache> httpd.conf, depois altere a linha Listen 80 para Listen 8080 ou qualquer porta que você deseja.
Se você não conseguir acessar através do ícone, acesse no diretório em C:\wamp\bin\apache\apache2.4.23\conf> httpd.conf e faça o que foi dito acima.
Pode assistir este vídeo também, que foi indicado na resposta que foi linkada acima, respondida no nosso Grande Irmão SO.
https://www.youtube.com/watch?v=dLmPzzP6n4w

https://pt.stackoverflow.com/questions/47012/como-abrir-um-arquivo-php-no-navegador
