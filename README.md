# KerjaDiluar.id

Laravel-based job platform for overseas opportunities.

### Installation

1. **Clone repository**
```
git clone https://github.com/KuyangC/kerjadiluar.id.git
cd kerjadiluar.id
```
3. **Install Dependencies**
```
composer install
npm install
```

5. **Setup Env**
```
cp .env.example .env
php artisan key:generate
```
6. **JWT Auth**
```
composer require php-open-source-saver/jwt-auth
php artisan vendor:publish --provider="PHPOpenSourceSaver\JWTAuth\Providers\LaravelServiceProvider"
php artisan jwt:secret
```
8. **Run Migrations**
```
php artisan migrate --seed
```
9. **Start Server**
```
php artisan serve
```
