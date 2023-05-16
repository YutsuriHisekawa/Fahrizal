<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://images-wixmp-ed30a86b8c4ca887773594c2.wixmp.com/f/c1fa56d1-c75a-4acd-991c-8b30766ec0d5/del619z-fc4a1bf4-20bd-4763-aa70-186ccbcf1426.png/v1/fill/w_981,h_815,strp/yoimiya_splash_render_by_neekosg_del619z-pre.png?token=eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJzdWIiOiJ1cm46YXBwOjdlMGQxODg5ODIyNjQzNzNhNWYwZDQxNWVhMGQyNmUwIiwiaXNzIjoidXJuOmFwcDo3ZTBkMTg4OTgyMjY0MzczYTVmMGQ0MTVlYTBkMjZlMCIsIm9iaiI6W1t7ImhlaWdodCI6Ijw9MTA2MyIsInBhdGgiOiJcL2ZcL2MxZmE1NmQxLWM3NWEtNGFjZC05OTFjLThiMzA3NjZlYzBkNVwvZGVsNjE5ei1mYzRhMWJmNC0yMGJkLTQ3NjMtYWE3MC0xODZjY2JjZjE0MjYucG5nIiwid2lkdGgiOiI8PTEyODAifV1dLCJhdWQiOlsidXJuOnNlcnZpY2U6aW1hZ2Uub3BlcmF0aW9ucyJdfQ.IRBlMLo7stmKS2Pz0E82I2OydtEXkLOQ5mw5euUpnq8" width="400" alt="Laravel Logo"></a></p>



## Hello Im Fahrizal

Hello , this is my project laravel.


## Instalasi
#### Via Git
```bash
git clone https://github.com/sandinur157/tuturial-membuat-aplikasi-point-of-sales.git
```

### Download ZIP
[Link](https://github.com/sandinur157/tuturial-membuat-aplikasi-point-of-sales/archive/refs/heads/main.zip)

### Setup Aplikasi
Jalankan perintah 
```bash
composer update
```
atau:
```bash
composer install
```
Copy file .env dari .env.example
```bash
cp .env.example .env
```
Konfigurasi file .env
```bash
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=example_app
DB_USERNAME=root
DB_PASSWORD=
```
Opsional
```bash
APP_NAME=Laravel
APP_ENV=local
APP_KEY=base64:QGRW4K7UVzS2M5HE2ZCLlUuiCtOIzRSfb38iWApkphE=
APP_DEBUG=true
APP_URL=http://example-app.test
```
Generate key
```bash
php artisan key:generate
```
Migrate database
```bash
php artisan migrate
```
Seeder table User, Pengaturan
```bash
php artisan db:seed
```
Menjalankan aplikasi
```bash
php artisan serve
```
