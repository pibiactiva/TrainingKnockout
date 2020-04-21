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
        <script type="text/javascript" src="./logic/single-page-application.js"></script>
        <link type="text/css" rel="stylesheet" href="./styles/general.css">
        <link type="text/css" rel="stylesheet" href="./styles/single-page-application.css">
    </head>
    <body>
        <div class="p-3">
            <a class="btn btn-info" href="./">HOME</a>
        </div>
        <div class="p-3">
            <ul class="folders" data-bind="foreach: carpetas">
                <!-- $data se usa para acceder al contenido del contexto y $root para el padre de mi contexto -->
                <li data-bind="text: $data,
                    css: {selected: $data == $root.carpetaID()},
                    click: $root.irACarpeta">
                </li>
            </ul>
            <!-- SE VA A OCULTAR CUALQUIER ELEMENTO HTML CUYA VARIABLE DE CONTEXTO SEA NULA Y ESTO PUEDE SERVIRNOS PARA CAMBIAR EL CONTENIDO
            DE LA PANTALLA DEPENDIENDO DE LAS VARIABLES QUE TENGA CARGADAS-->
            <!-- tabla donde internamente usa el contexto datosDeCarpeta -->
            <table class="mails" data-bind="with: datosDeCarpeta">
                <thead>
                    <tr>
                        <th>Archivo</th>
                        <th>Tipo</th>
                        <th>Tamaño</th>
                    </tr>
                </thead>
                <!-- recorrer por cada item del contenido de mi contexto, en este caso datosDeCarpeta -->
                <tbody data-bind="foreach: $data">
                    <tr data-bind="click: $root.obtenerArchivo">
                        <td data-bind="text: archivo"></td>
                        <td data-bind="text: tipo"></td>
                        <td data-bind="text: tamaño + ' KB'"></td>
                    </tr>     
                </tbody>
            </table>
            <!-- nuevo contexto que usa la variable contenidoDeArchivo como nuevo contexto -->
            <div class="viewMail" data-bind="with: contenidoDeArchivo">
                <div class="mailInfo">
                    <h1 data-bind="text: title"></h1>
                </div>
                <p class="message" data-bind="html: content" />
                <p class="message" data-bind="text: firma" />
            </div>
        </div>
    </body>
</html>