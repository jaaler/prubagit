
<?php
require_once "cn.php";
echo $_POST['contrasena'];
$nombre=$_POST['nombre'];
$edad=$_POST['edad'];
$correo=$_POST['correo'];
$comentario=$_POST['comentario'];
$usuario=$_POST['usuario'];
$contrasena=$_POST['contrasena'];


$consulta=$pdo->prepare("Insert into usuario (id,nombre,edad,correo,comentario,usuario,contrasena,fecha) 
        values(null,:nombre,:edad,:correo,:comentario,:usuario,:contrasena,curdate())");

$consulta->bindParam(':nombre',$nombre);
$consulta->bindParam(':edad',$edad);
$consulta->bindParam(':correo',$correo);
$consulta->bindParam(':comentario',$comentario);
$consulta->bindParam(':usuario',$usuario);
$consulta->bindParam(':contrasena',$contrasena);


if ($consulta->execute()) {
    echo "datos almacenados";
}else {
    echo "no se pudo almacenar datos";
}

echo "eres un animal";