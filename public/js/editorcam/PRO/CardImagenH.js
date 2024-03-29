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
        this.alignImagen = this.createAlignImagen();
        this.colorInput = this.createColor();

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
        this.alignImagen.className = 'btn-web-link btn-web-link-pro border-0 shadow';

        this.toolbarmenu = document.createElement('div');
        this.toolbarmenu.className = 'shadow m-2 p-2 mt-3 rounded-3 mb-0';
        this.toolbarmenu.appendChild(this.columnsSelect);
        this.toolbarmenu.appendChild(this.textAlignSelect);
        this.toolbarmenu.appendChild(this.widthSelect);
        this.toolbarmenu.appendChild(this.alignImagen);
        this.toolbarmenu.appendChild(this.generateButton);
        this.container.appendChild(this.toolbarmenu);
        this.container.appendChild(this.containerRows);
        this.container.appendChild(this.rowContainer);
        this.restoreFromData();
    }
    createColor(i) {
        const colorInput = document.createElement('input');
        colorInput.type = 'color';
        colorInput.className = 'form-control form-control-color';
        colorInput.id = 'exampleColorInput';
        colorInput.title = 'Choose your color';
      
        const commonColors = [
          '#fdeebd', '#fcf6f5', '#e6f7ff', '#f0f9e8', '#fff1e6', '#fce4ec',
          '#f0e6fc', '#e1f5fe', '#e8f5e9', '#fff9c4', '#ffe0b2', '#d1c4e9',
          '#f3e5f5', '#f1f8e9', '#f9fbe7', '#e3f2fd', '#e0f7fa', '#e0f2f1',
          '#e8eaf6', '#f3e5f5', '#f9fbe7', '#fff3e0', '#ffebee', '#e0f7fa',
          '#ede7f6', '#d0d9ff'
        ];
      
        colorInput.value = this.cardsData[i]?.colorcard || commonColors[Math.floor(Math.random() * commonColors.length)];
      
        colorInput.addEventListener('input', (event) => {
          event.stopPropagation();
        });
      
        colorInput.addEventListener('change', () => {
          if (typeof i !== 'undefined') {
            this.cardsData[i] = this.cardsData[i] || {};
            this.cardsData[i].colorcard = colorInput.value;
          }
          this.saveToData();
        });
      
        return colorInput;
      }
      
    createColumnsSelect() {
        const input = document.createElement('input');
        input.type = 'number'; 
        input.className = 'form-control'; 
        input.value = this.data.columns ? this.data.columns : '1'; 
        input.addEventListener('blur', () => {
            if (input.value > 12) {
                input.value = 12;
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

    createAlignImagen() {
        const select = document.createElement('select');
        ['left', 'right'].forEach((align) => {
            const option = document.createElement('option');
            option.value = align;
            option.textContent = align.charAt(0).toUpperCase() + align.slice(1);
            select.appendChild(option);
        });
        select.value = this.data.alignImagen ? this.data.alignImagen : 'left';
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

            const cardImage = document.createElement('img');
            if (this.cardsData[i] && this.cardsData[i].image) {
                cardImage.src = this.cardsData[i].image;
            } else {
                cardImage.src = this.getRandomImgURL();
            }

            cardImage.onerror = function () {
                cardImage.src = '/editorcam/imgs/cards/img-girl1.jpg'; // default image if the initial image doesn't load
            };

            cardImage.alt = `Image for card ${i + 1}`;
            cardImage.className = 'img-fluid rounded-start shadow p-2 rounded-3 float-end mt-2 mb-2'; // Bootstrap class to style the image

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
            //BULDER CARD
            // Add image to the card
            const row = document.createElement('div');
            row.classList.add('row', 'g-0');
            // Crear la columna para la imagen
            const colImage = document.createElement('div');
            colImage.classList.add('col-md-4');
            // Crear la columna para el contenido de la tarjeta
            const colContent = document.createElement('div');
            colContent.classList.add('col-md-8');

            const card_footer = document.createElement('div');
            card_footer.className = 'card-footer bg-transparent border-light';
            const card_footer_p = document.createElement('p');

            card_footer_p.textContent = this.cardsData[i]?.footerText || '#tag1, #tag2';
            card_footer_p.contentEditable = "true";
            card_footer_p.addEventListener('input', () => {
                this.cardsData[i] = this.cardsData[i] || {};
                this.cardsData[i].footerText = card_footer_p.textContent;
            });            

            cardContainer.className = `card text-${this.textAlignSelect.value} w-${this.widthSelect.value} shadow border-1 rounded-3 mb-4 mt-3`;
            cardContainer.id = `card-${i + 1}`;

            const cardBody = document.createElement('div');
            cardBody.className = 'card-body mt-2 mb-2 p-2';

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
            cardLink.className = 'btn btn-cb shadow text-decoration-none mx-2';//text-decoration-none
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

            const colorInput = this.createColor(i); // Pasa el índice
            const divi_color_link = document.createElement('div');
            divi_color_link.className = `container p-1 m-1 d-flex align-items-center justify-content-${this.textAlignSelect.value} shadow-sm`;
            cardContainer.style.backgroundColor = colorInput.value;

            if (this.alignImagen.value === 'left') {
                cardContainer.appendChild(row);
                row.appendChild(colImage);
                colImage.appendChild(cardImage);
                row.appendChild(colContent);
                colContent.appendChild(cardBody);
                cardBody.appendChild(cardTitle);
                cardBody.appendChild(cardTitle);
                cardBody.appendChild(cardText);
                cardBody.appendChild(divi_color_link);
                divi_color_link.appendChild(cardLink);
                divi_color_link.appendChild(colorInput);
                cardBody.appendChild(card_footer);
                cardBody.appendChild(card_footer_p);
            } else {
                cardContainer.appendChild(row);
                row.appendChild(colContent);
                colContent.appendChild(cardBody);
                cardBody.appendChild(cardTitle);
                cardBody.appendChild(cardTitle);
                cardBody.appendChild(cardText);
                cardBody.appendChild(divi_color_link);
                divi_color_link.appendChild(cardLink);
                divi_color_link.appendChild(colorInput);
                cardBody.appendChild(card_footer);
                cardBody.appendChild(card_footer_p);
                row.appendChild(colImage);
                colImage.appendChild(cardImage);
            }


            this.rowContainer.appendChild(cardContainer);
        }
    }

    saveToData() {
        this.data.columns = this.columnsSelect.value;
        this.data.textAlign = this.textAlignSelect.value;
        this.data.width = this.widthSelect.value;
        this.data.alignImagen = this.alignImagen.value;
        this.data.cardsData = this.cardsData;        

    }

    restoreFromData() {
        this.columnsSelect.value = this.data.columns ? this.data.columns : '2';
        this.textAlignSelect.value = this.data.textAlign ? this.data.textAlign : 'start';
        this.alignImagen.value = this.data.alignImagen ? this.data.alignImagen : 'left';
        this.widthSelect.value = this.data.width ? this.data.width : '50';
        this.colorInput.value = this.data.colorcard || '#fdeebd';

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