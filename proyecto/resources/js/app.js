//Configuración de DropZone
import Dropzone from "dropzone";

Dropzone.autoDiscover=false;

const dropzone = new Dropzone ('#dropzone', {
    dictDefaultMessage: 'Sube aquí tu imagen',
    acceptedFiles: '.png, .jpg, .jpeg, .gif',
    addRemoveLinks: true,
    dictRemoveFile: 'Borrar Archivo',
    maxFiles: 1,
    uploadMultiple: false,

    init: function () {
        if(document.querySelector('[name="imagen"]').value.trim()) {
            const imagenPublicada = {}
            imagenPublicada.size = 1234;
            imagenPublicada.name = document.querySelector('[name="imagen"]').value;

            this.options.addedfile.call(this, imagenPublicada);
            this.options.thumbnail.call(this, imagenPublicada, '/uploads/${imagenPublicada.name}')

            imagenPublicada.previewElement.classList.add('dz-success', 'dz-complete');
        }
    },
})

//EVENTOS DE DROPZONE
dropzone.on('sending', function(file, xhr, formdata){
    console.log(file);
});

//EVENTO DE ENVIO DE CORREO CORRECTO
dropzone.on('success', function(file, response){
    document.querySelector('[name="imagen"]').value = response.imagen;
});

//EVENTO DE REMOVER UN ARCHIVO
dropzone.on('removedfile', function() {
    document.querySelector('[name="imagen"]').value = '';
});

//EVENTO DE ENVIO CUANDO HAY ERROR
dropzone.on('error', function(file, message){
    console.log(message);
});