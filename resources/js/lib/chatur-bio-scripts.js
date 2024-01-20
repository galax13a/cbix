import EditorJS from '@editorjs/editorjs';
import Header from 'editorjs-header-with-alignment';
import Paragraph from 'editorjs-paragraph-with-alignment';
//import List from "@editorjs/list";
import NestedList from '@editorjs/nested-list';

import { MenuStartBio } from './chatur-bio-menu';
/* libreris editor bio */

import BRPlaycams from './editorJS/br-editor';
import { TitlePlaycam } from './editorJS/title-playcams';
import { RulesPlaycam } from './editorJS/rule-playcam';
import { CopysPlaycam } from './editorJS/copyrigth-playcams';
import { CodexPlaycam } from './editorJS/code-playcam';
import { CardsPlayscam } from './editorJS/playscamcards';
import './editorJS/modal-bio-app';
var isReadOnly = false;
var editor;

document.addEventListener('livewire:load', function () {

    Livewire.on('messageProcessed', function () {
        console.log('Message process');
    });

    Livewire.on('newprofile', function () {
        console.log('creator new profile ready v1.0');
        var link = document.getElementById('new-bio');
        if (link) {
            link.click();
        } else {
            console.error('Element with ID #createDataModal not found.');
        }
    });

    Livewire.on('newpro', function () {
        console.log('get pro ');
    });



    Notiflix.Loading.standard('Loading...',);
    setTimeout(function () {

        const storedData = localStorage.getItem('bio-chatu-temp');
        if (storedData) {
            const parsedData = JSON.parse(storedData);
            if (storedData.length > 55) {
                editor.render(parsedData);
            } else {

            }
        }
    }, 1200);
    Notiflix.Loading.remove();

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
    document.getElementById('saveEditorButton').addEventListener('click', function () {
        saveEditorData();
    });

    editor = new EditorJS({
        holder: 'editor-biochaturbate',
        autofocus: isReadOnly,
        placeholder: `--> 👉 ᴄʟɪᴄᴋ Hᴇʀᴇ <-- 👌🏾  Start creating an attractive bio for your fans 🐱   🅲🆁🅴🅰🆃🅴🍓🅱🅸🅾 🅑🅨 PʟᴀʏꜱCᴀᴍ.ᴄᴏᴍ 🦄`,
        tools: {
            header: {
                class: Header,
                config: {
                    levels: [1, 2, 3],
                    defaultLevel: 1,
                },
            },
            paragraph: {
                class: Paragraph,
                inlineToolbar: true,
            },
            CardsPlayscam: {
                class: CardsPlayscam,
            },
            CopysPlaycam: {
                class: CopysPlaycam,
                inlineToolbar: ['bold', 'italic'],

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

            CodexPlaycam: {
                class: CodexPlaycam,
            },


            titlePlaycams: {
                class: TitlePlaycam,
                inlineToolbar: true,

            },
            RulesPlaycam: {
                class: RulesPlaycam,
                inlineToolbar: ['bold', 'italic'],

            },


        },
    });

    async function saveEditorData() {
        try {
            const outputData = await editor.save();
            const serializedData = JSON.stringify(outputData);
            localStorage.setItem('bio-chatu-temp', serializedData);
            window.livewire.emit('savebio', serializedData);
        } catch (error) {
            console.log('Saving Bio failed:', error);
        }
    }


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

