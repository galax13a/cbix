document.addEventListener('DOMContentLoaded', (event) => {
    function get_style_json() {
        const inputArea = document.querySelector("#editorjsx-en");
        const outputArea = document.querySelector(".large-area-json--output");

        try {
            const formatted = JSON.stringify(JSON.parse(inputArea.value), null, 4);
            outputArea.value = formatted;
        } catch (error) {
            console.error("Invalid JSON", error);
        }
    }

    document.getElementById('btn-json-formated').addEventListener('click', get_style_json);
});
