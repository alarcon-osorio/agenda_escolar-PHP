<?php
    include 'includes/header.php';
    include 'includes/nav.php';
    include 'includes/conect.php';    

    $sql_horario = "SELECT * FROM horario";
    $result_horario = $conn->query($sql_horario);
    
?>   
<section class="horario">
  <body>
      <h1 class="title">Horario escolar </h1>
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