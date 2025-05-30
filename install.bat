@echo off
echo ===================================
echo Instalador de Auto Trading Platform
echo ===================================
echo.

REM Verificar si MySQL está instalado
where mysql >nul 2>nul
if %errorlevel% neq 0 (
    echo Error: MySQL no esta instalado o no esta en el PATH
    echo Por favor, instala MySQL y asegurate de que este en el PATH
    pause
    exit /b 1
)

echo Configurando la base de datos...
echo.

REM Solicitar credenciales de MySQL
set /p DB_USER=Usuario de MySQL (default: root): 
if "%DB_USER%"=="" set DB_USER=root

set /p DB_PASS=Contrasena de MySQL: 
if "%DB_PASS%"=="" (
    echo Error: La contrasena no puede estar vacia
    pause
    exit /b 1
)

REM Crear la base de datos
echo Creando base de datos...
mysql -u%DB_USER% -p%DB_PASS% -e "CREATE DATABASE IF NOT EXISTS beotrade_beotrading;"
if %errorlevel% neq 0 (
    echo Error al crear la base de datos
    pause
    exit /b 1
)

REM Importar archivos SQL
echo Importando datos...
for %%f in (sqlfiles\*.sql) do (
    echo Importando %%f...
    mysql -u%DB_USER% -p%DB_PASS% beotrade_beotrading < "%%f"
)

REM Actualizar el archivo .env
echo Actualizando configuracion...
cd core
(
echo DB_CONNECTION=mysql
echo DB_HOST=127.0.0.1
echo DB_PORT=3306
echo DB_DATABASE=beotrade_beotrading
echo DB_USERNAME=%DB_USER%
echo DB_PASSWORD=%DB_PASS%
) > .env

REM Instalar dependencias
echo Instalando dependencias PHP...
call composer install

echo Instalando dependencias Node.js...
call npm install
call npm run dev

echo.
echo ===================================
echo Instalacion completada!
echo.
echo Para iniciar el proyecto:
echo 1. Ve a la carpeta raiz del proyecto
echo 2. Ejecuta: php -S localhost:8000
echo 3. Abre en tu navegador: http://localhost:8000
echo ===================================
echo.

pause 