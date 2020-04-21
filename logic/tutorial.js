function MainTutorial(){
    //hacer variables observables para que se actualizen con el dom, de esta forma knockout maneja el cambio de variables para actualizar en
    //todo el body que decida relacionar
    // this.nombre = "pablo";
    // this.apellido = 'iglesias';

    this.nombre = ko.observable("Pablo");
    this.apellido = ko.observable("Fernandez");
    //computed lo usamos para relacionar el retorno de una funcion, junto con los cambios en las variables del this, asi al actualizar una variable
    //que lo componen, este impacte en la vista en tiempo real relacionando directamente la variable que contiene el computed con elementos del body
    this.nombreCompleto = ko.computed(function(){
        return this.nombre() + ' ' + this.apellido();
    }, this);
    //Creamos funciones para el this de nuestra funcion principal, para relacionarlas a atributos que ejecutan funciones, como son los eventos de
    //un elemento
    this.toUpperApellido = function(){
        var apellidoToUpper = this.apellido().toUpperCase();
        this.apellido(apellidoToUpper);
    }
}

$(document).ready(function(e){
    ko.applyBindings(new MainTutorial());
});