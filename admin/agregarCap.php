<!DOCTYPE html>
<html>
<head>
 <meta charset="UTF-8"> 
 <title>Agregar Capitulos</title>
 <link rel="stylesheet" type="text/css" href="../css/crearU.css">
 <script src="../../../javascript/formulario.js" type="text/javascript" ></script>
</head>
<body>
<header >
        <div id="encabezado">  
            <div id="logo1">
                <img src="../imagenes/logoF.jpg"  width="250" height="150" alt="Imagen de Portada" >
            </div>
            <div id="buscar">
                <form method="get" action="https://www.google.com/search">
                <input title="busqueda" name="q" type="text" class="floatright" id="cajabusqueda" value="" size="31" 
                 maxlength="255">
                <input name="botonbusq" type="submit" class="floatright" id="botonbusqueda" value="Buscar">
                </form> 	
            </div>  
            <div id="info">
                <a href="tel:+5930998801982"><img src="../../../imagenes/contacto.png"  width="50" height="50" alt="Correo electronico" ></a>
                <a href="mailto:dtixi@est.ups.edu.ec"><img src="../../../imagenes/sobre.jpg"  width="50" height="50" alt="Contactos Telefonico" ></a>
                <button><a href="indexA.html" >Inicio</a></button>
            </div>
        </div>  
    </header>
    <nav>
            <ul class="menu_h">
                <li><a href="agregar.php" target="_blank">Agregar Usuarios</a></li>
                <li><a href="listar.php" target="_blank">Listar Usuarios</a></li>
                <li><a href="eliminarU.php" target="_blank">Eliminar Usuarios</a></li>
                <li><a href="agregarTel.php" target="_blank">Add Telefonos</a></li>
                <li><a href="cambiar_contrasena.php" target="_blank">Cambiar Contraseña</a></li>

            </ul>
    </nav>
    
 <?php
 $codigo = $_GET["codigo"];
 $sql = "SELECT * FROM libros where lib_codigo=$codigo";
 include '../config/conexionBD.php';
 $result = $conn->query($sql);

 if ($result->num_rows > 0) {

 while($row = $result->fetch_assoc()) {
 ?>
 
<section class="secciones">
<br><hr>
 <form id="formulario01" method="POST"  action="crearCap.php">
 <h2> Agregar Capitulos</h2>
 <br>
 <input type="hidden" id="codigo" name="codigo"  value="<?php echo $codigo ?>" />
 <label for="telefono">Numero Capitulos: </label>
 <input type="text" name="numerc" id="numerc" class="tel"/>
 <div id="mensaje5" class="mensaje"></div>
 <br><br>
 <label for="tipo">Titulo:</label>
 <input type="text" id="titulo" name="titulo" value="" required placeholder="Ingrese el tipo de celular ..." />
 <br><br>
 <label for="operador">Codigo Autor:</label>
 <input type="text" id="autor" name="autor" value=" " required placeholder="Ingrese la operadora ..."/>
 <br><br>
 <input type="submit" id="agregar" name="agregar" value="Agregar" />
 <input type="reset" id="cancelar" name="cancelar" value="Cancelar" />
 </form>
 </section >

 <?php
 }
 } else {
 echo "<p>Ha ocurrido un error inesperado !</p>";
 echo "<p>" . mysqli_error($conn) . "</p>";
 }
 $conn->close();
 ?> 
</body>
</html>