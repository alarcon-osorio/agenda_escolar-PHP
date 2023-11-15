<?php
    include 'includes/header.php';
    include 'includes/nav.php';
?>  
    <section class="agenda" id="agenda">
        <div class="calendar">
            <!-- Aquí puedes generar dinámicamente los días y las horas -->
        </div>

        <di class="imagen">
            <img src="imagenes/Circulares Informativas.jpg" height="99px" width="99px" alt="circulares">
        </di>
        <div class="event-form">
            <h2>Agregar Evento</h2>
            <input type="date" id="eventDate">
            <input type="time" id="eventTime">
            <br>
            <br>
            <textarea name="textarea" rows="10" cols="50">Describe el evento</textarea>
            <br>
            <br>
            <button onclick="addEvent()">Agregar</button>
        </div>
    
        <div class="event-list">
            <h2>Lista de Eventos</h2>
            <ul id="events">
                <!-- Aquí puedes mostrar los eventos agregados -->
            </ul>
        </div>
    </section>
    <?php
        include 'includes/footer.php';
    ?> 
  
    <script src="script.js"></script>
</body>
</html>

