// modal-bio-app.js

document.addEventListener('DOMContentLoaded', function () {
    let addModal0 = document.querySelector('#createDataModal');
    if (addModal0) {
        const addModal = new bootstrap.Modal('#createDataModal');
        const editModal = new bootstrap.Modal('#updateDataModal');
        window.addEventListener('closeModal', () => {
            addModal.hide();
            editModal.hide();
        });
    }

    window.addEventListener('closeModal2', () => {
        document.querySelector("#create2DataModal > div > div > div.modal-header > button").click();
    });

    window.addEventListener('closeModalUpdate', () => {
        document.querySelector("#btn-close-update").click();
    });

    window.addEventListener('closeModalWin', (event) => {
        const parameters = event.detail;

        if (parameters.modalNameClose) {
            const selector = `#${parameters.modalNameClose} > div > div > div.modal-header > button`;
            document.querySelector(selector).click();
        }

        if (parameters.btnSelector) {
            document.querySelector(parameters.btnSelector).click();
        }
    });

    
window.addEventListener('notify', event => { 
    const { type, message, OpenWin36, position = 'center-center' } = event.detail;
    //Notiflix.Notify[type](message);
    Notiflix.Notify[type](message, {
        timeout: 3300,
        showOnlyTheLastOne: true,
        position
    });
    if (OpenWin36) {
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

if (btn_upt && btn_str) {

    btn_upt.addEventListener("click", function () {
        dispatchLoadingEvent('dots', 1600);
    });
    btn_str.addEventListener("click", function () {
        dispatchLoadingEvent('dots', 1600);
    });
}


function dispatchLoadingEvent(type_loading, seg) {
    const event = new CustomEvent('loading', {
        detail: {
            type_loading,
            seg
        }
    });
    window.dispatchEvent(event);
}


function openwin36(modalName) { // open close all modals
    var myModalwin32 = new bootstrap.Modal(document.getElementById(modalName));
    myModalwin32.show();

    var closeButton = document.querySelector("#btn-close-table") || document.querySelector(
        "#TableShowDataModal > div > div > div.modal-header > button");
    if (closeButton) {
        closeButton.addEventListener('click', function () {
            myModalwin32.hide();
            var elements = document.querySelectorAll('.modal-backdrop.fade.show');

            elements.forEach(function (element) {
                element.remove();
            });
        });
    }
}



});
