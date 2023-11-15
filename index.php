<?php
include 'includes/conect.php';
// Recupera los datos del formulario
$username = $_POST['username'];
$password = $_POST['password'];

// Verifica el inicio de sesión
$sql = "SELECT * FROM usuarios WHERE username='$username' AND password='$password'";
$result = $conn->query($sql);

if ($result->num_rows == 1) {
    $_SESSION['username'] = $username;
    header("Location: welcome.php"); // Redirige al usuario a una página de bienvenida
} else {
    echo "<script>
            alert('Nombre de usuario o contraseña incorrectos.');
			setTimeout(function(){
                window.location.href = 'login.php';
            }, 0000);
          </script>";
}

$conn->close();
?>

