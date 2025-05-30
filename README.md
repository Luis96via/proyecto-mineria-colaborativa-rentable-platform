# Plataforma de Trading Automático

## Autor
Desarrollado por Luis Antonio Viña © 2025

## Requisitos del Sistema
- PHP >= 8.1
- MariaDB/MySQL
- Composer
- Node.js & NPM

## Instalación Rápida (Recomendada)

### Windows
1. Clonar el repositorio:
```bash
git clone [URL_DEL_REPOSITORIO]
cd [NOMBRE_DEL_PROYECTO]
```

2. Ejecutar el script de instalación:
```bash
install.bat
```
El script:
- Configurará la base de datos automáticamente
- Importará los datos necesarios
- Instalará todas las dependencias
- Configurará el archivo .env

### Linux/Mac
1. Clonar el repositorio:
```bash
git clone [URL_DEL_REPOSITORIO]
cd [NOMBRE_DEL_PROYECTO]
```

2. Dar permisos de ejecución al script:
```bash
chmod +x install.sh
```

3. Ejecutar el script de instalación:
```bash
./install.sh
```

## Instalación Manual

Si prefieres instalar manualmente:

1. Clonar el repositorio:
```bash
git clone [URL_DEL_REPOSITORIO]
cd [NOMBRE_DEL_PROYECTO]
```

2. Instalar dependencias PHP:
```bash
cd core
composer install
```

3. Instalar dependencias NPM:
```bash
npm install
npm run dev
```

4. Configurar el archivo .env:
```bash
cp .env.example .env
```
Editar el archivo `.env` con tus credenciales de base de datos.

5. Generar clave de la aplicación:
```bash
php artisan key:generate
```

6. Ejecutar las migraciones de la base de datos:
```bash
php artisan migrate
```

## Ejecutar el Proyecto

Para desarrollo local, desde la carpeta raíz del proyecto:
```bash
php -S localhost:8000
```

Acceder a: http://localhost:8000

## Estructura del Proyecto
- `/core`: Contiene el código principal de Laravel
- `/asset`: Archivos estáticos (imágenes, CSS, JavaScript)
- `/sqlfiles`: Scripts SQL para la base de datos
- `index.php`: Punto de entrada principal de la aplicación

## Características Principales
- Sistema de trading automatizado
- Panel de administración completo
- Gestión de usuarios y permisos
- Sistema de pagos integrado
- Reportes y estadísticas en tiempo real

## Soporte y Contacto
Para soporte técnico o consultas, contactar a Luis Antonio Viña

## Licencia
Este proyecto está bajo la Licencia MIT. Ver el archivo `LICENSE` para más detalles. 