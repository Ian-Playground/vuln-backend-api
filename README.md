# Vulnerability Dashboard API

## Docker Setup

### Prerequisites

-   Docker
-   Docker Compose

### Environment Setup

1. Copy the example environment file:

```bash
cp .env.example .env
```

2. Update your `.env` file with the following database settings:

```
DB_CONNECTION=pgsql
DB_HOST=pgsql
DB_PORT=5432
DB_DATABASE=vuln_dashboard
DB_USERNAME=laravel
DB_PASSWORD=secret

REDIS_HOST=redis
REDIS_PORT=6379
```

### Running the Application

1. **Build and start the containers:**

```bash
docker compose up -d --build
```

2. **Run migrations and seeders:**

```bash
docker compose exec vuln_dashboard.api php artisan migrate:fresh --seed
```

3. **Set proper permissions:**

```bash
docker compose exec vuln_dashboard.api chmod -R 775 storage bootstrap/cache
```

### Available Services

-   **API**: http://localhost:8000
-   **Swagger UI**: http://localhost:8081
-   **PostgreSQL**: localhost:5432
-   **Redis**: localhost:6379

### API Documentation

The API documentation is available through Swagger UI at http://localhost:8081

To generate/update the API documentation:

```bash
# Generate Swagger documentation
docker compose exec vuln_dashboard.api php artisan l5-swagger:generate
```

### Useful Commands

```bash
# View logs
docker compose logs -f vuln_dashboard.api

# Access container shell
docker compose exec vuln_dashboard.api sh

# Run artisan commands
docker compose exec vuln_dashboard.api php artisan list

# Clear Laravel cache
docker compose exec vuln_dashboard.api php artisan cache:clear

# Stop all containers
docker compose down

# Restart a specific service
docker compose restart vuln_dashboard.api
```

### Database Commands

```bash
# Access PostgreSQL
docker compose exec pgsql psql -U laravel -d vuln_dashboard

# Refresh database and run seeders
docker compose exec vuln_dashboard.api php artisan migrate:fresh --seed

# Run specific seeder
docker compose exec vuln_dashboard.api php artisan db:seed --class=SpecificSeeder
```

### Troubleshooting

1. **Port already in use:**

```bash
# Check what's using port 8000
lsof -i :8000
```

2. **Permission issues:**

```bash
docker compose exec vuln_dashboard.api chmod -R 775 storage bootstrap/cache
```

3. **Database connection issues:**

```bash
docker compose exec vuln_dashboard.api php artisan tinker
DB::connection()->getPdo();
```

### Development

The application uses:

-   PHP 8.3
-   Laravel 12
-   PostgreSQL 15
-   Redis 7

### Testing

```bash
# Run tests
docker compose exec vuln_dashboard.api php artisan test
```

### Contributing

1. Fork the repository
2. Create your feature branch
3. Commit your changes
4. Push to the branch
5. Create a new Pull Request
