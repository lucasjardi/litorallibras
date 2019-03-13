## Litoral Libras ##

Renomear .env.example para .env e configurar

Na pasta do projeto, rodar os comandos:

- composer install
- php artisan key:generate
- php artisan storage:link
- php artisan migrate

Importar o arquivo inserts.sql para a base de dados