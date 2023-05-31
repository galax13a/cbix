//Import Bootstrap File
import './bootstrap';

// Import our custom CSS
import '../sass/app.scss'

// import alpine js





window.addEventListener('notify', event => { // notificaciones y modals
    const { type, message, OpenWin36 } = event.detail;
    Notiflix.Notify[type](message);
    if (OpenWin36) {// abrir ventana modal         
        openModal(OpenWin36);
    }
    function openModal(Wincr36) {
        var myModal = new bootstrap.Modal(document.getElementById(Wincr36), {})
        myModal.show();
    }
});



// keywords confirm bnt
document.addEventListener('keydown', function (event) {
    if (event.key === 'Enter') {
        var confirmYesButton = document.querySelector('#NXConfirmButtonOk');
        if (confirmYesButton && document.getElementById('NXConfirmButtonOk').style.display !== 'none') {
            event.preventDefault();
            confirmYesButton.click();
            //alert('Enter key pressed');
        }
    } else if (event.key === 'Escape') {
        var confirmNoButton = document.querySelector('#NXConfirmButtonCancel');
        if (confirmNoButton && document.getElementById('NXConfirmButtonCancel').style.display !== 'none') {
            event.preventDefault();
            confirmNoButton.click();
            // alert('Escape key pressed');
        }
    }
});
window.confirmDelete = function (recordId) {
    var tdElement = document.querySelector(`td[data-record="${recordId}"]`);
    if (tdElement) {
        var tdText = tdElement.innerText;

        Notiflix.Confirm.show(
            'Confirmation Delete',
            `¿Are you sure you want to delete this record :  ${tdText} ?`,
            'YES',
            'No',
            function () {
                var loadingEvent = new CustomEvent('loading', {
                    detail: {
                        type_loading: 'hourglass',
                        seg: 2600,
                    }
                });
                window.dispatchEvent(loadingEvent);

                window.livewire.emit('confirm-delete', recordId);
            },
            function () {
                // close cancel user function
            },
            {
                backOverlayColor: 'rgba(0,0,10,0.5)',
                cssAnimationStyle: 'zoom',
                textColor: '#fff',
                backgroundColor: '#520281',
                cssAnimation: true,
                messageColor: '#56c080',
                okButtonBackground: '#f7086b',
                onReady: function () {
                    var confirmYesButton = document.querySelector('#NXConfirmButtonOk');

                    if (confirmYesButton) {
                        confirmYesButton.tabIndex = 0;
                        confirmYesButton.focus();
                    }
                }
            }
        );
    }
};


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

