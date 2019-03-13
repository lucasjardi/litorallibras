## Litoral Libras ##

Laravel versão 5.5 (https://laravel.com/docs/5.5)
Banco de Dados MySQL.

Criar uma base de dados
Renomear .env.example para .env e configurar ambiente

Na pasta do projeto, rodar os comandos:

- composer install
- php artisan key:generate
- php artisan storage:link
- php artisan migrate

Importar o arquivo inserts.sql para a base de dados

Observações:
- A pasta /storage e a bootstrap/cache precisa de permissão de escrita e leitura para todos.
