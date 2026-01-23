@echo off
chcp 65001 >nul
cd /d "%~dp0"
echo ========================================
echo   Запуск сервера MTR
echo ========================================
echo.
echo Очистка кеша...
php artisan config:clear >nul 2>&1
php artisan cache:clear >nul 2>&1
php artisan view:clear >nul 2>&1
echo.
echo Запуск сервера на http://127.0.0.1:8000
echo.
php artisan serve --host=127.0.0.1 --port=8000
pause

