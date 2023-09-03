var isReadOnly = false;
var editor;

const csrfToken = document.querySelector('meta[name="csrf-token"]').content;
window.addEventListener('load', function () {
   

editor = new EditorJS({
    holder: 'editorjs',
    autofocus: false,
    placeholder: '📝 Lets start creating a good theme for folio pages',
    readOnly: false,
    tools: {
        codexPro : window.CodexPro,   
        header: {
            class: Header,
            shortcut: 'CMD+SHIFT+H',
            config: {
                placeholder: 'Enter a header',
                levels: [1, 2, 3, 4, 5, 6],
                defaultLevel: 2,
                defaultAlignment: 'left'
            }
        },       
         
    },    
});
});
