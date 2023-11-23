<?php
include('db.php');
$usuario=@$_POST['usuario'];
$contraseña=@$_POST['contraseña'];

$consulta="SELECT*FROM usuarios where usuario='$usuario' and password='$contraseña'";
$resultado=mysqli_query($conexion,$consulta);

$filas=mysqli_num_rows($resultado);

if($filas){
  
    header("location:home.html");

}else{
    ?>
    <?php
    include("index.html");

  ?>

  <?php
}
mysqli_free_result($resultado);
mysqli_close($conexion);
