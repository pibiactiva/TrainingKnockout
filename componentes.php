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
        <script type="text/javascript" src="./logic/componentes.js"></script>
        <link type="text/css" rel="stylesheet" href="./styles/general.css">
    </head>
    <body>
        <div class="p-3">
            <a class="btn btn-info" href="./">HOME</a>
        </div>
        <!-- COMPONENTE SIN PARAMETROS -->
        <div class="p-3" data-bind="component: 'componente-prueba'"></div>
        <div class="p-3" data-bind="component: {
            name: 'componente-prueba',
            params: {
                titulo: 'Este componente recibe parametros',
                texto: 'Este texto lo recibi por parametros'
            }
        }"></div>
    </body>
</html>