Swal.fire({
    html: 'Para la entrega de tu producto, <a href="client/politics">ingresa aqui</a> para mayor informacion .',
    confirmButtonText: 'Acepto',
    icon: 'success',
    padding: '1rem',
    backdrop: true,
    toast: true,
    position: 'bottom-start',
    allowOutsideClick: false,
    allowEscapeKey: false,
    allowEnterKey: false,
    stopKeydownPropagation: false,

    showCloseButton: false,
    showCancelButton: false,
    showConfirmeButton: true,
    closeButonArialLabel: 'Cerrar esta alerta',

    customClass: {
        content: 'content-class'
    }

});
