<?php
    include 'includes/header.php';
    include 'includes/nav.php';
    include 'includes/conect.php';
    $sql_estudiantes = "SELECT * FROM estudiantes";
    $result_estudiantes = $conn->query($sql_estudiantes);

    $sql_asistencia = "SELECT * FROM parametros WHERE tipo = 'asistencia'";
    $result_asistencia = $conn->query($sql_asistencia);
?>  
    <section class="registro">
        <div class="container">
            <h1>Registro de Asistencia</h1>
            <div class="icono">
                <img src="iconos/calendar.svg" height="55px" width="55px" alt="iconos">
            </div>
        </div>
    </section>
    <section class="tabla">
        <table>
            <thead>
                <tr>
                    <th>Nombre</th>
                    <th>Curso</th>
                    <th>Fecha</th>
                    <th>Estado</th>
                </tr>
            </thead>
        <?php
            echo '<tbody>';

            while ($row_estudiantes = $result_estudiantes->fetch_assoc()) {
                echo '<tr>';
                echo '<td>' . $row_estudiantes['nombres'] . " " . $row_estudiantes['apellidos'] . '</td>';
                echo '<td>' . $row_estudiantes['curso'] . '</td>';
                echo '<td> 
                        <input type="date" id="eventDate">
                        <input type="time" id="eventTime"> 
                      </td>';
                echo '<td> <select>';

                while ($row_asistencia = $result_asistencia->fetch_assoc()) {
                    echo '<option value=' . $row_asistencia['id'] . '>'. $row_asistencia['descripcion'] .'</option>';
                }

                echo '</select>';
                echo ' || ';                
                echo '<button type="submit">Enviar</button>';
                echo '</td>';                
                echo '</tr>';                

                // Reinicia el puntero del resultado para la siguiente iteración del bucle externo
                $result_asistencia->data_seek(0);
            }

            echo '</tbody>';
        ?>
        </table>
    </section>    
    <?php
        include 'includes/footer.php';
    ?>  
</body>
</html>
