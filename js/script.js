function addEvent(){
    const eventDate = document.getElementById('eventDate').value;
    console.log(eventDate);
    const eventTime = document.getElementById('eventTime').value;
    console.log(eventTime);
    const eventDescription = document.getElementById('eventDescription').value;
    console.log(eventDescription);

    if (eventDate == "" || eventTime == null || eventDescription == null ){
        alert("Campos obligatorios");
    }else{
        const data = {
            eventDate: eventDate,
            eventTime: eventTime,
            eventDescription: eventDescription
        };

       // Realizar la solicitud POST al archivo PHP
        fetch('calendarioAdd.php', {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json'
            },
            body: JSON.stringify(data)
        })
        .then(response => response.json())
        .then(result => {
            console.log(result); // Puedes imprimir la respuesta en la consola del navegador
        })
        .catch(error => {
            console.error('Error:', error);
        });
    }
};