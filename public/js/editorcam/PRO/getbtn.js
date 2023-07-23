class BtnSimple {
    static get toolbox() {
        return {
            title: 'Button Free',
            icon: '🔲',
            name: "BtnCB",
        };
    }

    constructor({ data, api, config }) {
        this.api = api;
        this.data = data || {};
        this.config = config;

        // Main container
        this.container = document.createElement('div');
        
        // Button container
        this.buttonContainer = document.createElement('div');
        this.buttonContainer.id = 'btncbstyle';

        // Create div that will contain other elements
        this.elementsContainer = document.createElement('div');
        this.elementsContainer.id = 'containerelemtorbutton-cb';

        // Create label input
        this.labelInput = document.createElement('input');
        this.labelInput.value = this.data.label || 'Label Button';
        this.labelInput.placeholder = 'Hello Button';
        this.labelInput.addEventListener('input', () => {
            this.buttonElement.textContent = this.labelInput.value;
        });

        // Create link input
        this.linkInput = document.createElement('input');
        this.linkInput.value = this.data.link || '';
        this.linkInput.placeholder = '🌐Link URl';
        this.linkInput.addEventListener('input', () => {
            this.buttonElement.href = this.linkInput.value;
        });

        // Create target select
        this.targetSelect = document.createElement('select');
        const optionSelf = document.createElement('option');
        optionSelf.value = "_self";
        optionSelf.textContent = "Tab/ self";
        const optionBlank = document.createElement('option');
        optionBlank.value = "_blank";
        optionBlank.textContent = "Tab/New Win";
        this.targetSelect.appendChild(optionSelf);
        this.targetSelect.appendChild(optionBlank);
        this.targetSelect.value = this.data.target || '_self';
        this.targetSelect.addEventListener('change', () => {
            this.buttonElement.target = this.targetSelect.value;
        });

        // Create size select
        this.sizeSelect = document.createElement('select');
        const optionSmall = document.createElement('option');
        optionSmall.value = "25%";
        optionSmall.textContent = "Small";
        const optionMedium = document.createElement('option');
        optionMedium.value = "50%";
        optionMedium.textContent = "Medium";
        const optionLarge = document.createElement('option');
        optionLarge.value = "100%";
        optionLarge.textContent = "Large";
        this.sizeSelect.appendChild(optionSmall);
        this.sizeSelect.appendChild(optionMedium);
        this.sizeSelect.appendChild(optionLarge);
        this.sizeSelect.value = this.data.size || '100%';
        this.sizeSelect.addEventListener('change', () => {
            this.buttonElement.style.width = this.sizeSelect.value;
        });

        // Create style select
        this.styleSelect = document.createElement('select');
        const optionStyle1 = document.createElement('option');
        optionStyle1.value = "style1";
        optionStyle1.textContent = "Style 1";
        const optionStyle2 = document.createElement('option');
        optionStyle2.value = "style2";
        optionStyle2.textContent = "Style 2";
        const optionStyle3 = document.createElement('option');
        optionStyle3.value = "style3";
        optionStyle3.textContent = "Style 3";
        this.styleSelect.appendChild(optionStyle1);
        this.styleSelect.appendChild(optionStyle2);
        this.styleSelect.appendChild(optionStyle3);
        this.styleSelect.value = this.data.style || 'style1';
        this.styleSelect.addEventListener('change', () => {
            this.buttonElement.classList.remove('style1', 'style2', 'style3');
            if (typeof this.styleSelect.value === 'string' && this.styleSelect.value.trim() !== '') {
                this.buttonElement.classList.add(this.styleSelect.value);
            }
        });

        // Create button element
        this.buttonElement = document.createElement('a');
        this.buttonElement.classList.add('btn', 'btn-chatur');
        if (typeof this.data.style === 'string' && this.data.style.trim() !== '') {
            this.buttonElement.classList.add(this.data.style);
        } else {
            this.buttonElement.classList.add('style1');
        }

        this.buttonElement.textContent = this.data.label || 'Access Free 🔓';
        this.buttonElement.href = this.data.link || '#';
        this.buttonElement.target = this.data.target || '_self';

        // Add button element to button container
        this.buttonContainer.appendChild(this.buttonElement);

        // Append elements to the elements container
        this.elementsContainer.appendChild(this.labelInput);
        this.elementsContainer.appendChild(this.linkInput);
        this.elementsContainer.appendChild(this.targetSelect);
        this.elementsContainer.appendChild(this.sizeSelect);
        this.elementsContainer.appendChild(this.styleSelect);

        // Create alignment select
        this.alignmentSelect = document.createElement('select');
        const optionLeft = document.createElement('option');
        optionLeft.value = "text-start";
        optionLeft.textContent = "Left";
        const optionCenter = document.createElement('option');
        optionCenter.value = "text-center";
        optionCenter.textContent = "Center";
        const optionRight = document.createElement('option');
        optionRight.value = "text-end";
        optionRight.textContent = "Right";
        this.alignmentSelect.appendChild(optionLeft);
        this.alignmentSelect.appendChild(optionCenter);
        this.alignmentSelect.appendChild(optionRight);
        this.alignmentSelect.value = this.data.alignment || 'text-center';
        this.alignmentSelect.addEventListener('change', () => {
            this.buttonContainer.classList.remove('text-start', 'text-center', 'text-end');
            if (typeof this.alignmentSelect.value === 'string' && this.alignmentSelect.value.trim() !== '') {
                this.buttonContainer.classList.add(this.alignmentSelect.value);
            }
        });

        this.elementsContainer.className = 'shadow p-2 m-2 rounded-3';
         // Create toggle button li de editor button 
         this.toggleButton = document.createElement('i');
         this.toggleButton.id = 'btn-cbedit';
         this.toggleButton.className = 'fas fa-undo shadow-sm rounded-5 p-1 punter';
         this.buttonContainer.appendChild(this.toggleButton);

        // Append alignment select to elements container
        this.elementsContainer.appendChild(this.alignmentSelect);

        // Append elements container to the main container
        this.container.appendChild(this.elementsContainer);
        this.container.appendChild(this.buttonContainer);

        this.elementsContainer.style.display = 'none'; // none elements buttons

        // Toggle button functionality
        this.toggleButton.addEventListener('click', () => {
            if (this.elementsContainer.style.display === 'none') {
                this.elementsContainer.style.display = 'block';
            } else {
                this.elementsContainer.style.display = 'none';
            }
        });

        this.linkInput.classList.add('input-link-editor');
        this.labelInput.classList.add('input-cb');
        if (typeof this.alignmentSelect.value === 'string' && this.alignmentSelect.value.trim() !== '') {
            this.buttonContainer.classList.add(this.alignmentSelect.value);
        }
        this.buttonElement.style.width =  this.data.size || '100%';

        
    }

    render() {
        return this.container;
    }

    save() {
        return {
            label: this.buttonElement.textContent,
            link: this.buttonElement.href,
            target: this.buttonElement.target,
            size: this.buttonElement.style.width,
            style: this.styleSelect.value,
            alignment: this.alignmentSelect.value
        };
    }
}

// Assigns the BtnCB class to the global scope
window.BtnSimple = BtnSimple;
