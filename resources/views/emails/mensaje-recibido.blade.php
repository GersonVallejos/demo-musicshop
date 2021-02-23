<!DOCTYPE html>
<html>
    <head>
        <title>Mensaje Recibido</title>
    </head>
    <body>
        <p>Recibiste un mensaje de: {{ $mensaje['name'] }} - {{ $mensaje['email']}} </p>
        <p><strong>Asunto:</strong> {{ $mensaje['motivo'] }} </p>
        <p><strong>Contenido:</strong> {{ $mensaje['contenido'] }} </p>
    </body>
</html>