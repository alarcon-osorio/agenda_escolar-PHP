<?php
    include 'includes/header.php';
    include 'includes/nav.php';
    include 'includes/conect.php';    

    $sql_horario = "SELECT * FROM horario";
    $result_horario = $conn->query($sql_horario);
    
?>   
<section class="registro">
        <div class="container">
            <h1>Horario escolar</h1>
            <div class="icono">
            <img src="imagenes/calendario.jpg" height="100px" width="100px" alt="circulares">
            </div>
        </div>
    </section>

<section class="horario">
  <body>
        <table >
          <thead>
              <tr>
                <th>Hora</th>
                <th>Lunes</th> 
                <th>Martes</th> 
                <th>Miercoles</th> 
                <th>Jueves</th> 
                <th>Viernes</th> 
              </tr>
          </thead>        
           
          <?php
            echo '<tbody>';

              while ($row_horario = $result_horario->fetch_assoc()) {   
                echo '<tr>';   
                  echo '<td>' . $row_horario['hora'] . '</td>';          
                  echo '<td>' . $row_horario['lunes'] . '</td>';
                  echo '<td>' . $row_horario['martes'] . '</td>';
                  echo '<td>' . $row_horario['miercoles'] . '</td>';
                  echo '<td>' . $row_horario['jueves'] . '</td>';
                  echo '<td>' . $row_horario['viernes'] . '</td>';
                echo '</tr>';
              }
            
            echo '</tbody>'; 
            ?>           
        </tr>
       
      </table>
      </section>  

  <?php
    include 'includes/footer.php';
  ?> 
  
</body>
</html>