<?php
try {
    $usuario = 'root';
    $pass= '';
    $conexion = new PDO('mysql:host=localhost;dbname=walker', $usuario, $pass);    
} catch (PDOException $e) {
    print "¡Error!: " . $e->getMessage() . "<br/>";
    die();
}
?>