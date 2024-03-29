## About Laravel

### Чистый запуск
```
{%project_folder%}: cp ./env.example ./.env
{%project_folder%}: composer install
{%project_folder%}: ./vendor/bin/sail up -d or alias sail='[ -f sail ] && bash sail || bash vendor/bin/sail'
{%project_folder%}: sail up -d
{%project_folder%}: artisan migrate --seed
{%project_folder%}: artisan storage:link
{%project_folder%}: mkdir uploads in public directory
```

### Для тестов
```
{%project_folder%}: cp ./env.testing.example ./.env.testing
{%project_folder%}: php artisan config:cache --env=testing
{%project_folder%}: php artisan --env=testing migrate --seed
```

### Для локального запуска
```
{%project_folder%}: php artisan serve
http://127.0.0.1:8000
```

### Для подтверждения почты или ваш почтовый сервер
```
MAIL_MAILER=log
MAIL_HOST=
MAIL_PORT=
MAIL_USERNAME=null
MAIL_PASSWORD=null
MAIL_ENCRYPTION=null
MAIL_FROM_ADDRESS=null
MAIL_FROM_NAME=laravel.blog@mail.ru
```
