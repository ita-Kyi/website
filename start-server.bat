@echo off
echo ====================================
echo   DateMaker Development Server
echo ====================================
echo.
echo Building assets...
call npm run build
echo.
echo Assets built successfully!
echo.
echo Starting PHP server...
echo Server available at: http://localhost:8000
echo.
echo Press Ctrl+C to stop the server
echo ====================================
echo.
php -S localhost:8000 -t public
