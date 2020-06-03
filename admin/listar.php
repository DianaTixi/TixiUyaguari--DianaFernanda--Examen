<!DOCTYPE html>
<html>
<head>

    <meta charset="UTF-8">
    <title>Listar Usuarios</title>
    <meta name="keywords" content="Mi Agenda Telefonica" />
    <link rel="stylesheet" type="text/css" href="../css/listar.css">
</head>
<body>
    <header >
        <div id="encabezado">  
            <div id="logo1">
                <img src="../imagenes/portada.jpg"  width="250" height="150" alt="Imagen de Portada" >
            </div>
            <div id="buscar">
                <form method="get" action="https://www.google.com/search">
                <input title="busqueda" name="q" type="text" class="floatright" id="cajabusqueda" value="" size="31" 
                 maxlength="255">
                <input name="botonbusq" type="submit" class="floatright" id="botonbusqueda" value="Buscar">
                </form> 	
            </div>  
            <div id="info">
                <a href="tel:+5930998801982"><img src="../imagenes/contacto.png"  width="50" height="50" alt="Correo electronico" ></a>
                <a href="mailto:dtixi@est.ups.edu.ec"><img src="../imagenes/sobre.jpg"  width="50" height="50" alt="Contactos Telefonico" ></a>
                <button><a href="indexA.html" >Inicio</a></button>
            </div>
        </div>  
    </header>
    <!--<nav>
            <ul class="menu_h">
                <li><a href="agregar.php" >Agregar Usuarios</a></li>
                <li><a href="modificarU.php" >Modificar Usuarios</a></li>
                <li><a href="eliminarU.php" >Eliminar Usuarios</a></li>
                <li><a href="agregarTel.php" >AgregarTelefono</a></li>
                <li><a href="cambiar_contrasena" target="_blank">Cambiar Contraseña</a></li>
            </ul>
    </nav>-->

    <table style="width:100%">
    <tr>
    <th>Nombre</th>
    <th>ISBM</th>
    <th>NumeroPaginas</th>
    <th>Agregar Capitulos </th>
    </tr>
    <?php
   
    include '../config/conexionBD.php';
    $sql = "SELECT *
    FROM libros";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
        echo "<tr>";
        echo " <td>" . $row["lib_nombre"] . "</td>";
        echo " <td>" . $row['lib_ISBM'] ."</td>";
        echo " <td>" . $row['lib_numerop'] . "</td>";
        echo " <td> <a href='agregarCap.php?codigo=" . $row['lib_codigo'] . "'>Agregar Capitulos</a> </td>";echo "</tr>";
        echo "</tr>";
        }
    } else {

        echo "<tr>";
        echo " <td colspan='3'> No existen libros registradas en el sistema </td>";
        echo "</tr>";
        }

        $conn->close();
    ?>
    </table>
</body>
</html>