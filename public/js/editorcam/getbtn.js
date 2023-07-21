class BtnCB {
    static get toolbox() {
        return {
            title: 'BtnCB',
            icon: '🔲',
            name: "BtnCB",
        };
    }

    constructor({ data, api, config }) {
        this.api = api;
        this.data = data || {};
        this.config = config;

        this.container = document.createElement('div');
        
        this.buttonContainer = document.createElement('div');
        this.buttonContainer.id = 'btncbstyle';

        this.labelInput = document.createElement('input');
        this.labelInput.value = this.data.label || 'Label Button';
        this.labelInput.placeholder = 'Hello Button';
        this.labelInput.addEventListener('input', () => { this.buttonElement.textContent = this.labelInput.value; });

        this.linkInput = document.createElement('input');
        this.linkInput.value = this.data.link || '';
        this.linkInput.placeholder = 'Link URl';
        this.linkInput.addEventListener('input', () => { this.buttonElement.href = this.linkInput.value; });

        this.targetSelect = document.createElement('select');
        const optionSelf = document.createElement('option');
        optionSelf.value = "_self";
        optionSelf.textContent = "Same Tab/Window";
        const optionBlank = document.createElement('option');
        optionBlank.value = "_blank";
        optionBlank.textContent = "New Tab/Window";
        this.targetSelect.appendChild(optionSelf);
        this.targetSelect.appendChild(optionBlank);
        this.targetSelect.value = this.data.target || '_self';
        this.targetSelect.addEventListener('change', () => { this.buttonElement.target = this.targetSelect.value; });

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
        this.sizeSelect.addEventListener('change', () => { this.buttonElement.style.width = this.sizeSelect.value; });

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

        this.buttonElement = document.createElement('a');
        this.buttonElement.classList.add('btn', 'btn-chatur');
        if (typeof this.data.style === 'string' && this.data.style.trim() !== '') {
            this.buttonElement.classList.add(this.data.style);
        } else {
            this.buttonElement.classList.add('style1');
        }

        this.buttonElement.textContent = this.data.label || 'Button Label';
        this.buttonElement.href = this.data.link || '#';
        this.buttonElement.target = this.data.target || '_self';

        this.buttonContainer.appendChild(this.buttonElement);

        this.container.appendChild(this.labelInput);
        this.container.appendChild(this.linkInput);
        this.container.appendChild(this.targetSelect);
        this.container.appendChild(this.sizeSelect);
        this.container.appendChild(this.styleSelect);

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

        this.container.appendChild(this.alignmentSelect);
        this.container.appendChild(this.buttonContainer);

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

// Assigns the BtnCB class to a global property
window.BtnCB = BtnCB;
