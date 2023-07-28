class CardBlock {
    static get toolbox() {
        return {
            title: 'CardBlock',
            icon: '🔲',
            name: "CardBlockhtml",
        };
    }

    constructor({ data, api, config }) {
        this.api = api;
        this.data = data || {};
        this.config = config;
        this.cardsData = this.data.cardsData || [];

        this.container = document.createElement('div');
        this.container.id = 'cardContainerHtmlv1';           

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

        this.columnsSelect.className = 'btn-web-link btn-web-link-pro border-0 shadow ';
        this.textAlignSelect.className = 'btn-web-link btn-web-link-pro border-0 shadow';
        this.widthSelect.className = 'btn-web-link btn-web-link-pro border-0 shadow';

        this.toolbarmenu = document.createElement('div');
        this.toolbarmenu.className = 'shadow m-2 p-2 mt-3 rounded-3 mb-0';
        this.toolbarmenu.appendChild(this.columnsSelect);
        this.toolbarmenu.appendChild(this.textAlignSelect);
        this.toolbarmenu.appendChild(this.widthSelect);
        this.toolbarmenu.appendChild(this.generateButton);
        this.container.appendChild(this.toolbarmenu);
        this.container.appendChild(this.containerRows)
        this.container.appendChild(this.rowContainer);

        this.restoreFromData();
    }

    createColumnsSelect() {
        const select = document.createElement('select');
        ['1', '2', '3', '4', '5', '6', '7', '8'].forEach((cols) => {
            const option = document.createElement('option');
            option.value = cols;
            option.textContent = cols + ' Cards(s)';
            select.appendChild(option);
        });
        select.value = this.data.columns ? this.data.columns : '1';
        return select;
    }

    createTextAlignSelect() {
        const select = document.createElement('select');
        ['start', 'center', 'end'].forEach((align) => {
            const option = document.createElement('option');
            option.value = align;
            option.textContent = align.charAt(0).toUpperCase() + align.slice(1);
            select.appendChild(option);
        });
        select.value = this.data.textAlign ? this.data.textAlign : 'start';
        return select;
    }

    createWidthSelect() {
        const select = document.createElement('select');
        ['25', '50', '75', '100'].forEach((width) => {
            const option = document.createElement('option');
            option.value = width;
            option.textContent = width + '% Width';
            select.appendChild(option);
        });
        select.value = this.data.width ? this.data.width : '100';
        return select;
    }

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

            const cardBody = document.createElement('div');
            cardBody.className = 'card-body';

            const cardTitle = document.createElement(this.cardsData[i]?.titleType || 'h5');
            cardTitle.className = 'card-title';
            cardTitle.textContent = this.cardsData[i]?.title || 'Hello Title ' + i;
            cardTitle.contentEditable = "true";
            cardTitle.addEventListener('input', () => {
                this.cardsData[i] = this.cardsData[i] || {};
                this.cardsData[i].title = cardTitle.textContent;
            });
            
            // Add dblclick event card title
            const handleTitleDblClick = (e) => {
                e.preventDefault();
                const titleTypeSelect = document.createElement('select');
                titleTypeSelect.className = 'form-select form-select-sm';
                ['h5', 'h4', 'h3', 'h2', 'h1'].forEach((value) => {
                    const option = document.createElement('option');
                    option.value = value;
                    option.textContent = value.toUpperCase();
                    if (e.target.tagName.toLowerCase() === value) {
                        option.selected = true;
                    }
                    titleTypeSelect.appendChild(option);
                });

                e.target.replaceWith(titleTypeSelect);
                titleTypeSelect.focus();
                titleTypeSelect.addEventListener('change', () => {
                    const newTitle = document.createElement(titleTypeSelect.value);
                    newTitle.textContent = this.cardsData[i]?.title || 'Hello Title';
                    newTitle.contentEditable = "true";
                    newTitle.addEventListener('input', () => {
                        this.cardsData[i] = this.cardsData[i] || {};
                        this.cardsData[i].title = newTitle.textContent;
                    });
                    newTitle.addEventListener('dblclick', handleTitleDblClick);
                    titleTypeSelect.replaceWith(newTitle);
                    this.cardsData[i].titleElement = newTitle;
                    this.cardsData[i].titleType = titleTypeSelect.value;
                    this.saveToData();
                });
            };
            cardTitle.addEventListener('dblclick', handleTitleDblClick);

            // ...            
            cardBody.appendChild(cardTitle);            

            const cardText = document.createElement('p');
            cardText.className = 'card-text';
            cardText.textContent = this.cardsData[i]?.text || 'here you can edit and complete your card for more creativity, edit this content';
            cardText.contentEditable = "true";
            cardText.addEventListener('input', () => {
                this.cardsData[i] = this.cardsData[i] || {};
                this.cardsData[i].text = cardText.textContent;
            });

            // ...
            const cardLink = document.createElement('a'); // card link
            cardLink.className = 'btn btn-cb shadow text-decoration-none';//text-decoration-none
            cardLink.href = this.cardsData[i]?.link || '#';
            cardLink.textContent = this.cardsData[i]?.linkText || 'Go Link';
            cardLink.contentEditable = "true";
            cardLink.addEventListener('input', () => {
                this.cardsData[i] = this.cardsData[i] || {};
                this.cardsData[i].linkText = cardLink.textContent;
            });

            // Add dblclick event
            cardLink.addEventListener('dblclick', (e) => {
                e.preventDefault();
                const linkInput = document.createElement('input');
                linkInput.type = 'text';
                linkInput.value = this.cardsData[i]?.link || '#';
                linkInput.className = 'linkInput';
                cardLink.replaceWith(linkInput);
                linkInput.focus();
                linkInput.addEventListener('blur', () => {
                    this.cardsData[i].link = linkInput.value;
                    cardLink.href = linkInput.value;
                    linkInput.replaceWith(cardLink);
                });

                linkInput.addEventListener('keydown', (event) => {
                    if (event.key === 'Enter') {
             
                        this.cardsData[i].link = linkInput.value;
                        cardLink.href = linkInput.value;
                        linkInput.replaceWith(cardLink);
                    }
                });
            });

            cardBody.appendChild(cardLink);
            cardBody.appendChild(cardTitle);
            cardBody.appendChild(cardText);
            cardBody.appendChild(cardLink);
            cardContainer.appendChild(cardBody);
            this.rowContainer.appendChild(cardContainer);
        }
    }

    saveToData() {
        this.data.columns = this.columnsSelect.value;
        this.data.textAlign = this.textAlignSelect.value;
        this.data.width = this.widthSelect.value;
        this.data.cardsData = this.cardsData;
    }

    restoreFromData() {
        this.columnsSelect.value = this.data.columns ? this.data.columns : '1';
        this.textAlignSelect.value = this.data.textAlign ? this.data.textAlign : 'start';
        this.widthSelect.value = this.data.width ? this.data.width : '100';

        this.generateCards();
    }

    render() {
        return this.container;
    }

    save() {
        this.saveToData();
        return this.data;
    }
}

window.CardBlock = CardBlock;