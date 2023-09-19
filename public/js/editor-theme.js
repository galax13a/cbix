var isReadOnly = false;
var editor;

const csrfToken = document.querySelector('meta[name="csrf-token"]').content;
window.addEventListener('load', function () {  

editor = new EditorJS({
    holder: 'editorthema',
    autofocus: false,
    placeholder: '📝 Lets start creating a good theme for folio pages',
    readOnly: false,
    tools: {
        header: {
            class: Header,         
            config: {
                placeholder: 'Enter a header',
                levels: [1, 2, 3, 4, 5, 6],
                defaultLevel: 2,
                defaultAlignment: 'center' 
            }
        },     
        seotool : window.SeoTools,
        divmargin : window.DivMargin,
        cropimagen : window.CropImagen,
        componentcloud : window.ComponentCloud,
        themacomponentrender : window.ThemacomponentRender,
        componentsv1 : window.ComponentsV1,    
        emotioconsblock: window.EmoticonsBlock,   
         
    },    
});
});
