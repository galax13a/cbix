class CardBlockImagenH {
    static get toolbox() {
        return {
            title: '▶️ CardImagenH',
            icon: '<i class="icon-tiktok"></i>',
            name: "BlockImagenH",
        };
    }

    async customPrompt(titulo, mensaje) {
        return new Promise((resolve, reject) => {
            window.Notiflix.Confirm.prompt(
                titulo,
                mensaje,
                '👻 Link here!',
                'Ok',
                'Cancel',
                (clientAnswer) => {
                    resolve(clientAnswer);
                },
                () => {
                    resolve(null);
                }
            );
        });
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
        this.container.appendChild(this.containerRows)
        this.container.appendChild(this.rowContainer);

        this.restoreFromData();
    }


    createColumnsSelect() {
        const input = document.createElement('input');
        input.type = 'number'; // Crear un input numérico
        input.className = 'form-control'; // Añadir clases de Bootstrap para el diseño
        input.value = this.data.columns ? this.data.columns : '1'; // Valor predeterminado
        input.addEventListener('blur', () => {
            if (input.value > 12) {
                input.value = 12; // Restablecer el valor a 8 si el usuario ingresa un número mayor
                let eventDetail = {
                    type: 'failure',
                    message: 'Max 12 Cards',
                    position: 'center-center',
                };
                let notifyEvent = new CustomEvent('notify', { detail: eventDetail });
                window.dispatchEvent(notifyEvent);
            }
            if (input.value < 1) {
                input.value = 1; // Restablecer el valor a 1 si el usuario ingresa un número menor
            }
            // Actualizar las tarjetas después de cambiar la entrada
            this.generateCards();
            this.saveToData();
        });
        return input;
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
        select.value = this.data.width ? this.data.width : '25';
        return select;
    }
    getRandomImgURL() {
        let randomNum = Math.floor(Math.random() * 133) + 1; // generates a random number between 1 and 60
        return `/editorcam/imgs/cards/img-girl${randomNum}.jpg`;
    }
    
    generateCards() {
        // Clear current cards
        while (this.rowContainer.firstChild) {
            this.rowContainer.removeChild(this.rowContainer.lastChild);
        }

        // Generate new cards
        for (let i = 0; i < this.columnsSelect.value; i++) {
            const cardContainer = document.createElement('div');

                 // Add image to the card
             
                 const cardImage = document.createElement('img');
                 if (this.cardsData[i] && this.cardsData[i].image) {
                     cardImage.src = this.cardsData[i].image;
                 } else {
                     cardImage.src = this.getRandomImgURL();
                 }
                 
                 cardImage.onerror = function() {
                     cardImage.src = '/editorcam/imgs/cards/img-girl1.jpg'; // default image if the initial image doesn't load
                 };
                    
                 cardImage.alt = `Image for card ${i + 1}`;
                 cardImage.className = 'img-thumbnail shadow p-2 rounded-3 float-end mt-2'; // Bootstrap class to style the image
                 
                 cardImage.addEventListener('dblclick', async (e) => {
                     e.preventDefault();
                     const newImgURL = await this.customPrompt('Change image', 'Enter the new image URL:🔗');
                     if (newImgURL) {
                         this.cardsData[i] = this.cardsData[i] || {}; // Ensure the card data object exists
                         this.cardsData[i].image = newImgURL;
                         cardImage.src = newImgURL;
                         this.saveToData();
                     }
                 });
     
                 cardContainer.appendChild(cardImage);

            cardContainer.className = `card text-${this.textAlignSelect.value} w-${this.widthSelect.value} shadow border-1 rounded-3 mb-4 mt-3`;
            
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

                 // ...            
            cardBody.appendChild(cardTitle);   
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
        this.columnsSelect.value = this.data.columns ? this.data.columns : '4';
        this.textAlignSelect.value = this.data.textAlign ? this.data.textAlign : 'start';
        this.widthSelect.value = this.data.width ? this.data.width : '25';

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

window.CardBlockImagenH = CardBlockImagenH;