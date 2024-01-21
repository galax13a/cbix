
document.addEventListener('DOMContentLoaded', function () {


    document.getElementById('clearEditorButton').addEventListener('click', function () {
        clearEditor();
    });
    document.getElementById('saveEditorButton').addEventListener('click', function () {
        saveEditorData();
    });
});

async function clearEditor() {
    Notiflix.Confirm.show(
        'Playscam.com Confirm',
        'Do you want to delete the content of the Biography?',
        'Yes',
        'No',
        () => {
         return   editor.clear();
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
