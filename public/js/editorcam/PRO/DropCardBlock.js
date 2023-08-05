class DropCardBlock {
    static get toolbox() {
        return {
            title: '▶️ DropCardLine',
            icon: '<i class="bi bi-images"></i>',
            name: "DropCardBlockhtml",
        };
    }

    constructor({ data, api, config }) {
        this.api = api;
        this.data = data || {};
        this.config = config;
        this.cardsData = this.data.cardsData || [];

        this.container = document.createElement('div');
        this.container.id = 'dropCardContainerHtmlv1';

        this.containerRows = document.createElement('div');
        this.containerRows.className = 'container';
        this.rowContainer = document.createElement('div');
        this.rowContainer.className = 'row';

        this.columnsSelect = this.createColumnsSelect();
        this.textAlignSelect = this.createTextAlignSelect();
        this.widthSelect = this.createWidthSelect();

        this.generateButton = document.createElement('button');
        this.generateButton.textContent = 'Create Cards 😸';
        this.generateButton.className = 'btn btn-cb shadow mx-3 bg-warning';
        this.generateButton.addEventListener('click', () => {
            this.generateCards();
            this.saveToData();
        });

        this.columnsSelect.className = 'input-cb shadow form-control-sm';
        this.textAlignSelect.className = 'btn-web-link btn-web-link-pro border-0 shadow';
        this.widthSelect.className = 'btn-web-link btn-web-link-pro border-0 shadow';

        this.toolbarmenu = document.createElement('div');
        this.toolbarmenu.className = 'shadow m-2 p-2 mt-3 rounded-3 mb-0';
        this.toolbarmenu.appendChild(this.columnsSelect);
        this.toolbarmenu.appendChild(this.textAlignSelect);
        this.toolbarmenu.appendChild(this.widthSelect);
        this.toolbarmenu.appendChild(this.generateButton);
        this.container.appendChild(this.toolbarmenu);
        this.container.appendChild(this.containerRows);
        this.container.appendChild(this.rowContainer);

        this.rowContainer.addEventListener('dragover', (e) => {
            e.preventDefault();
        });
        this.rowContainer.addEventListener('drop', (e) => {
            e.preventDefault();
            const data = e.dataTransfer.getData('text/plain');
            const element = document.getElementById(data);
            const clone = element.cloneNode(true);
            this.rowContainer.appendChild(clone);
            element.remove();
        });

        this.restoreFromData();
    }

    //... Tus otros métodos aquí ...

    generateCards() {
        // Clear current cards
        while (this.rowContainer.firstChild) {
            this.rowContainer.removeChild(this.rowContainer.lastChild);
        }

        // Generate new cards
        for (let i = 0; i < this.columnsSelect.value; i++) {
            const cardContainer = document.createElement('div');

            cardContainer.className = `card text-${this.textAlignSelect.value} w-${this.widthSelect.value} shadow border-1 rounded-3 mt-4 mb-3`;
            cardContainer.id = `card-${i + 1}`;
            cardContainer.draggable = true;

            cardContainer.addEventListener('dragstart', (e) => {
                e.dataTransfer.setData('text/plain', cardContainer.id);
            });

            // ... Llenar la tarjeta aquí ...

            this.rowContainer.appendChild(cardContainer);
        }
    }

    //... Tus otros métodos aquí ...

}

window.DropCardBlock = DropCardBlock;
