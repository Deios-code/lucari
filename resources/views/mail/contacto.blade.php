{{-- resources/views/emails/contacto.blade.php --}}
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nuevo Mensaje de Contacto</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #fff;
            padding: 20px;
        }
        .container {
            background-color: #f5f5f5;
            border-radius: 5px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            max-width: 600px;
            margin: 0 auto;
        }
        h1 {
            color: #333333;
            text-align: center;
        }
        p {
            color: #111;
            margin: 0
        }
        .footer {
            font-size: 12px;
            color: #fff;
            text-align: center;
            padding: 20px 10px;
            background-color: #000000;
        }
        .contenido{
            margin: 20px 0;
            padding: 20px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1 style="padding: 20px;">Nuevo Mensaje de Contacto</h1>
        <div class="contenido">
            <p><strong>Nombre:</strong> {{ $datos['nombre'] }}</p>
            <p><strong>Email:</strong> {{ $datos['email'] }}</p>
            <p><strong>Telefono:</strong> {{ $datos['telefono'] }}</p>
            <p><strong>Mensaje:</strong></p>
            <p>{{ $datos['mensaje'] }}</p>
        </div>

        <p class="footer">Este mensaje fue enviado desde el formulario de contacto de tu sitio web.</p>
    </div>
</body>
</html>
