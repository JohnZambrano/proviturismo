<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>Nuevo mensaje del formulario de contacto</title>
    <style>
        body {
            font-family: sans-serif;
            background-color: #f4f4f4;
            color: #333;
            padding: 20px;
        }

        .container {
            max-width: 600px;
            margin: 0 auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }

        h1 {
            color: #007bff;
        }

        p {
            margin-bottom: 10px;
        }

        .message {
            padding: 15px;
            border: 1px solid #ddd;
            border-radius: 4px;
            background-color: #f9f9f9;
            white-space: pre-wrap; /* Permite saltos de línea en el mensaje */
        }

        .footer {
            margin-top: 20px;
            text-align: center;
            color: #777;
        }

        /* Estilos para hacerlo responsive (opcional) */
        @media (max-width: 500px) {
            .container {
                padding: 10px;
            }
        }
    </style>
</head>

<body>
    <div class="container">
        <h1>Nuevo mensaje desde el formulario de contacto web.</h1>

        <p><strong>Nombre:</strong> {{ $nombre }}</p>
        <p><strong>Apellido:</strong> {{ $apellido }}</p>
        <p><strong>Email:</strong> {{ $email }}</p>
        @if (isset($telefono))
        <p><strong>Teléfono:</strong> {{ $telefono }}</p>
        @endif
        <p><strong>Mensaje:</strong></p>
        <div class="message">
            {{ $mensaje }}
        </div>

        <hr>
        <p class="footer">Este correo fue enviado desde el formulario de contacto de ProviTurismo.</p>
    </div>
</body>

</html>