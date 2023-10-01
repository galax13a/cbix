
const sideLinks = document.querySelectorAll('.sidebar .side-menu li a:not(.logout)');

sideLinks.forEach(item => {
    const li = item.parentElement;
    item.addEventListener('click', () => {
        sideLinks.forEach(i => {
            i.parentElement.classList.remove('active');
        })
        li.classList.add('active');
    })
});

const menuBar = document.querySelector('.content nav .bx.bx-menu');
const sideBar = document.querySelector('.sidebar');

menuBar.addEventListener('click', () => {
    sideBar.classList.toggle('close');
});

const searchBtn = document.querySelector('.content nav form .form-input button');
const searchBtnIcon = document.querySelector('.content nav form .form-input button .bx');
const searchForm = document.querySelector('.content nav form');

searchBtn.addEventListener('click', function (e) {
    if (window.innerWidth < 576) {
        e.preventDefault;
        searchForm.classList.toggle('show');
        if (searchForm.classList.contains('show')) {
            searchBtnIcon.classList.replace('bx-search', 'bx-x');
        } else {
            searchBtnIcon.classList.replace('bx-x', 'bx-search');
        }
    }
});

window.addEventListener('resize', () => {
    if (window.innerWidth < 768) {
        sideBar.classList.add('close');
    } else {
        sideBar.classList.remove('close');
    }
    if (window.innerWidth > 576) {
        searchBtnIcon.classList.replace('bx-x', 'bx-search');
        searchForm.classList.remove('show');
    }
});

const toggler = document.getElementById('theme-toggle');

toggler.addEventListener('change', function () {
    if (this.checked) {
        document.body.classList.add('dark');
    } else {
        document.body.classList.remove('dark');
    }
});
// admin js

window.addEventListener('notify', event => { // notificaciones y modals
    const { type, message, OpenWin36,position = 'center-bottom' } = event.detail;
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
    alert('dosh');
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

    let addModal0 = document.querySelector('#createDataModal');
    if (addModal0) {
        const addModal = new bootstrap.Modal('#createDataModal');
        const editModal = new bootstrap.Modal('#updateDataModal');
        window.addEventListener('closeModal', () => {
            addModal.hide();
            editModal.hide();
        })
    }

    window.addEventListener('closeModal2', () => {
        document.querySelector("#create2DataModal > div > div > div.modal-header > button").click();
    });

    window.addEventListener('closeModalUpdate', () => {
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
