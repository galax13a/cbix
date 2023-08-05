class CardBlockLineImg {
    static get toolbox() {
        return {
            title: '▶️ CardLineImg',
            icon: '<i class="icon-tiktok"></i>',
            name: "CardBlockhtmlimg",
        };
    }

    constructor({ data, api, config }) {
        this.api = api;
        this.data = data || {};
        this.config = config;
        this.cardsData = this.data.cardsData || [];

        this.container = document.createElement('div');
        this.container.id = 'cardContainerlineimg';

        this.containerRows = document.createElement('div');
        this.containerRows.className = 'container';
        this.containerRows.id = 'containerRows';
        this.rowContainer = document.createElement('div');
        this.rowContainer.className = `row justify-content-${this.data.textAlign ? this.data.textAlign : 'start'}`;


        this.columnsSelect = this.createColumnsSelect();
        this.textAlignSelect = this.createTextAlignSelect();
        this.widthSelect = this.createWidthSelect();
        this.alto = this.createAlto();

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

        this.borderCheck = this.createBorderCheck();

        const label = document.createElement('label');
        label.textContent = 'CardsHeaders'; // Texto que aparecerá junto al checkbox
        label.className = 'form-check-label p-1 m-1';

        this.toolbarmenu = document.createElement('div');
        this.toolbarmenu.id = 'toolbarmenu-block';
        this.toolbarmenu.className = 'shadow m-2 p-2 mt-3 rounded-3 mb-0 d-flex align-items-center justify-content-start';
        this.toolbarmenu.appendChild(this.columnsSelect);
        this.toolbarmenu.appendChild(this.textAlignSelect);
        this.toolbarmenu.appendChild(this.widthSelect);
        this.toolbarmenu.appendChild(label);
        this.toolbarmenu.appendChild(this.borderCheck);
        this.toolbarmenu.appendChild(this.alto);

        this.toolbarmenu.appendChild(this.generateButton);
        this.container.appendChild(this.toolbarmenu);        
        this.container.appendChild(this.rowContainer);

        this.restoreFromData();
    }

    gerene_imagen(number = 70) {
        const num = Math.floor(Math.random() * number) + 1;
        return num;
    }
    
    
     removeRoundedClasses(element, prefix = 'rounded-', fo=10) {
        for (let i = 0; i <= fo; i++) {
            const className = `${prefix}${i}`;
            element.classList.remove(className);
        }
    }

    createshadow(i) {
        const div = document.createElement('div');
        div.innerHTML = '<i class="bi bi-aspect-ratio-fill"></i>';
        div.title = 'Shadow Card';       
        if (this.cardsData[i].shadow) div.className = 'p-1 m-1 shadow-sm bg-gray punter rounded-3 border border-2 border-dark';
        else div.className = 'p-1 m-1 shadow-sm bg-gray punter rounded-3';

        div.addEventListener('click', () => {
            const divGetCard = document.querySelector("#container-card-block" + i);
            this.cardsData[i] = this.cardsData[i] || {};
        
            if (this.cardsData[i].shadow) {
                divGetCard.classList.remove('shadow');
                div.className = 'p-1 m-1 shadow-sm bg-gray punter rounded-3';
            } else {
                divGetCard.classList.add('shadow');
                div.className = 'p-1 m-1 shadow-sm bg-gray punter rounded-3 border border-2 border-dark';
            }
            this.cardsData[i].shadow = !this.cardsData[i].shadow;
            this.saveToData();
        });

        return div;
    }
    
    
    createContainerfootercard(i = 0, menucolor=null) {

        const container = document.createElement('div');
        container.className = 'col-12';
        container.id = 'menudevcardimg'+i;
        const row = document.createElement('div');
        row.className = 'row';
        const divmenu = document.createElement("div");
        divmenu.className = "container-md p-2 m-2 shadow rounded-3 mb-4 mt-4";
        divmenu.id = "container-md-footermenu-card";
        container.appendChild(row);
        const divi = document.createElement("div");
        divi.className = 'col-6';
        const divi2 = document.createElement("div");
        divi2.className = 'col-6';
        divi2.id = 'divi2menu'+i ;

        const padding = `
        <label for="customRangePaddinng${i}" class="form-label">Padding Main</label>
        <input type="range" class="form-range" id="customRangePadding_main${i}" min="1" max="26" step="1">
        `;

        const paddingHtml = `
            <label for="customRangePadding${i}" class="form-label">Padding Card</label>
            <input type="range" class="form-range" id="customRangePadding${i}" min="1" max="12" step="1">
        `;
        const borderHtml = `
            <label for="customRangeBorder${i}" class="form-label">Border Card</label>
            <input type="range" class="form-range" id="customRangeBorder${i}" min="0" max="5" step="1">
        `;
        const border2Html = `
            <label for="customRangeBorder${i}" class="form-label">Rounded Card</label>
            <input type="range" class="form-range" id="customRangeBorder2${i}" min="0" max="10" step="1">
        `;

        divmenu.innerHTML = padding + paddingHtml + borderHtml + border2Html;
        const paddingRange0 = divmenu.querySelector(`#customRangePadding_main${i}`);
        const paddingRange = divmenu.querySelector(`#customRangePadding${i}`);
        const borderRange = divmenu.querySelector(`#customRangeBorder${i}`);
        const borderRange2 = divmenu.querySelector(`#customRangeBorder2${i}`);

        divi.appendChild(divmenu);
        row.appendChild(divi);
        row.appendChild(divi2);        

        paddingRange0.addEventListener('input', () => {
            paddingRange0.title = 'Range '+ paddingRange0.value;
            this.cardsData[i] = this.cardsData[i] || {};
            this.cardsData[i].paddingValue0 = paddingRange0.value;          
            const divGetCard = document.querySelector("#container-card-block-main-"+i);
            divGetCard.style.padding = `${paddingRange0.value}rem`;          
            this.saveToData();
        });
    
    
        paddingRange.addEventListener('input', () => {
            paddingRange.title = 'Range '+ paddingRange.value;
            this.cardsData[i] = this.cardsData[i] || {};
            this.cardsData[i].paddingValue = paddingRange.value;          
            const divGetCard = document.querySelector("#container-card-block"+i);
            divGetCard.style.padding = `${paddingRange.value}rem`;          
            this.saveToData();
        });
    
        borderRange.addEventListener('input', () => {
            borderRange.title = 'Border '+ borderRange.value;
            this.cardsData[i] = this.cardsData[i] || {};
            this.cardsData[i].borderValue = borderRange.value;
            const divGetCard = document.querySelector("#container-card-block"+i);
            //divGetCard.classList = `border border-${borderRange.value}`;     
            this.removeRoundedClasses(divGetCard,'border-', 5);   
            divGetCard.classList.add(`border-${borderRange.value}`);
            this.saveToData();
        });

        borderRange2.addEventListener('input', () => {
            borderRange2.title = 'Border '+ borderRange2.value;
            this.cardsData[i] = this.cardsData[i] || {};
            this.cardsData[i].borderValue2 = borderRange2.value;
            const divGetCard = document.querySelector("#container-card-block"+i);     
            this.removeRoundedClasses(divGetCard,'rounded-', 10);   
            divGetCard.classList.add(`rounded-${borderRange2.value}`);
            this.saveToData();
        });

            const cardData = this.cardsData[i];
            if (cardData) {   
                paddingRange0.value = cardData.paddingValue0 || '1'; 
                paddingRange.value = cardData.paddingValue || '1';    
                borderRange.value = cardData.borderValue || '0';      
                borderRange2.value = cardData.borderValue2 || '1';
                
           }

            return container;
    }

            createBorderCheck() {
        const checkbox = document.createElement('input');
            checkbox.type = 'checkbox';
            checkbox.className = 'form-check-input mr-1 p-1';
            checkbox.checked = this.data.hasBorder || false; // Valor predeterminado del checkbox
        checkbox.addEventListener('change', () => {
                this.data.hasBorder = checkbox.checked;
            this.generateCards();
            this.saveToData();
        });
            return checkbox;
    }

            createAlto() {
        const input = document.createElement('input');
            input.type = 'number'; // Crear un input numérico
            input.className = 'input-cb shadow form-control-sm m-2'; // Añadir clases de Bootstrap para el diseño
            input.value = this.data.alto ? this.data.alto : '260'; // Valor predeterminado
            input.title = 'Height Cards';
        input.addEventListener('blur', () => {
            if (input.value > 1600) {
                input.value = 1600; // Restablecer el valor a 8 si el usuario ingresa un número mayor
            let eventDetail = {
                type: 'failure',
            message: 'Card Max 1024 Height',
            position: 'center-center',
                };
            let notifyEvent = new CustomEvent('notify', {detail: eventDetail });
            window.dispatchEvent(notifyEvent);
            }
            if (input.value < 260) {
                input.value = 260; 
            }
            //  this.generateCards();
            this.saveToData();
        });
            return input;
    }

            createColumnsSelect() {
        const input = document.createElement('input');
            input.type = 'number';
            input.className = 'form-control';
            input.title = '#Nums Cards';
            input.value = this.data.columns ? this.data.columns : '1'; 
        input.addEventListener('blur', () => {
            if (input.value > 12) {
                input.value = 12;
            let eventDetail = {
                type: 'failure',
            message: 'Max 12 Cards',
            position: 'center-center',
                };
            let notifyEvent = new CustomEvent('notify', {detail: eventDetail });
            window.dispatchEvent(notifyEvent);
            }
            if (input.value < 1) {
                input.value = 1; 
            }

            this.generateCards();
            this.saveToData();
        });
            return input;
    }

    createSelectImageMain(cardContainer, i) {
        const imgselect = document.createElement('div');
            imgselect.className = 'p-2 m-1 bg-grey punter rounded-circle text-primary';
            imgselect.title = 'Imagen URL Main';
        imgselect.addEventListener('click', async () => {
            const url = await this.customPrompt('Background Image URL', 'Please enter the URL for the background image:');
            if (url) {
                cardContainer.style.backgroundImage = `url(${url})`;
            this.cardsData[i] = this.cardsData[i] || { };
            this.cardsData[i].backgroundUrlMain = url;
            }
        });
            return imgselect;
    }

            createSelectImage(cardContainer, i) {
        const imgselect = document.createElement('div');
            imgselect.className = 'p-2 m-1 bg-light punter rounded-circle text-dark';
            imgselect.title = 'Imagen URL Card';
        imgselect.addEventListener('click', async () => {
            const url = await this.customPrompt('Background Image URL', 'Please enter the URL for the background image:');
            if (url) {
                cardContainer.style.backgroundImage = `url(${url})`;
            this.cardsData[i] = this.cardsData[i] || { };
            this.cardsData[i].backgroundUrl = url;
            }
        });
            return imgselect;
    }
            createSelectImage_gallery() {
        const imgselect = document.createElement('div');
        imgselect.title = 'Imagen Gallery backgraund';
            imgselect.className = 'p-1 m-1 punter bg-light rounded-circle';
        imgselect.addEventListener('click', async () => {           
            const event = new Event('open-card-pro-imgs');
            document.dispatchEvent(event);
        });
            return imgselect;
    }

            createHeader(i, color) {
        const cardHeader = document.createElement('div');
            cardHeader.className = 'card-header';
            cardHeader.style.backgroundColor = color;
            cardHeader.textContent = this.cardsData[i]?.header || '#Menu Header';
            cardHeader.contentEditable = "true";
        cardHeader.addEventListener('input', () => {
                this.cardsData[i] = this.cardsData[i] || {};
            this.cardsData[i].header = cardHeader.textContent;
        });
            return cardHeader;
    }

            createFooter(i, color) {
        const cardfooter = document.createElement('div');
            cardfooter.className = 'card-footer';
            cardfooter.style.backgroundColor = color;
            cardfooter.textContent = this.cardsData[i]?.footer || '#Menu Footer';
            cardfooter.contentEditable = "true";
        cardfooter.addEventListener('input', () => {
                this.cardsData[i] = this.cardsData[i] || {};
            this.cardsData[i].footer = cardfooter.textContent;
        });
            return cardfooter;
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
            async customPrompt(titulo, mensaje) {
        return new Promise((resolve, reject) => {
                window.Notiflix.Confirm.prompt(
                    titulo,
                    mensaje,
                    '👻 Link Imagen, here!',
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

    createColorText(i) {
            const colorInput = document.createElement('input');
            colorInput.type = 'color';
            colorInput.className = 'form-control form-control-color';
            colorInput.id = 'ColorInput'+i;
            colorInput.title = 'Choose your color, Text';

            const commonColors = [
            '#530481', '#8a00cac4', '#e6f7ff', '#ac0738b4', '#444444'
            ];

            if (typeof i !== 'undefined' && this.cardsData[i] && this.cardsData[i].ColorText) {
                colorInput.value = this.cardsData[i].ColorText;
        } else {
                colorInput.value = commonColors[Math.floor(Math.random() * commonColors.length)];        
        }
    
        colorInput.addEventListener('blur', () => {
            if (typeof i !== 'undefined') {
                this.cardsData[i] = this.cardsData[i] || {};
            this.cardsData[i].ColorText = colorInput.value;
            }
            this.generateCards();
            this.saveToData();
        });

            return colorInput;
    }

    createColor(i) {
            const colorInput = document.createElement('input');
            colorInput.type = 'color';
            colorInput.className = 'form-control form-control-color';
            colorInput.id = 'exampleColorInput';
            colorInput.title = 'Choose your color, Title Header';

            const commonColors = [
            '#fdeebd', '#fcf6f5', '#e6f7ff', '#f0f9e8', '#fff1e6', '#fce4ec',
            '#f0e6fc', '#e1f5fe', '#e8f5e9', '#fff9c4', '#ffe0b2', '#d1c4e9',
            '#f3e5f5', '#f1f8e9', '#f9fbe7', '#e3f2fd', '#e0f7fa', '#e0f2f1',
            '#e8eaf6', '#f3e5f5', '#f9fbe7', '#fff3e0', '#ffebee', '#e0f7fa',
            '#ede7f6', '#d0d9ff'
            ];

            if (typeof i !== 'undefined' && this.cardsData[i] && this.cardsData[i].colorcard) {
                colorInput.value = this.cardsData[i].colorcard;
        } else {
                colorInput.value = commonColors[Math.floor(Math.random() * commonColors.length)];        
        }
    
        colorInput.addEventListener('blur', () => {
            if (typeof i !== 'undefined') {
                this.cardsData[i] = this.cardsData[i] || {};
            this.cardsData[i].colorcard = colorInput.value;
            }
            this.generateCards();
            this.saveToData();
        });

            return colorInput;
    }

            generateCards() {

                this.rowContainer.className = `row justify-content-${this.data.textAlign ? this.data.textAlign : 'start'}`;
            let alto = parseInt(this.alto.value);
            let ajusteAltura = 30;
            let alturaTotal = alto + ajusteAltura;


            while (this.rowContainer.firstChild) {
                this.rowContainer.removeChild(this.rowContainer.lastChild);
          
        }
            for (let i = 0; i < this.columnsSelect.value; i++) {

            const cardContainer = document.createElement('div');
            cardContainer.className = `card text-${this.textAlignSelect.value} w-${this.widthSelect.value} border-0  rounded-3 mt-4 mb-3`;
            cardContainer.id = `card-${i + 1}`;

            const cardBody = document.createElement('div');
            cardBody.id = 'container-card-block'+i;
            
            cardBody.style.backgroundSize = 'cover'; // Esto hará que la imagen cubra completamente el contenedor
            cardBody.style.backgroundPosition = 'center'; // Esto centrará la imagen en el contenedor
            cardBody.style.height = alturaTotal + 'px';
            cardBody.style.padding =`${this.cardsData[i]?.paddingValue ?? 1}rem`; 
            let claseborder = '';
            let claseronder = '';
            let clase_shadow = '';
            if(this.cardsData[i]?.borderValue) claseborder = `border border-${this.cardsData[i]?.borderValue}`; else claseborder = '';
            if(this.cardsData[i]?.borderValue2) claseronder = `rounded-${this.cardsData[i]?.borderValue2}`; else claseronder = '';
            if(this.cardsData[i]?.shadow) clase_shadow = `shadow`; else clase_shadow = '';            

            cardBody.className = `card-body border ${clase_shadow}  ${claseborder} ${claseronder}`;// class vBody

            if (this.cardsData[i]?.backgroundUrl) {
                cardBody.style.backgroundImage = `url(${this.cardsData[i].backgroundUrl})`;
            } else {
                const randomNumber = this.gerene_imagen(71); // Asumiendo que esto devuelve un número
                const url_tem_back = `/editorcam/imgs/cards/backgraund/one/${randomNumber}.jpg`;
                this.cardsData[i] = this.cardsData[i] || { };
                this.cardsData[i].backgroundUrl = url_tem_back;
                cardBody.style.backgroundImage = `url(${url_tem_back})`;             
            }

            const cardTitle = document.createElement(this.cardsData[i]?.titleType || 'h5');
            cardTitle.className = 'card-title glass-background';
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
            cardText.className = 'card-text glass-background';
            cardText.textContent = this.cardsData[i]?.text || 'here you can edit and complete your card for more creativity, edit this content, We hope you find the perfect content that enriches your projects and captures the essence of your ideas!';
            cardText.contentEditable = "true";
            cardText.addEventListener('input', () => {
                this.cardsData[i] = this.cardsData[i] || {};
            this.cardsData[i].text = cardText.textContent;
            });
            // ...
            const cardLink = document.createElement('a'); // card link
            cardLink.className = 'btn btn-cb shadow border-1 text-decoration-none glass-background';//text-decoration-none
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

            const divcontainer2 = document.createElement('div'); //main card
            divcontainer2.id = 'container-card-block-main-'+i;
            divcontainer2.className =` border ${clase_shadow}  ${claseborder} `;
            divcontainer2.style.padding =`${this.cardsData[i]?.paddingValue0 ?? 1}rem`; 
            divcontainer2.style.backgroundSize = 'cover'; // Esto hará que la imagen cubra completamente el contenedor
            divcontainer2.style.backgroundPosition = 'center'; // Esto centrará la imagen en el contenedor
            if (this.cardsData[i]?.backgroundUrlMain) {
                divcontainer2.style.backgroundImage = `url(${this.cardsData[i].backgroundUrlMain})`;
            } 

            const colorInput = this.createColor(i);
            const cardHeader = this.createHeader(i,colorInput.value);
            const cardFooter = this.createFooter(i,colorInput.value);
            const select_imagen = this.createSelectImage(cardBody, i);
            const select_imagenMain = this.createSelectImageMain(divcontainer2, i);
            const select_gallery = this.createSelectImage_gallery();
            select_imagen.innerHTML = '<i class="fas fa-image"></i>';
            select_gallery.innerHTML = '<i class="bi bi-file-image"></i>';
            select_imagenMain.innerHTML = '<i class="bi bi-image-alt"></i>';

            const text_color_input  = this.createColorText(i);

            const toolmini = document.createElement('div');
            toolmini.className = `container-fluid shadow rounded-3 d-flex align-items-center justify-content-${this.textAlignSelect.value} p-1 mb-3 my-3`;
            cardTitle.style.color =  text_color_input.value;
            cardText.style.color = text_color_input.value;
            cardLink.style.color = text_color_input.value;//colorInput
            cardHeader.style.color = text_color_input.value;
            cardFooter.style.color = text_color_input.value;

            const cardMenuFooter = this.createContainerfootercard(i);
            const div_shadow = this.createshadow(i);
            const crustermenu_toolmini = cardMenuFooter.querySelector(`#divi2menu${i}`);

            if(this.borderCheck.checked) cardContainer.appendChild(cardHeader);
            cardBody.appendChild(cardLink);
            cardBody.appendChild(cardTitle);
            cardBody.appendChild(cardText);
            cardBody.appendChild(cardLink);
            cardBody.appendChild(toolmini);
            toolmini.appendChild(select_imagen);
            toolmini.appendChild(colorInput);
            toolmini.appendChild(select_gallery);
            toolmini.appendChild(text_color_input);
            toolmini.appendChild(div_shadow);
            toolmini.appendChild(select_imagenMain);

            cardContainer.appendChild(divcontainer2);
            divcontainer2.appendChild(cardBody);

            if(this.borderCheck.checked) cardContainer.appendChild(cardFooter);
            this.rowContainer.appendChild(cardContainer);

            cardContainer.appendChild(cardMenuFooter);
            crustermenu_toolmini.appendChild(toolmini);
  
        }

            const br = document.createElement("div");
            br.className = "mb-3";
            this.container.appendChild(br);

    }

            saveToData() {
            this.data.columns = this.columnsSelect.value;
            this.data.textAlign = this.textAlignSelect.value;
            this.data.width = this.widthSelect.value;
            this.data.alto = this.alto.value;
            this.data.cardsData = this.cardsData;
    }

            restoreFromData() {
            this.columnsSelect.value = this.data.columns ? this.data.columns : '1';
            this.textAlignSelect.value = this.data.textAlign ? this.data.textAlign : 'center';
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

            window.CardBlockLineImg = CardBlockLineImg;