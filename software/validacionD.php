validacionD.php
<?php
$usuario=$_POST['usuario'];
$contrasena=$_POST['contrasena'];
session_start();
$_SESSION['usuario']=$usuario;

include("conexion.php");

$consulta ="SELECT*FROM maestros where maestros = '$usuario' and contrasena='$contrasena'";
$resultado=mysqli_query($conexion,$consulta);

$filas = mysqli_num_rows($resultado);

if($filas){
    header("location:menuDocente.php");
}else{
    ?>
    <?php
    include("loginDocente.php");
    
    echo"error al ingresar usuario y/o Contraseña";
    
}
mysqli_free_result($resultado);
mysqli_close($conexion)
?>