class OLHTML {
    static get toolbox() {
        return {
            title: 'TyperTips',
            icon: '🔢',
            name: "OLHTML",
        };
    }

    constructor({ data, api, config }) {
        this.api = api;
        this.data = data || {};
        this.config = config;
        this.listData = this.data.listData || [];
        this.headerData = this.data.headerData || [];

        this.container = document.createElement('div');
        this.container.id = 'olhtmlContainer';

        this.rowContainer = document.createElement('div');
        this.rowContainer.className = 'row';

        this.headerSelect = this.createHeaderSelect();
        this.typeSelect = this.createTypeSelect();
        this.liNumberInput = this.createNumberInput();
        this.topicInput = this.createTopicInput();
        this.columnsInput = this.createColumnsInput();

        this.generateButton = document.createElement('button');
        this.generateButton.textContent = 'Create 😸';
        this.generateButton.className = 'btn btn-cb shadow';
        this.generateButton.addEventListener('click', () => {
            this.generateLists();
            this.saveToData();
        });

        this.headerSelect.className = 'btn-web-link btn-web-link-pro border-0 shadow';
        this.typeSelect.className = 'btn-web-link btn-web-link-pro border-0 shadow';
        this.topicInput.className = 'input-link-editor';
        this.liNumberInput.className = 'input-cb';
        this.columnsInput.className = 'input-cb';
        //toolbar
        this.toolbarmenu = document.createElement('div');
        this.toolbarmenu.className = 'shadow m-2 p-2 mt-3 rounded-3 mb-0'
        //ToglleOnly
        this.btn_edit_div = document.createElement('div');
        this.btn_edit_div.style.textAlign = 'center';
        this.btn_edit_div.style.marginTop = '-20px';


        this.btntoggleReadOnly = document.createElement('button');
        this.btntoggleReadOnly.className = 'btn btn-cb shadow-sm p-2 rounded-2 mb-1';
        this.btntoggleReadOnly.innerHTML = '<i class="fas fa-undo"></i>';

        this.btntoggleReadOnly.addEventListener('click', () => {
            this.toolbarmenu.style.display = this.toolbarmenu.style.display === 'none' ? '' : 'none';
        });

        this.container.appendChild(this.toolbarmenu);
        this.toolbarmenu.appendChild(this.headerSelect);
        this.toolbarmenu.appendChild(this.typeSelect);
        this.toolbarmenu.appendChild(this.liNumberInput);
        this.toolbarmenu.appendChild(this.topicInput);
        this.toolbarmenu.appendChild(this.columnsInput);
        this.toolbarmenu.appendChild(this.generateButton);
        this.container.appendChild(this.rowContainer);

        this.container.appendChild(this.btn_edit_div);
        this.btn_edit_div.appendChild(this.btntoggleReadOnly);


        this.restoreFromData();
    }

    createHeaderSelect() {
        const select = document.createElement('select');
        ['h2', 'h3', 'h4', 'h5', 'h6'].forEach((header) => {
            const option = document.createElement('option');
            option.value = header;
            option.textContent = header;
            select.appendChild(option);
        });
        select.value = this.data.header ? this.data.header : 'h2';
        return select;
    }

    createTypeSelect() {
        const select = document.createElement('select');
        ['1', 'a', 'A', 'i', 'I'].forEach((type) => {
            const option = document.createElement('option');
            option.value = type;
            option.textContent = type;
            select.appendChild(option);
        });
        select.value = this.data.type ? this.data.type : '1';
        select.addEventListener('change', () => {
            this.typeSelect.value = select.value;
            this.generateLists();
        });
        return select;
    }

    createNumberInput() {
        const input = document.createElement('input');
        input.type = 'text';
        input.pattern = '\\d*';
        input.value = this.data.liNumber ? this.data.liNumber : '1';
        input.addEventListener('input', () => {
            if (input.value > 33) {
                let eventDetail = {
                    type: 'failure',
                    message: 'Sorry, Max Items 33.',
                    position: 'center-center',
                };
                let notifyEvent = new CustomEvent('notify', { detail: eventDetail });
                window.dispatchEvent(notifyEvent);
                input.value = 33;
            }
        });
        return input;
    }

    createTopicInput() {
        const input = document.createElement('input');
        input.value = this.data.topic ? this.data.topic : '';
        input.placeholder = 'Topic';
        return input;
    }

