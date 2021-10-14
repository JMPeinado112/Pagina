<?php
$usuario = $_GET['usuario'];
$contraseña = $_GET['contraseña'];  //$_GET muestra los datos en el link, POST NO

$servidor="localhost";
$usuarioBD="root";
$password="usbw";
$bd="daw2";
$sesion = false;

$con=mysqli_connect($servidor,$usuarioBD,$password,$bd);
if(!$con){
die("no se ha podido realizar la conexion".mysqli_connect_error());

}else{
    mysqli_set_charset($con,"utf8");
    $sql="SELECT * FROM `usuarios` WHERE 1";
    $consulta=mysqli_query($con,$sql);
    while($fila=$consulta->fetch_assoc()){
    if($fila['usuario'] == $usuario && $fila['contraseña'] == $contraseña){
        $nickname =$fila['usuario'];
        echo "<br></br><img src='" .$fila['foto']. "'>";
        $sesion = true;
    }
    }
    if($sesion == true){
        echo "Se ha iniciado sesion correctamente, bienvenido " .$nickname; 
    }else{
        echo"no se ha iniciado sesion";
    }
}
?>