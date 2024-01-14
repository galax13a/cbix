
import EditorJS from '@editorjs/editorjs';
import Header from 'editorjs-header-with-alignment';
import  Paragraph from 'editorjs-paragraph-with-alignment';
import List from "@editorjs/list";

import { Offerspecial } from './editorJS/offerspecial'; // Ajusta la ruta según sea necesario


import {MenuStartBio} from './chatur-bio-menu';

document.addEventListener('livewire:load', function() {
    Livewire.on('messageProcessed', function() {
        var body = document.body;               
        body.style.height = (body.scrollHeight + 1600) + 'px';                
        var contentModels = document.getElementById('content-models');
        var alturaActual = contentModels.clientHeight;
        var nuevaAltura = alturaActual + 100;
        contentModels.style.height = body.style.height + 100 + 'px';
        body.style.height = (body.scrollHeight + 1900) + 'px';           
        

    });
});

document.addEventListener('DOMContentLoaded', function () {

    MenuStartBio(); // init menu collap

    const editor = new EditorJS({
        holder: 'editor-biochaturbate',
        autofocus: false,
        placeholder: `--> 👉 ᴄʟɪᴄᴋ Hᴇʀᴇ <--  Start creating an attractive bio for your fans 🍒🍒🍒.    
                        🅲🆁🅴🅰🆃🅴🍓🅱🅸🅾 🍒🍒🍒  🅑🅨 PʟᴀʏꜱCᴀᴍꜱ.ᴄᴏᴍ 🥳`,
                        tools: {
                            header: {
                              class: Header,
                              config: {                           
                                levels: [1,2, 3, 4, 5],
                                defaultLevel: 1,
                              },
                            },
                            paragraph: {
                                class: Paragraph,
                                inlineToolbar: true,
                              },                          

                              list: {
                                class: List,
                                inlineToolbar: true,
                                config: {
                                  defaultStyle: 'unordered'
                                }
                              },

                              offerspecial: {
                                class: Offerspecial,
                                inlineToolbar: true,
                              },
                            
                          },
                        });
    
        window.livewire.on('show-confetti', () => {
            //var audio = new Audio('/win.m4a');
            //audio.play();
            for (let i = 0; i < 5; i++) {
                confetti({
                    particleCount: 200,
                    startVelocity: 30,
                    spread: 360,
                    origin: {
                        x: Math.random(),
                        y: Math.random()
                    }
                });
            }

        }); 




});


window.addEventListener('notify', event => { // notificaciones y modals
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

document.addEventListener('DOMContentLoaded', function () {

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
        closeButton.addEventListener('click', function () {
            myModalwin32.hide();
            var elements = document.querySelectorAll('.modal-backdrop.fade.show');

            elements.forEach(function (element) {
                element.remove();
            });
        });
    }
}
