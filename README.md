# TixiUyaguari--DianaFernanda--Examen
Universidad Politecnica Salesiana 
Documento del Examen  Interciclo 
1. Estructura de la Base de Datos
![image](https://user-images.githubusercontent.com/52221275/83658650-1c784200-a588-11ea-8df7-6d6fca226211.png)
 1.1 Tabla Autores
 ![image](https://user-images.githubusercontent.com/52221275/83658736-387be380-a588-11ea-9923-93db05db738e.png)
 1.2 Tabla Capitulos

![image](https://user-images.githubusercontent.com/52221275/83658790-4b8eb380-a588-11ea-9ec4-df3509675380.png)
Nota: esta tabla esta asigna las clave foreneasde la tabla  libros y autores 

1.3 Tabla Libros
![image](https://user-images.githubusercontent.com/52221275/83658836-5d705680-a588-11ea-82a4-2a8d8acc59b0.png)

1.4 Estructura de la Pagina Principal 
![image](https://user-images.githubusercontent.com/52221275/83658963-8abd0480-a588-11ea-8f69-b3e1b488ee8c.png)

![image](https://user-images.githubusercontent.com/52221275/83659019-9f999800-a588-11ea-9f90-b85da6e9b04a.png)

![image](https://user-images.githubusercontent.com/52221275/83659087-b344fe80-a588-11ea-8033-7467cc92b7c4.png)

1.5 Agregar Libros a la Base de Datos 
![image](https://user-images.githubusercontent.com/52221275/83659372-0ae36a00-a589-11ea-92a5-4e62a9634d7b.png)

1.6 Verificar la creacion de Libros por medio de un selec a la tabla libros
![image](https://user-images.githubusercontent.com/52221275/83659431-26e70b80-a589-11ea-9644-e0287d3ff36b.png)

1.7  Agregar los capitulos a los libros
![image](https://user-images.githubusercontent.com/52221275/83659640-69104d00-a589-11ea-8334-f60eb617d253.png)

1.8 Busqueda del los Autores por medio de Ajax 
![image](https://user-images.githubusercontent.com/52221275/83661097-497a2400-a58b-11ea-8ad6-1349f9bf6cc3.png)

1.9 Mediante la base de datos se sealiza una Consulta donde se muestra el cruce de tabla 
![image](https://user-images.githubusercontent.com/52221275/83661562-eb9a0c00-a58b-11ea-8577-e5d726babc7a.png)

Consulta: 
 $sql = "SELECT *
    FROM libros capitulos, autores 
    Where libros.lib_codigo= capitulos.lib_codigo and  autores.aut_codigo=capitulos.aut_codigo=";
    
