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
        <script type="text/javascript" src="./logic/working-with-lists-and-collections.js"></script>
        <link type="text/css" rel="stylesheet" href="./styles/general.css">
    </head>
    <body>
        <div class="p-3">
            <a class="btn btn-info" href="./">HOME</a>
        </div>
        <div class="p-3">
            <h2>Pasajeros(<strong data-bind="text: pasajeros().length"></strong>)</h2>
            <table class="table">
                <thead class="thead-dark">
                    <th>Nombre</th>
                    <th>Comida</th>
                    <th>Precio</th>
                    <th>Acciones</th>
                </thead>
                <tbody data-bind="foreach: pasajeros">
                    <tr>
                        <td><input data-bind="value: nombre"></td>
                        <td>
                            <select data-bind="options: $root.comidasDisponibles, optionsText: 'comida', value: comidaDisponible"></selec>
                        </td>
                        <td data-bind="text: precioFormateado"></td>
                        <td><button data-bind="click: $root.eliminarPasajero" class="btn btn-danger">ELIMINAR PASAJERO</button></td>
                    </tr>
                </tbody>
            </table>
            <!-- TENER CUIDADO, EN CUENTA PIDO EL VALOR INSTANTANEO DE LA VARIABLE, EN UNA RELACION VISTA-MODELO RELACIONO LA VARIABLE A LA FUNCION -->
            <h3 data-bind="visible: precioTotal() > 1000">Total: $ <strong data-bind="text: precioTotal"></strong></h3>
            <button data-bind="visible: pasajeros().length < 3, click: agregarPasajero" class="btn btn-primary">AGREGAR PASAJERO</button>
        </div>
    </body>
</html>