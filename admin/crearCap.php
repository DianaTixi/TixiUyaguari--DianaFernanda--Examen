<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>IngresarTelefono</title>
</head>
<body>
    <?php

    //incluir conexión a la base de datos
    include '../config/conexionBD.php';
    $codigo = $_POST["codigo"];
    $numero = isset($_POST["numeric"]) ? trim($_POST["numeric"]) : null;
    $tipo = isset($_POST["titulo"]) ? mb_strtoupper(trim($_POST["titulo"]), 'UTF-8') : null;
    $autor = isset($_POST["autor"]) ? trim($_POST["autor"]) : null;

    $sql = "INSERT INTO capitulos VALUES (0,  '$numero', '$tipo', '$codigo',$autor)";
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