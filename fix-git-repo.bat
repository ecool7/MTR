@echo off
chcp 65001 >nul
cd /d "%~dp0"
echo ========================================
echo Fixing Git Repository for MTR Project
echo ========================================
echo.
echo Step 1: Removing old git repository from home directory...
if exist "%USERPROFILE%\.git" (
    rd /s /q "%USERPROFILE%\.git"
    echo Old repository removed.
) else (
    echo No old repository found.
)
echo.
echo Step 2: Removing git repository from current directory...
if exist ".git" (
    rd /s /q ".git"
    echo Local .git removed.
) else (
    echo No local .git found.
)
echo.
echo Step 3: Initializing new git repository in MTR project...
git init
git remote add origin https://github.com/ecool7/MTR.git
echo.
echo Step 4: Adding project files...
git add app bootstrap config public resources routes composer.json composer.lock artisan .gitignore .env.example README.md README-START.md start-server.bat
echo.
echo Step 5: Committing files...
git commit -m "Initial commit: MTR Laravel project with products catalog"
echo.
echo Step 6: Setting branch to main...
git branch -M main
echo.
echo Step 7: Pushing to GitHub (force push)...
git push -u origin main --force
echo.
echo ========================================
echo Done! Check GitHub: https://github.com/ecool7/MTR.git
echo ========================================
pause






