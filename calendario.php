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
    
        <div class="event-list">
            <h2>Lista de Eventos</h2>
            <ul id="events">
            <?php

                while ($row_eventos = $result_eventos->fetch_assoc()) {
                   
                    echo '<br>'; 
                    echo '- Fecha: ' . $row_eventos['fecha'] . '<br>';
                    echo '- Hora: ' . $row_eventos['hora'] . '<br>';
                    echo '- Descripcion: ' . $row_eventos['descripcion'] . '<br>';
                }
            ?>
            </ul>
        </div>
    </section>
    <?php
        include 'includes/footer.php';
    ?>  
    <script src="js/script.js"></script>
</body>
</html>

