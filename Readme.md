> **Requerimientos**:
 - Instalar Docker
 

 # Compilación y ejecución con contenedores
- Para generar la base de datos y el app mediante contenedores de Docker, ejecute el comando en la raíz del proyecto 
`docker-compose.yml up -d`.

 # Generación de BD
- Ejecutar el script en la UI de mysql (phpmyadmin) entrando a la url http://localhost:8080, el script se encuentra en la ruta mysql con el nombre de "evento.sql"

# Ejecución Composer
- Ingresar al contenedor web-1 y ejecutar `composer install`.

# Test
- Ingresar al browser y escribir `http://localhost`.

