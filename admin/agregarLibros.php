<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registar Libro</title>
</head>
<body>
    <?php

    //incluir conexión a la base de datos
    include '../config/conexionBD.php';
    $nombre = isset($_POST["nombre"]) ? mb_strtoupper(trim($_POST["nombre"]), 'UTF-8') : null;
    $ismb = isset($_POST["ismb"]) ? trim($_POST["ismb"]): null;
    $numerop = isset($_POST["pag"]) ? trim($_POST["pag"]) : null;
    
    //Ingresar los campos la base de datos 
    $sql = "INSERT INTO libros VALUES (0,  '$nombre', '$ismb', '$numerop',null)";
    if ($conn->query($sql) === TRUE) {
        header("location:listar.php");
    } else {
        if($conn->errno == 1062){
            echo "<p class='error'>La persona con la cedula $nombre ya esta registrada en el sistema </p>";
        }else{

            echo "<p class='error'>Error: " . mysqli_error($conn) . "</p>";
        }
    }
 //cerrar la base de datos
    $conn->close();
    ?>
    
</body>
</html>