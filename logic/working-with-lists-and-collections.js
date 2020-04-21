function Pasajero(nombre, comidaDisponible){
    //contexto dentro de pasajeros
    this.nombre = nombre;
    this.comidaDisponible = ko.observable(comidaDisponible);
    //computado de precio para formatearlo de forma tal que tenga el simbolo y escuche los cambios en la variable precio
    this.precioFormateado = ko.computed(function(){
        return '$ ' + this.comidaDisponible().precio;
    }, this);
}

function MainWorkingWithListsAndCollections(){
    var self = this;
    this.comidasDisponibles = [
        {comida: "carne con papas", precio: 500},
        {comida: "langosta", precio: 600},
        {comida: "sorrentinos", precio: 420}
    ];
    //array de knockout recorrible por un foreach
    this.pasajeros = ko.observableArray([
        new Pasajero("Pablo Fernandez", this.comidasDisponibles[0]),
        new Pasajero("Juan Acosta", this.comidasDisponibles[2]),
    ]);
    
    //este computed es para obtener un valor a traves de una logica matematica, y cada vez que se actualize el this, va a realizar un cambio sobre
    //esta variable de esta forma manteniendo actualizado el total y actualizando tambien los elementos HTML bindeados a esta variable
    this.precioTotal = ko.computed(function(){
        var i, total = 0;
        for(i = 0; i < this.pasajeros().length; i++){
            total += this.pasajeros()[i].comidaDisponible().precio;
        }
        return total;
    }, this);


    //funcion para bindear a atributos de elementos que esperan una funcion
    this.agregarPasajero = function(){
        this.pasajeros.push(
            new Pasajero("Pepe Mancilla", this.comidasDisponibles[1]),
        );
    }

    this.eliminarPasajero = function(seat){
        self.pasajeros.remove(seat);
    }
}

$(document).ready(function(e){
    ko.applyBindings(new MainWorkingWithListsAndCollections());
});