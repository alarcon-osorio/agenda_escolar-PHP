<?php

include 'includes/conect.php';

// Obtener los datos del cuerpo de la solicitud
$data = json_decode(file_get_contents("php://input"), true);

// Obtener los valores individuales
$eventDate = $data['eventDate'];
$eventTime = $data['eventTime'];
$eventDescription = $data['eventDescription'];

$sql_insert = "INSERT INTO eventos (id, fecha, hora, descripcion) VALUES (NULL, '$eventDate', '$eventTime', '$eventDescription'); ";
$insert = $conn->query($sql_insert);




echo json_encode($eventDescription . " " . $eventTime . " - " . $eventDate );


?>
<?php

echo "<script>
    setTimeout(function(){
        window.location.href = 'calendario.php';
    }, 0000);
</script>";
?>