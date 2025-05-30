#!/bin/bash

echo "==================================="
echo "Instalador de Auto Trading Platform"
echo "==================================="
echo

# Verificar si MySQL está instalado
if ! command -v mysql &> /dev/null; then
    echo "Error: MySQL no está instalado"
    echo "Por favor, instala MySQL y asegúrate de que esté en el PATH"
    exit 1
fi

echo "Configurando la base de datos..."
echo

# Solicitar credenciales de MySQL
read -p "Usuario de MySQL (default: root): " DB_USER
DB_USER=${DB_USER:-root}

read -s -p "Contraseña de MySQL: " DB_PASS
echo
if [ -z "$DB_PASS" ]; then
    echo "Error: La contraseña no puede estar vacía"
    exit 1
fi

# Crear la base de datos
echo "Creando base de datos..."
mysql -u"$DB_USER" -p"$DB_PASS" -e "CREATE DATABASE IF NOT EXISTS beotrade_beotrading;"
if [ $? -ne 0 ]; then
    echo "Error al crear la base de datos"
    exit 1
fi

# Importar archivos SQL
echo "Importando datos..."
for sql_file in sqlfiles/*.sql; do
    if [ -f "$sql_file" ]; then
        echo "Importando $sql_file..."
        mysql -u"$DB_USER" -p"$DB_PASS" beotrade_beotrading < "$sql_file"
    fi
done

# Actualizar el archivo .env
echo "Actualizando configuración..."
cd core
cat > .env << EOL
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=beotrade_beotrading
DB_USERNAME=$DB_USER
DB_PASSWORD=$DB_PASS
EOL

# Instalar dependencias
echo "Instalando dependencias PHP..."
composer install

echo "Instalando dependencias Node.js..."
npm install
npm run dev

echo
echo "==================================="
echo "Instalación completada!"
echo
echo "Para iniciar el proyecto:"
echo "1. Ve a la carpeta raíz del proyecto"
echo "2. Ejecuta: php -S localhost:8000"
echo "3. Abre en tu navegador: http://localhost:8000"
echo "==================================="
echo 