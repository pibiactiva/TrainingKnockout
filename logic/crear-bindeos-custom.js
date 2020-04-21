// MODIFICA EL BINDEO DE CAJA DE FADE VISIBLE PARA QUE SE COMPORTE DE MANERA DISTINTA EN EL PRIMER BINDEO A CUANDO SE ACTUALIZA UNA VARIABLE BINDEADA A
// LOS ELEMENTOS HTML
ko.bindingHandlers.fadeVisible = {
    init: function(elemento, valorPorParametro) {
        // Start visible/invisible according to initial value
        var deberiaMostrar = valorPorParametro();
        $(elemento).toggle(deberiaMostrar);
    },
    update: function(elemento, valorPorParametro) {
        // On update, fade in/out
        var deberiaMostrar = valorPorParametro();
        deberiaMostrar ? $(elemento).fadeIn() : $(elemento).fadeOut();
    }
};


ko.bindingHandlers.botonJQuery = {
    init: function(elemento) {
       $(elemento).button();
    },
    update: function(elemento, valorPorParametro) {
        var valorActual = valorPorParametro();
        $(elemento).button("option", "disabled", valorActual.enable === false);
    }    
};
//
function Respuesta(texto){
    this.textoDeRespuesta=texto;
    this.puntos = ko.observable(1);
}

function CustomBindingMain(pregunta, respuestas, puntosMaximos){
    this.puntosDisponibles=[1,2,3,4,5];
    this.pregunta = pregunta;
    this.respuestas = $.map(respuestas, function(texto) { return new Respuesta(texto) });
    this.puntosMaximos = puntosMaximos;

    this.puntosUsados = ko.computed(function(){
        var i, total = 0;
        for(i = 0; i < this.respuestas.length; i++){
            total += this.respuestas[i].puntos();
        }
        return total;
    }, this);

    this.guardar = function(){
        alert('Guardado');
    }
}

$(document).ready(function(e){
    ko.applyBindings(new CustomBindingMain('¿Porque eligio hacer el curson conmigo?',
    ['No se ingles', 'Me obligaron en la empresa', 'la verdad ni yo se'],
    10));
});