<?php
    include 'includes/header.php';
?>  
</header>
<body>
    <h2>Iniciar Sesión</h2>
    <form action="index.php" method="POST">
        <label for="username">Nombre de Usuario:</label>
        <input type="text" id="username" name="username" required><br><br>
        <label for="password">Contraseña:</label>
        <input type="password" id="password" name="password" required><br><br>
        <input type="submit" value="Iniciar Sesión">
        <br>
        <br>
        <a href="registro.php">Registrarse</a>
    </form>
</body>
</html>
