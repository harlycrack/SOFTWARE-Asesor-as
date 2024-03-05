<?php
/*
$usuario = $_POST["usuario"];
$contrasena = $_POST["contrasena"];

// Consulta SQL para buscar el usuario en la base de datos
$sql = "SELECT * FROM asesorias WHERE nombre = '$usuario'";
$result = $conexion->query($sql);

// Verificar si se encontró un usuario con ese nombre de usuario
if ($result->num_rows > 0) {
    // Obtener la fila del resultado
    $row = $result->fetch_assoc();
    // Verificar la contraseña
    if (password_verify($contrasena, $row["passwd"])) {
        echo "Inicio de sesión exitoso";
        // Redirigir al usuario a la página deseada
         header("Location: menualumno.php");
    } else {
        echo "Usuario o contraseña incorrectos";
    }
} else {
    echo "Usuario o contraseña incorrectos";
}
<?php
*/
$usuario=$_POST['usuario'];
$contrasena=$_POST['contrasena'];
session_start();
$_SESSION['usuario']=$usuario;

include("conexion.php");

$consulta ="SELECT*FROM alumnos where alumnos = '$usuario' and contrasena='$contrasena'";
$resultado=mysqli_query($conexion,$consulta);

$filas = mysqli_num_rows($resultado);

if($filas){
    header("location:menuAlumno.php");
}else{
    ?>
    <?php
    include("loginalumno.php");
    
    echo"error al ingresar usuario y/o Contraseña";
    
}
mysqli_free_result($resultado);
mysqli_close($conexion)
?>
