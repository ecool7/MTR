@echo off
chcp 65001 >nul
cd /d "%~dp0"
echo Current directory: %CD%
echo.
echo Removing old git repository...
if exist "%USERPROFILE%\.git" (
    rd /s /q "%USERPROFILE%\.git"
)
if exist ".git" (
    rd /s /q ".git"
)
echo.
echo Initializing git repository...
git init
git remote add origin https://github.com/ecool7/MTR.git
echo.
echo Adding project files...
git add app bootstrap config public resources routes composer.json composer.lock artisan .gitignore .env.example README.md README-START.md start-server.bat
echo.
echo Committing files...
git commit -m "Initial commit: MTR Laravel project with products catalog"
echo.
echo Setting branch to main...
git branch -M main
echo.
echo Pushing to GitHub...
git push -u origin main --force
echo.
echo Done!
pause






