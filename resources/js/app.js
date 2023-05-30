//Import Bootstrap File
import './bootstrap';

// Import our custom CSS
import '../sass/app.scss'

// import alpine js
//import 'alpinejs';
window.addEventListener('notify', event => { // notificaciones
    const { type, message } = event.detail;
    Notiflix.Notify[type](message);
});

window.confirmDelete = function (recordId) {
    Notiflix.Confirm.show(
        'Confirmation Delete',
        '¿Are you sure you want to delete this record? ',
        'YES',
        'No',
        function () {
            // Crear evento personalizado
            var loadingEvent = new CustomEvent('loading', {
                detail: {
                    type_loading: 'hourglass',
                    seg: 2600,
                }
            });

            // Emitir evento personalizado
            window.dispatchEvent(loadingEvent);

            window.livewire.emit('confirm-delete', recordId);
        },
        function () {
            // close cancel user function
        },
        {
            backOverlayColor: 'rgba(0,0,10,0.5)', // Cambia este color a lo que desees
            cssAnimationStyle: 'zoom',
            textColor: '#fff',
            //className: 'bg-dark',
            backgroundColor: '#520281',
            cssAnimation: true,
            messageColor: '#56c080',
            okButtonBackground: '#f7086b'
        }
    );
}


window.addEventListener('loading', event => {
    const { type_loading, seg } = event.detail;
    /*    
        Loading.standard();
        Loading.hourglass();
        Loading.circle();
        Loading.arrows();
        Loading.dots();
        Loading.pulse();
    */
    if (Notiflix.Loading[type_loading]) {
        Notiflix.Loading[type_loading]('Loading...');
        /*
        setTimeout(() => {
            Notiflix.Loading.remove();            
        }, seg);
        */

        Notiflix.Loading.remove(seg);
    } else {
        console.error(`Loading type "${type_loading}" does not exist.`);
    }
});

