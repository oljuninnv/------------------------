## Введение

Данная документация предназначена для разработчиков, которые хотят запустить тестовое веб-приложение, разработанное на Laravel с использованием Vue.js в качестве фронтенда. Проект был создан в рамках тестового задания от компании Атвинта и демонстрирует основные функции, такие как аутентификация, работа с API и взаимодействие с базой данных.

## Описание

Проект представляет собой веб-приложение, в котором Laravel используется для обработки запросов и управления данными, а Vue.js отвечает за создание интерактивного пользовательского интерфейса. Приложение включает в себя функциональность для регистрации пользователей, входа в систему и выполнения CRUD операций с данными

## Задание
 - Задание: Права
     - Добавить роли: Админ, Сотрудник, Пользователь.
     - Каждый сотрудник в этой системе является пользователем, но не каждый пользователь системы является сотрудником компании.
     - Сотрудник может получать информацию только о своем отделе и только о сотрудниках своего отдела. Пользователь видит только список отделов. Админ видит все.
- Задание: Валидация
     - Добавить валидацию полей для всех запросов (Requests).
- Задание: Админка
     - Необходимо создать страницы, для просмотра списка, редактирования и удаления объектов системы (на данный момент это пользователи, сотрудники и отделы).

## Требования

Перед началом работы убедитесь, что у вас установлены следующие компоненты:
- PHP (версия 8.0 или выше);
- Composer (менеджер зависимостей для PHP);
- Установленный Git;
- Установленная база данных MySQL;
- Node.js и npm (для работы с фронтенд-зависимостями);

## Шаги по запуску проекта

### 1. Клонирование репозитория

Сначала клонируйте репозиторий проекта с GitHub:
```
git clone https://github.com/oljuninnv/Test_Project_For_Atwinta.git
cd Test_Project_For_Atwinta
```

### 2. Установка зависимостей
После клонирования репозитория установите зависимости проекта с помощью Composer:
```
composer install
```
если не работает, то попробовать
```
composer install --ignore-platform-req=ext-sodium
```

### 3. Настройка окружения
Скопируйте файл .env.example в .env:
```
cp .env.example .env
```
Откройте файл .env и настройте параметры подключения к базе данных:
```
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=<your_database_name>
DB_USERNAME=<your_database_user>
DB_PASSWORD=<your_database_password>
```

### 4. Генерация ключа приложения
Сгенерируйте ключ приложения Laravel:
```
php artisan key:generate
```

### 5. Миграция базы данных
Выполните миграцию для создания таблиц в вашей базе данных:
```
php artisan migrate
```
для создания пользователя с ролью "Администратор", необходимо выполнить команду:
```
php artisan db:seed
```
Данные для авторизации тестового администратора:
- email: admin@example.com
- password: password

Также необходимо сгенерировать ключ для Laravel Passport через команду:
```
composer require laravel/passport
```

### 6. Установка фронтенд-зависимостей
Перейдите в каталог "vue", в котором находится Vue-приложение:
```
cd vue
```
Установите фронтенд-зависимости с помощью npm:
```
npm install
```
Установите axios:
```
npm install axios
```
### 7. Запуск сервера
Теперь вы можете запустить встроенный сервер Laravel:
```
php artisan serve
```
Backend-сервер будет доступен по адресу: http://localhost:8000.
А также для взаимодействия с сайтомм запустите Vue-приложение:
```
npm run dev
```
Frontend-сервер будет доступен по адресу: http://localhost:5173/
## Заключение
Теперь тестовый проект на Laravel с Vue.js запущен и готов к использованию. Спасибо за внимание.

