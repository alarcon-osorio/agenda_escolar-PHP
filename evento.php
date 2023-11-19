    <?php
        include 'includes/header.php';
        include 'includes/nav.php';
        include 'includes/conect.php';
        $sql_eventos = "SELECT * FROM eventos WHERE 1";
        $result_eventos = $conn->query($sql_eventos);
    ?>
    <section class="registro">
        <div class="container">
            <h1>Agregar Evento</h1>
            <div class="icono">
            <img src="imagenes/Circulares Informativas.jpg" height="99px" width="99px" alt="circulares">
            </div>
        </div>
    </section>
    <section class="agenda" id="agenda">       
        <div class="event-form">            
            <input type="date" id="eventDate">
            <input type="time" id="eventTime">
            <br>
            <br>
            <textarea id="eventDescription" rows="10" cols="50">Describe el evento</textarea>
            <br>
            <br>
            <button onclick="addEvent()">Agregar</button>
        </div>
    </section>
    
    <section class="tabla">
        <h2>Lista de Eventos</h2>
        <table>
            <thead>
                <tr>
                    <th>Fecha</th>
                    <th>Hora</th>
                    <th>Descripción del evento</th>    
                </tr>
            </thead>
       

            <?php
            echo '<tbody>'; 

            while ($row_eventos = $result_eventos->fetch_assoc()) {
                echo '<tr>';
                echo '<td>' . $row_eventos['fecha'] . '</td>';
                echo '<td>' . $row_eventos['hora'] . '</td>';
                echo '<td>' . $row_eventos['descripcion'] . '</td>';        
                echo '</tr>';
            }

            echo '</tbody>';

           
            ?>
        </table>
    </section> 
    <?php
        include 'includes/footer.php';
    ?>  
    <script src="js/script.js"></script>
</body>
</html>

