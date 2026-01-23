@echo off
chcp 65001 >nul
cd /d "%~dp0"
git add app/Http/Controllers/ProductsController.php
git commit -m "Add products to Power Amplifiers, Pulse Interference Generators and Circulators categories"
git push origin main






