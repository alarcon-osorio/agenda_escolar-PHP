<?php    
    include 'includes/header.php';
    include 'includes/nav.php';
    include 'includes/conect.php';
    $sql_docentes = "SELECT * FROM docentes";
    $result_docentes = $conn->query($sql_docentes);

    $sql_cursos = "SELECT * FROM cursos";
    $result_cursos = $conn->query($sql_cursos); 
?>    
    <section id="inicio">
      <h2>Bienvenido a nuestra I.E Francisco de Paula Santander</h2>
      <p>Somos una institución comprometida con la educación de calidad...</p>
  </section>

  <section id="cursos">
      <h2>Nuestros Cursos</h2>
      
      <ul>
        <?php
            while ($row_cursos = $result_cursos->fetch_assoc()) {
                echo '<li>' . $row_cursos['nombre'] . " : " . $row_cursos['descripcion'] . '</li>';
            }
        ?>
      </ul>
  </section>

  <section id="docentes">
      <h2>Nuestros Docentes</h2>
      <ul>
        <?php
            while ($row_docentes = $result_docentes->fetch_assoc()) {
                echo '<li>' . $row_docentes['nombres'] . " " . $row_docentes['apellidos'] . " - " . $row_docentes['descripcion'] . '</li>';
            }
        ?>
      </ul>
  </section>    


  <?php
    include 'includes/footer.php';
  ?> 
  
</body>
</html>