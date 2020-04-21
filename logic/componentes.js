ko.components.register('componente-prueba',{
    viewModel: function(parametros){
        this.titulo = parametros ? parametros.titulo : 'Este componente no recibe parametros';
        this.texto = parametros ? parametros.texto : 'Este texto es de caja';
    },
    template: '<div>'+
        '<h1 data-bind="text: $data.titulo"></h1>'+
        '<p data-bind="text: texto"></p>'+
    '</div>'
});

$(document).ready(()=>{
    ko.applyBindings();
});