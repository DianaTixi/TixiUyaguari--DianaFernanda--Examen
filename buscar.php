<?php
 //incluir conexión a la base de datos
 include "config/conexionBD.php";
 $cedula = $_GET['cedula'];
 //echo "Hola " . $cedula;

 $sql = "SELECT * FROM autores WHERE aut_codigo=$cedula";
//cambiar la consulta para puede buscar por ocurrencias de letras
 $result = $conn->query($sql);
 echo " <table style='width:100%'>
 <tr>
 <th style='color:black'>Nombre</th>
 <th style='color:black'>Nacionalidad</th>
 <th style='color:black'></th>
 <th style='color:black'></th>
 <th style='color:black'></th>
 </tr>";
 if ($result->num_rows > 0) {
 while($row = $result->fetch_assoc()) {

 echo "<tr>";
 echo " <td style='color:black' >" . $row['aut_nombre'] . "</td>";
 echo " <td style='color:black'>" . $row['aut_nacionalidad'] ."</td>";;
 echo "</tr style='color:black'>";
 }
 } else {
 echo "<tr>";
 echo " <td colspan='2'> No existen usuarios registradas en el sistema </td>";
 echo "</tr>";
 }
 echo "</table>";
 $conn->close(); 