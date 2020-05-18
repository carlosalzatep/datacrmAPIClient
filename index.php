<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cliente API</title>

</head>
<body>

<div class="content text-center m-2">
    <button id="boton" type="button" class="btn btn-primary">Cargar Contactos</button>
    <img id="loading" src="src/img/loading.gif">
    <div id="listaContactos" class="mt-3"></div>
</div>


<!-- jQuery y js -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="src/script.js"></script>

<!-- CSS -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
<style>
    #loading{
        display: inline;
        width: 50px;
    }
</style>

</body>
</html>