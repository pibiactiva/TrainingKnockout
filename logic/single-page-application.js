function SinglePageMain(){
    var self = this;
    this.carpetas = ["Escritorio", "Downloads", "Documents", "Images", "Videos"];
    this.carpetaID = ko.observable('Escritorio');
    this.datosDeCarpeta = ko.observable();
    this.contenidoDeArchivo = ko.observable();

    this.irACarpeta = function(carpeta){
        self.carpetaID(carpeta);
        $.get('./ajax/'+carpeta, (data)=>{
            self.datosDeCarpeta(JSON.parse(data));
            self.contenidoDeArchivo(null);
        });
    }

    this.obtenerArchivo = function(archivo){
        $.get('./ajax/archivo1', (data)=>{
            self.contenidoDeArchivo(JSON.parse(data));
            self.datosDeCarpeta(null);
            self.carpetaID(null);
        });
    }

    this.irACarpeta('Escritorio');
}

$(document).ready(function(e){
    ko.applyBindings(new SinglePageMain());
});