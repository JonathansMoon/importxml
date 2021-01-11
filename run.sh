echo Copying the configuration example file
docker exec -it import-app cp .env.example .env

echo Install dependencies
docker exec -it import-app composer install

echo Make migrations
docker exec -it import-app php artisan migrate

echo Make seed
docker exec -it import-app php artisan db:seed

echo Key generate JWT
docker exec -it import-app php artisan jwt:secret
