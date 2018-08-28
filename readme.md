## Test
### Задание для RESULTANT от Держаева Дмитрия

Скачать/клонировать/распаковать архив.

Установить библиотеки/пакеты:

```sh
composer install
```

Создать .env

```sh
cp .env.example .env
```

Сгерерировать ключ

```sh
php artisan key:generate
```

Запуск приложения:

```sh
php artisan serve
```

Локально приложение будет доступно по адресу(если не занят порт):

```sh
http://127.0.0.1:8000
```

## Структура

Структура задействованных в задании каталогов и файлов

Каталог | Файл | Комментарий
:--- | :---: | :---:
routes | web.php | Маршруты/роуты.
App/Http/Controllers | CurrencyController.php | Контроллер для работы с валютой
App/Services | Curl.php | Трейт для работы с curl
public/js | main.js | js файл с динамической обработкой таблиц валют
resources/views/layouts | app.blade.php | Главный шаблон приложения(с подключением стилей и скриптов)
resources/views/currency | dashboard.blade.php | Страница с таблицей валют
