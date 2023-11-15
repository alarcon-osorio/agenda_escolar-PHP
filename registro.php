<?php
    include 'includes/header.php';
?>  
</header>
<body>
    <h2>Registrarse en Agenda</h2>
    <form action="index.php" method="POST">
        <label for="nombres">Nombres:</label>
        <input type="text" id="nombres" name="nombres" required><br><br>
        <label for="apellidos">Apellidos:</label>
        <input type="text" id="apellidos" name="apellidos" required><br><br>
        <label for="perfil">Perfil:</label>
        <select name="perfil" id="perfil">
            <option value="estudiante">Estudiante</option>
            <option value="profesor">Profesor</option>
        </select>
        <label for="username">Usuario:</label>
        <input type="text" id="username" name="username" required><br><br>        
        <label for="password">Contraseña:</label>
        <input type="password" id="password" name="password" required><br><br>
        <label for="password_confirm">Confirmar Contraseña:</label>
        <input type="password" id="password_confirm" name="password_confirm" required><br><br>
        <input type="submit" value="Registrarse">
        <br>
        <br>
        <a href="login.php">Iniciar Sesión</a>
    </form>
</body>
</html>