require('./bootstrap');

require('alpinejs');

window.Echo.private('number-client-ready-to-service')
    .listen('.number-client-ready',function (event) {
        alert(`The client who has number ${event.reservation.id} should go to employee number ${event.reservation.user_id}`)
    })
