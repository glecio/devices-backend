# Teste Grupo Plan

Portas dos serviços durante execução:

- **nginx** - `:8080`
- **mysql** - `:3306`
- **php** - `:9000`
- **redis** - `:6379`

Comandos para disponibilizar o ambiente com dados iniciais para teste

- `docker-compose run --rm -u 1000 composer install`
- `docker-compose run --rm -u 1000 artisan migrate`

- `docker-compose run --rm -u 1000 artisan db:seed --class=BrandSeeder`
- `docker-compose run --rm -u 1000 artisan db:seed --class=DeviceSeeder`
