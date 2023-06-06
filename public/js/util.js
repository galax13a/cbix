
//$.noConflict();

function turnOnDarkMode() {
    document.querySelector('body').classList.add('dark');
    document.querySelectorAll('.bg-white').forEach(el => {
        //el.classList.remove('bg-white');
        el.classList.add('bg-dark');
    });
}

function turnOffDarkMode() {
    document.querySelector('body').classList.remove('dark');
    document.querySelectorAll('.bg-dark').forEach(el => {
        el.classList.remove('bg-dark');
        //el.classList.add('bg-white');
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


document.addEventListener('DOMContentLoaded', function() {
    window.addEventListener('closeModal2', () => {
        document.querySelector("#create2DataModal > div > div > div.modal-header > button").click();

    });

    window.addEventListener('closeModalUpdate', () => {
        // document.querySelector("#create2DataModal > div > div > div.modal-header > button").click();
        document.querySelector("#btn-close-update").click();

    });

    window.addEventListener('closeModalWin', (event) => {
        const parameters = event.detail; // record params

        if (parameters.modalNameClose) { // xlose  modal                     
            const selector =
                `#${parameters.modalNameClose} > div > div > div.modal-header > button`;
            document.querySelector(selector).click();
        }

        if (parameters.btnSelector) { //   new modal win btn
            document.querySelector(parameters.btnSelector).click();
        }
    });


});

function openwin36(modalName) { // open close all modals
    var myModalwin32 = new bootstrap.Modal(document.getElementById(modalName));
    myModalwin32.show();

    var closeButton = document.querySelector("#btn-close-table") || document.querySelector(
        "#TableShowDataModal > div > div > div.modal-header > button");
    if (closeButton) {
        closeButton.addEventListener('click', function() {
            myModalwin32.hide();
            var elements = document.querySelectorAll('.modal-backdrop.fade.show');

            elements.forEach(function(element) {
                element.remove();
            });
        });
    }
}
