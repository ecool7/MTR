@echo off
chcp 65001 >nul
cd /d "%~dp0"
echo ========================================
echo Uploading MTR Project to GitHub
echo ========================================
echo.
echo Current directory: %CD%
echo.
echo Step 1: Removing old git repositories...
if exist "%USERPROFILE%\.git" (
    rd /s /q "%USERPROFILE%\.git"
    echo Removed git from home directory.
)
if exist ".git" (
    rd /s /q ".git"
    echo Removed local .git directory.
)
echo.
echo Step 2: Initializing git repository...
git init
git remote add origin https://github.com/ecool7/MTR.git
echo.
echo Step 3: Adding project files...
git add app bootstrap config public resources routes composer.json composer.lock artisan .gitignore .env.example README.md README-START.md start-server.bat
echo.
echo Step 4: Committing files...
git commit -m "Initial commit: MTR Laravel project with products catalog"
echo.
echo Step 5: Setting branch to main...
git branch -M main
echo.
echo Step 6: Pushing to GitHub...
git push -u origin main --force
echo.
echo ========================================
echo Done! Project uploaded to GitHub
echo ========================================
pause






