echo Criando alias oara facilitar a execução do docker image
alias sail='bash vendor/bin/sail'

echo Executando o docker image
sail up

echo Copying the configuration example file
docker exec -it import-app cp .env.example .env

echo Install dependencies
docker exec -it import-app composer install

echo Make migrations
docker exec -it import-app php artisan migrate
