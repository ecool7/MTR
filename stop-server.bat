@echo off
chcp 65001 >nul
echo ========================================
echo   Завершение всех серверов
echo ========================================
echo.

echo Остановка процессов на порту 8000...
for /f "tokens=5" %%a in ('netstat -ano ^| findstr ":8000.*LISTENING"') do (
    echo Завершение процесса PID: %%a
    taskkill /F /PID %%a >nul 2>&1
)

echo.
echo Остановка всех процессов PHP...
taskkill /F /IM php.exe >nul 2>&1

echo.
echo Проверка портов...
netstat -ano | findstr ":8000"

echo.
echo ========================================
echo   Все процессы завершены
echo ========================================
pause

