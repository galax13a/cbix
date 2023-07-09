//Import Bootstrap File
import './bootstrap';

// Import our custom CSS
import '../sass/app.scss'

// import alpine js
window.addEventListener('notify', event => { // notificaciones y modals
    const { type, message, OpenWin36,position = 'center-bottom' } = event.detail;
    //Notiflix.Notify[type](message);
    Notiflix.Notify[type](message, {
        timeout: 3300,
        showOnlyTheLastOne: true,
        position
      });
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

        }
    } else if (event.key === 'Escape') {
        var confirmNoButton = document.querySelector('#NXConfirmButtonCancel');
        if (confirmNoButton && document.getElementById('NXConfirmButtonCancel').style.display !== 'none') {
            event.preventDefault();
            confirmNoButton.click();

        }
    }
});

window.confirmDelete = function (recordId, deletemodel = 'confirm-delete-td') {

    var tdElement = document.querySelector(`td[data-record="${recordId}"]`);
    var secondTdValue;

    if (tdElement) {
        secondTdValue = tdElement.nextElementSibling.textContent;
    } else {
        tdElement = "No found TD TABLE  data-record={{ $row->id }}"

    }

    if (tdElement) {
        var tdText = tdElement.innerText;

        Notiflix.Confirm.show(
            'Confirmation Delete',
            `¿Are you sure you want to delete this record :  ${tdText} ?  `,
            'YES',
            'No',
            function () {
                var loadingEvent = new CustomEvent('loading', {
                    detail: {
                        type_loading: 'hourglass',
                        seg: 1600,
                    }
                });
                window.dispatchEvent(loadingEvent);

                window.livewire.emit(deletemodel, recordId);
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
    /*  Loading.standard();  Loading.hourglass();  Loading.circle();  Loading.arrows();    Loading.dots();        Loading.pulse();
    */
    if (Notiflix.Loading[type_loading]) {
        Notiflix.Loading[type_loading]('Loading...');
        Notiflix.Loading.remove(seg);
    } else {
        console.error(`Loading type "${type_loading}" does not exist.`);
    }
});

let btn_upt = document.getElementById("btn-update");
let btn_str = document.getElementById("btn-store");


if (btn_upt || btn_str) {

    btn_upt.addEventListener("click", function () {
        dispatchLoadingEvent('dots', 1600);
    });
    btn_str.addEventListener("click", function () {
        dispatchLoadingEvent('dots', 1600);
    });
}

$(document).ready(() => {

    $('tr').click(function () {
        $(this).addClass('active').siblings().removeClass('active');
    });
});


