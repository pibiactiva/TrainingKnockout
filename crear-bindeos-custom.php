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
        <script type="text/javascript" src="./logic/crear-bindeos-custom.js"></script>
        <link type="text/css" rel="stylesheet" href="./styles/general.css">
        <link type="text/css" rel="stylesheet" href="./styles/crear-bindeos-custom.css">
    </head>
    <body>
        <div class="p-3">
            <a class="btn btn-info" href="./">HOME</a>
        </div>
        <div class="p-3">
            <h3 data-bind="text: pregunta"></h3>
            <p>Por favor distribuir <b data-bind="text: puntosMaximos"></b> puntos entre las siguientes opciones</p>

            <table>
                <thead><tr><th>Opcion</th><th>Importancia</th></tr></thead>
                <tbody data-bind="foreach: respuestas">
                    <tr>
                        <td data-bind="text: textoDeRespuesta"></td>
                        <td><select data-bind="options: $root.puntosDisponibles, value: puntos"></select></td>
                    </tr>    
                </tbody>
            </table>

            <h3 data-bind="fadeVisible: puntosUsados() > puntosMaximos">Usastes muchos puntos!!!</h3>
            <p>Tenés <b data-bind="text: puntosMaximos - puntosUsados()"></b> puntos de sobra.</p>
            <button data-bind="enable: puntosUsados() <= puntosMaximos, click: guardar">Terminar</button>
        </div>
    </body>
</html>