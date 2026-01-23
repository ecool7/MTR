# PowerShell script to start Laravel server
$ErrorActionPreference = "Stop"

# Get the script directory
$scriptPath = Split-Path -Parent $MyInvocation.MyCommand.Path
Set-Location $scriptPath

Write-Host "Starting Laravel development server..."
Write-Host "Working directory: $(Get-Location)"

# Check if artisan exists
if (-not (Test-Path "artisan")) {
    Write-Host "Error: artisan file not found in current directory"
    exit 1
}

# Start the server
php artisan serve --host=127.0.0.1 --port=8000


