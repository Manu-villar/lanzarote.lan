<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario</title>
</head>

<body>
    <form action="/procesar-datos" method="POST">
        @csrf
        <input type="text" name="nombre" placeholder="Nombre">
        <input type="text" name="edad">
        <button type="submit">Enviar</button>
    </form>
</body>

</html>