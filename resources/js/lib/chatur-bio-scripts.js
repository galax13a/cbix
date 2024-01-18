import EditorJS from '@editorjs/editorjs';
import Header from 'editorjs-header-with-alignment';
import  Paragraph from 'editorjs-paragraph-with-alignment';
//import List from "@editorjs/list";
import NestedList from '@editorjs/nested-list';

import {MenuStartBio} from './chatur-bio-menu';
/* libreris editor bio */ 
import { Offerspecial } from './editorJS/offerspecial'; 
import  BRPlaycams   from './editorJS/br-editor'; 
import {TitlePlaycam} from './editorJS/title-playcams';
import { RulesPlaycam } from './editorJS/rule-playcam';
import { CopysPlaycam } from './editorJS/copyrigth-playcams';
import { CodexPlaycam } from './editorJS/code-playcam';
import { CardsPlayscam } from './editorJS/playscamcards';

var isReadOnly = false;
var editor;

document.addEventListener('livewire:load', function() {
    Livewire.on('messageProcessed', function() {
       console.log('Message process');
    });
});


async function clearEditor() {
    Notiflix.Confirm.show(
        'Playscam Confirm',
        'Do you want to delete the content of the Biography?',
        'Yes',
        'No',
        () => {
            editor.clear();
            Notiflix.Notify.success('Ready EditorThema, Clean', {
                position: 'center-center'
            });
        },
        () => {
                //no.
        },
        {
        },
        );
}
document.addEventListener('DOMContentLoaded', function () {

    MenuStartBio(); // init menu collap
    const csrfToken = document.querySelector('meta[name="csrf-token"]').content;

    document.getElementById('clearEditorButton').addEventListener('click', function () {    
        clearEditor();
    });

    
     editor = new EditorJS({
        holder: 'editor-biochaturbate',
        autofocus: isReadOnly,
        placeholder: `--> 👉 ᴄʟɪᴄᴋ Hᴇʀᴇ <-- 👌🏾  Start creating an attractive bio for your fans  🐱  
                        🅲🆁🅴🅰🆃🅴🍓🅱🅸🅾 🅑🅨 PʟᴀʏꜱCᴀᴍ.ᴄᴏᴍ 🦄`,
                        tools: {
                            header: {
                              class: Header,
                              config: {                           
                                levels: [1,2,3],
                                defaultLevel: 1,
                              },
                            },
                            paragraph: {
                                class: Paragraph,
                                inlineToolbar: true,
                              },                                               
                              CardsPlayscam:{
                                class: CardsPlayscam,
                              },
                              CopysPlaycam:{
                                class: CopysPlaycam,
                                inlineToolbar: ['bold','italic'],
                              
                             },

                              list: {
                                class: NestedList,
                                inlineToolbar: true,
                                config: {
                                  defaultStyle: 'unordered'
                                },
                              },

                              br: {
                                class: BRPlaycams,
                              },

                              CodexPlaycam:{
                                class: CodexPlaycam,
                              },
                           

                              titlePlaycams:{
                                 class: TitlePlaycam,
                                 inlineToolbar: true,
                               
                              },
                              RulesPlaycam:{
                                class: RulesPlaycam,
                                inlineToolbar: ['bold','italic'],
                              
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
