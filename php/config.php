<?php
/* php para permitir la conexion con la tabla de mysql con el proyecto */
$servername = "localhost";
$username = "root";
$password = "";
$db_name = "db_tib";
$conn = new mysqli($servername, $username, $password, $db_name, 3306);
if ($conn->connect_error) {
    die("Connection failed" . $conn->connect_error);
}
echo "";

?>