## Общая информация

Приложение написано на PHP фреймворке Laravel 5.2.

## Установка

* Склонировать проект ```git clone git@bitbucket.org:WiDeIvan/ettorgova.git```, ```cd ettorgova```
* Установить Laravel ```composer install```
* Создать файл окружения ```cp .env.example .env```
* Сгенерировать ключ шифрования ```php artisan key:generate```
* Отредактировать .env файл (_APP_ENV=production_, _APP_DEBUG=false_, _APP_URL=https://ettorgova.ru_)
* Если не установлен node js (для проверки ввести ```node -v```), то [установить](https://nodejs.org/en/download/package-manager/#debian-and-ubuntu-based-linux-distributions)
* Если не установлен gulp, то установить командой ```npm install --global gulp```
* Установить node модули, требуемые для приложения ```npm install``` (на Windows запускать ```npm install --no-bin-links```). Если при установке вылетает ошибка (Killed), то скорее всего на сервере не хватает оперативной памяти. Решаяется 3 способами: добавить оперативную память на сервер, увеличить swap раздел или выполнить команду на другом компьютере и перенести папку node_modules на сервер.
* Запустить сборщик ```gulp --production```
* Установить права доступа ```chmod -R 0777 bootstrap/cache/```, ```chmod -R 0777 storage/```