    createColumnsInput() {
        const input = document.createElement('input');
        input.type = 'number'; // Asumiendo que quieres un input numérico
        input.min = '1'; // Mínimo valor aceptado
        input.max = '33'; // Máximo valor aceptado
        input.pattern = '[1-3]?[0-3]?'; // Acepta valores de 1 a 33
        input.value = this.data.columns ? this.data.columns : '2'; // Valor por defecto
        input.addEventListener('input', () => {
            if (input.value > 33) {
                let eventDetail = {
                    type: 'failure',
                    message: 'Max 33 Columns',
                    position: 'center-center',
                };
                let notifyEvent = new CustomEvent('notify', { detail: eventDetail });
                window.dispatchEvent(notifyEvent);
                input.value = 33; // Restablece el valor a 33 si el usuario ingresa un número mayor
            }
        });
        return input;
    }
    

    generateLists() {
        // Clear current lists
        while (this.rowContainer.firstChild) {
            this.rowContainer.removeChild(this.rowContainer.lastChild);
        }

        // Generate new lists
        for (let j = 0; j < this.columnsInput.value; j++) {
            const colContainer = document.createElement('div');
            colContainer.className = `col-${12 / this.columnsInput.value} shadow border-1 rounded-3 mt-4 mb-4 OLHTMLColumn`;

            const header = document.createElement(this.headerSelect.value);
            header.textContent = this.headerData[j] || 'Header';
            header.contentEditable = "true";
            header.addEventListener('input', () => {
                this.headerData[j] = header.textContent;
            });

            const listContainer = document.createElement('ol');
            listContainer.type = this.typeSelect.value;
            listContainer.className = 'OLHTML-li';

            for (let i = 0; i < this.liNumberInput.value; i++) {
                const liElement = document.createElement('li');
                liElement.textContent = this.listData[j]?.[i] || (this.topicInput.value + ' ' + (i + 1));
                liElement.contentEditable = "true";
                liElement.addEventListener('input', () => {
                    if (!this.listData[j]) {
                        this.listData[j] = [];
                    }
                    this.listData[j][i] = liElement.textContent;
                });
                listContainer.appendChild(liElement);
            }

            colContainer.appendChild(header);
            colContainer.appendChild(listContainer);
            this.rowContainer.appendChild(colContainer);
        }
    }

    saveToData() {
        this.data.header = this.headerSelect.value;
        this.data.type = this.typeSelect.value;
        this.data.liNumber = this.liNumberInput.value;
        this.data.topic = this.topicInput.value;
        this.data.columns = this.columnsInput.value;
        this.data.listData = this.listData;
        this.data.headerData = this.headerData;
    }

    restoreFromData() {
        this.headerSelect.value = this.data.header ? this.data.header : 'h2';
        this.typeSelect.value = this.data.type ? this.data.type : '1';
        this.liNumberInput.value = this.data.liNumber ? this.data.liNumber : '5';
        this.topicInput.value = this.data.topic ? this.data.topic : (this.getRandomEmoji() + ' Typer');
        this.columnsInput.value = this.data.columns ? this.data.columns : '2';

        this.generateLists();
    }

    getRandomEmoji() {
        const emojiList = ['🫠', '🙄', '😯', '😦', '😧', '😮', '😲', '🥱', '😴', '🤤', '😪', '😵',
            '😀', '😃', '😄', '😁', '😆', '😅', '😂', '🤣', '🥲', '🥹', '😊', '😇', '🙂',
            '🙃', '😉', '😌', '😍', '🥰', '😘', '😗', '😙', '😚', '😋', '😛', '😝', '😜',
            '🤪', '🤨', '🧐', '🤓', '😎', '🥸', '🤩', '🥳', '😏', '😒', '😞', '😔', '😟',
            '😕', '🙁', '☹️', '😣', '😖', '😫', '😩', '🥺', '😢', '😭', '😮‍💨', '😤', '😠',
            '😡', '🤬', '🤯', '😳', '🥵', '🥶', '😱', '😨', '😰', '😥', '😓', '🫣', '🤗',
            '🫡', '🤔', '🫢', '🤭', '🤫', '🤥', '😶', '😶‍🌫️', '😐', '😑', '😬'];
        const randomIndex = Math.floor(Math.random() * emojiList.length);
        return emojiList[randomIndex];
    }

    render() {
        // Check if data exists
        if (this.data && Object.keys(this.data).length > 0) {
            this.toolbarmenu.style.display = 'none';
        } else {
            this.toolbarmenu.style.display = 'block';
        }
        return this.container;
    }

    save() {
        this.saveToData();
        return this.data;
    }
}

window.OLHTML = OLHTML;
