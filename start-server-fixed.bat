@echo off
chcp 65001 >nul
cd /d "%~dp0"
echo Проверка конфигурации...
php artisan key:generate --force >nul 2>&1
echo Запуск сервера на http://127.0.0.1:8000
echo.
php artisan serve --host=127.0.0.1 --port=8000
pause


