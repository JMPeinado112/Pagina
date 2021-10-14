<?php
$usuario = $_GET['usuario'];
$contraseña = $_GET['contraseña'];  //$_GET muestra los datos en el link, POST NO
$image ="";
$probar= $_GET['foto'];
$typo= pathinfo($image,PATHINFO_EXTENSION);

echo "El nombre es ".$usuario;

$servidor="localhost";
$usuarioBD="root";
$password="usbw";
$bd="daw2";
$image = $probar;
$imageData = base64_encode(file_get_contents($image));
$src = 'data: ' . ';base64,' . $imageData;
echo '<img src="' . $src . '">';

$con=mysqli_connect($servidor,$usuarioBD,$password,$bd);
if(!$con){
die("no se ha podido realizar la conexion".mysqli_connect_error());

}else{
    mysqli_set_charset($con,"utf8");
    echo "se ha conectado correctamente";
    $sql="INSERT INTO `usuarios` (`id`, `usuario`, `contraseña`, `foto`) VALUES (null,'".$usuario."', '".$contraseña."','".$src."')";
    $consulta=mysqli_query($con,$sql);
    if(!$consulta){
        die("no se ha podido realizar el insert");
    }else{
        echo "la consulta o insert se ha realizado correctamente";
    }

?>
<!DOCTYPE html>
<html lang = "en">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initalice">
    <title>Document</title>


</head>
<body>
    <table>
        <?php
        $sql2="SELECT * FROM `usuarios` WHERE 1";
        $consulta=mysqli_query($con,$sql2);
        while($fila=$consulta->fetch_assoc()){
            echo "<tr>";
            echo "<td>".$fila["id"]."</td>";
            echo "<td>".$fila["usuario"]."</td>";
            echo "<td>".$fila["contraseña"]."</td>";
            echo "</tr>";
        }
        ?>


        

    </table>
    </body>
    </html>
   
<?php
}
?>