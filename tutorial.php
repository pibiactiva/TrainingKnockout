<html>
    <head>
        <link rel="icon" href="./favicon.ico">
        <!-- librerias -->
            <link rel="stylesheet" href="./libraries/bootstrap/bootstrap.css">
            <link rel="stylesheet" href="./libraries/bootstrap/bootstrap-editor.css">
            <script src="./libraries/jquery/jquery.js"></script>
            <script src="./libraries/bootstrap/bootstrap.js"></script>
            <script src="./libraries/knockout/knockout.min.js"></script>
        <!-- fin librerias -->
        <script type="text/javascript" src="./logic/tutorial.js"></script>
        <link type="text/css" rel="stylesheet" href="./styles/general.css">
    </head>
    <body>
        <div class="p-3">
            <a class="btn btn-info" href="./">HOME</a>
        </div>
        <div class="p-3 row">
            <div class="col-6">
                <!-- <p>Nombre: <strong>todo</strong></p>
                <p>Apellido: <strong>todo</strong></p>
                <p>Nombre completo: <strong>todo</strong><p> -->
                <p>Nombre: <strong data-bind="text: nombre">todo</strong></p>
                <p>Apellido: <strong data-bind="text: apellido">todo</strong></p>
                <p>Nombre completo: <strong data-bind="text: nombreCompleto">todo</strong><p>
            </div>
            <div class="col-6">
                <input class="m-2 row" data-bind="value: nombre"></input>
                <input class="m-2 row" data-bind="value: apellido"></input>
                <button class="m-2 row" data-bind="click: toUpperApellido">Apellido a mayuscula</button>
            </div>
        </div>
    </body>
</html>