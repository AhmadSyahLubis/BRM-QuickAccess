$ErrorActionPreference = "Stop"
composer create-project laravel/laravel tmp_app "^11.0"
Move-Item -Path tmp_app\* -Destination . -Force
Move-Item -Path tmp_app\.* -Destination . -Force -ErrorAction SilentlyContinue
Remove-Item -Path tmp_app -Recurse -Force
