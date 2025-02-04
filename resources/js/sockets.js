window.Echo.channel('chat')
    .listen('MessageSent', (event) => {
        console.log(event);
    });

window.Echo.channel('my-channel')
    .listen('OrderUpdated', (event) => {
        console.log(event);
    });


window.Echo.private('order-private')
    .listen('OrderUpdated', (event) => {
        console.log('Evento recibido en canal privado:', event);
    }).error(error => {
    console.error('Error al escuchar el canal:', error);
});
