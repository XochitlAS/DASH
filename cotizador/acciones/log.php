<?php 

include 'conexiondb.php';
if($_POST){
    $usuario = $_POST['usuario'];
    $password = $_POST['password'];

    $SQL = "SELECT * FROM usuarios WHERE usuario='$usuario' AND password='$password'";

    $resultado = $conexion->query($SQL);
    $num = $resultado->num_rows;

    if($num > 0){
        $row = $resultado->fetch_assoc();
        session_start();
        $_SESSION['id'] = $row['id_usuario'];
        $_SESSION['user'] = $row['usuario'];  
        $_SESSION['nivel'] = $row['nivel'];  
        $conexion->close();    
        header('location: ../home.php');
    }
    else{
        header('location: ../index.php');
    }


}

?>